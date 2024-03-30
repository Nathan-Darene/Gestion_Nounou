<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Méthode pour afficher la page de profil
    public function index()
    {
        // Données factices du profil (à remplacer par vos données réelles)
        $profileData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'Numero' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ];

        // Passer les données du profil à la vue et renvoyer la vue de profil
        return view('profile', ['profileData' => $profileData]);
    }
}
