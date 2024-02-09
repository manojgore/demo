<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\AddListing;
use App\Models\User;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function index(){
        $cars = AddListing::all();
        return view('index',compact('cars'));
    }
}
