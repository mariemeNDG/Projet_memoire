@extends('index')
@section('title', 'Dashboard Investisseur')
@section('content')
            <div class="container-fluid mt-4">
                <!-- Stats Cards -->
                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">Projets financés</h6>
                                        <h2 class="mb-0">8</h2>
                                    </div>
                                    <i class="fas fa-briefcase fa-3x opacity-50"></i>
                                </div>
                                <div class="progress mt-3" style="height: 5px;">
                                    <div class="progress-bar bg-white" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-success text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">Investis</h6>
                                        <h2 class="mb-0">650K€</h2>
                                    </div>
                                    <i class="fas fa-euro-sign fa-3x opacity-50"></i>
                                </div>
                                <div class="progress mt-3" style="height: 5px;">
                                    <div class="progress-bar bg-white" style="width: 60%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-info text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">ROI moyen</h6>
                                        <h2 class="mb-0">2.4x</h2>
                                    </div>
                                    <i class="fas fa-chart-line fa-3x opacity-50"></i>
                                </div>
                                <div class="progress mt-3" style="height: 5px;">
                                    <div class="progress-bar bg-white" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-warning text-dark">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">Opportunités</h6>
                                        <h2 class="mb-0">5</h2>
                                    </div>
                                    <i class="fas fa-bell fa-3x opacity-50"></i>
                                </div>
                                <div class="progress mt-3" style="height: 5px;">
                                    <div class="progress-bar bg-dark" style="width: 45%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Row -->
                <div class="row mb-4">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Performance du portfolio</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="performanceChart" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Répartition par secteur</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="sectorChart" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Investments -->
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Derniers investissements</h5>
                        <a href="projets/decouverte.html" class="btn btn-light btn-sm">
                            <i class="fas fa-plus me-1"></i> Nouvel investissement
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th>Projet</th>
                                        <th>Montant</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>ROI</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/projets/projet1.jpg" class="rounded-circle me-2" width="40">
                                                <span>EcoTech</span>
                                            </div>
                                        </td>
                                        <td>150K€</td>
                                        <td>15/06/2023</td>
                                        <td>Capital (15%)</td>
                                        <td><span class="badge bg-success">3.2x</span></td>
                                        <td><span class="badge bg-success">Actif</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-chart-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/projets/projet2.jpg" class="rounded-circle me-2" width="40">
                                                <span>AgriConnect</span>
                                            </div>
                                        </td>
                                        <td>80K€</td>
                                        <td>10/05/2023</td>
                                        <td>Prêt convertible</td>
                                        <td><span class="badge bg-warning text-dark">1.5x</span></td>
                                        <td><span class="badge bg-info">En cours</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-chart-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/projets/projet3.jpg" class="rounded-circle me-2" width="40">
                                                <span>MediTrack</span>
                                            </div>
                                        </td>
                                        <td>200K€</td>
                                        <td>22/03/2023</td>
                                        <td>Capital (10%)</td>
                                        <td><span class="badge bg-success">4.1x</span></td>
                                        <td><span class="badge bg-success">Actif</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-chart-line"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Recent Alerts -->
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Dernières alertes</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Nouveau projet correspondant</h6>
                                    <small>Il y a 2 heures</small>
                                </div>
                                <p class="mb-1">"GreenEnergy" recherche 250K€ dans le secteur Environnement</p>
                                <small class="text-muted">Maturité: Prototype | Localisation: Paris</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Mise à jour projet</h6>
                                    <small>Hier</small>
                                </div>
                                <p class="mb-1">"AgriConnect" a atteint 150% de son objectif de vente</p>
                                <small class="text-muted">Votre investissement: 80K€ | ROI actuel: 1.8x</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/investisseurs.js"></script>
    <script>
        // Sidebar Toggle
        document.getElementById('sidebarCollapse').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
            document.getElementById('content').classList.toggle('active');
        });

        // Performance Chart
        const performanceCtx = document.getElementById('performanceChart');
        if (performanceCtx) {
            new Chart(performanceCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
                    datasets: [{
                        label: 'Valeur du portfolio (K€)',
                        data: [450, 520, 600, 750, 980, 1560],
                        borderColor: '#2ecc71',
                        backgroundColor: 'rgba(46, 204, 113, 0.1)',
                        fill: true,
                        tension: 0.3
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': ' + context.parsed.y + 'K€';
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: false
                        }
                    }
                }
            });
        }

        // Sector Distribution Chart
        const sectorCtx = document.getElementById('sectorChart');
        if (sectorCtx) {
            new Chart(sectorCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Technologie', 'Santé', 'Environnement', 'Agriculture'],
                    datasets: [{
                        data: [45, 25, 20, 10],
                        backgroundColor: [
                            '#3498db',
                            '#e74c3c',
                            '#2ecc71',
                            '#f39c12'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    },
                    cutout: '70%'
                }
            });
        }
    </script>


        </section>
@endsection
