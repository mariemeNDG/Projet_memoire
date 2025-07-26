@extends('index')
@section('title', 'Mes projets')
@section('content')
    <div class="pagetitle">

                    <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-plus-circle text-primary me-2"></i>Nouveau Projet</h1>
                    <a href="{{ route('entrepreneur.projets.create') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left me-1"></i> Retour
                    </a>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Formulaire de création</h5>
                    </div>
                    <div class="card-body">
                        <form id="projectForm">
                            <div class="row mb-4">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="projectName" class="form-label">Nom du projet *</label>
                                        <input type="text" class="form-control" id="projectName" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="projectSector" class="form-label">Secteur d'activité *</label>
                                        <select class="form-select" id="projectSector" required>
                                            <option value="" selected disabled>Choisir un secteur</option>
                                            <option value="technologie">Technologie</option>
                                            <option value="environnement">Environnement</option>
                                            <option value="sante">Santé</option>
                                            <option value="agriculture">Agriculture</option>
                                            <option value="education">Éducation</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="projectDescription" class="form-label">Description du projet *</label>
                                <textarea class="form-control" id="projectDescription" rows="5" required></textarea>
                                <small class="text-muted">Décrivez votre projet en 200 mots minimum</small>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="projectBudget" class="form-label">Budget estimé (€) *</label>
                                        <input type="number" class="form-control" id="projectBudget" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="projectDuration" class="form-label">Durée estimée (mois) *</label>
                                        <input type="number" class="form-control" id="projectDuration" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="projectTeam" class="form-label">Équipe actuelle</label>
                                        <input type="number" class="form-control" id="projectTeam" value="1">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="projectFile" class="form-label">Document du projet (PDF) *</label>
                                <input type="file" class="form-control" id="projectFile" accept=".pdf" required>
                                <small class="text-muted">Téléversez votre business plan ou document de présentation</small>
                            </div>

                            <div class="form-group mb-4">
                                <label class="form-label">Recherchez-vous :</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="needMentor">
                                    <label class="form-check-label" for="needMentor">Un mentor</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="needIncubator">
                                    <label class="form-check-label" for="needIncubator">Un incubateur</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="needFunding">
                                    <label class="form-check-label" for="needFunding">Un financement</label>
                                </div>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="reset" class="btn btn-outline-secondary me-md-2">
                                    <i class="fas fa-eraser me-1"></i> Annuler
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-1"></i> Enregistrer le projet
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header bg-light">
                        <h5 class="mb-0"><i class="fas fa-lightbulb me-2"></i>Conseils pour votre projet</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <h6><i class="fas fa-info-circle me-2"></i>Une bonne description contient :</h6>
                            <ul>
                                <li>Le problème que vous résolvez</li>
                                <li>Votre solution innovante</li>
                                <li>Votre marché cible</li>
                                <li>Votre avantage concurrentiel</li>
                            </ul>
                        </div>
                        <div class="alert alert-warning">
                            <h6><i class="fas fa-exclamation-triangle me-2"></i>Évitez :</h6>
                            <ul>
                                <li>Les descriptions trop vagues</li>
                                <li>Les jargons techniques incompréhensibles</li>
                                <li>Les informations financières irréalistes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
