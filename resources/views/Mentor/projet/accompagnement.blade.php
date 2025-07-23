@extends('index')
@section('title', 'Projets Accompagnés')
@section('content')
    <div class="pagetitle">
            <h1><i class="fas fa-hands-helping me-2"></i>Projets Accompagnés</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Tableau de Bord</li>
                </ol>
            </nav>

            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1></h1>
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#newSessionModal">
                        <i class="fas fa-plus me-1"></i> Nouvelle session
                    </button>
                </div>

                <div class="row">
                    <!-- Projet 1 -->
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">EcoTech</h5>
                                <span class="badge bg-light text-dark">Actif</span>
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
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <i class="fas fa-clock text-info me-1"></i>
                                        <small>12h accompagnement</small>
                                    </div>
                                    <div>
                                        <i class="fas fa-star text-warning me-1"></i>
                                        <small>4.8/5</small>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 10px;">
                                    <div class="progress-bar bg-success" style="width: 75%"></div>
                                </div>
                                <small class="text-muted">Progression: 75% | Prochaine session: 15/06</small>
                            </div>
                            <div class="card-footer bg-white d-flex justify-content-between">
                                <button class="btn btn-outline-primary">
                                    <i class="fas fa-calendar me-1"></i> Sessions
                                </button>
                                <button class="btn btn-outline-secondary">
                                    <i class="fas fa-file-alt me-1"></i> Notes
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

    <!-- New Session Modal -->
    <div class="modal fade" id="newSessionModal" tabindex="-1" aria-labelledby="newSessionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="newSessionModalLabel">Planifier une session</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="sessionForm">
                        <div class="mb-3">
                            <label class="form-label">Projet</label>
                            <select class="form-select">
                                <option selected>EcoTech</option>
                                <option>AgriConnect</option>
                                <option>MediTrack</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date et heure</label>
                            <input type="datetime-local" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Durée (minutes)</label>
                            <input type="number" class="form-control" value="60">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Type de session</label>
                            <select class="form-select">
                                <option selected>Stratégie</option>
                                <option>Technique</option>
                                <option>Business Model</option>
                                <option>Financement</option>
                                <option>Autre</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Planifier</button>
                </div>
            </div>
        </div>
    </div>

        </section>
@endsection
