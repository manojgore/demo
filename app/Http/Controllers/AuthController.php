<?php

namespace App\Http\Controllers;

use Session;

use App\Models\User;
use App\Models\Booking;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AuthController;


class AuthController extends Controller
{
    public function showRegister(){
        return view ('page-register');
    }
    public function showLogin(){
        return view('page-login');
    }

    public function Register(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
            'email' => 'required|string|email|max:255|unique:users',
            // 'username' => 'required|string|max:255|unique:users',
            // 'phone' => 'nullable|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            're-password' => 'required|same:password',
       ]);

       // Create a new Customer record in the database
       $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    Auth::login($user);
    $user->sendEmailVerificationNotification();

       return redirect(route('verification.notice'))->with("success", "Registration Success, Login to Access the app");
    }
    
    public function verify(){
        return view('dashboard.verify');
    }
    
    public function booking(Request $request)
    {
        // Ensure the user is authenticated
        $user = auth()->user();
    
        // Create the booking only if the user is authenticated
        if ($user !== null) {
            Booking::create([
                'user_id' => $user->id,
                'name' => $request->input('name'),
                'car_name' => $request->input('car_name'),
                'email' => $request->input('email'),
                'GSTno' => $request->input('GSTno'),
                'booking_from' => $request->input('booking_from'),
                'booking_till' => $request->input('booking_till'),
                // Add other fields as needed
            ]);
    
            // Optionally, you can redirect the user to a success page or show a success message
            return redirect(route('DashBoard'))->with("success", "Booking successful!");
        } else {
            // Handle the case where $user is null, e.g., show an error message or redirect the user to the login page
            return redirect()->route('login')->with('error', 'Please log in to make a booking.');
        }
    }
    
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|string|email|max:255',
        'password' => 'required',
    ]); 

    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $usertype = Auth::user()->usertype;

        if ($usertype == 'user') {
            return redirect()->intended(route('DashBoard')); // Redirect user to user dashboard.
        } elseif ($usertype == 'admin') {
            return redirect()->intended(route('admin.dashboard')); // Redirect admin to admin dashboard.
        }
    }

    }

    public function form(){
        return view('dashboard.page-dashboard-profile');
    }
   
    public function customers(){

        $users = User::all(); // Retrieve all users from the 'users' table
    
        return view('customers', compact('users'));
    }

    public function companies(){
        $companies = Company::all(); 
        return view ('companies' , compact('companies'));
    }

    public function logout()
{
    Auth::logout();

    return redirect()->route('HomePage'); // Redirect to the login page after logout.
}
    
public function showadminaddlisting(){
    return view('admin.admin-dashboard-add-listings');
}
}

