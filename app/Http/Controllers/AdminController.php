<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\AddListing;
use Illuminate\Http\Request;
use Validator;
use Auth;

class AdminController extends Controller
{

   public function  showadminSignUp(){
        return view('AdminSignUpForm');
    }
    public function  showadminlogin(){
        return view('AdminLoginForm');
    }

    public function showadminfavourites(){
        return view('admin.page-dashboard-favorites');
    }
    public function showadminprofile(){
        return view('admin.admin-dashboard-profile');
    }
    public function showadminaddlisting()
    {
        return view('admin.admin-dashboard-add-listings');
    }

    public function showlistings()
    {
        return view('admin.dashboard-listing');
    }

    public function showadmindashboard(){
        $users = User::all();
        $bookings = Booking::all();
    
        return view('admin.AdminDashboard', compact('users', 'bookings'));
    }
    public function showadminmessages(){
        return view('admin.admin-dashboard-messages');
    }
    public function showcarslistings(){
        $carListings = AddListing::all();
        return view('admin.admin-dashboard-listing' , compact('carListings'));
    }
}
