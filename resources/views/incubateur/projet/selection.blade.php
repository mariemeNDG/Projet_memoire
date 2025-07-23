@extends('index')
@section('title', 'Selecetion des Projets')
@section('content')

                        <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-filter me-2"></i>Sélection de Projets</h1>
                    <div>
                        <button class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#filtersModal">
                            <i class="fas fa-filter me-1"></i> Filtres avancés
                        </button>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#evaluationGuideModal">
                            <i class="fas fa-question-circle me-1"></i> Guide d'évaluation
                        </button>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">Candidatures</h6>
                                        <h2 class="mb-0">42</h2>
                                    </div>
                                    <i class="fas fa-file-alt fa-3x opacity-50"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card bg-success text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">À évaluer</h6>
                                        <h2 class="mb-0">18</h2>
                                    </div>
                                    <i class="fas fa-clipboard-check fa-3x opacity-50"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card bg-info text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">Moy. notation</h6>
                                        <h2 class="mb-0">3.8/5</h2>
                                    </div>
                                    <i class="fas fa-star fa-3x opacity-50"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card bg-warning text-dark">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">Taux sélection</h6>
                                        <h2 class="mb-0">25%</h2>
                                    </div>
                                    <i class="fas fa-percentage fa-3x opacity-50"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projects Table -->
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Candidatures en cours d'évaluation</h5>
                        <div>
                            <button class="btn btn-light btn-sm me-2" id="exportBtn">
                                <i class="fas fa-download me-1"></i> Exporter
                            </button>
                            <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#batchActionModal">
                                <i class="fas fa-tasks me-1"></i> Actions groupées
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="selectionTable" class="table table-hover table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%">
                                            <input type="checkbox" class="form-check-input" id="selectAll">
                                        </th>
                                        <th width="25%">Projet</th>
                                        <th width="15%">Porteur</th>
                                        <th width="15%">Appel</th>
                                        <th width="10%">Date</th>
                                        <th width="10%">Score</th>
                                        <th width="10%">Statut</th>
                                        <th width="10%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input row-checkbox"></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../../assets/images/projets/projet4.jpg" class="rounded-circle me-2" width="40">
                                                <div>
                                                    <strong>EduTech</strong><br>
                                                    <small class="text-muted">Plateforme éducative IA</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Amina Diop</td>
                                        <td>Appel EdTech 2023</td>
                                        <td>10/06/2023</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress me-2" style="height: 6px; width: 60px;">
                                                    <div class="progress-bar bg-warning" style="width: 68%"></div>
                                                </div>
                                                <small>68%</small>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info">En évaluation</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-outline-primary" title="Voir" data-bs-toggle="modal" data-bs-target="#projectDetailModal">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-success" title="Accepter">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                <button class="btn btn-outline-danger" title="Refuser">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Plus de lignes... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Evaluation Panel -->
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Grille d'évaluation détaillée</h5>
                        <button class="btn btn-light btn-sm" id="saveEvaluationBtn">
                            <i class="fas fa-save me-1"></i> Enregistrer
                        </button>
                    </div>
                    <div class="card-body">
                        <form id="evaluationForm">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <h6><i class="fas fa-project-diagram me-2"></i> Projet sélectionné</h6>
                                    <div class="d-flex align-items-center bg-light p-3 rounded">
                                        <img src="../../../assets/images/projets/projet4.jpg" class="rounded-circle me-3" width="60">
                                        <div>
                                            <h5 class="mb-1">EduTech</h5>
                                            <p class="mb-1"><strong>Porteur:</strong> Amina Diop</p>
                                            <p class="mb-0"><strong>Appel:</strong> Appel EdTech 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h6><i class="fas fa-info-circle me-2"></i> Résumé</h6>
                                    <div class="bg-light p-3 rounded">
                                        <p class="mb-2"><strong>Description:</strong> Plateforme éducative utilisant l'IA pour personnaliser l'apprentissage.</p>
                                        <p class="mb-0"><strong>Secteurs:</strong> <span class="badge bg-secondary">Éducation</span> <span class="badge bg-secondary">Technologie</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <h6><i class="fas fa-lightbulb me-2"></i> Innovation</h6>
                                        <input type="range" class="form-range evaluation-slider" min="0" max="5" step="0.5" value="3.5" id="innovationSlider">
                                        <div class="d-flex justify-content-between">
                                            <small>Peu innovant</small>
                                            <small>Très innovant</small>
                                        </div>
                                        <textarea class="form-control mt-2" rows="2" placeholder="Commentaires..."></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <h6><i class="fas fa-chart-line me-2"></i> Potentiel marché</h6>
                                        <input type="range" class="form-range evaluation-slider" min="0" max="5" step="0.5" value="4" id="marketSlider">
                                        <div class="d-flex justify-content-between">
                                            <small>Faible potentiel</small>
                                            <small>Fort potentiel</small>
                                        </div>
                                        <textarea class="form-control mt-2" rows="2" placeholder="Commentaires..."></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <h6><i class="fas fa-users me-2"></i> Équipe</h6>
                                        <input type="range" class="form-range evaluation-slider" min="0" max="5" step="0.5" value="3" id="teamSlider">
                                        <div class="d-flex justify-content-between">
                                            <small>Incomplète</small>
                                            <small>Optimale</small>
                                        </div>
                                        <textarea class="form-control mt-2" rows="2" placeholder="Commentaires..."></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <h6><i class="fas fa-cogs me-2"></i> Faisabilité technique</h6>
                                        <input type="range" class="form-range evaluation-slider" min="0" max="5" step="0.5" value="4.5" id="techSlider">
                                        <div class="d-flex justify-content-between">
                                            <small>Difficile</small>
                                            <small>Réaliste</small>
                                        </div>
                                        <textarea class="form-control mt-2" rows="2" placeholder="Commentaires..."></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <h6><i class="fas fa-hand-holding-heart me-2"></i> Impact social</h6>
                                        <input type="range" class="form-range evaluation-slider" min="0" max="5" step="0.5" value="3.5" id="impactSlider">
                                        <div class="d-flex justify-content-between">
                                            <small>Limité</small>
                                            <small>Important</small>
                                        </div>
                                        <textarea class="form-control mt-2" rows="2" placeholder="Commentaires..."></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <h6><i class="fas fa-business-time me-2"></i> Modèle économique</h6>
                                        <input type="range" class="form-range evaluation-slider" min="0" max="5" step="0.5" value="2.5" id="businessSlider">
                                        <div class="d-flex justify-content-between">
                                            <small>Peu clair</small>
                                            <small>Solide</small>
                                        </div>
                                        <textarea class="form-control mt-2" rows="2" placeholder="Commentaires..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <h6><i class="fas fa-comment me-2"></i> Évaluation globale</h6>
                                        <textarea class="form-control" rows="4" placeholder="Résumé de votre évaluation..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-white d-flex justify-content-between">
                        <button class="btn btn-outline-secondary">
                            <i class="fas fa-times me-1"></i> Annuler
                        </button>
                        <div>
                            <button class="btn btn-outline-primary me-2">
                                <i class="fas fa-save me-1"></i> Sauvegarder brouillon
                            </button>
                            <button class="btn btn-primary">
                                <i class="fas fa-check-circle me-1"></i> Soumettre l'évaluation
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <!-- Project Detail Modal -->
    <div class="modal fade" id="projectDetailModal" tabindex="-1" aria-labelledby="projectDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="projectDetailModalLabel">Détails du projet</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center mb-4">
                                <img src="../../../assets/images/projets/projet4.jpg" class="img-fluid rounded" alt="Projet EduTech">
                            </div>
                            <div class="card mb-4">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0"><i class="fas fa-info-circle me-2"></i> Informations de base</h6>
                                </div>
                                <div class="card-body">
                                    <p><strong>Porteur:</strong> Amina Diop</p>
                                    <p><strong>Date dépôt:</strong> 10/06/2023</p>
                                    <p><strong>Appel:</strong> Appel EdTech 2023</p>
                                    <p><strong>Statut:</strong> <span class="badge bg-info">En évaluation</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4>EduTech - Plateforme éducative IA</h4>
                            <div class="mb-4">
                                <h6><i class="fas fa-align-left me-2"></i> Description</h6>
                                <p>Solution innovante qui utilise l'intelligence artificielle pour adapter le contenu éducatif au rythme d'apprentissage de chaque élève. La plateforme propose des parcours personnalisés, des exercices adaptatifs et un suivi détaillé des progrès.</p>
                            </div>
                            <div class="mb-4">
                                <h6><i class="fas fa-bullseye me-2"></i> Objectifs</h6>
                                <ul>
                                    <li>Réduire les inégalités dans l'accès à une éducation de qualité</li>
                                    <li>Personnaliser l'apprentissage pour chaque profil d'élève</li>
                                    <li>Fournir aux enseignants des outils d'analyse avancés</li>
                                </ul>
                            </div>
                            <div class="mb-4">
                                <h6><i class="fas fa-trophy me-2"></i> Différenciation</h6>
                                <p>Contrairement aux solutions existantes, EduTech utilise un algorithme propriétaire qui analyse en temps réel les interactions de l'élève pour adapter non seulement le contenu mais aussi la méthode pédagogique.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header bg-light">
                                            <h6 class="mb-0"><i class="fas fa-chart-pie me-2"></i> Marché cible</h6>
                                        </div>
                                        <div class="card-body">
                                            <ul class="mb-0">
                                                <li>Écoles primaires et secondaires</li>
                                                <li>Centres de formation</li>
                                                <li>Éducation spécialisée</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header bg-light">
                                            <h6 class="mb-0"><i class="fas fa-money-bill-wave me-2"></i> Modèle économique</h6>
                                        </div>
                                        <div class="card-body">
                                            <ul class="mb-0">
                                                <li>Abonnement mensuel par élève</li>
                                                <li>Licences établissements</li>
                                                <li>Modules premium</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Voir le dossier complet</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Evaluation Guide Modal -->
    <div class="modal fade" id="evaluationGuideModal" tabindex="-1" aria-labelledby="evaluationGuideModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="evaluationGuideModalLabel">Guide d'évaluation des projets</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="accordion" id="evaluationGuideAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    <i class="fas fa-lightbulb me-2"></i> Innovation (0-5 points)
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#evaluationGuideAccordion">
                                <div class="accordion-body">
                                    <p><strong>Critères:</strong></p>
                                    <ul>
                                        <li><strong>5 pts:</strong> Innovation radicale, approche totalement nouvelle</li>
                                        <li><strong>4 pts:</strong> Amélioration significative d'une solution existante</li>
                                        <li><strong>3 pts:</strong> Innovation incrémentale avec valeur ajoutée</li>
                                        <li><strong>2 pts:</strong> Peu d'innovation, solution conventionnelle</li>
                                        <li><strong>1 pt:</strong> Aucune innovation perceptible</li>
                                    </ul>
                                    <p class="mb-0"><strong>Questions clés:</strong> Le projet apporte-t-il une réelle nouveauté ? Résout-il un problème de manière originale ?</p>
                                </div>
                            </div>
                        </div>
                        <!-- Plus de critères d'évaluation... -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Compris</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Batch Action Modal -->
    <div class="modal fade" id="batchActionModal" tabindex="-1" aria-labelledby="batchActionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="batchActionModalLabel">Actions groupées</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Action à appliquer</label>
                        <select class="form-select">
                            <option selected disabled>Choisir une action...</option>
                            <option>Accepter les projets sélectionnés</option>
                            <option>Refuser les projets sélectionnés</option>
                            <option>Mettre en attente</option>
                            <option>Assigner à un évaluateur</option>
                            <option>Exporter les données</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Commentaire (optionnel)</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="alert alert-warning">
                        <i class="fas fa-exclamation-triangle me-2"></i> Cette action s'appliquera à <strong>3 projets</strong> sélectionnés.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Confirmer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/incubateurs.js"></script>
    <script>
        $(document).ready(function() {
            // Initialisation DataTable
            $('#selectionTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
                },
                responsive: true
            });

            // Gestion des sliders d'évaluation
            $('.evaluation-slider').on('input', function() {
                const value = $(this).val();
                $(this).next().next().find('textarea').attr('placeholder', `Commentaires (note: ${value}/5)...`);
            });

            // Sélection/désélection globale
            $('#selectAll').change(function() {
                $('.row-checkbox').prop('checked', $(this).prop('checked'));
            });
        });
    </script>
@endsection
