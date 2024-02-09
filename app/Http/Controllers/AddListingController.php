<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddListing;
use Illuminate\Support\Facades\Storage;

class AddListingController extends Controller
{
    public function store(Request $id)
    {
        // Validate and store the new listing, including image_path
        $validatedData = $id->validate([
            'listing_title' => 'required|string|max:255',
            'type' => 'required|string|not_in:Select',
            'make' => 'required|string|not_in:Select',
            'model' => 'required|string|not_in:Select',
            'price' => 'required|numeric|not_in:Select',
            'drive_type' => 'required|string|not_in:Select',
            'transmission' => 'required|string|not_in:Select',
            'fuel_type' => 'required|string|not_in:Select',
            'mileage' => 'required|integer|not_in:Select',
            'color' => 'required|string|not_in:Select',
            'seats' => 'required|string|not_in:Select',
            'description' => 'required|string|',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Customize image validation as needed
        ]);
        

        $image = $id->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('listedcars'), $imageName);

        AddListing::create([
            'listing_title' => $id->input('listing_title'),
            'type' => $id->input('type'),
            'make' => $id->input('make'),
            'model' => $id->input('model'),
            'price' => $id->input('price'),
            'drive_type' => $id->input('drive_type'),
            'transmission' => $id->input('transmission'),
            'fuel_type' => $id->input('fuel_type'),
            'mileage' => $id->input('mileage'),
            'color' => $id->input('color'),
            'seats' => $id->input('seats'),
            'description' => $id->input('description'),
            'image' => 'listedcars/' . $imageName,
        ]);

        return redirect('/')->with('success', 'Listing added successfully.');
    }
}
