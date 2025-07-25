<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $entrepreneur = Role::create(['name' => 'entrepreneur']);
        $mentor = Role::create(['name' => 'mentor']);
        $incubateur = Role::create(['name' => 'incubateur']);
        $investisseur = Role::create(['name' => 'investisseur']);

        // Création des permissions

        // $permissions = [
        //     'view users',
        //     'edit users',
        //     'delete users',
        //     'create projects',
        //     'view projects',
        //     'edit projects',
        //     'delete projects',
        // ];

        // foreach ($permissions as $perm) {
        //     Permission::firstOrCreate(['name' => $perm]);
        // }

        // // Assignation des permissions aux rôles
        // $admin->givePermissionTo($permissions);
        // $entrepreneur->givePermissionTo(['create projects', 'view projects']);
        // $mentor->givePermissionTo(['view projects']);
        // $incubateur->givePermissionTo(['view projects', 'edit projects']);
        // $investisseur->givePermissionTo(['view projects']);




    }
}
