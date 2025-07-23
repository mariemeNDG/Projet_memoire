@extends('index')
@section('title', 'Projet Incubés')
@section('content')
    <div class="pagetitle">

            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-lightbulb me-2"></i>Projets Incubés</h1>
                    <div>
                        <button class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#filtersModal">
                            <i class="fas fa-filter me-1"></i> Filtres
                        </button>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newProjectModal">
                            <i class="fas fa-plus me-1"></i> Ajouter un projet
                        </button>
                    </div>
                </div>

                <div class="row">
                    <!-- Projet 1 -->
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">EcoTech</h5>
                                <span class="badge bg-info">Phase 2</span>
                            </div>
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <img src="../../../assets/images/projets/projet1.jpg" class="rounded-circle me-3" width="60">
                                    <div>
                                        <h6>Porteur: Jean Martin</h6>
                                        <p class="text-muted mb-0">
                                            <i class="fas fa-map-marker-alt me-1"></i> Dakar, Sénégal
                                        </p>
                                    </div>
                                </div>
                                <p>Solution innovante de gestion des déchets électroniques avec traçabilité complète via blockchain.</p>
                                <div class="mb-3">
                                    <span class="badge bg-light text-dark me-1">Environnement</span>
                                    <span class="badge bg-light text-dark">Technologie</span>
                                </div>
                                <div class="mb-3">
                                    <h6>Progression</h6>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-success" style="width: 65%"></div>
                                    </div>
                                    <small class="text-muted">65% complété | Date de sortie: 15/09/2023</small>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <i class="fas fa-euro-sign text-primary me-1"></i>
                                        <small>150K€ levés</small>
                                    </div>
                                    <div>
                                        <i class="fas fa-user-tie text-info me-1"></i>
                                        <small>2 mentors</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white d-flex justify-content-between">
                                <button class="btn btn-outline-primary">
                                    <i class="fas fa-chart-line me-1"></i> Suivi
                                </button>
                                <button class="btn btn-outline-secondary">
                                    <i class="fas fa-file-alt me-1"></i> Dossier
                                </button>
                                <button class="btn btn-primary">
                                    <i class="fas fa-comments me-1"></i> Contacter
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Plus de projets... -->
                </div>
            </div>
        </div>
    </div>

    <!-- Filters Modal -->
    <div class="modal fade" id="filtersModal" tabindex="-1" aria-labelledby="filtersModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="filtersModalLabel">Filtrer les projets</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="projectsFilter">
                        <div class="mb-3">
                            <label class="form-label">Phase d'incubation</label>
                            <select class="form-select" multiple>
                                <option selected>Phase 1 - Idéation</option>
                                <option selected>Phase 2 - Prototypage</option>
                                <option>Phase 3 - Pré-incubation</option>
                                <option>Phase 4 - Accélération</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Secteurs</label>
                            <select class="form-select" multiple>
                                <option selected>Technologie</option>
                                <option>Santé</option>
                                <option>Environnement</option>
                                <option>Agriculture</option>
                                <option>Éducation</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Statut</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="statusActive" checked>
                                <label class="form-check-label" for="statusActive">Actif</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="statusPaused">
                                <label class="form-check-label" for="statusPaused">En pause</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="statusCompleted">
                                <label class="form-check-label" for="statusCompleted">Terminé</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Appliquer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- New Project Modal -->
    <div class="modal fade" id="newProjectModal" tabindex="-1" aria-labelledby="newProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="newProjectModalLabel">Ajouter un nouveau projet</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="newProjectForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Nom du projet</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Porteur de projet</label>
                                    <select class="form-select" required>
                                        <option selected disabled>Choisir un porteur...</option>
                                        <option>Jean Martin</option>
                                        <option>Amina Diop</option>
                                        <option>Paul Ndiaye</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Secteurs</label>
                                    <select class="form-select" multiple required>
                                        <option>Technologie</option>
                                        <option>Santé</option>
                                        <option>Environnement</option>
                                        <option>Agriculture</option>
                                        <option>Éducation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Phase d'incubation</label>
                                    <select class="form-select" required>
                                        <option>Phase 1 - Idéation</option>
                                        <option>Phase 2 - Prototypage</option>
                                        <option selected>Phase 3 - Pré-incubation</option>
                                        <option>Phase 4 - Accélération</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Date d'entrée</label>
                                    <input type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Date de sortie prévue</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/incubateurs.js"></script>
@endsection
