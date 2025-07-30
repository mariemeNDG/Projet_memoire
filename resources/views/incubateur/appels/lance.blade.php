@extends('index')
@section('title', 'Appels à projets')
@section('content')

               <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-bullhorn me-2"></i>Appels à projets lancés</h1>


               <div></div>
                    <div>
                   <button class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#statsModal">
                            <i class="fas fa-chart-bar me-1"></i> Statistiques
                        </button>
                        <button class="btn btn-primary" onclick="window.location.href='{{ route('incubateur.appel.nouveau') }}'">
                            <i class="fas fa-plus me-1"></i> Nouvel appel
                        </button>
                    </div>
                </div>

                <!-- Status Tabs -->
                <ul class="nav nav-tabs mb-4" id="callsTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="active-tab" data-bs-toggle="tab" data-bs-target="#active" type="button">Actifs (3)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="upcoming-tab" data-bs-toggle="tab" data-bs-target="#upcoming" type="button">À venir (2)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="closed-tab" data-bs-toggle="tab" data-bs-target="#closed" type="button">Clôturés (5)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="archived-tab" data-bs-toggle="tab" data-bs-target="#archived" type="button">Archivés (12)</button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="callsTabContent">
                    <!-- Active Calls -->
                    <div class="tab-pane fade show active" id="active" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="activeCallsTable" class="table table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th width="5%"></th>
                                                <th width="25%">Appel à projets</th>
                                                <th width="15%">Date limite</th>
                                                <th width="15%">Thématique</th>
                                                <th width="15%">Candidatures</th>
                                                <th width="15%">Budget</th>
                                                <th width="10%">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><i class="fas fa-circle text-success"></i></td>
                                                <td>
                                                    <strong>Innovation EdTech 2023</strong><br>
                                                    <small class="text-muted">#APP-2023-05</small>
                                                </td>
                                                <td>15/07/2023</td>
                                                <td><span class="badge bg-primary">Éducation</span></td>
                                                <td>
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-success" style="width: 65%"></div>
                                                    </div>
                                                    <small>42/65 attendues</small>
                                                </td>
                                                <td>150K €</td>
                                                <td>
                                                    <div class="btn-group btn-group-sm">
                                                        <button class="btn btn-outline-primary" title="Voir">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn btn-outline-secondary" title="Éditer">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        <button class="btn btn-outline-danger" title="Clôturer">
                                                            <i class="fas fa-lock"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Plus d'appels actifs... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upcoming Calls -->
                    <div class="tab-pane fade" id="upcoming" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="upcomingCallsTable" class="table table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th width="5%"></th>
                                                <th width="25%">Appel à projets</th>
                                                <th width="15%">Date d'ouverture</th>
                                                <th width="15%">Thématique</th>
                                                <th width="15%">Pré-candidatures</th>
                                                <th width="15%">Budget</th>
                                                <th width="10%">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><i class="fas fa-circle text-warning"></i></td>
                                                <td>
                                                    <strong>Green Tech Africa</strong><br>
                                                    <small class="text-muted">#APP-2023-06</small>
                                                </td>
                                                <td>01/08/2023</td>
                                                <td><span class="badge bg-success">Environnement</span></td>
                                                <td>
                                                    <span class="badge bg-light text-dark">18 expressions d'intérêt</span>
                                                </td>
                                                <td>200K €</td>
                                                <td>
                                                    <div class="btn-group btn-group-sm">
                                                        <button class="btn btn-outline-primary" title="Prévisualiser">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn btn-outline-secondary" title="Planifier">
                                                            <i class="fas fa-calendar-alt"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Plus d'appels à venir... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Closed Calls -->
                    <div class="tab-pane fade" id="closed" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="closedCallsTable" class="table table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th width="5%"></th>
                                                <th width="25%">Appel à projets</th>
                                                <th width="15%">Date clôture</th>
                                                <th width="15%">Thématique</th>
                                                <th width="15%">Candidatures</th>
                                                <th width="15%">Sélectionnés</th>
                                                <th width="10%">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><i class="fas fa-circle text-danger"></i></td>
                                                <td>
                                                    <strong>Santé Mobile 2023</strong><br>
                                                    <small class="text-muted">#APP-2023-02</small>
                                                </td>
                                                <td>15/03/2023</td>
                                                <td><span class="badge bg-danger">Santé</span></td>
                                                <td>78</td>
                                                <td>12</td>
                                                <td>
                                                    <div class="btn-group btn-group-sm">
                                                        <button class="btn btn-outline-primary" title="Résultats">
                                                            <i class="fas fa-chart-pie"></i>
                                                        </button>
                                                        <button class="btn btn-outline-secondary" title="Archiver">
                                                            <i class="fas fa-archive"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Plus d'appels clôturés... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <!-- Stats Modal -->
    <div class="modal fade" id="statsModal" tabindex="-1" aria-labelledby="statsModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="statsModalLabel">
                        <i class="fas fa-chart-bar me-2"></i> Statistiques des appels
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0">Répartition par thématique</h6>
                                </div>
                                <div class="card-body">
                                    <canvas id="thematicChart" height="250"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0">Taux de réponse moyen</h6>
                                </div>
                                <div class="card-body">
                                    <canvas id="responseRateChart" height="250"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-light">
                            <h6 class="mb-0">Performance annuelle</h6>
                        </div>
                        <div class="card-body">
                            <canvas id="yearlyPerformanceChart" height="300"></canvas>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-download me-1"></i> Exporter PDF
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
            // Initialize DataTables
            $('#activeCallsTable, #upcomingCallsTable, #closedCallsTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
                },
                responsive: true,
                dom: '<"top"f>rt<"bottom"lip><"clear">',
                pageLength: 10
            });

            // Thematic Chart
            const thematicCtx = document.getElementById('thematicChart').getContext('2d');
            new Chart(thematicCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Technologie', 'Santé', 'Environnement', 'Éducation', 'Agriculture'],
                    datasets: [{
                        data: [35, 25, 20, 15, 5],
                        backgroundColor: [
                            '#3498db',
                            '#e74c3c',
                            '#2ecc71',
                            '#9b59b6',
                            '#f39c12'
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

            // Response Rate Chart
            const responseRateCtx = document.getElementById('responseRateChart').getContext('2d');
            new Chart(responseRateCtx, {
                type: 'bar',
                data: {
                    labels: ['2020', '2021', '2022', '2023'],
                    datasets: [{
                        label: 'Taux de réponse',
                        data: [45, 52, 60, 68],
                        backgroundColor: '#4ca1af'
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            title: {
                                display: true,
                                text: 'Pourcentage'
                            }
                        }
                    }
                }
            });

            // Yearly Performance Chart
            const yearlyCtx = document.getElementById('yearlyPerformanceChart').getContext('2d');
            new Chart(yearlyCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
                    datasets: [
                        {
                            label: 'Appels lancés',
                            data: [2, 1, 3, 2, 1, 2, 0, 1, 2, 3, 1, 0],
                            borderColor: '#3498db',
                            backgroundColor: 'rgba(52, 152, 219, 0.1)',
                            tension: 0.3
                        },
                        {
                            label: 'Projets sélectionnés',
                            data: [5, 3, 8, 6, 4, 5, 0, 3, 6, 9, 4, 0],
                            borderColor: '#2ecc71',
                            backgroundColor: 'rgba(46, 204, 113, 0.1)',
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
        });
    </script>
@endsection
