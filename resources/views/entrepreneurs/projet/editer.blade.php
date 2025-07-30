@extends('index')
@section('title', 'Modifier le projet')
@section('content')
    <div class="pagetitle">
        <h1>Modifier le projet</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('entrepreneur.projets.index') }}">Tableau de bord</a></li>
                <li class="breadcrumb-item"><a href="{{ route('entrepreneur.projets.index') }}">Mes projets</a></li>
                <li class="breadcrumb-item active">Modifier</li>
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
                <h5 class="mb-0"><i class="fas fa-edit me-2"></i>Modifier les informations du projet</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('entrepreneur.projets.update', $projet) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nom" class="form-label">Nom du projet <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nom" name="nom"
                                    value="{{ old('nom', $projet->nom) }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="secteur_activite" class="form-label">Secteur d'activité <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="secteur_activite" name="secteur_activite" required>
                                    <option value="Technologie"
                                        {{ old('secteur_activite', $projet->secteur_activite) == 'Technologie' ? 'selected' : '' }}>
                                        Technologie</option>
                                    <option value="Environnement"
                                        {{ old('secteur_activite', $projet->secteur_activite) == 'Environnement' ? 'selected' : '' }}>
                                        Environnement</option>
                                    <option value="Santé"
                                        {{ old('secteur_activite', $projet->secteur_activite) == 'Santé' ? 'selected' : '' }}>
                                        Santé</option>
                                    <option value="Agriculture"
                                        {{ old('secteur_activite', $projet->secteur_activite) == 'Agriculture' ? 'selected' : '' }}>
                                        Agriculture</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="etat" class="form-label">État du projet <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="etat" name="etat" required>
                                    <option value="en cours"
                                        {{ old('etat', $projet->etat) == 'en cours' ? 'selected' : '' }}>En cours</option>
                                    <option value="en conception"
                                        {{ old('etat', $projet->etat) == 'en conception' ? 'selected' : '' }}>En conception
                                    </option>
                                    <option value="en incubation"
                                        {{ old('etat', $projet->etat) == 'en incubation' ? 'selected' : '' }}>En incubation
                                    </option>
                                    <option value="labellisé"
                                        {{ old('etat', $projet->etat) == 'Labellisé' ? 'selected' : '' }}>Labellisé
                                    </option>
                                    <option value="en financement"
                                        {{ old('etat', $projet->etat) == 'en financement' ? 'selected' : '' }}>En
                                        financement</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="description" class="form-label">Description du projet <span
                                class="text-danger">*</span></label>
                        <textarea class="form-control" id="description" name="description" rows="8" required>{{ old('description', $projet->description) }}</textarea>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="budget" class="form-label">Budget estimé (€) <span
                                        class="text-danger">*</span></label>
                                <input type="number" step="0.01" class="form-control" id="budget" name="budget"
                                    value="{{ old('budget', $projet->budget) }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="duree" class="form-label">Durée estimée (mois) <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="duree" name="dure"
                                    value="{{ old('duree', $projet->duree) }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="equipe" class="form-label">Équipe actuelle</label>
                                <input type="number" class="form-control" id="equipe" name="equipe"
                                    value="{{ old('equipe', $projet->equipe) }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="form-label">Document actuel</label>
                        @if ($projet->document)
                            <div class="list-group mb-3">
                                <div class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-file-pdf text-danger me-2"></i>
                                            {{ basename($projet->document) }}
                                        </div>
                                        <a href="{{ asset('storage/' . $projet->document) }}"
                                            class="btn btn-sm btn-outline-primary me-2" target="_blank">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-outline-danger"
                                            onclick="if(confirm('Supprimer ce document?')) document.getElementById('remove_document').value = '1'">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="remove_document" id="remove_document" value="0">
                        @else
                            <p class="text-muted">Aucun document téléversé</p>
                        @endif

                        <label for="document" class="form-label">Nouveau document</label>
                        <input type="file" class="form-control" id="document" name="document"
                            accept=".pdf,.doc,.docx">
                        <small class="text-muted">Formats acceptés: PDF, DOC, DOCX (max 2MB)</small>
                    </div>

                    <div class="form-group mb-4">
                        <label class="form-label">Recherchez-vous :</label>
                        @php
                            // Assurez-vous que $accompagnement est toujours un tableau
                            $accompagnement = old(
                                'accompagnement',
                                $projet->accompagnement ? json_decode($projet->accompagnement, true) : [],
                            );
                            $accompagnement = is_array($accompagnement) ? $accompagnement : [];
                        @endphp
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="accompagnement[]" id="needMentor"
                                value="mentor" {{ in_array('mentor', $accompagnement) ? 'checked' : '' }}>
                            <label class="form-check-label" for="needMentor">Un mentor</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="accompagnement[]" id="needIncubator"
                                value="incubateur" {{ in_array('incubateur', $accompagnement) ? 'checked' : '' }}>
                            <label class="form-check-label" for="needIncubator">Un incubateur</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="accompagnement[]" id="needFunding"
                                value="financement" {{ in_array('financement', $accompagnement) ? 'checked' : '' }}>
                            <label class="form-check-label" for="needFunding">Un financement</label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('entrepreneur.projets.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Annuler
                        </a>
                        <div>
                            <button type="reset" class="btn btn-outline-secondary me-2">
                                <i class="fas fa-undo me-1"></i> Réinitialiser
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i> Enregistrer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
