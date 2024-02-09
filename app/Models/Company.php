<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companyes';
    
    protected $fillable = [
        'name',
        'cname',
        'email',
        'city',
        'phone',
        'password',
        'designation',
        'department',
        'adminemail',
        'reportingaddress',
        'vehicalcategory',
        'journeytype',
        'state',
        'reportingdate',
        'reportingtime',
    ];
}
