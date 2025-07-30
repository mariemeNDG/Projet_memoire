@extends('index')
@section('title', 'Créer un nouveau projet')
@section('content')
    <div class="pagetitle">
        <h1>Créer un nouveau projet</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('entrepreneur.projets.index') }}">Mes projets</a></li>
                <li class="breadcrumb-item active">Nouveau projet</li>
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
                <h5 class="mb-0"><i class="fas fa-plus-circle me-2"></i>Formulaire de création</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('entrepreneur.projets.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nom" class="form-label">Nom du projet <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="secteur_activite" class="form-label">Secteur d'activité <span class="text-danger">*</span></label>
                                <select class="form-select" id="secteur_activite" name="secteur_activite" required>
                                    <option value="" selected disabled>Choisir un secteur</option>
                                    <option value="Technologie" {{ old('secteur_activite') == 'Technologie' ? 'selected' : '' }}>Technologie</option>
                                    <option value="Environnement" {{ old('secteur_activite') == 'Environnement' ? 'selected' : '' }}>Environnement</option>
                                    <option value="Santé" {{ old('secteur_activite') == 'Santé' ? 'selected' : '' }}>Santé</option>
                                    <option value="Agriculture" {{ old('secteur_activite') == 'Agriculture' ? 'selected' : '' }}>Agriculture</option>
                                    <option value="Éducation" {{ old('secteur_activite') == 'Éducation' ? 'selected' : '' }}>Éducation</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="etat" class="form-label">Situation du projet  <span class="text-danger">*</span></label>
                                <select class="form-select" id="etat" name="etat" required>
                                    <option value="" selected disabled>Choisir un etat</option>
                                    <option value="Labéllisé" {{ old('etat') == 'Labéllisés' ? 'selected' : '' }}>Labéllisé</option>
                                    <option value="En incubation" {{ old('etat') == 'En incubation' ? 'selected' : '' }}>En incubation</option>
                                    <option value="En financement" {{ old('etat') == 'En financement' ? 'selected' : '' }}>En financement</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="form-group mb-4">
                        <label for="description" class="form-label">Description du projet</label>
                        <textarea class="form-control" id="description" name="description" rows="5">{{ old('description') }}</textarea>
                        <small class="text-muted">Décrivez votre projet en détail (200 mots minimum)</small>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="budget" class="form-label">Budget estimé (€) <span class="text-danger">*</span></label>
                                <input type="number" step="0.01" class="form-control" id="budget" name="budget" value="{{ old('budget') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="dure" class="form-label">Durée estimée (mois) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="dure" name="dure" value="{{ old('dure', 1) }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="equipe" class="form-label">Équipe actuelle</label>
                                <input type="number" class="form-control" id="equipe" name="equipe" value="{{ old('equipe', 1) }}">
                            </div>
                        </div>


                    </div>

                    <div class="form-group mb-4">
                        <label for="document" class="form-label">Document du projet (PDF, DOC, DOCX)</label>
                        <input type="file" class="form-control" id="document" name="document" accept=".pdf,.doc,.docx">
                        <small class="text-muted">Téléversez votre business plan ou document de présentation (max 2MB)</small>
                    </div>

                    <div class="form-group mb-4">
                        <label class="form-label">Recherchez-vous :</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="accompagnement[]" id="needMentor" value="mentor" {{ is_array(old('accompagnement')) && in_array('mentor', old('accompagnement')) ? 'checked' : '' }}>
                            <label class="form-check-label" for="needMentor">Un mentor</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="accompagnement[]" id="needIncubator" value="incubateur" {{ is_array(old('accompagnement')) && in_array('incubateur', old('accompagnement')) ? 'checked' : '' }}>
                            <label class="form-check-label" for="needIncubator">Un incubateur</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="accompagnement[]" id="needFunding" value="financement" {{ is_array(old('accompagnement')) && in_array('financement', old('accompagnement')) ? 'checked' : '' }}>
                            <label class="form-check-label" for="needFunding">Un financement</label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('entrepreneur.projets.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Retour
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Enregistrer le projet
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
