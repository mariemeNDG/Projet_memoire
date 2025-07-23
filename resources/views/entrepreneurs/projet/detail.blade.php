@extends('index')
@section('title', 'Mes projets')
@section('content')
    <div class="pagetitle">
        <h1>Modifier EcoTech</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Tableau de bord</li>
                        <li class="breadcrumb-item"><a href="index.html">Mes projets</a></li>
                        <li class="breadcrumb-item"><a href="details.html">Détails</a></li>
                    </ol>
                </nav>
                            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h1><i class="fas fa-project-diagram text-primary me-2"></i>EcoTech</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../../porteurs/dashboard.html">Tableau de bord</a></li>
                                <li class="breadcrumb-item"><a href="index.html">Mes projets</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Détails</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="editer.html" class="btn btn-warning me-2">
                            <i class="fas fa-edit me-1"></i> Modifier
                        </a>
                        <a href="index.html" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Retour
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Informations générales</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Secteur :</strong> Environnement</p>
                                        <p><strong>Statut :</strong> <span class="badge bg-success">Labellisé</span></p>
                                        <p><strong>Date création :</strong> 15/05/2023</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Budget estimé :</strong> 50 000 €</p>
                                        <p><strong>Durée estimée :</strong> 12 mois</p>
                                        <p><strong>Équipe :</strong> 3 personnes</p>
                                    </div>
                                </div>
                                <hr>
                                <h5>Description</h5>
                                <p>test</p>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Documents</h5>
                            </div>
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-file-pdf text-danger me-2"></i>
                                                Business_Plan_EcoTech.pdf
                                            </div>
                                            <span class="badge bg-light text-dark">2.4 MB</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-file-image text-primary me-2"></i>
                                                Maquettes_Interface.zip
                                            </div>
                                            <span class="badge bg-light text-dark">5.1 MB</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Avancement</h5>
                            </div>
                            <div class="card-body text-center">
                                <div class="progress-circle mx-auto mb-3" data-value="65">
                                    <svg class="progress-circle-svg" viewBox="0 0 36 36">
                                        <path class="progress-circle-bg"
                                            d="M18 2.0845
                                            a 15.9155 15.9155 0 0 1 0 31.831
                                            a 15.9155 15.9155 0 0 1 0 -31.831"
                                        />
                                        <path class="progress-circle-fill"
                                            stroke-dasharray="65, 100"
                                            d="M18 2.0845
                                            a 15.9155 15.9155 0 0 1 0 31.831
                                            a 15.9155 15.9155 0 0 1 0 -31.831"
                                        />
                                        <text class="progress-circle-text" x="18" y="20.35">65%</text>
                                    </svg>
                                </div>
                                <h5>Projet à 65%</h5>
                                <p class="text-muted">Phase de développement</p>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Équipe</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="../../assets/images/utilisateurs/avatar-porteur.jpg" class="rounded-circle me-3" width="50">
                                    <div>
                                        <h6 class="mb-0">Marie Dupont</h6>
                                        <small class="text-muted">Fondatrice & CEO</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <img src="../../assets/images/utilisateurs/avatar2.jpg" class="rounded-circle me-3" width="50">
                                    <div>
                                        <h6 class="mb-0">Jean Martin</h6>
                                        <small class="text-muted">CTO</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="../../assets/images/utilisateurs/avatar3.jpg" class="rounded-circle me-3" width="50">
                                    <div>
                                        <h6 class="mb-0">Sophie Lambert</h6>
                                        <small class="text-muted">Responsable Marketing</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Actions rapides</h5>
                            </div>
                            <div class="card-body">
                                <a href="../../porteurs/mentorat/demandes.html" class="btn btn-outline-primary w-100 mb-2">
                                    <i class="fas fa-user-tie me-1"></i> Demander un mentor
                                </a>
                                <a href="../../porteurs/incubateurs/recherche.html" class="btn btn-outline-success w-100 mb-2">
                                    <i class="fas fa-building me-1"></i> Postuler à un incubateur
                                </a>
                                <a href="../../porteurs/financement/recherche.html" class="btn btn-outline-warning w-100">
                                    <i class="fas fa-hand-holding-usd me-1"></i> Chercher un financement
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
