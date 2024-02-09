<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // protected $table = 'bookings';
     // Set the table name

     protected $fillable = ['user_id', 'name', 'car_name' , 'email', 'GSTno', 'booking_from', 'booking_till'];

}
