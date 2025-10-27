<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\membership\MembershipRequest;
use App\Models\Membership;


class MemberController extends Controller
{
    //
    public function index(Request $request)
    {
        if (auth()->check()) {
            $perPage = $request->input('perPage', 10);
            $search = $request->input('search');

            $members = Membership::where('status', 'active')
                ->when($search, function ($query, $search) {
                    $query->where('brand', 'like', "%{$search}%")
                        ->orWhere('country', 'like', "%{$search}%")
                        ->orWhereHas('user', function ($q) use ($search) {
                            $q->where('name', 'like', "%{$search}%")
                                ->orWhere('email', 'like', "%{$search}%");
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
}
