@extends('index')
@section('title', 'Validation des Projets')
@section('content')
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-12">
                        <h2><i class="fas fa-project-diagram me-2"></i>Validation des projets</h2>
                        <p class="text-muted">Validez ou rejetez les projets soumis par les porteurs</p>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-primary active" id="pendingTab">En attente (3)</button>
                                        <button type="button" class="btn btn-outline-primary" id="approvedTab">Approuvés (42)</button>
                                        <button type="button" class="btn btn-outline-primary" id="rejectedTab">Rejetés (5)</button>
                                    </div>
                                    <div class="input-group" style="width: 300px;">
                                        <input type="text" class="form-control" placeholder="Rechercher un projet...">
                                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="pendingProjects">
                    <div class="col-12">
                        <div class="card shadow-sm mb-4">
                            <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Projet: Plateforme de livraison durable</h5>
                                <div>
                                    <span class="badge bg-light text-dark me-2"><i class="fas fa-user me-1"></i>Jean Dupont</span>
                                    <span class="badge bg-light text-dark"><i class="fas fa-clock me-1"></i>2 jours</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h6>Description</h6>
                                        <p>Une plateforme mettant en relation des livreurs à vélo avec des commerçants locaux pour des livraisons écologiques en ville. Solution clé en main avec suivi en temps réel et optimisation des trajets.</p>

                                        <h6 class="mt-4">Détails</h6>
                                        <ul class="list-group list-group-flush mb-3">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span><i class="fas fa-tag me-2"></i>Secteur</span>
                                                <span class="badge bg-primary">Logistique</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span><i class="fas fa-map-marker-alt me-2"></i>Localisation</span>
                                                <span>Paris, France</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span><i class="fas fa-calendar-alt me-2"></i>Phase</span>
                                                <span class="badge bg-info">Prototype</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-grid gap-2 mb-3">
                                            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#approveModal1">
                                                <i class="fas fa-check me-2"></i>Approuver
                                            </button>
                                            <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#rejectModal1">
                                                <i class="fas fa-times me-2"></i>Rejeter
                                            </button>
                                            <button class="btn btn-outline-primary" type="button">
                                                <i class="fas fa-eye me-2"></i>Voir en détail
                                            </button>
                                        </div>
                                        <div class="card">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0">Documents</h6>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <i class="fas fa-file-pdf me-2 text-danger"></i>Business_Plan.pdf
                                                    <a href="#" class="float-end"><i class="fas fa-download"></i></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="fas fa-file-image me-2 text-primary"></i>Mockups.png
                                                    <a href="#" class="float-end"><i class="fas fa-download"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm mb-4">
                            <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Projet: Application de gestion de budget familial</h5>
                                <div>
                                    <span class="badge bg-light text-dark me-2"><i class="fas fa-user me-1"></i>Marie Lambert</span>
                                    <span class="badge bg-light text-dark"><i class="fas fa-clock me-1"></i>1 jour</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h6>Description</h6>
                                        <p>Application mobile intuitive pour suivre les dépenses familiales avec des fonctionnalités de catégorisation automatique, alertes de budget et rapports personnalisables. Interface conviviale pour tous les membres de la famille.</p>

                                        <h6 class="mt-4">Détails</h6>
                                        <ul class="list-group list-group-flush mb-3">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span><i class="fas fa-tag me-2"></i>Secteur</span>
                                                <span class="badge bg-primary">FinTech</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span><i class="fas fa-map-marker-alt me-2"></i>Localisation</span>
                                                <span>Lyon, France</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span><i class="fas fa-calendar-alt me-2"></i>Phase</span>
                                                <span class="badge bg-secondary">Idée</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-grid gap-2 mb-3">
                                            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#approveModal2">
                                                <i class="fas fa-check me-2"></i>Approuver
                                            </button>
                                            <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#rejectModal2">
                                                <i class="fas fa-times me-2"></i>Rejeter
                                            </button>
                                            <button class="btn btn-outline-primary" type="button">
                                                <i class="fas fa-eye me-2"></i>Voir en détail
                                            </button>
                                        </div>
                                        <div class="card">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0">Documents</h6>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <i class="fas fa-file-word me-2 text-info"></i>Concept.docx
                                                    <a href="#" class="float-end"><i class="fas fa-download"></i></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="fas fa-file-powerpoint me-2 text-danger"></i>Presentation.pptx
                                                    <a href="#" class="float-end"><i class="fas fa-download"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-none" id="approvedProjects">
                    <div class="col-12">
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>42 projets approuvés. Utilisez les filtres pour affiner votre recherche.
                        </div>
                    </div>
                </div>

                <div class="row d-none" id="rejectedProjects">
                    <div class="col-12">
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>5 projets rejetés. Utilisez les filtres pour affiner votre recherche.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Approve Modal 1 -->
    <div class="modal fade" id="approveModal1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Confirmer l'approbation</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir approuver ce projet ? Il sera visible par tous les utilisateurs de la plateforme.</p>
                    <div class="mb-3">
                        <label for="approvalComment1" class="form-label">Commentaire (optionnel)</label>
                        <textarea class="form-control" id="approvalComment1" rows="3" placeholder="Félicitations pour..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-success">Confirmer l'approbation</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Reject Modal 1 -->
    <div class="modal fade" id="rejectModal1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Confirmer le rejet</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir rejeter ce projet ? Le porteur sera notifié et pourra soumettre une version révisée.</p>
                    <div class="mb-3">
                        <label for="rejectionReason1" class="form-label">Raison du rejet</label>
                        <select class="form-select" id="rejectionReason1">
                            <option value="" selected disabled>Choisissez une raison...</option>
                            <option value="incomplete">Informations incomplètes</option>
                            <option value="non-compliant">Non conforme aux CGU</option>
                            <option value="duplicate">Projet dupliqué</option>
                            <option value="other">Autre raison</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="rejectionComment1" class="form-label">Commentaire (recommandé)</label>
                        <textarea class="form-control" id="rejectionComment1" rows="3" placeholder="Veuillez fournir plus d'informations sur..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger">Confirmer le rejet</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Approve Modal 2 -->
    <div class="modal fade" id="approveModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Confirmer l'approbation</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir approuver ce projet ? Il sera visible par tous les utilisateurs de la plateforme.</p>
                    <div class="mb-3">
                        <label for="approvalComment2" class="form-label">Commentaire (optionnel)</label>
                        <textarea class="form-control" id="approvalComment2" rows="3" placeholder="Félicitations pour..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-success">Confirmer l'approbation</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Reject Modal 2 -->
    <div class="modal fade" id="rejectModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Confirmer le rejet</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir rejeter ce projet ? Le porteur sera notifié et pourra soumettre une version révisée.</p>
                    <div class="mb-3">
                        <label for="rejectionReason2" class="form-label">Raison du rejet</label>
                        <select class="form-select" id="rejectionReason2">
                            <option value="" selected disabled>Choisissez une raison...</option>
                            <option value="incomplete">Informations incomplètes</option>
                            <option value="non-compliant">Non conforme aux CGU</option>
                            <option value="duplicate">Projet dupliqué</option>
                            <option value="other">Autre raison</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="rejectionComment2" class="form-label">Commentaire (recommandé)</label>
                        <textarea class="form-control" id="rejectionComment2" rows="3" placeholder="Veuillez fournir plus d'informations sur..."></textarea>
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
            document.getElementById('pendingTab').addEventListener('click', function() {
                document.getElementById('pendingProjects').classList.remove('d-none');
                document.getElementById('approvedProjects').classList.add('d-none');
                document.getElementById('rejectedProjects').classList.add('d-none');
                this.classList.add('active');
                document.getElementById('approvedTab').classList.remove('active');
                document.getElementById('rejectedTab').classList.remove('active');
            });

            document.getElementById('approvedTab').addEventListener('click', function() {
                document.getElementById('pendingProjects').classList.add('d-none');
                document.getElementById('approvedProjects').classList.remove('d-none');
                document.getElementById('rejectedProjects').classList.add('d-none');
                this.classList.add('active');
                document.getElementById('pendingTab').classList.remove('active');
                document.getElementById('rejectedTab').classList.remove('active');
            });

            document.getElementById('rejectedTab').addEventListener('click', function() {
                document.getElementById('pendingProjects').classList.add('d-none');
                document.getElementById('approvedProjects').classList.add('d-none');
                document.getElementById('rejectedProjects').classList.remove('d-none');
                this.classList.add('active');
                document.getElementById('pendingTab').classList.remove('active');
                document.getElementById('approvedTab').classList.remove('active');
            });

            // Approve/reject actions
            document.querySelectorAll('.btn-success').forEach(btn => {
                btn.addEventListener('click', function() {
                    // In a real app, this would send an API request
                    console.log('Project approved');
                });
            });

            document.querySelectorAll('.btn-danger').forEach(btn => {
                btn.addEventListener('click', function() {
                    // In a real app, this would send an API request
                    console.log('Project rejected');
                });
            });
        });
    </script>
@endsection
