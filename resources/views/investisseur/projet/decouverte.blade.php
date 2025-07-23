@extends('index')
@section('title', 'Découverte')
@section('content')

           <!-- Discovery Content -->
            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-search me-2"></i>Découverte de Projets</h1>
                    <div>
                        <button class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#filtersModal">
                            <i class="fas fa-filter me-1"></i> Filtres
                        </button>
                        <button class="btn btn-primary" id="refreshProjects">
                            <i class="fas fa-sync-alt me-1"></i> Actualiser
                        </button>
                    </div>
                </div>

                <!-- Project Filters -->
                <div class="row mb-4" id="activeFilters">
                    <div class="col-12">
                        <div class="alert alert-light d-flex align-items-center">
                            <strong class="me-3">Filtres actifs :</strong>
                            <span class="badge bg-light text-dark me-2">
                                Technologie <button class="btn-close btn-close-sm ms-1"></button>
                            </span>
                            <span class="badge bg-light text-dark me-2">
                                50K-500K€ <button class="btn-close btn-close-sm ms-1"></button>
                            </span>
                            <span class="badge bg-light text-dark">
                                Prototype <button class="btn-close btn-close-sm ms-1"></button>
                            </span>
                            <button class="btn btn-link ms-auto">Effacer tout</button>
                        </div>
                    </div>
                </div>

                <!-- Projects Grid -->
                <div class="row" id="projectsGrid">
                    <!-- Project 1 -->
                    <div class="col-xl-4 col-lg-6 mb-4">
                        <div class="card h-100 project-card">
                            <div class="card-img-top project-image" style="background-image: url('../../../assets/images/projets/projet1.jpg');">
                                <span class="badge bg-success position-absolute top-0 end-0 m-2">Labellisé</span>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h5 class="card-title">EcoTech</h5>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-heart me-2"></i>Enregistrer</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-share-alt me-2"></i>Partager</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-flag me-2"></i>Signaler</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="card-text text-muted">
                                    <i class="fas fa-map-marker-alt me-1"></i> Dakar, Sénégal
                                </p>
                                <p class="card-text">Solution innovante de gestion des déchets électroniques avec traçabilité complète via blockchain.</p>
                                <div class="mb-3">
                                    <span class="badge bg-light text-dark me-1">Environnement</span>
                                    <span class="badge bg-light text-dark">Technologie</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fas fa-euro-sign text-primary"></i>
                                        <strong class="ms-1">50K€</strong>
                                        <small class="text-muted ms-2">recherchés</small>
                                    </div>
                                    <div>
                                        <i class="fas fa-user-tie text-info"></i>
                                        <small class="text-muted ms-1">2 mentors</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white d-flex justify-content-between">
                                <a href="details.html" class="btn btn-outline-primary">
                                    <i class="fas fa-info-circle me-1"></i> Détails
                                </a>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#investModal">
                                    <i class="fas fa-hand-holding-usd me-1"></i> Investir
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="col-xl-4 col-lg-6 mb-4">
                        <div class="card h-100 project-card">
                            <div class="card-img-top project-image" style="background-image: url('../../../assets/images/projets/projet2.jpg');"></div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h5 class="card-title">AgriConnect</h5>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-heart me-2"></i>Enregistrer</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-share-alt me-2"></i>Partager</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-flag me-2"></i>Signaler</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="card-text text-muted">
                                    <i class="fas fa-map-marker-alt me-1"></i> Abidjan, Côte d'Ivoire
                                </p>
                                <p class="card-text">Plateforme connectant petits agriculteurs avec acheteurs institutionnels, réduisant les intermédiaires.</p>
                                <div class="mb-3">
                                    <span class="badge bg-light text-dark me-1">Agriculture</span>
                                    <span class="badge bg-light text-dark">Technologie</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fas fa-euro-sign text-primary"></i>
                                        <strong class="ms-1">150K€</strong>
                                        <small class="text-muted ms-2">recherchés</small>
                                    </div>
                                    <div>
                                        <i class="fas fa-user-tie text-info"></i>
                                        <small class="text-muted ms-1">1 mentor</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white d-flex justify-content-between">
                                <a href="details.html" class="btn btn-outline-primary">
                                    <i class="fas fa-info-circle me-1"></i> Détails
                                </a>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#investModal">
                                    <i class="fas fa-hand-holding-usd me-1"></i> Investir
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="col-xl-4 col-lg-6 mb-4">
                        <div class="card h-100 project-card">
                            <div class="card-img-top project-image" style="background-image: url('../../../assets/images/projets/projet3.jpg');">
                                <span class="badge bg-info position-absolute top-0 end-0 m-2">Nouveau</span>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h5 class="card-title">MediTrack</h5>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-heart me-2"></i>Enregistrer</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-share-alt me-2"></i>Partager</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-flag me-2"></i>Signaler</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="card-text text-muted">
                                    <i class="fas fa-map-marker-alt me-1"></i> Tunis, Tunisie
                                </p>
                                <p class="card-text">Dispositif IoT de suivi médical pour patients chroniques avec alertes en temps réel pour les médecins.</p>
                                <div class="mb-3">
                                    <span class="badge bg-light text-dark me-1">Santé</span>
                                    <span class="badge bg-light text-dark">Technologie</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fas fa-euro-sign text-primary"></i>
                                        <strong class="ms-1">300K€</strong>
                                        <small class="text-muted ms-2">recherchés</small>
                                    </div>
                                    <div>
                                        <i class="fas fa-user-tie text-info"></i>
                                        <small class="text-muted ms-1">3 mentors</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white d-flex justify-content-between">
                                <a href="details.html" class="btn btn-outline-primary">
                                    <i class="fas fa-info-circle me-1"></i> Détails
                                </a>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#investModal">
                                    <i class="fas fa-hand-holding-usd me-1"></i> Investir
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Projects pagination">
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

    <!-- Filters Modal -->
    <div class="modal fade" id="filtersModal" tabindex="-1" aria-labelledby="filtersModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="filtersModalLabel">Filtrer les projets</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="projectFilters">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Mots-clés</label>
                                    <input type="text" class="form-control" placeholder="Rechercher par mots-clés">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Localisation</label>
                                    <select class="form-select">
                                        <option selected>Toutes régions</option>
                                        <option>Afrique de l'Ouest</option>
                                        <option>Afrique du Nord</option>
                                        <option>Afrique Centrale</option>
                                        <option>Afrique de l'Est</option>
                                        <option>Afrique Australe</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Secteurs</label>
                                    <select class="form-select" multiple>
                                        <option selected>Technologie</option>
                                        <option selected>Environnement</option>
                                        <option>Agriculture</option>
                                        <option>Santé</option>
                                        <option>Éducation</option>
                                        <option>Énergie</option>
                                        <option>Finance</option>
                                        <option>Transport</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Niveau de maturité</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="maturityIdeation" checked>
                                        <label class="form-check-label" for="maturityIdeation">Idée</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="maturityPrototype" checked>
                                        <label class="form-check-label" for="maturityPrototype">Prototype</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="maturityIncubation">
                                        <label class="form-check-label" for="maturityIncubation">Incubation</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="maturityRevenue">
                                        <label class="form-check-label" for="maturityRevenue">Premiers revenus</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Montant recherché (K€)</label>
                                    <div class="d-flex align-items-center">
                                        <input type="number" class="form-control me-2" placeholder="Min" value="10">
                                        <span class="mx-2">à</span>
                                        <input type="number" class="form-control ms-2" placeholder="Max" value="500">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Type d'investissement</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="investmentEquity" checked>
                                        <label class="form-check-label" for="investmentEquity">Capital</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="investmentLoan" checked>
                                        <label class="form-check-label" for="investmentLoan">Prêt</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="investmentConvertible">
                                        <label class="form-check-label" for="investmentConvertible">Prêt convertible</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-outline-secondary">Réinitialiser</button>
                    <button type="button" class="btn btn-primary">Appliquer les filtres</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Invest Modal -->
    <div class="modal fade" id="investModal" tabindex="-1" aria-labelledby="investModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="investModalLabel">Exprimer son intérêt</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="interestForm">
                        <div class="mb-3">
                            <label for="projectName" class="form-label">Projet</label>
                            <input type="text" class="form-control" id="projectName" value="EcoTech" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="investmentType" class="form-label">Type d'investissement</label>
                            <select class="form-select" id="investmentType">
                                <option selected>Capital</option>
                                <option>Prêt</option>
                                <option>Prêt convertible</option>
                                <option>Autre</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="investmentAmount" class="form-label">Montant (K€)</label>
                            <input type="number" class="form-control" id="investmentAmount" placeholder="50">
                        </div>
                        <div class="mb-3">
                            <label for="investmentMessage" class="form-label">Message au porteur</label>
                            <textarea class="form-control" id="investmentMessage" rows="3" placeholder="Expliquez votre intérêt pour ce projet..."></textarea>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="ndaAgreement">
                            <label class="form-check-label" for="ndaAgreement">Je suis prêt à signer un NDA si nécessaire</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Envoyer l'intérêt</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/investisseurs.js"></script>
    <script>
        // Gestion des filtres actifs
        document.querySelectorAll('#activeFilters .btn-close').forEach(btn => {
            btn.addEventListener('click', function() {
                this.parentElement.remove();
            });
        });

        // Rafraîchissement des projets
        document.getElementById('refreshProjects').addEventListener('click', function() {
            // Simulation de chargement
            const projectsGrid = document.getElementById('projectsGrid');
            projectsGrid.innerHTML = '<div class="col-12 text-center my-5"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Chargement...</span></div></div>';

            // Simuler un délai de chargement
            setTimeout(() => {
                // Ici vous feriez normalement un appel API
                projectsGrid.innerHTML = `
                    <div class="col-12">
                        <div class="alert alert-success">Les projets ont été actualisés avec succès.</div>
                    </div>
                ` + projectsGrid.innerHTML;
            }, 1500);
        });

        // Gestion de la soumission du formulaire d'intérêt
        document.querySelector('#investModal .btn-primary').addEventListener('click', function() {
            const amount = document.getElementById('investmentAmount').value;
            if (!amount || isNaN(amount)) {
                alert('Veuillez entrer un montant valide');
                return;
            }

            // Ici vous feriez normalement un appel API
            alert('Votre intérêt a été envoyé au porteur de projet !');
            const modal = bootstrap.Modal.getInstance(document.getElementById('investModal'));
            modal.hide();
        });
    </script>
@endsection
