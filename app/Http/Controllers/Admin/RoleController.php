<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    // Affiche la liste des rôles
    public function index()
    {
        $roles = Role::withCount('users')->get();
        $permissions = Permission::all()->groupBy(function ($item) {
            return explode('-', $item->name)[0];
        });

        return view('admin.utilisateur.role', compact('roles', 'permissions'));
    }

    // Crée un nouveau rôle
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name',
        ]);

        Role::create([
            'name' => $request->name,
            'guard_name' => 'web'
        ]);

        return redirect()->route('admin.roles.index')
            ->with('success', 'Rôle créé avec succès');
    }

    // Met à jour un rôle
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name,'.$id,
            'permissions' => 'nullable|array'
        ]);

        $role = Role::findOrFail($id);
        $role->update([
            'name' => $request->name,
        ]);

        if ($request->has('permissions')) {
            $role->syncPermissions($request->permissions);
        }

        return redirect()->route('admin.roles.index')
            ->with('success', 'Rôle mis à jour avec succès');
    }

    /**
     * Affiche les détails d'un rôle spécifique
    */
    public function show($id)
    {
        $roles = Role::withCount('users')->get();
        $selectedRole = Role::with('permissions')->findOrFail($id);
        $permissions = Permission::all()->groupBy(function ($item) {
            return explode('-', $item->name)[0];
        });

        return view('admin.utilisateur.role', compact('roles', 'selectedRole', 'permissions'));
    }

    // Supprime un rôle
    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        // Empêche la suppression des rôles système
        if (in_array($role->name, ['admin'])) {
            return redirect()->route('admin.roles.index')
                ->with('error', 'Ce rôle système ne peut pas être supprimé');
        }

        $role->delete();

        return redirect()->route('admin.roles.index')
            ->with('success', 'Rôle supprimé avec succès');
    }
}
