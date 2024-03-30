<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = [
        'username',
        'lastname',
        'firstname',
        'phone',
        'birthdate',
        'city',
        'postalcode', 
        'role',
        'email',
        'phone',
        'password' ,
    ];
}
