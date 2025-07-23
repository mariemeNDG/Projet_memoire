@extends('index')
@section('title', 'Gestion des Rôles')
@section('content')
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-12">
                        <h2><i class="fas fa-user-tag me-2"></i>Gestion des Rôles</h2>
                        <p class="text-muted">Configurez les permissions pour chaque type de rôle utilisateur</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow-sm mb-4">
                            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0"><i class="fas fa-list me-2"></i>Rôles existants</h5>
                                <button class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#newRoleModal">
                                    <i class="fas fa-plus"></i> Nouveau
                                </button>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action active" data-role="admin">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Administrateur</h6>
                                            <span class="badge bg-primary rounded-pill">5</span>
                                        </div>
                                        <p class="mb-1 small text-muted">Accès complet à toutes les fonctionnalités</p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action" data-role="porteur">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Porteur de projet</h6>
                                            <span class="badge bg-primary rounded-pill">142</span>
                                        </div>
                                        <p class="mb-1 small text-muted">Gestion de projets et recherche de financement</p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action" data-role="mentor">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Mentor</h6>
                                            <span class="badge bg-primary rounded-pill">63</span>
                                        </div>
                                        <p class="mb-1 small text-muted">Accompagnement des porteurs de projet</p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action" data-role="incubateur">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Incubateur</h6>
                                            <span class="badge bg-primary rounded-pill">24</span>
                                        </div>
                                        <p class="mb-1 small text-muted">Gestion des programmes d'accompagnement</p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action" data-role="investisseur">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Investisseur</h6>
                                            <span class="badge bg-primary rounded-pill">38</span>
                                        </div>
                                        <p class="mb-1 small text-muted">Découverte et financement de projets</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i>Statistiques</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="rolesChart" height="200"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0"><i class="fas fa-cog me-2"></i>Permissions du rôle: <span id="currentRoleName">Administrateur</span></h5>
                                <div>
                                    <button class="btn btn-sm btn-outline-light me-2" id="duplicateRoleBtn">
                                        <i class="fas fa-copy me-1"></i>Dupliquer
                                    </button>
                                    <button class="btn btn-sm btn-outline-light" id="deleteRoleBtn" disabled>
                                        <i class="fas fa-trash-alt me-1"></i>Supprimer
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <form id="rolePermissionsForm">
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label for="roleName" class="form-label">Nom du rôle</label>
                                            <input type="text" class="form-control" id="roleName" value="Administrateur" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="roleKey" class="form-label">Clé technique</label>
                                            <input type="text" class="form-control" id="roleKey" value="admin" readonly>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="roleDescription" class="form-label">Description</label>
                                        <textarea class="form-control" id="roleDescription" rows="2">Accès complet à toutes les fonctionnalités d'administration de la plateforme.</textarea>
                                    </div>

                                    <h5 class="mb-3 mt-4 border-bottom pb-2">Permissions générales</h5>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-check form-switch mb-3">
                                                <input class="form-check-input" type="checkbox" id="canEditProfile" checked disabled>
                                                <label class="form-check-label" for="canEditProfile">Modifier son profil</label>
                                            </div>
                                            <div class="form-check form-switch mb-3">
                                                <input class="form-check-input" type="checkbox" id="canInviteUsers" checked>
                                                <label class="form-check-label" for="canInviteUsers">Inviter d'autres utilisateurs</label>
                                            </div>
                                            <div class="form-check form-switch mb-3">
                                                <input class="form-check-input" type="checkbox" id="canAccessMessaging" checked>
                                                <label class="form-check-label" for="canAccessMessaging">Accès à la messagerie</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-switch mb-3">
                                                <input class="form-check-input" type="checkbox" id="canViewAnalytics" checked>
                                                <label class="form-check-label" for="canViewAnalytics">Voir les statistiques</label>
                                            </div>
                                            <div class="form-check form-switch mb-3">
                                                <input class="form-check-input" type="checkbox" id="canExportData" checked>
                                                <label class="form-check-label" for="canExportData">Exporter des données</label>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="mb-3 mt-4 border-bottom pb-2">Permissions spécifiques</h5>
                                    <div class="accordion mb-4" id="permissionsAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#projectsPermissions" aria-expanded="true">
                                                    <i class="fas fa-project-diagram me-2"></i>Projets
                                                </button>
                                            </h2>
                                            <div id="projectsPermissions" class="accordion-collapse collapse show" data-bs-parent="#permissionsAccordion">
                                                <div class="accordion-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canCreateProjects" checked>
                                                                <label class="form-check-label" for="canCreateProjects">Créer des projets</label>
                                                            </div>
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canEditProjects" checked>
                                                                <label class="form-check-label" for="canEditProjects">Modifier des projets</label>
                                                            </div>
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canViewAllProjects" checked>
                                                                <label class="form-check-label" for="canViewAllProjects">Voir tous les projets</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canDeleteProjects" checked>
                                                                <label class="form-check-label" for="canDeleteProjects">Supprimer des projets</label>
                                                            </div>
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canValidateProjects" checked>
                                                                <label class="form-check-label" for="canValidateProjects">Valider des projets</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#usersPermissions">
                                                    <i class="fas fa-users me-2"></i>Utilisateurs
                                                </button>
                                            </h2>
                                            <div id="usersPermissions" class="accordion-collapse collapse" data-bs-parent="#permissionsAccordion">
                                                <div class="accordion-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canViewAllUsers" checked>
                                                                <label class="form-check-label" for="canViewAllUsers">Voir tous les utilisateurs</label>
                                                            </div>
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canEditUsers" checked>
                                                                <label class="form-check-label" for="canEditUsers">Modifier les utilisateurs</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canDeleteUsers" checked>
                                                                <label class="form-check-label" for="canDeleteUsers">Supprimer des utilisateurs</label>
                                                            </div>
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canAssignRoles" checked>
                                                                <label class="form-check-label" for="canAssignRoles">Attribuer des rôles</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#financePermissions">
                                                    <i class="fas fa-euro-sign me-2"></i>Financement
                                                </button>
                                            </h2>
                                            <div id="financePermissions" class="accordion-collapse collapse" data-bs-parent="#permissionsAccordion">
                                                <div class="accordion-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canViewInvestments" checked>
                                                                <label class="form-check-label" for="canViewInvestments">Voir les investissements</label>
                                                            </div>
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canCreateFundingRounds" checked>
                                                                <label class="form-check-label" for="canCreateFundingRounds">Créer des tours de table</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canManageTransactions" checked>
                                                                <label class="form-check-label" for="canManageTransactions">Gérer les transactions</label>
                                                            </div>
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canValidateInvestments" checked>
                                                                <label class="form-check-label" for="canValidateInvestments">Valider les investissements</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#adminPermissions">
                                                    <i class="fas fa-shield-alt me-2"></i>Administration
                                                </button>
                                            </h2>
                                            <div id="adminPermissions" class="accordion-collapse collapse" data-bs-parent="#permissionsAccordion">
                                                <div class="accordion-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canAccessAdminPanel" checked>
                                                                <label class="form-check-label" for="canAccessAdminPanel">Accéder au panel admin</label>
                                                            </div>
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canEditSettings" checked>
                                                                <label class="form-check-label" for="canEditSettings">Modifier les paramètres</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canManageRoles" checked>
                                                                <label class="form-check-label" for="canManageRoles">Gérer les rôles</label>
                                                            </div>
                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" type="checkbox" id="canViewSystemLogs" checked>
                                                                <label class="form-check-label" for="canViewSystemLogs">Voir les logs système</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="button" class="btn btn-outline-secondary me-3" id="resetPermissionsBtn">
                                            <i class="fas fa-undo me-2"></i>Réinitialiser
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save me-2"></i>Enregistrer les modifications
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Role Modal -->
    <div class="modal fade" id="newRoleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"><i class="fas fa-plus-circle me-2"></i>Créer un nouveau rôle</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="newRoleForm">
                        <div class="mb-3">
                            <label for="newRoleName" class="form-label">Nom du rôle</label>
                            <input type="text" class="form-control" id="newRoleName" placeholder="Ex: Modérateur" required>
                        </div>
                        <div class="mb-3">
                            <label for="newRoleKey" class="form-label">Clé technique</label>
                            <input type="text" class="form-control" id="newRoleKey" placeholder="Ex: moderator" required>
                            <div class="form-text">Doit être unique et sans espaces (utilisé en interne)</div>
                        </div>
                        <div class="mb-3">
                            <label for="newRoleDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="newRoleDescription" rows="3" placeholder="Décrivez l'objectif de ce rôle"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Basé sur</label>
                            <select class="form-select" id="newRoleBase">
                                <option value="">-- Aucun (partir de zéro) --</option>
                                <option value="admin">Administrateur</option>
                                <option value="porteur">Porteur de projet</option>
                                <option value="mentor">Mentor</option>
                                <option value="incubateur">Incubateur</option>
                                <option value="investisseur">Investisseur</option>
                            </select>
                            <div class="form-text">Optionnel: copier les permissions d'un rôle existant</div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary" id="confirmNewRoleBtn">Créer le rôle</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Role Modal -->
    <div class="modal fade" id="deleteRoleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title"><i class="fas fa-exclamation-triangle me-2"></i>Confirmer la suppression</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir supprimer le rôle "<span id="roleToDeleteName"></span>" ?</p>
                    <div class="alert alert-warning">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        <strong>Attention :</strong> Cette action affectera <span id="usersWithRoleCount">0</span> utilisateur(s). Vous devez leur attribuer un nouveau rôle.
                    </div>
                    <div class="mb-3">
                        <label for="reassignRoleSelect" class="form-label">Attribuer aux utilisateurs le rôle :</label>
                        <select class="form-select" id="reassignRoleSelect">
                            <option value="" selected disabled>Choisissez un rôle...</option>
                            <option value="admin">Administrateur</option>
                            <option value="porteur">Porteur de projet</option>
                            <option value="mentor">Mentor</option>
                            <option value="incubateur">Incubateur</option>
                            <option value="investisseur">Investisseur</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteRoleBtn" disabled>Confirmer la suppression</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/admin.js"></script>
@endsection
