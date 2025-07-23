@extends('index')
@section('title', 'Gestion des Utilisateurs')
@section('content')
            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-users me-2"></i>Gestion des utilisateurs</h1>
                    <div>
                        <button class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#filtersModal">
                            <i class="fas fa-filter me-1"></i> Filtres
                        </button>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                            <i class="fas fa-user-plus me-1"></i> Ajouter
                        </button>
                    </div>
                </div>

                <!-- Users Table -->
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Liste des utilisateurs</h5>
                        <div class="d-flex">
                            <div class="input-group input-group-sm me-2" style="width: 200px;">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Rechercher...">
                            </div>
                            <button class="btn btn-light btn-sm" id="exportUsersBtn">
                                <i class="fas fa-download me-1"></i> Exporter
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="usersTable" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%">ID</th>
                                        <th width="20%">Utilisateur</th>
                                        <th width="15%">Type</th>
                                        <th width="20%">Email</th>
                                        <th width="15%">Inscription</th>
                                        <th width="15%">Statut</th>
                                        <th width="10%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#1254</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../../assets/images/utilisateurs/user1.jpg" class="rounded-circle me-2" width="40">
                                                <div>
                                                    <strong>Jean Dupont</strong><br>
                                                    <small class="text-muted">Dakar, Sénégal</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info">Porteur</span></td>
                                        <td>jean.dupont@example.com</td>
                                        <td>15/03/2023</td>
                                        <td><span class="badge bg-success">Actif</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-outline-primary" title="Voir">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary" title="Éditer">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Plus d'utilisateurs... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Bulk Actions -->
                <div class="card mt-3">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Actions groupées</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="checkbox" id="selectAllUsers">
                                <label class="form-check-label" for="selectAllUsers">
                                    Sélectionner tout
                                </label>
                            </div>
                            <select class="form-select form-select-sm me-2" style="width: 200px;">
                                <option selected disabled>Action groupée...</option>
                                <option>Activer les comptes</option>
                                <option>Désactiver les comptes</option>
                                <option>Envoyer un email</option>
                                <option>Exporter les sélectionnés</option>
                                <option>Supprimer</option>
                            </select>
                            <button class="btn btn-sm btn-primary">
                                Appliquer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <!-- Add User Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addUserModalLabel"><i class="fas fa-user-plus me-2"></i>Ajouter un utilisateur</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addUserForm">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Prénom *</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nom *</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Email *</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Type de compte *</label>
                                <select class="form-select" required>
                                    <option value="" disabled selected>Choisir un type</option>
                                    <option>Porteur de projet</option>
                                    <option>Mentor</option>
                                    <option>Incubateur</option>
                                    <option>Investisseur</option>
                                    <option>Administrateur</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Mot de passe *</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" required>
                                    <button class="btn btn-outline-secondary" type="button" id="generatePassword">
                                        <i class="fas fa-random"></i>
                                    </button>
                                </div>
                                <div class="password-strength mt-2">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-danger" style="width: 25%"></div>
                                    </div>
                                    <small class="text-muted">Faible</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Confirmation *</label>
                                <input type="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Photo de profil</label>
                            <input type="file" class="form-control" accept="image/*">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="sendWelcomeEmail" checked>
                            <label class="form-check-label" for="sendWelcomeEmail">
                                Envoyer un email de bienvenue avec les instructions de connexion
                            </label>
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

    <!-- User Detail Modal -->
    <div class="modal fade" id="userDetailModal" tabindex="-1" aria-labelledby="userDetailModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="userDetailModalLabel"><i class="fas fa-user me-2"></i>Profil utilisateur</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center mb-4">
                                <img src="../../../assets/images/utilisateurs/user1.jpg" class="rounded-circle img-thumbnail" width="150" alt="Photo profil">
                                <h4 class="mt-3">Jean Dupont</h4>
                                <span class="badge bg-info">Porteur de projet</span>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0"><i class="fas fa-info-circle me-2"></i> Informations</h6>
                                </div>
                                <div class="card-body">
                                    <p><strong>Email:</strong> jean.dupont@example.com</p>
                                    <p><strong>Téléphone:</strong> +221 77 123 45 67</p>
                                    <p><strong>Inscrit le:</strong> 15/03/2023</p>
                                    <p><strong>Dernière connexion:</strong> Aujourd'hui, 10:45</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="nav nav-tabs" id="userTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button">Profil</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity" type="button">Activité</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button">Sécurité</button>
                                </li>
                            </ul>
                            <div class="tab-content p-3 border border-top-0" id="userTabsContent">
                                <div class="tab-pane fade show active" id="profile" role="tabpanel">
                                    <h5>Projets (3)</h5>
                                    <div class="list-group mb-4">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">EcoTech</h6>
                                                <small class="text-muted">En cours</small>
                                            </div>
                                            <p class="mb-1">Solution de recyclage intelligent</p>
                                        </a>
                                        <!-- Plus de projets... -->
                                    </div>
                                    <h5>Informations complémentaires</h5>
                                    <p><strong>Compétences:</strong> Développement, Design, Marketing</p>
                                    <p><strong>Bio:</strong> Entrepreneur passionné par les technologies vertes...</p>
                                </div>
                                <div class="tab-pane fade" id="activity" role="tabpanel">
                                    <div class="timeline">
                                        <div class="timeline-item">
                                            <div class="timeline-badge bg-primary"></div>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between">
                                                    <strong>Connexion</strong>
                                                    <small class="text-muted">Aujourd'hui, 10:45</small>
                                                </div>
                                                <p>Adresse IP: 197.156.78.23</p>
                                            </div>
                                        </div>
                                        <!-- Plus d'activités... -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="security" role="tabpanel">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-triangle me-2"></i> Dernier changement de mot de passe il y a 45 jours
                                    </div>
                                    <button class="btn btn-outline-primary me-2">
                                        <i class="fas fa-sync-alt me-1"></i> Réinitialiser le mot de passe
                                    </button>
                                    <button class="btn btn-outline-danger">
                                        <i class="fas fa-user-lock me-1"></i> Désactiver le compte
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Enregistrer les modifications</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/admin.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize DataTable
            $('#usersTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
                },
                responsive: true,
                order: [[4, 'desc']],
                pageLength: 25
            });

            // Generate random password
            $('#generatePassword').click(function() {
                const randomPass = Math.random().toString(36).slice(-8);
                $(this).closest('.input-group').find('input[type="password"]').val(randomPass);
                $('.password-strength .progress-bar')
                    .removeClass('bg-danger bg-warning bg-success')
                    .addClass('bg-success')
                    .css('width', '100%');
                $('.password-strength small').text('Fort').removeClass('text-muted').addClass('text-success');
            });

            // Select all users
            $('#selectAllUsers').change(function() {
                $('.user-checkbox').prop('checked', $(this).prop('checked'));
            });
        });
    </script>
@endsection
