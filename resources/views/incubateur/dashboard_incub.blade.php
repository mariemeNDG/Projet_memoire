@extends('index')
@section('title', 'Tableau de Bord Incubateur')
@section('content')
    <div class="pagetitle">
            <h1>Tableau de Bord</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Accueil</li>
                </ol>
            </nav>
        </div>

                    <div class="container-fluid mt-4">
                <!-- Stats Cards -->
<div class="container my-5">
  <div class="row g-4 mb-5">

    <!-- Projets incubés -->
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body py-4 px-4">
          <div class="d-flex align-items-center justify-content-between">
            <div class="me-3">
              <h6 class="text-uppercase text-muted fw-bold mb-1">Projets incubés</h6>
              <h2 class="fw-bold mb-0 text-primary">12</h2>
            </div>
            <div class="stat-icon bg-white text-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="fas fa-lightbulb fa-2x"></i>
            </div>
          </div>
          <div class="progress mt-3 rounded-pill" style="height:8px;">
            <div class="progress-bar bg-primary" style="width:80%"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Nouveaux candidats -->
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body py-4 px-4">
          <div class="d-flex align-items-center justify-content-between">
            <div class="me-3">
              <h6 class="text-uppercase text-muted fw-bold mb-1">Nouveaux candidats</h6>
              <h2 class="fw-bold mb-0 text-success">8</h2>
            </div>
            <div class="stat-icon bg-white text-success rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="fas fa-user-plus fa-2x"></i>
            </div>
          </div>
          <div class="progress mt-3 rounded-pill" style="height:8px;">
            <div class="progress-bar bg-success" style="width:60%"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Taux de réussite -->
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body py-4 px-4">
          <div class="d-flex align-items-center justify-content-between">
            <div class="me-3">
              <h6 class="text-uppercase text-muted fw-bold mb-1">Taux de réussite</h6>
              <h2 class="fw-bold mb-0 text-info">75%</h2>
            </div>
            <div class="stat-icon bg-white text-info rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="fas fa-chart-line fa-2x"></i>
            </div>
          </div>
          <div class="progress mt-3 rounded-pill" style="height:8px;">
            <div class="progress-bar bg-info" style="width:75%"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Événements à venir -->
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body py-4 px-4">
          <div class="d-flex align-items-center justify-content-between">
            <div class="me-3">
              <h6 class="text-uppercase text-muted fw-bold mb-1">Événements à venir</h6>
              <h2 class="fw-bold mb-0 text-warning">3</h2>
            </div>
            <div class="stat-icon bg-white text-warning rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="fas fa-calendar-alt fa-2x"></i>
            </div>
          </div>
          <div class="progress mt-3 rounded-pill" style="height:8px;">
            <div class="progress-bar bg-warning" style="width:30%"></div>
          </div>
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
                                <h5 class="mb-0">Performance des projets incubés</h5>
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

                <!-- Recent Projects -->
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Derniers projets incubés</h5>
                        <a href="projets/incubes.html" class="btn btn-light btn-sm">
                            Voir tout
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Projet</th>
                                        <th>Porteur</th>
                                        <th>Date d'entrée</th>
                                        <th>Phase</th>
                                        <th>Score</th>
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
                                        <td>Jean Martin</td>
                                        <td>15/03/2023</td>
                                        <td><span class="badge bg-info">Prototypage</span></td>
                                        <td>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-success" style="width: 75%"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                        </td>
                                    </tr>
                                    <!-- Plus de projets... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Events -->
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Prochains événements</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Atelier Pitch Deck</h6>
                                    <small>Demain</small>
                                </div>
                                <p class="mb-1">15h-17h | Salle de conférence</p>
                                <small class="text-muted">12 participants inscrits</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Rencontre investisseurs</h6>
                                    <small>20/06/2023</small>
                                </div>
                                <p class="mb-1">10h-12h | Espace Coworking</p>
                                <small class="text-muted">5 startups sélectionnées</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/incubateurs.js"></script>
    <script>
        // Performance Chart
        const performanceCtx = document.getElementById('performanceChart');
        if (performanceCtx) {
            new Chart(performanceCtx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
                    datasets: [
                        {
                            label: 'Nouveaux projets',
                            data: [3, 2, 4, 1, 5, 2],
                            backgroundColor: 'rgba(52, 152, 219, 0.7)',
                            borderColor: 'rgba(52, 152, 219, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Projets terminés',
                            data: [1, 0, 2, 1, 3, 1],
                            backgroundColor: 'rgba(46, 204, 113, 0.7)',
                            borderColor: 'rgba(46, 204, 113, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': ' + context.parsed.y;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
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
                    labels: ['Technologie', 'Santé', 'Environnement', 'Agriculture', 'Éducation'],
                    datasets: [{
                        data: [35, 20, 25, 15, 5],
                        backgroundColor: [
                            '#3498db',
                            '#e74c3c',
                            '#2ecc71',
                            '#f39c12',
                            '#9b59b6'
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
        }
    </script>

@endsection
