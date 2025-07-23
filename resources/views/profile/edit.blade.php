@extends('index')
@section('title', 'Mon profil')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white rounded-top-4 py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 class="h4 mb-0">
                            <i class="bi bi-person-gear me-2"></i>Modifier mon profil
                        </h1>
                        <a href="{{ route('dashboard') }}" class="btn btn-sm btn-light">
                            <i class="bi bi-arrow-left me-1"></i> Retour
                        </a>
                    </div>
                </div>

                <div class="card-body p-4 p-md-5">
                    <!-- Section Informations de base -->
                    <div class="mb-5">
                        <h2 class="h5 mb-4 text-primary">
                            <i class="bi bi-info-circle-fill me-2"></i>Informations personnelles
                        </h2>

                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            @method('PATCH')

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">Nom complet</label>
                                <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror"
                                       id="name" name="name" value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold">Adresse email</label>
                                <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                       id="email" name="email" value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                                <button type="submit" class="btn btn-primary btn-lg px-4">
                                    <i class="bi bi-check-circle-fill me-2"></i>Mettre à jour
                                </button>
                            </div>
                        </form>
                    </div>

                    <hr class="my-5">

                    <!-- Section Mot de passe -->
                    <div class="mb-5">
                        <h2 class="h5 mb-4 text-warning">
                            <i class="bi bi-shield-lock-fill me-2"></i>Sécurité du compte
                        </h2>

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="current_password" class="form-label fw-bold">Mot de passe actuel</label>
                                <input type="password" class="form-control form-control-lg @error('current_password') is-invalid @enderror"
                                       id="current_password" name="current_password" required>
                                @error('current_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label fw-bold">Nouveau mot de passe</label>
                                <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                                       id="password" name="password" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label fw-bold">Confirmer le nouveau mot de passe</label>
                                <input type="password" class="form-control form-control-lg"
                                       id="password_confirmation" name="password_confirmation" required>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                                <button type="submit" class="btn btn-warning btn-lg px-4">
                                    <i class="bi bi-key-fill me-2"></i>Changer le mot de passe
                                </button>
                            </div>
                        </form>
                    </div>

                    <hr class="my-5">

                    <!-- Section Suppression du compte -->
                    <div>
                        <h2 class="h5 mb-4 text-danger">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>Zone dangereuse
                        </h2>

                        <div class="alert alert-danger">
                            <i class="bi bi-exclamation-octagon-fill me-2"></i>
                            La suppression de votre compte est irréversible. Toutes vos données seront définitivement perdues.
                        </div>

                        <form method="POST" action="{{ route('profile.destroy') }}">
                            @csrf
                            @method('DELETE')

                            <div class="mb-3">
                                <label for="delete_confirmation" class="form-label fw-bold">
                                    Tapez "SUPPRIMER" pour confirmer
                                </label>
                                <input type="text" class="form-control form-control-lg"
                                       id="delete_confirmation" name="delete_confirmation" required>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-danger btn-lg px-4" id="deleteButton" disabled>
                                    <i class="bi bi-trash3-fill me-2"></i>Supprimer mon compte
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Activer le bouton de suppression seulement si la confirmation est correcte
    document.getElementById('delete_confirmation').addEventListener('input', function(e) {
        document.getElementById('deleteButton').disabled = e.target.value !== 'SUPPRIMER';
    });
</script>
@endpush

@push('styles')
<style>
    .rounded-4 {
        border-radius: 1rem !important;
    }
    .rounded-top-4 {
        border-top-left-radius: 1rem !important;
        border-top-right-radius: 1rem !important;
    }
    .form-control-lg {
        padding: 0.75rem 1rem;
        font-size: 1.05rem;
    }
    .card {
        border: none;
        overflow: hidden;
    }
    .card-header {
        border-bottom: none;
    }
    .btn {
        transition: all 0.2s;
    }
    .btn-lg {
        min-width: 180px;
    }
</style>
@endpush
@endsection
