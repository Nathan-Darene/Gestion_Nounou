<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inscription;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('inscription');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'lastname' =>'required|string|max:255',
            'firstname' =>'required|string|max:255',
            'phone' =>'required|string|max:255|unique:users',
            'birthdate' =>'required|string|max:255',
            'city' =>'required|string|max:255',
            'postalcode' =>'required|numeric|max:9999',
            'role' =>'required|string|max:50',
            'email' =>'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',

        ]);

        User::create([
            'username' => $request->username,
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'phone' => $request->phone,
            'birthdate' => $request->birthdate,
            'city' => $request->city,
            'postalcode' => $request->postalcode,
            'role' => $request->role,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/page_user')->with('success', 'Inscription réussie !');
    }
}
