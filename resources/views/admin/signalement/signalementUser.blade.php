@extends('index')
@section('title', 'Signalement Utilisateur')
@section('content')
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-12">
                        <h2><i class="fas fa-flag me-2"></i>Signalements</h2>
                        <p class="text-muted">Gérez les signalements des utilisateurs</p>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-primary active" id="unresolvedTab">Non résolus (4)</button>
                                        <button type="button" class="btn btn-outline-primary" id="resolvedTab">Résolus (12)</button>
                                        <button type="button" class="btn btn-outline-primary" id="allTab">Tous</button>
                                    </div>
                                    <div class="input-group" style="width: 300px;">
                                        <input type="text" class="form-control" placeholder="Rechercher un signalement...">
                                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="unresolvedReports">
                    <div class="col-12">
                        <div class="card shadow-sm mb-4">
                            <div class="card-header bg-danger text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Signalement #REP-2023-045</h5>
                                <span class="badge bg-light text-dark"><i class="fas fa-clock me-1"></i>Urgent</span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="d-flex align-items-start mb-3">
                                            <img src="../../../assets/images/utilisateurs/user1.jpg" alt="User" class="rounded-circle me-3" width="50">
                                            <div>
                                                <h6 class="mb-1">Marc Dubois</h6>
                                                <p class="text-muted small mb-1">Signalé le 15/06/2023 à 14:32</p>
                                                <span class="badge bg-warning text-dark">Projet</span>
                                            </div>
                                        </div>

                                        <h6>Type de signalement</h6>
                                        <p class="mb-3">Contenu inapproprié</p>

                                        <h6>Message</h6>
                                        <div class="alert alert-light">
                                            <p class="mb-0">"Le projet 'Investissement Crypto' contient des informations trompeuses et promet des rendements garantis, ce qui ressemble à une arnaque. Plusieurs utilisateurs ont déjà investi et n'ont pas vu les résultats promis."</p>
                                        </div>

                                        <h6 class="mt-4">Élément signalé</h6>
                                        <div class="card bg-light">
                                            <div class="card-body">
                                                <h6>Projet: Investissement Crypto</h6>
                                                <p class="mb-2">"Gagnez 5% par jour sur vos investissements en crypto-monnaies avec notre algorithme breveté. Rendements garantis!"</p>
                                                <a href="#" class="btn btn-sm btn-outline-primary">Voir le projet</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0">Actions</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-grid gap-2">
                                                    <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#resolveModal1">
                                                        <i class="fas fa-check-circle me-2"></i>Marquer comme résolu
                                                    </button>
                                                    <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#rejectModal1">
                                                        <i class="fas fa-times-circle me-2"></i>Rejeter le signalement
                                                    </button>
                                                    <button class="btn btn-outline-primary" type="button">
                                                        <i class="fas fa-user-shield me-2"></i>Suspendre le compte
                                                    </button>
                                                    <button class="btn btn-outline-secondary" type="button">
                                                        <i class="fas fa-ban me-2"></i>Masquer le contenu
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0">Historique</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="timeline">
                                                    <div class="timeline-item">
                                                        <div class="timeline-point"></div>
                                                        <div class="timeline-content">
                                                            <p class="mb-1">Signalement créé</p>
                                                            <small class="text-muted">15/06/2023 14:32</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm mb-4">
                            <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Signalement #REP-2023-044</h5>
                                <span class="badge bg-light text-dark"><i class="fas fa-clock me-1"></i>En attente</span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="d-flex align-items-start mb-3">
                                            <img src="../../../assets/images/utilisateurs/user2.jpg" alt="User" class="rounded-circle me-3" width="50">
                                            <div>
                                                <h6 class="mb-1">Sophie Martin</h6>
                                                <p class="text-muted small mb-1">Signalé le 14/06/2023 à 09:15</p>
                                                <span class="badge bg-info">Utilisateur</span>
                                            </div>
                                        </div>

                                        <h6>Type de signalement</h6>
                                        <p class="mb-3">Comportement inapproprié</p>

                                        <h6>Message</h6>
                                        <div class="alert alert-light">
                                            <p class="mb-0">"L'utilisateur TechInvestor m'a envoyé des messages répétés avec des propositions commerciales non sollicitées et a partagé mes coordonnées sans mon consentement. Il insiste pour que j'investisse dans son projet malgré mes refus répétés."</p>
                                        </div>

                                        <h6 class="mt-4">Élément signalé</h6>
                                        <div class="card bg-light">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../../assets/images/utilisateurs/user-reported.jpg" alt="User" class="rounded-circle me-3" width="50">
                                                    <div>
                                                        <h6 class="mb-0">TechInvestor</h6>
                                                        <p class="mb-0 text-muted small">Investisseur - Membre depuis 03/2023</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-sm btn-outline-primary mt-2">Voir le profil</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0">Actions</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-grid gap-2">
                                                    <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#resolveModal2">
                                                        <i class="fas fa-check-circle me-2"></i>Marquer comme résolu
                                                    </button>
                                                    <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#rejectModal2">
                                                        <i class="fas fa-times-circle me-2"></i>Rejeter le signalement
                                                    </button>
                                                    <button class="btn btn-outline-primary" type="button">
                                                        <i class="fas fa-user-shield me-2"></i>Suspendre le compte
                                                    </button>
                                                    <button class="btn btn-outline-secondary" type="button">
                                                        <i class="fas fa-comment-slash me-2"></i>Restreindre les messages
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0">Historique</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="timeline">
                                                    <div class="timeline-item">
                                                        <div class="timeline-point"></div>
                                                        <div class="timeline-content">
                                                            <p class="mb-1">Signalement créé</p>
                                                            <small class="text-muted">14/06/2023 09:15</small>
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
                </div>

                <div class="row d-none" id="resolvedReports">
                    <div class="col-12">
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>12 signalements résolus. Utilisez les filtres pour affiner votre recherche.
                        </div>
                    </div>
                </div>

                <div class="row d-none" id="allReports">
                    <div class="col-12">
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>16 signalements au total. Utilisez les filtres pour affiner votre recherche.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Resolve Modal 1 -->
    <div class="modal fade" id="resolveModal1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Résoudre le signalement</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Confirmez que ce signalement a été traité et peut être marqué comme résolu.</p>
                    <div class="mb-3">
                        <label for="resolutionAction1" class="form-label">Action prise</label>
                        <select class="form-select" id="resolutionAction1">
                            <option value="" selected disabled>Choisissez une action...</option>
                            <option value="content_removed">Contenu supprimé</option>
                            <option value="user_warned">Utilisateur averti</option>
                            <option value="user_suspended">Compte suspendu</option>
                            <option value="no_violation">Aucune violation</option>
                            <option value="other">Autre action</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="resolutionComment1" class="form-label">Commentaire</label>
                        <textarea class="form-control" id="resolutionComment1" rows="3" placeholder="Détails de l'action prise..."></textarea>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="notifyReporter1" checked>
                        <label class="form-check-label" for="notifyReporter1">Notifier l'auteur du signalement</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-success">Confirmer la résolution</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Reject Modal 1 -->
    <div class="modal fade" id="rejectModal1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Rejeter le signalement</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Confirmez que ce signalement est infondé et doit être rejeté.</p>
                    <div class="mb-3">
                        <label for="rejectionReason1" class="form-label">Raison du rejet</label>
                        <select class="form-select" id="rejectionReason1">
                            <option value="" selected disabled>Choisissez une raison...</option>
                            <option value="no_violation">Aucune violation détectée</option>
                            <option value="false_report">Signalement erroné</option>
                            <option value="other">Autre raison</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="rejectionComment1" class="form-label">Commentaire</label>
                        <textarea class="form-control" id="rejectionComment1" rows="3" placeholder="Explication du rejet..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger">Confirmer le rejet</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Resolve Modal 2 -->
    <div class="modal fade" id="resolveModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Résoudre le signalement</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Confirmez que ce signalement a été traité et peut être marqué comme résolu.</p>
                    <div class="mb-3">
                        <label for="resolutionAction2" class="form-label">Action prise</label>
                        <select class="form-select" id="resolutionAction2">
                            <option value="" selected disabled>Choisissez une action...</option>
                            <option value="content_removed">Contenu supprimé</option>
                            <option value="user_warned">Utilisateur averti</option>
                            <option value="user_suspended">Compte suspendu</option>
                            <option value="no_violation">Aucune violation</option>
                            <option value="other">Autre action</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="resolutionComment2" class="form-label">Commentaire</label>
                        <textarea class="form-control" id="resolutionComment2" rows="3" placeholder="Détails de l'action prise..."></textarea>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="notifyReporter2" checked>
                        <label class="form-check-label" for="notifyReporter2">Notifier l'auteur du signalement</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-success">Confirmer la résolution</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Reject Modal 2 -->
    <div class="modal fade" id="rejectModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Rejeter le signalement</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Confirmez que ce signalement est infondé et doit être rejeté.</p>
                    <div class="mb-3">
                        <label for="rejectionReason2" class="form-label">Raison du rejet</label>
                        <select class="form-select" id="rejectionReason2">
                            <option value="" selected disabled>Choisissez une raison...</option>
                            <option value="no_violation">Aucune violation détectée</option>
                            <option value="false_report">Signalement erroné</option>
                            <option value="other">Autre raison</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="rejectionComment2" class="form-label">Commentaire</label>
                        <textarea class="form-control" id="rejectionComment2" rows="3" placeholder="Explication du rejet..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger">Confirmer le rejet</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/admin.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab switching
            document.getElementById('unresolvedTab').addEventListener('click', function() {
                document.getElementById('unresolvedReports').classList.remove('d-none');
                document.getElementById('resolvedReports').classList.add('d-none');
                document.getElementById('allReports').classList.add('d-none');
                this.classList.add('active');
                document.getElementById('resolvedTab').classList.remove('active');
                document.getElementById('allTab').classList.remove('active');
            });

            document.getElementById('resolvedTab').addEventListener('click', function() {
                document.getElementById('unresolvedReports').classList.add('d-none');
                document.getElementById('resolvedReports').classList.remove('d-none');
                document.getElementById('allReports').classList.add('d-none');
                this.classList.add('active');
                document.getElementById('unresolvedTab').classList.remove('active');
                document.getElementById('allTab').classList.remove('active');
            });

            document.getElementById('allTab').addEventListener('click', function() {
                document.getElementById('unresolvedReports').classList.add('d-none');
                document.getElementById('resolvedReports').classList.add('d-none');
                document.getElementById('allReports').classList.remove('d-none');
                this.classList.add('active');
                document.getElementById('unresolvedTab').classList.remove('active');
                document.getElementById('resolvedTab').classList.remove('active');
            });

            // Report actions
            document.querySelectorAll('.btn-success').forEach(btn => {
                btn.addEventListener('click', function() {
                    // In a real app, this would send an API request
                    console.log('Report resolved');
                });
            });

            document.querySelectorAll('.btn-danger').forEach(btn => {
                btn.addEventListener('click', function() {
                    // In a real app, this would send an API request
                    console.log('Report rejected');
                });
            });
        });
    </script>
@endsection
