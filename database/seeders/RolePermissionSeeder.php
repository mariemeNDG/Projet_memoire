<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            'view dashboard',
            'view admin dashboard',
            'view entrepreneur dashboard',
            'view mentor dashboard',
            'view investisseur dashboard',
            'view incubateur dashboard',
            'manage users',
            'manage roles',
            'manage permissions',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles and assign permissions
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo([
            'view dashboard',
            'view admin dashboard',
            'manage users',
            'manage roles',
            'manage permissions',
        ]);

        $entrepreneurRole = Role::create(['name' => 'entrepreneur']);
        $entrepreneurRole->givePermissionTo([
            'view dashboard',
            'view entrepreneur dashboard',
        ]);

        $mentorRole = Role::create(['name' => 'mentor']);
        $mentorRole->givePermissionTo([
            'view dashboard',
            'view mentor dashboard',
        ]);

        $investisseurRole = Role::create(['name' => 'investisseur']);
        $investisseurRole->givePermissionTo([
            'view dashboard',
            'view investisseur dashboard',
        ]);

        $incubateurRole = Role::create(['name' => 'incubateur']);
        $incubateurRole->givePermissionTo([
            'view dashboard',
            'view incubateur dashboard',
        ]);

        // Create admin user
        $admin = User::create([
            'name' => 'Diallo',
            'prenom' => 'Aliou',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);
        $admin->assignRole($adminRole);

        // Create entrepreneur user
        $entrepreneur = User::create([
            'name' => 'Diop',
            'prenom' => 'Fatou',
            'email' => 'entrepreneur@example.com',
            'password' => bcrypt('password'),
            'role' => 'entrepreneur',
        ]);
        $entrepreneur->assignRole($entrepreneurRole);

        // Create mentor user
        $mentor = User::create([
            'name' => 'Ba',
            'prenom' => 'Ali',
            'email' => 'mentor@example.com',
            'password' => bcrypt('password'),
            'role' => 'mentor',
        ]);
        $mentor->assignRole($mentorRole);

        // Create investisseur user
        $investisseur = User::create([
            'name' => 'Paul',
            'prenom' => 'Jean',
            'email' => 'investisseur@example.com',
            'password' => bcrypt('password'),
            'role' => 'investisseur',
        ]);
        $investisseur->assignRole($investisseurRole);

        // Create incubateur user
        $incubateur = User::create([
            'name' => 'Ka',
            'prenom' => 'Assane',
            'email' => 'incubateur@example.com',
            'password' => bcrypt('password'),
            'role' => 'incubateur',
        ]);
        $incubateur->assignRole($incubateurRole);
    }
}
