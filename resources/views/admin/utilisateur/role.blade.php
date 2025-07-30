@extends('index')
@section('title', 'Gestion des Rôles')
@section('content')
<div class="container-fluid">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row mb-4">
        <div class="col-12">
            <h2><i class="fas fa-user-tag me-2"></i>Gestion des Rôles</h2>
            <p class="text-muted">Configurez les permissions pour chaque type de rôle utilisateur</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="fas fa-list me-2"></i>Rôles existants</h5>
                    <button class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#newRoleModal">
                        <i class="fas fa-plus"></i> Nouveau
                    </button>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        @foreach($roles as $role)
                        <a href="{{ route('admin.roles.show', $role->id) }}"
                           class="list-group-item list-group-item-action {{ request()->is('*roles/'.$role->id) ? 'active' : '' }}">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">{{ $role->name }}</h6>
                                <span class="badge bg-primary rounded-pill">{{ $role->users_count }}</span>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            @if(isset($selectedRole))
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="fas fa-cog me-2"></i>Permissions du rôle: {{ $selectedRole->name }}</h5>
                    <div>
                        <form action="{{ route('admin.roles.destroy', $selectedRole->id) }}" method="POST"
                              style="display:inline"
                              onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce rôle?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                    {{ in_array($selectedRole->name, ['admin', 'super-admin']) ? 'disabled' : '' }}>
                                <i class="fas fa-trash-alt me-1"></i>Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.roles.update', $selectedRole->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="roleName" class="form-label">Nom du rôle</label>
                                <input type="text" class="form-control" name="name"
                                       value="{{ old('name', $selectedRole->name) }}" required>
                            </div>
                        </div>

                        <h5 class="mb-3 mt-4 border-bottom pb-2">Permissions</h5>
                        <div class="accordion mb-4" id="permissionsAccordion">
                            @foreach($permissions as $group => $groupPermissions)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#{{ $group }}Permissions">
                                        <i class="fas fa-{{ $icons[$group] ?? 'cog' }} me-2"></i>
                                        {{ ucfirst($group) }}
                                    </button>
                                </h2>
                                <div id="{{ $group }}Permissions"
                                     class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                     data-bs-parent="#permissionsAccordion">
                                    <div class="accordion-body">
                                        <div class="row">
                                            @foreach($groupPermissions->chunk(ceil($groupPermissions->count() / 2)) as $chunk)
                                            <div class="col-md-6">
                                                @foreach($chunk as $permission)
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="permissions[]"
                                                           value="{{ $permission->id }}"
                                                           id="perm-{{ $permission->id }}"
                                                           {{ $selectedRole->hasPermissionTo($permission) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="perm-{{ $permission->id }}">
                                                        {{ $permission->name }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <a href="{{ route('admin.roles.index') }}" class="btn btn-outline-secondary me-3">
                                <i class="fas fa-undo me-2"></i>Annuler
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Enregistrer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @else
            <div class="card shadow-sm">
                <div class="card-body text-center py-5">
                    <i class="fas fa-user-tag fa-4x text-muted mb-3"></i>
                    <h5>Sélectionnez un rôle pour voir et modifier ses permissions</h5>
                    <p class="text-muted">Cliquez sur un rôle dans la liste à gauche</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<!-- New Role Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.roles.store') }}" method="POST">
                @csrf
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"><i class="fas fa-plus-circle me-2"></i>Créer un nouveau rôle</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="newRoleName" class="form-label">Nom du rôle</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Créer le rôle</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
