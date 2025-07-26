<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function listUsers()
    {
        // Logique pour récupérer la liste des utilisateurs
        $users = User::latest()->get();

        return view('admin.utilisateur.listeUser', compact('users'));
    }

    // Methode pour supprimer un utilisateur
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.utilisateurs')->with('success', 'Utilisateur supprimé avec succès.');
    }
}
