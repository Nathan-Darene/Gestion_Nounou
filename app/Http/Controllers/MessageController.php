<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message()
    {
        $messageData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'numero' => '0123456789'
        ];

        // Passer les données du profil à la vue et renvoyer la vue de profil
        return view('message', ['messageData' => $messageData]);
    }
}
