@extends('index')
@section('title', 'Postuler à un incubateur')
@section('content')
    <div class="pagetitle">
        <h1><i class="fas fa-building text-primary me-2"></i>Postuler à {{ $incubateur->nom }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('entrepreneur.dashboard') }}">Tableau de Bord</a></li>
                <li class="breadcrumb-item"><a href="{{ route('entrepreneur.incubateur.recherches') }}">Incubateurs</a></li>
                <li class="breadcrumb-item active">Postuler</li>
            </ol>
        </nav>
    </div>

    <div class="container-fluid mt-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Formulaire de candidature</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('entrepreneur.incubateur.store-candidature', $incubateur->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    {{-- Projet --}}
                    <div class="mb-3">
                        <label for="projet_id" class="form-label">Projet <span class="text-danger">*</span></label>
                        <select name="projet_id" id="projet_id" class="form-select" required>
                            <option value="">-- Sélectionnez un projet --</option>
                            @foreach ($projets as $projet)
                                <option value="{{ $projet->id }}" {{ old('projet_id') == $projet->id ? 'selected' : '' }}>
                                    {{ $projet->nom }} - {{ $projet->secteur_activite }}
                                </option>
                            @endforeach
                        </select>
                        @error('projet_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Motivation --}}
                    <div class="mb-3">
                        <label for="motivation" class="form-label">Motivation (minimum 100 caractères) <span
                                class="text-danger">*</span></label>
                        <textarea name="motivation" id="motivation" class="form-control" rows="5" required>{{ old('motivation') }}</textarea>
                        @error('motivation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Business Plan (facultatif) --}}
                    <div class="mb-3">
                        <label for="business_plan" class="form-label">Business Plan (PDF)</label>
                        <input type="file" class="form-control" id="business_plan" name="business_plan" accept=".pdf">
                        @error('business_plan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Taille de l’équipe --}}
                    <div class="mb-3">
                        <label for="equipe" class="form-label">Taille de l’équipe</label>
                        <input type="number" name="equipe" id="equipe" class="form-control" min="1"
                            value="{{ old('equipe') }}">
                        @error('equipe')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Budget prévisionnel --}}
                    <div class="mb-3">
                        <label for="budget_previsionnel" class="form-label">Budget prévisionnel (en FCFA)</label>
                        <input type="number" name="budget_previsionnel" id="budget_previsionnel" class="form-control"
                            step="0.01" value="{{ old('budget_previsionnel') }}">
                        @error('budget_previsionnel')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Durée d’incubation souhaitée --}}
                    <div class="mb-3">
                        <label for="duree_incubation" class="form-label">Durée souhaitée d’incubation</label>
                        <input type="text" name="duree_incubation" id="duree_incubation" class="form-control"
                            value="{{ old('duree_incubation') }}">
                        @error('duree_incubation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Besoins spécifiques --}}
                    <div class="mb-3">
                        <label for="besoins_specifiques" class="form-label">Besoins spécifiques</label>
                        <select name="besoins_specifiques[]" id="besoins_specifiques" class="form-select" multiple>
                            <option value="mentorat"
                                {{ collect(old('besoins_specifiques'))->contains('mentorat') ? 'selected' : '' }}>Mentorat
                            </option>
                            <option value="financement"
                                {{ collect(old('besoins_specifiques'))->contains('financement') ? 'selected' : '' }}>
                                Financement</option>
                            <option value="mise_en_reseau"
                                {{ collect(old('besoins_specifiques'))->contains('mise_en_reseau') ? 'selected' : '' }}>
                                Mise en réseau</option>
                            <option value="locaux"
                                {{ collect(old('besoins_specifiques'))->contains('locaux') ? 'selected' : '' }}>Locaux
                            </option>
                        </select>
                        @error('besoins_specifiques')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Bouton de soumission --}}
                    <button type="submit" class="btn btn-primary">Soumettre la candidature</button>
                </form>

            </div>
        </div>
    </div>


@endsection
