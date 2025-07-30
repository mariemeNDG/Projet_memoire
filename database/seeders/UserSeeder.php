<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        $admin = User::create([
            'name' => 'Admin Principal',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole('admin');

        // Entrepreneur
        $entrepreneur = User::create([
            'name' => 'Entrepreneur User',
            'email' => 'entrepreneur@example.com',
            'password' => Hash::make('password'),
        ]);
        $entrepreneur->assignRole('entrepreneur');

        // Mentor
        $mentor = User::create([
            'name' => 'Mentor User',
            'email' => 'mentor@example.com',
            'password' => Hash::make('password'),
        ]);
        $mentor->assignRole('mentor');

        // Incubateur
        $incubateur = User::create([
            'name' => 'Incubateur User',
            'email' => 'incubateur@example.com',
            'password' => Hash::make('password'),
        ]);
        $incubateur->assignRole('incubateur');

        // Investisseur
        $investisseur = User::create([
            'name' => 'Investisseur User',
            'email' => 'investisseur@example.com',
            'password' => Hash::make('password'),
        ]);
        $investisseur->assignRole('investisseur');
    }
}
