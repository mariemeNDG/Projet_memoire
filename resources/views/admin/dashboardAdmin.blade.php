@extends('index')
@section('title', 'Tableau de Bord Administrateur')
@section('content')
    <div class="pagetitle">
            <h1>Tableau de Bord</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Accueil</li>
                </ol>
            </nav>
            <div class="container-fluid mt-4">
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">Utilisateurs</h6>
                                        <h2 class="mb-0">1,248</h2>
                                    </div>
                                    <i class="fas fa-users fa-3x opacity-50"></i>
                                </div>
                                <div class="progress mt-3" style="height: 5px;">
                                    <div class="progress-bar bg-white" style="width: 75%"></div>
                                </div>
                                <small class="d-block mt-2">+12% ce mois</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-success text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">Projets</h6>
                                        <h2 class="mb-0">356</h2>
                                    </div>
                                    <i class="fas fa-lightbulb fa-3x opacity-50"></i>
                                </div>
                                <div class="progress mt-3" style="height: 5px;">
                                    <div class="progress-bar bg-white" style="width: 60%"></div>
                                </div>
                                <small class="d-block mt-2">8 en attente</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-danger text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">Signalements</h6>
                                        <h2 class="mb-0">24</h2>
                                    </div>
                                    <i class="fas fa-flag fa-3x opacity-50"></i>
                                </div>
                                <div class="progress mt-3" style="height: 5px;">
                                    <div class="progress-bar bg-white" style="width: 30%"></div>
                                </div>
                                <small class="d-block mt-2">5 non traités</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-warning text-dark">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">Activité</h6>
                                        <h2 class="mb-0">1,402</h2>
                                    </div>
                                    <i class="fas fa-history fa-3x opacity-50"></i>
                                </div>
                                <div class="progress mt-3" style="height: 5px;">
                                    <div class="progress-bar bg-dark" style="width: 85%"></div>
                                </div>
                                <small class="d-block mt-2">Aujourd'hui</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Row -->
                <div class="row mb-4">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Activité récente</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="activityChart" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Répartition utilisateurs</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="usersChart" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Actions récentes</h5>
                        <a href="#" class="btn btn-light btn-sm">
                            Voir le journal complet
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-badge bg-success"></div>
                                <div class="timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <strong>Admin System</strong>
                                        <small class="text-muted">Il y a 5 min</small>
                                    </div>
                                    <p>A modifié le rôle de <strong>Jean Dupont</strong> en "Mentor certifié"</p>
                                </div>
                            </div>
                            <!-- Plus d'activités... -->
                        </div>
                    </div>
                </div>

                <!-- Pending Actions -->
                <div class="card mt-4">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">Actions en attente</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th width="25%">Élément</th>
                                        <th width="20%">Type</th>
                                        <th width="20%">Demandé par</th>
                                        <th width="20%">Date</th>
                                        <th width="15%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Projet "EcoTech"</td>
                                        <td><span class="badge bg-info">Validation</span></td>
                                        <td>Porteur: Marie L.</td>
                                        <td>15/06/2023</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success me-1">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Plus d'actions... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/admin.js"></script>
    <script>
        // Activity Chart
        const activityCtx = document.getElementById('activityChart').getContext('2d');
        new Chart(activityCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
                datasets: [
                    {
                        label: 'Nouveaux utilisateurs',
                        data: [45, 60, 75, 50, 80, 95],
                        borderColor: '#3498db',
                        backgroundColor: 'rgba(52, 152, 219, 0.1)',
                        tension: 0.3
                    },
                    {
                        label: 'Projets soumis',
                        data: [20, 35, 40, 30, 45, 60],
                        borderColor: '#2ecc71',
                        backgroundColor: 'rgba(46, 204, 113, 0.1)',
                        tension: 0.3
                    },
                    {
                        label: 'Signalements',
                        data: [5, 8, 6, 10, 7, 4],
                        borderColor: '#e74c3c',
                        backgroundColor: 'rgba(231, 76, 60, 0.1)',
                        tension: 0.3
                    }
                ]
            },
            options: {
                responsive: true,
                interaction: {
                    intersect: false,
                    mode: 'index'
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Users Distribution Chart
        const usersCtx = document.getElementById('usersChart').getContext('2d');
        new Chart(usersCtx, {
            type: 'doughnut',
            data: {
                labels: ['Porteurs', 'Mentors', 'Incubateurs', 'Investisseurs', 'Admins'],
                datasets: [{
                    data: [650, 150, 80, 120, 8],
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
                },
                cutout: '60%'
            }
        });
    </script>

@endsection
