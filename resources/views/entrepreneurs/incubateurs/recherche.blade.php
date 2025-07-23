@extends('index')
@section('title', 'Recherche Incubateurs')
@section('content')
    <div class="pagetitle">
            <h1><i class="fas fa-building text-primary me-2"></i>Recherche d'Incubateurs </h1>
         <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Tableau de Bord</li>
                    <li class="breadcrumb-item active">Incubateurs</li>
                </ol>
            </nav>

            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1></h1>
                    <div class="d-flex">
                        <button class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#filterModal">
                            <i class="fas fa-filter me-1"></i> Filtres
                        </button>
                        <button class="btn btn-outline-primary">
                            <i class="fas fa-map-marker-alt me-1"></i> Carte
                        </button>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="search-bar">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Rechercher un incubateur...">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 incubator-card">
                            <img src="../../../assets/images/incubateurs/incubateur1.jpg" class="card-img-top" alt="TechHub">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h5 class="card-title">TechHub Dakar</h5>
                                    <span class="badge bg-success">Ouvert</span>
                                </div>
                                <p class="card-text text-muted">
                                    <i class="fas fa-map-marker-alt me-1"></i> Dakar, Sénégal
                                </p>
                                <p class="card-text">Spécialisé dans les technologies innovantes et l'IA avec un programme d'accompagnement de 12 mois.</p>
                                <div class="mb-3">
                                    <span class="badge bg-light text-dark me-1">Technologie</span>
                                    <span class="badge bg-light text-dark me-1">IA</span>
                                    <span class="badge bg-light text-dark">Startup</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fas fa-star text-warning"></i>
                                        <small class="text-muted">4.7 (128 avis)</small>
                                    </div>
                                    <small class="text-muted">Prochaine session: 15/07/2023</small>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <a href="details.html" class="btn btn-outline-primary me-2">
                                    <i class="fas fa-info-circle me-1"></i> Détails
                                </a>
                                <a href="postuler.html" class="btn btn-primary">
                                    <i class="fas fa-paper-plane me-1"></i> Postuler
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100 incubator-card">
                            <img src="../../../assets/images/incubateurs/incubateur2.jpg" class="card-img-top" alt="GreenValley">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h5 class="card-title">GreenValley</h5>
                                    <span class="badge bg-success">Ouvert</span>
                                </div>
                                <p class="card-text text-muted">
                                    <i class="fas fa-map-marker-alt me-1"></i> Thiès, Sénégal
                                </p>
                                <p class="card-text">Incubateur dédié aux projets environnementaux et d'économie circulaire avec accès à des laboratoires spécialisés.</p>
                                <div class="mb-3">
                                    <span class="badge bg-light text-dark me-1">Environnement</span>
                                    <span class="badge bg-light text-dark me-1">Écologie</span>
                                    <span class="badge bg-light text-dark">Durabilité</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fas fa-star text-warning"></i>
                                        <small class="text-muted">4.5 (92 avis)</small>
                                    </div>
                                    <small class="text-muted">Prochaine session: 01/08/2023</small>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <a href="details.html" class="btn btn-outline-primary me-2">
                                    <i class="fas fa-info-circle me-1"></i> Détails
                                </a>
                                <a href="postuler.html" class="btn btn-primary">
                                    <i class="fas fa-paper-plane me-1"></i> Postuler
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100 incubator-card">
                            <img src="../../../assets/images/incubateurs/incubateur3.jpg" class="card-img-top" alt="AgriBoost">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h5 class="card-title">AgriBoost</h5>
                                    <span class="badge bg-warning">Bientôt</span>
                                </div>
                                <p class="card-text text-muted">
                                    <i class="fas fa-map-marker-alt me-1"></i> Saint-Louis, Sénégal
                                </p>
                                <p class="card-text">Programme d'accélération pour les startups agricoles avec accès à des terres expérimentales et des experts.</p>
                                <div class="mb-3">
                                    <span class="badge bg-light text-dark me-1">Agriculture</span>
                                    <span class="badge bg-light text-dark me-1">AgroTech</span>
                                    <span class="badge bg-light text-dark">Innovation</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fas fa-star text-warning"></i>
                                        <small class="text-muted">4.3 (76 avis)</small>
                                    </div>
                                    <small class="text-muted">Prochaine session: 10/09/2023</small>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <a href="details.html" class="btn btn-outline-primary me-2">
                                    <i class="fas fa-info-circle me-1"></i> Détails
                                </a>
                                <button class="btn btn-primary" disabled>
                                    <i class="fas fa-clock me-1"></i> Bientôt
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <nav aria-label="Page navigation" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Précédent</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Suivant</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Modal Filtres -->
    <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="filterModalLabel">Filtrer les incubateurs</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="filterForm">
                        <div class="mb-3">
                            <label class="form-label">Secteurs</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="techCheck" checked>
                                <label class="form-check-label" for="techCheck">Technologie</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="agriCheck">
                                <label class="form-check-label" for="agriCheck">Agriculture</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="envCheck" checked>
                                <label class="form-check-label" for="envCheck">Environnement</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="healthCheck">
                                <label class="form-check-label" for="healthCheck">Santé</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="locationSelect" class="form-label">Localisation</label>
                            <select class="form-select" id="locationSelect">
                                <option value="" selected>Toutes régions</option>
                                <option value="dakar">Dakar</option>
                                <option value="thies">Thiès</option>
                                <option value="saint-louis">Saint-Louis</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Disponibilité</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="availability" id="availNow" checked>
                                <label class="form-check-label" for="availNow">Ouvert aux candidatures</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="availability" id="availSoon">
                                <label class="form-check-label" for="availSoon">Prochaines sessions</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Note minimale</label>
                            <div class="d-flex align-items-center">
                                <input type="range" class="form-range me-3" min="0" max="5" step="0.5" value="3.5" id="ratingRange">
                                <span id="ratingValue">3.5</span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Appliquer les filtres</button>
                </div>
            </div>
        </div>
    </div>

        </section>
@endsection
