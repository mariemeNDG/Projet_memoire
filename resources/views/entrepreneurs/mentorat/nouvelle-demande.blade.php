@extends('index')
@section('title', 'Nouvelle demande de mentorat')
@section('content')
<div class="pagetitle">
    <h1><i class="fas fa-user-tie text-primary me-2"></i>Nouvelle demande de mentorat</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('entrepreneur.dashboard') }}">Tableau de Bord</a></li>
            <li class="breadcrumb-item"><a href="{{ route('entrepreneur.mentorat.index') }}">Mentorat</a></li>
            <li class="breadcrumb-item active">Nouvelle demande</li>
        </ol>
    </nav>
</div>

<div class="container-fluid mt-4">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Formulaire de demande</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('entrepreneur.mentorat.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="projet_id" class="form-label">Projet concerné <span class="text-danger">*</span></label>
                    <select class="form-select" id="projet_id" name="projet_id" required>
                        <option value="" selected disabled>Choisissez un projet</option>
                        @foreach($projets as $projet)
                            <option value="{{ $projet->id }}" {{ old('projet_id') == $projet->id ? 'selected' : '' }}>
                                {{ $projet->nom }} - {{ $projet->secteur_activite }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="mentor_id" class="form-label">Mentor ciblé <span class="text-danger">*</span></label>
                    <select class="form-select" id="mentor_id" name="mentor_id" required>
                        <option value="" selected disabled>Choisissez un mentor</option>
                        @foreach($mentors as $mentor)
                            <option value="{{ $mentor->id }}" {{ old('mentor_id') == $mentor->id ? 'selected' : '' }}>
                                {{ $mentor->prenom }}{{ $mentor->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="domaine_accompagnement" class="form-label">Domaines d'accompagnement <span class="text-danger">*</span></label>
                    <select class="form-select" id="domaine_accompagnement" name="domaine_accompagnement[]" multiple required>
                        <option value="stratégie" {{ in_array('stratégie', old('domaine_accompagnement', [])) ? 'selected' : '' }}>Stratégie d'entreprise</option>
                        <option value="marketing" {{ in_array('marketing', old('domaine_accompagnement', [])) ? 'selected' : '' }}>Marketing & Vente</option>
                        <option value="technique" {{ in_array('technique', old('domaine_accompagnement', [])) ? 'selected' : '' }}>Développement technique</option>
                        <option value="juridique" {{ in_array('juridique', old('domaine_accompagnement', [])) ? 'selected' : '' }}>Aspect juridique</option>
                        <option value="finance" {{ in_array('finance', old('domaine_accompagnement', [])) ? 'selected' : '' }}>Finance & Levée de fonds</option>
                        <option value="international" {{ in_array('international', old('domaine_accompagnement', [])) ? 'selected' : '' }}>Développement international</option>
                    </select>
                    <small class="text-muted">Maintenez Ctrl (Windows) ou Cmd (Mac) pour sélectionner plusieurs options</small>
                </div>

                <div class="mb-3">
                    <label for="objectif_accompagnement" class="form-label">Objectifs de l'accompagnement <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="objectif_accompagnement" name="objectif_accompagnement" rows="3" required>{{ old('objectif_accompagnement') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="disponibilites" class="form-label">Disponibilités <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="disponibilites" name="disponibilites" rows="2" required>{{ old('disponibilites') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="duree" class="form-label">Durée souhaitée <span class="text-danger">*</span></label>
                    <select class="form-select" id="duree" name="duree" required>
                        <option value="1-3 mois" {{ old('duree') == '1-3 mois' ? 'selected' : '' }}>1-3 mois</option>
                        <option value="3-6 mois" {{ old('duree') == '3-6 mois' || !old('duree') ? 'selected' : '' }}>3-6 mois</option>
                        <option value="6-12 mois" {{ old('duree') == '6-12 mois' ? 'selected' : '' }}>6-12 mois</option>
                        <option value="indeterminee" {{ old('duree') == 'indeterminee' ? 'selected' : '' }}>À déterminer</option>
                    </select>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="conditions" name="conditions" required {{ old('conditions') ? 'checked' : '' }}>
                    <label class="form-check-label" for="conditions">Je certifie que les informations fournies sont exactes et j'accepte les <a href="#">conditions d'utilisation</a>.</label>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('entrepreneur.mentorat.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left me-1"></i> Retour
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane me-1"></i> Envoyer la demande
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
