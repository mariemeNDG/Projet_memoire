@extends('index')
@section('title', 'Mes projets')
@section('content')
    <div class="pagetitle">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Tableau de bord</li>
                        <li class="breadcrumb-item"><a href="index.html">Mes projets</a></li>
                        <li class="breadcrumb-item"><a href="details.html">Détails</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modifier</li>
                    </ol>
                </nav>
                <div class="container-fluid mt-4">


                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Modifier les informations du projet</h5>
                        </div>
                        <div class="card-body">
                            <form id="editForm">
                                <div class="row mb-4">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="editName" class="form-label">Nom du projet *</label>
                                            <input type="text" class="form-control" id="editName" value="EcoTech"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="editSector" class="form-label">Secteur d'activité *</label>
                                            <select class="form-select" id="editSector" required>
                                                <option value="technologie">Technologie</option>
                                                <option value="environnement" selected>Environnement</option>
                                                <option value="sante">Santé</option>
                                                <option value="agriculture">Agriculture</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="editDescription" class="form-label">Description du projet *</label>
                                    <textarea class="form-control" id="editDescription" rows="8" required>test</textarea>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="editBudget" class="form-label">Budget estimé (€) *</label>
                                            <input type="number" class="form-control" id="editBudget" value="50000"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="editDuration" class="form-label">Durée estimée (mois) *</label>
                                            <input type="number" class="form-control" id="editDuration" value="12"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="editTeam" class="form-label">Équipe actuelle</label>
                                            <input type="number" class="form-control" id="editTeam" value="3">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="form-label">Statut du projet *</label>
                                    <select class="form-select" id="editStatus" required>
                                        <option value="ideation">Idée</option>
                                        <option value="conception">Conception</option>
                                        <option value="prototype">Prototypage</option>
                                        <option value="incubation" selected>Incubation</option>
                                        <option value="funding">Recherche financement</option>
                                        <option value="launched">Lancé</option>
                                    </select>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="editProgress" class="form-label">Avancement (%)</label>
                                    <input type="range" class="form-range" min="0" max="100" step="5"
                                        id="editProgress" value="65">
                                    <div class="d-flex justify-content-between">
                                        <small>0%</small>
                                        <small>65%</small>
                                        <small>100%</small>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="form-label">Documents actuels</label>
                                    <div class="list-group mb-3">
                                        <div class="list-group-item">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <i class="fas fa-file-pdf text-danger me-2"></i>
                                                    Business_Plan_EcoTech.pdf
                                                </div>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="editFiles" class="form-label">Ajouter des documents</label>
                                    <input type="file" class="form-control" id="editFiles" multiple>
                                    <small class="text-muted">Formats acceptés: PDF, DOCX, PPTX, ZIP (max. 10MB)</small>
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="reset" class="btn btn-outline-secondary me-md-2">
                                        <i class="fas fa-undo me-1"></i> Réinitialiser
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save me-1"></i> Enregistrer les modifications
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </div>
    </div>
@endsection
