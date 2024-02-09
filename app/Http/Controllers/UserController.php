<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function ShowProfile(){
        $user = auth()->user();
        return view('dashboard.page-dashboard-profile', compact('user'));
    }
    
    public function favourites(){
        return view ('dashboard.page-dashboard-favorites');
    }

    public function update(Request $request)
    {
        $user = auth()->user();
    
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            // Add more validation rules for other fields
        ]);
    
        // Update the user's data
        $user->update($request->all());
    
        return redirect()->route('UserProfile')->with('success', 'Profile updated successfully');
    }
    public function  showbookings(){
        $bookings = Auth::user()->bookings;
        return view('dashboard.page-dashboard-listing', compact('bookings'));
    }
    public function userdashboard(){
        $user = auth()->user();
        return view('dashboard.page-dashboard', compact('user'));
    }
}
