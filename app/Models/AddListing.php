<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddListing extends Model
{
    use HasFactory;

    protected $table = 'add_listings';

    protected $fillable = [
        'listing_title',
        'type',
        'make',
        'model',
        'price',
        'drive_type',
        'transmission',
        'fuel_type',
        'mileage',
        'color',
        'seats',
        'description',
        'image',
    ];
}
