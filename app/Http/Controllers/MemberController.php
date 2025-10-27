<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\membership\MembershipRequest;
use App\Http\Requests\membership\MembershipAdminRequest;
use App\Models\Membership;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //
    public function index(Request $request)
    {
        if (auth()->check()) {
            $perPage = $request->input('perPage', 10);
            $status = $request->input('status', 'active');
            $search = $request->input('search');

            $members = Membership::where('status', $status)
                ->when($search, function ($query, $search) {
                    $query->where('brand', 'like', "%{$search}%")
                        ->orWhere('country', 'like', "%{$search}%")
                        ->orWhereHas('user', function ($q) use ($search) {
                            $q->where('name', 'like', "%{$search}%");
                        });
                })
                ->paginate($perPage)
                ->appends([
                    'perPage' => $perPage,
                    'search' => $search
                ]);
        } else {
            // Empty paginator for guests
            $perPage = $request->input('perPage', 10);
            $members = Membership::whereRaw('1 = 0')->paginate($perPage);
        }

        return view('members.index', compact('members'));
    }

    public function subscribe(MembershipRequest $request): RedirectResponse
    {
    
        try {
            $user = auth()->user();
            // Prevent duplicate subscription
            if ($user->isSubscribed()) {
                return redirect()->back()->with('error', 'You already have a membership.');
            }

            $validated = $request->validated();

            \Log::info('Token from request: ' . $request->_token);
            \Log::info('Session token: ' . session()->token());
            \Log::info('Is Authenticated: ' . (auth()->check() ? 'yes':'no'));
            $member = Membership::create(array_merge(
                $request->validated(),
                ['user_id' => auth()->id(), 'status' => 'active']
            ));
            \Log::info('Membership created successfully: ' . $member->id);
            return redirect()
                ->back()
                ->with('success', 'You have successfully subscribed to membership.');
                
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Membership subscription failed: '.$e->getMessage());

            return redirect()
                ->back()                                                                                                                                                                                                                                                                                                                
                ->with('error', 'Something went wrong. Please try again later.');
        }
    }

    public function subscribeAndRegister(MembershipAdminRequest $request): RedirectResponse
    {
        try {
            $validated = $request->validated();

            // 👉 Create the user first
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);

            // 👉 Auto login after registration
            Auth::login($user);

            // ✅ Create Membership for newly registered user
            $member = Membership::create([
                'user_id' => $user->id,
                'brand' => $validated['brand'],
                'model' => $validated['model'],
                'country' => $validated['country'],
                'status' => 'active'
            ]);

            return redirect()
                ->back()
                ->with('success', 'Account created & membership subscribed successfully!');

        } catch (\Exception $e) {
            \Log::error('Subscription failure: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Something went wrong, please try again.');
        }
    }

    public function create(Request $request)
    {
        return view('members.create');
    }

    public function edit($id)
    {
        $member = Membership::findOrFail($id);
        return view('members.update', compact('member'));
    }

    public function update(Request $request,$id)
    {
        
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'password' => 'nullable|string|min:6',
                'brand' => 'required|string',
                'model' => 'required|string',
                'country' => 'required|string',
            ]);

            // Find the user & membership
            $member = Membership::findOrFail($id);
            $user = $member->user;
            
            // Update user info
            $user->update([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => $validated['password'] ? Hash::make($validated['password']) : $user->password,
            ]);
            
            // Update membership info
            $member->update([
                'brand' => $validated['brand'],
                'model' => $validated['model'],
                'country' => $validated['country'],
            ]);
            \Log::info('Member updated successfully: ' . $member->id);
            return redirect()
                ->back()
                ->with('success', 'Member updated successfully!');

        } catch (\Exception $e) {
            \Log::error('Update failure: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Something went wrong, please try again.');
        }
    }

    public function dismiss(){
        try {
            $member = Membership::findOrFail(request()->id);
            $member->status = 'archived';
            $member->save();

            return redirect()
                ->back()
                ->with('success', 'Member dismissed successfully!');
        } catch (\Exception $e) {
            \Log::error('Dismiss failure: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Something went wrong, please try again.');
        }
    }


}
