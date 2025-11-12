@extends('index')
@section('title', 'Mon profil')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <!-- HEADER PROFIL -->
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden mb-5">
                <div class="position-relative">
                    <!-- Couverture -->
                    <div class="bg-primary" style="height: 180px;"></div>

                    <!-- Avatar -->
                    <div class="position-absolute top-100 start-50 translate-middle">
            <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                    </div>
                </div>

                <div class="card-body text-center mt-5">
                    <h2 class="fw-bold text-dark">{{ $user->name }}</h2>
                    <p class="text-muted mb-3"><i class="bi bi-envelope-at me-2"></i>{{ $user->email }}</p>
                </div>
            </div>

            <!-- FORM INFOS PERSO -->
            <div class="card shadow-sm border-0 rounded-4 mb-5">
                <div class="card-header bg-light border-bottom">
                    <h5 class="mb-0 text-primary fw-bold">
                        <i class="bi bi-info-circle-fill me-2"></i> Informations personnelles
                    </h5>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PATCH')

                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold">Nom complet</label>
                            <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror"
                                   id="name" name="name" value="{{ old('name', $user->name) }}" required>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold">Adresse email</label>
                            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                   id="email" name="email" value="{{ old('email', $user->email) }}" required>
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary btn-lg px-4 rounded-pill">
                                <i class="bi bi-check-circle-fill me-2"></i> Mettre à jour
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- FORM CHANGEMENT MDP -->
            <div class="card shadow-sm border-0 rounded-4 mb-5">
                <div class="card-header bg-light border-bottom">
                    <h5 class="mb-0 text-warning fw-bold">
                        <i class="bi bi-shield-lock-fill me-2"></i> Sécurité du compte
                    </h5>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="current_password" class="form-label fw-semibold">Mot de passe actuel</label>
                            <input type="password" class="form-control form-control-lg @error('current_password') is-invalid @enderror"
                                   id="current_password" name="current_password" required>
                            @error('current_password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">Nouveau mot de passe</label>
                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                                   id="password" name="password" required>
                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-semibold">Confirmer le nouveau mot de passe</label>
                            <input type="password" class="form-control form-control-lg"
                                   id="password_confirmation" name="password_confirmation" required>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-warning btn-lg px-4 rounded-pill">
                                <i class="bi bi-key-fill me-2"></i> Changer le mot de passe
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- ZONE DANGEREUSE -->
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header bg-light border-bottom">
                    <h5 class="mb-0 text-danger fw-bold">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i> Zone dangereuse
                    </h5>
                </div>
                <div class="card-body p-4">
                    <div class="alert alert-danger d-flex align-items-center">
                        <i class="bi bi-exclamation-octagon-fill fs-4 me-2"></i>
                        <span>La suppression de votre compte est <b>irréversible</b>. Toutes vos données seront définitivement perdues.</span>
                    </div>

                    <form method="POST" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('DELETE')

                        <div class="mb-3">
                            <label for="delete_confirmation" class="form-label fw-semibold">
                                Tapez <b>"SUPPRIMER"</b> pour confirmer
                            </label>
                            <input type="text" class="form-control form-control-lg"
                                   id="delete_confirmation" name="delete_confirmation" required>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-danger btn-lg px-4 rounded-pill" id="deleteButton" disabled>
                                <i class="bi bi-trash3-fill me-2"></i> Supprimer mon compte
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@push('scripts')
<script>
    // Activer le bouton de suppression seulement si "SUPPRIMER" est tapé
    document.getElementById('delete_confirmation').addEventListener('input', function(e) {
        document.getElementById('deleteButton').disabled = e.target.value !== 'SUPPRIMER';
    });
</script>
@endpush

@push('styles')
<style>
    .rounded-4 { border-radius: 1rem !important; }
    .card-header { font-size: 1.1rem; }
    .btn-lg { min-width: 200px; transition: all 0.2s; }
    .btn-lg:hover { transform: translateY(-2px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
</style>
@endpush
@endsection
