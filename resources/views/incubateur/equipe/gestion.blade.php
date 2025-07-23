@extends('index')
@section('title', 'Equipe de gestion')
@section('content')
    <div class="pagetitle">

            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-users me-2"></i>Gestion de l'équipe</h1>
                    <div>
                        <button class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#teamStatsModal">
                            <i class="fas fa-chart-pie me-1"></i> Statistiques
                        </button>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMemberModal">
                            <i class="fas fa-user-plus me-1"></i> Ajouter un membre
                        </button>
                    </div>
                </div>

                <!-- Team Members -->
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Membres de l'équipe</h5>
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Rechercher un membre...">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="teamTable" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%"></th>
                                        <th width="25%">Membre</th>
                                        <th width="20%">Rôle</th>
                                        <th width="20%">Projets assignés</th>
                                        <th width="15%">Statut</th>
                                        <th width="15%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="../../../assets/images/utilisateurs/user1.jpg" class="rounded-circle" width="40">
                                        </td>
                                        <td>
                                            <strong>Paul Ndiaye</strong><br>
                                            <small class="text-muted">paul.ndiaye@incubateur.com</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">Responsable incubation</span>
                                        </td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" style="width: 75%"></div>
                                            </div>
                                            <small>6/8 projets</small>
                                        </td>
                                        <td><span class="badge bg-success">Actif</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-outline-primary" title="Voir profil">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary" title="Éditer">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Plus de membres d'équipe... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Team Structure -->
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="fas fa-sitemap me-2"></i> Structure de l'équipe</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6><i class="fas fa-project-diagram me-2"></i> Par département</h6>
                                <canvas id="departmentChart" height="250"></canvas>
                            </div>
                            <div class="col-md-6">
                                <h6><i class="fas fa-user-tag me-2"></i> Par rôle</h6>
                                <canvas id="rolesChart" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="fas fa-history me-2"></i> Activité récente</h5>
                    </div>
                    <div class="card-body">
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-badge bg-success"></div>
                                <div class="timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <strong>Paul Ndiaye</strong>
                                        <small class="text-muted">Aujourd'hui, 10:45</small>
                                    </div>
                                    <p>A affecté le projet "EduTech" à Amina Diop</p>
                                </div>
                            </div>
                            <!-- Plus d'activités... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <!-- Add Team Member Modal -->
    <div class="modal fade" id="addMemberModal" tabindex="-1" aria-labelledby="addMemberModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addMemberModalLabel"><i class="fas fa-user-plus me-2"></i>Ajouter un membre</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addMemberForm">
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
                                <label class="form-label">Téléphone</label>
                                <input type="tel" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Rôle *</label>
                                <select class="form-select" required>
                                    <option value="" disabled selected>Choisir un rôle</option>
                                    <option>Responsable incubation</option>
                                    <option>Mentor principal</option>
                                    <option>Chargé de projet</option>
                                    <option>Expert technique</option>
                                    <option>Administrateur</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Département *</label>
                                <select class="form-select" required>
                                    <option value="" disabled selected>Choisir un département</option>
                                    <option>Incubation</option>
                                    <option>Mentorat</option>
                                    <option>Finance</option>
                                    <option>Marketing</option>
                                    <option>Technologie</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Date d'entrée *</label>
                                <input type="date" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Statut *</label>
                                <select class="form-select" required>
                                    <option selected>Actif</option>
                                    <option>En congé</option>
                                    <option>Inactif</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Photo</label>
                            <input type="file" class="form-control" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Compétences</label>
                            <select class="form-select" multiple>
                                <option>Gestion de projet</option>
                                <option>Développement</option>
                                <option>Design</option>
                                <option>Marketing</option>
                                <option>Finance</option>
                            </select>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="sendWelcomeEmail">
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

    <!-- Team Stats Modal -->
    <div class="modal fade" id="teamStatsModal" tabindex="-1" aria-labelledby="teamStatsModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="teamStatsModalLabel"><i class="fas fa-chart-pie me-2"></i>Statistiques de l'équipe</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="card stat-card bg-primary text-white">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="text-uppercase">Membres</h6>
                                            <h2 class="mb-0">24</h2>
                                        </div>
                                        <i class="fas fa-users fa-3x opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card stat-card bg-success text-white">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="text-uppercase">Actifs</h6>
                                            <h2 class="mb-0">22</h2>
                                        </div>
                                        <i class="fas fa-user-check fa-3x opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card stat-card bg-info text-white">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="text-uppercase">Projets/membre</h6>
                                            <h2 class="mb-0">4.2</h2>
                                        </div>
                                        <i class="fas fa-project-diagram fa-3x opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0">Charge de travail</h6>
                                </div>
                                <div class="card-body">
                                    <canvas id="workloadChart" height="250"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0">Ancienneté</h6>
                                </div>
                                <div class="card-body">
                                    <canvas id="seniorityChart" height="250"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-download me-1"></i> Exporter
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/incubateurs.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize DataTable
            $('#teamTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
                },
                responsive: true,
                pageLength: 10
            });

            // Department Chart
            const departmentCtx = document.getElementById('departmentChart').getContext('2d');
            new Chart(departmentCtx, {
                type: 'bar',
                data: {
                    labels: ['Incubation', 'Mentorat', 'Finance', 'Marketing', 'Technologie'],
                    datasets: [{
                        label: 'Membres par département',
                        data: [8, 5, 3, 4, 4],
                        backgroundColor: [
                            'rgba(52, 152, 219, 0.7)',
                            'rgba(46, 204, 113, 0.7)',
                            'rgba(155, 89, 182, 0.7)',
                            'rgba(241, 196, 15, 0.7)',
                            'rgba(231, 76, 60, 0.7)'
                        ],
                        borderColor: [
                            'rgba(52, 152, 219, 1)',
                            'rgba(46, 204, 113, 1)',
                            'rgba(155, 89, 182, 1)',
                            'rgba(241, 196, 15, 1)',
                            'rgba(231, 76, 60, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Roles Chart
            const rolesCtx = document.getElementById('rolesChart').getContext('2d');
            new Chart(rolesCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Responsables', 'Mentors', 'Chargés de projet', 'Experts', 'Support'],
                    datasets: [{
                        data: [3, 5, 8, 5, 3],
                        backgroundColor: [
                            '#3498db',
                            '#2ecc71',
                            '#9b59b6',
                            '#f1c40f',
                            '#e74c3c'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'right'
                        }
                    }
                }
            });

            // Workload Chart (in modal)
            const workloadCtx = document.getElementById('workloadChart').getContext('2d');
            new Chart(workloadCtx, {
                type: 'line',
                data: {
                    labels: ['Paul N.', 'Amina D.', 'Jean M.', 'Sophie K.', 'Pierre L.', 'Marie T.'],
                    datasets: [{
                        label: 'Projets assignés',
                        data: [6, 5, 4, 3, 2, 2],
                        backgroundColor: 'rgba(52, 152, 219, 0.2)',
                        borderColor: 'rgba(52, 152, 219, 1)',
                        borderWidth: 2,
                        tension: 0.1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Seniority Chart (in modal)
            const seniorityCtx = document.getElementById('seniorityChart').getContext('2d');
            new Chart(seniorityCtx, {
                type: 'pie',
                data: {
                    labels: ['< 1 an', '1-2 ans', '2-5 ans', '> 5 ans'],
                    datasets: [{
                        data: [5, 8, 7, 4],
                        backgroundColor: [
                            'rgba(52, 152, 219, 0.7)',
                            'rgba(46, 204, 113, 0.7)',
                            'rgba(155, 89, 182, 0.7)',
                            'rgba(241, 196, 15, 0.7)'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'right'
                        }
                    }
                }
            });
        });
    </script>
@endsection
