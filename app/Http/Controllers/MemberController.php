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
    public function index(){
        $members = collect(); // default empty collection

        if(auth()->check()) {
            $members = Membership::where('status', 'active')->get();
            \Log::info('Memberships: ' . $members->count());

            if ($members->isEmpty()) {
                \Log::info('No memberships found for user: ' . auth()->id());
            } else {
                \Log::info('Memberships found for user: ' . auth()->id() . ' - Count: ' . $members->count());
            }
        } else {
            \Log::info('No user is authenticated.');
        }

        // Pass memberships to the view
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
