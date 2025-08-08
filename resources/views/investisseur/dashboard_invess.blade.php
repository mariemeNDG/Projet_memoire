@extends('index')
@section('title', 'Dashboard Investisseur')
@section('content')
            <div class="container-fluid mt-4">
                <!-- Stats Cards -->
                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-danger text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">Projets en attente</h6>
                                        <h2 class="mb-0">{{ $stats['projets_finances'] }}</h2>
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
                        <div class="card stat-card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">Projets investis</h6>
                                        <h2 class="mb-0">{{ $stats['projets_investis'] }}</h2>
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
                        <div class="card stat-card bg-warning text-dark">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">Projets en cours</h6>
                                        <h2 class="mb-0">{{ $stats['projets_en_cours'] }}</h2>
                                    </div>
                                    <i class="fas fa-bell fa-3x opacity-50"></i>
                                </div>
                                <div class="progress mt-3" style="height: 5px;">
                                    <div class="progress-bar bg-dark" style="width: 45%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-success text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-uppercase">Montant Investis</h6>
                                        <h2 class="mb-0">{{ $stats['montant_investi'] }} CFA</h2>
                                    </div>
                                    <i class="fas fa-euro-sign fa-3x opacity-50"></i>
                                </div>
                                <div class="progress mt-3" style="height: 5px;">
                                    <div class="progress-bar bg-white" style="width: 60%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Row -->
                <div class="row mb-4">
                      <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Répartition par type</h5>
                </div>
                <div class="card-body">
                    <canvas id="typeChart" height="250"></canvas>
                </div>
            </div>
        </div>
                        <div class="col-lg-6">
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
