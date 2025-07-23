@extends('index')
@section('title', 'Recherche de Financement')
@section('content')
    <div class="pagetitle">
               <h1><i class="fas fa-hand-holding-usd text-primary me-2"></i>Recherche de Financement</h1>
 <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Tableau de Bord</li>
                    <li class="breadcrumb-item active">Financement</li>
                </ol>
            </nav>

            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1></h1>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newFundingModal">
                        <i class="fas fa-bullhorn me-1"></i> Publier une demande
                    </button>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body p-3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Rechercher des investisseurs...">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                            <i class="fas fa-filter me-1"></i> Filtres
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><h6 class="dropdown-header">Type de financement</h6></li>
                                            <li><a class="dropdown-item" href="#"><i class="far fa-check-circle me-2"></i>Capital-risque</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="far fa-check-circle me-2"></i>Prêt</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="far fa-check-circle me-2"></i>Subvention</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><h6 class="dropdown-header">Montant</h6></li>
                                            <li><a class="dropdown-item" href="#"><i class="far fa-check-circle me-2"></i>Moins de 50K€</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="far fa-check-circle me-2"></i>50K€ - 200K€</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="far fa-check-circle me-2"></i>Plus de 200K€</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Investisseurs recommandés</h5>
                            </div>
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center">
                                            <img src="../../../assets/images/investisseurs/invest1.jpg" class="rounded-circle me-3" width="50">
                                            <div>
                                                <h6 class="mb-0">AfricInvest</h6>
                                                <small class="text-muted">Capital-risque • 50K€ - 500K€</small>
                                                <div class="mt-1">
                                                    <span class="badge bg-light text-dark me-1">Technologie</span>
                                                    <span class="badge bg-light text-dark">Environnement</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center">
                                            <img src="../../../assets/images/investisseurs/invest2.jpg" class="rounded-circle me-3" width="50">
                                            <div>
                                                <h6 class="mb-0">Green Capital</h6>
                                                <small class="text-muted">Impact investing • 20K€ - 200K€</small>
                                                <div class="mt-1">
                                                    <span class="badge bg-light text-dark me-1">Environnement</span>
                                                    <span class="badge bg-light text-dark">Agriculture</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center">
                                            <img src="../../../assets/images/investisseurs/invest3.jpg" class="rounded-circle me-3" width="50">
                                            <div>
                                                <h6 class="mb-0">SeedStars</h6>
                                                <small class="text-muted">Accélérateur • 10K€ - 100K€</small>
                                                <div class="mt-1">
                                                    <span class="badge bg-light text-dark me-1">Startup</span>
                                                    <span class="badge bg-light text-dark">Innovation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="card-footer bg-white text-center">
                                <a href="#" class="btn btn-outline-primary">Voir plus d'investisseurs</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Appels à projets</h5>
                            </div>
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="mb-1">Fonds pour l'innovation verte</h6>
                                            <small class="text-muted">Clôture: 15/07/2023</small>
                                        </div>
                                        <p class="mb-1">Subvention jusqu'à 75K€ pour projets environnementaux</p>
                                        <small class="text-muted">Ministère de l'Environnement</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="mb-1">Tech for Africa</h6>
                                            <small class="text-muted">Clôture: 30/07/2023</small>
                                        </div>
                                        <p class="mb-1">Investissement en capital pour startups technologiques</p>
                                        <small class="text-muted">African Tech Ventures</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="mb-1">Agriculture 2.0</h6>
                                            <small class="text-muted">Clôture: 10/08/2023</small>
                                        </div>
                                        <p class="mb-1">Prêts à taux zéro pour innovations agricoles</p>
                                        <small class="text-muted">Banque Agricole</small>
                                    </a>
                                </div>
                            </div>
                            <div class="card-footer bg-white text-center">
                                <a href="#" class="btn btn-outline-primary">Voir plus d'appels</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Projets similaires financés</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6>EcoRecycle</h6>
                                        <p class="text-muted small">Solution de recyclage des déchets plastiques</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge bg-success">250K€ levés</span>
                                            <small class="text-muted">2022</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6>AgriSmart</h6>
                                        <p class="text-muted small">Capteurs IoT pour l'agriculture</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge bg-success">180K€ levés</span>
                                            <small class="text-muted">2021</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6>CleanWater</h6>
                                        <p class="text-muted small">Purification d'eau low-cost</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge bg-success">350K€ levés</span>
                                            <small class="text-muted">2023</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Nouvelle Demande -->
    <div class="modal fade" id="newFundingModal" tabindex="-1" aria-labelledby="newFundingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="newFundingModalLabel">Publier une demande de financement</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="fundingForm">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fundingProject" class="form-label">Projet *</label>
                                    <select class="form-select" id="fundingProject" required>
                                        <option value="" selected disabled>Choisir un projet</option>
                                        <option value="1">EcoTech</option>
                                        <option value="2">AgriConnect</option>
                                        <option value="3">HealthTech</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fundingType" class="form-label">Type de financement *</label>
                                    <select class="form-select" id="fundingType" required>
                                        <option value="" selected disabled>Choisir un type</option>
                                        <option value="equity">Capital (equity)</option>
                                        <option value="loan">Prêt</option>
                                        <option value="grant">Subvention</option>
                                        <option value="mixed">Mixte</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fundingAmount" class="form-label">Montant recherché (€) *</label>
                                    <input type="number" class="form-control" id="fundingAmount" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fundingPercentage" class="form-label">% du capital offert</label>
                                    <input type="number" class="form-control" id="fundingPercentage" min="0" max="100" disabled>
                                    <small class="text-muted">Remplir seulement pour du capital-investissement</small>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="fundingDescription" class="form-label">Description de la demande *</label>
                            <textarea class="form-control" id="fundingDescription" rows="4" required></textarea>
                            <small class="text-muted">Décrivez comment les fonds seront utilisés et les retours attendus</small>
                        </div>

                        <div class="mb-3">
                            <label for="fundingDocuments" class="form-label">Documents complémentaires</label>
                            <input type="file" class="form-control" id="fundingDocuments" multiple>
                            <small class="text-muted">Business plan, projections financières, etc. (PDF, Excel)</small>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="fundingVisibility">
                            <label class="form-check-label" for="fundingVisibility">Rendre cette demande visible par tous les investisseurs</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" form="fundingForm" class="btn btn-primary">Publier la demande</button>
                </div>
            </div>
        </div>
    </div>

        </section>
@endsection
