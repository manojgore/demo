<?php

namespace App\Http\Controllers;
use App\Models\AddListing;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function listingv1(){
        return view('listings.page-car-single-v1');
    }

    public function showlist($id){

        $cars = AddListing::find($id);

        return view('admin.page-car-single-v1', compact('cars'));
    }

}
