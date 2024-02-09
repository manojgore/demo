<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; // Updated import statement

class BookingController extends Controller
{
    public function processBooking(Request $request)
    {

        // $bookings = Booking::all();

        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'name' => 'required',
            'car_name' => 'required',
        ]);

        // Create a new booking in the database
        Booking::create([
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'name' => $request->input('name'),
            'car_name' => $request->input('car_name'),
        ]);

        // Redirect to a thank you page or a confirmation page
        return redirect()->intended(route('DashBoard')); 
    }
}

