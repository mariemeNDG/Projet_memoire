@extends('index')
@section('title', 'Dashboard Investisseur')
@section('content')
            <div class="container-fluid mt-4">
                <!-- Stats Cards -->
<div class="container my-5">
  <div class="row g-4 mb-5">

    <!-- Projets en attente -->
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-0">
        <div class="card-body py-4 px-4">
          <div class="d-flex align-items-center justify-content-between">
            <div class="me-3">
              <h6 class="text-uppercase text-muted fw-bold mb-1">Projets en attente</h6>
              <h2 class="fw-bold mb-0 text-danger">{{ $stats['projets_finances'] }}</h2>
            </div>
            <div class="stat-icon bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="fas fa-briefcase"></i>
            </div>
          </div>
          <div class="progress mt-3 rounded-pill" style="height:8px;">
            <div class="progress-bar bg-danger" style="width:75%"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Projets investis -->
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-0">
        <div class="card-body py-4 px-4">
          <div class="d-flex align-items-center justify-content-between">
            <div class="me-3">
              <h6 class="text-uppercase text-muted fw-bold mb-1">Projets investis</h6>
              <h2 class="fw-bold mb-0 text-primary">{{ $stats['projets_investis'] }}</h2>
            </div>
            <div class="stat-icon bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="fas fa-briefcase"></i>
            </div>
          </div>
          <div class="progress mt-3 rounded-pill" style="height:8px;">
            <div class="progress-bar bg-primary" style="width:75%"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Projets en cours -->
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-0">
        <div class="card-body py-4 px-4">
          <div class="d-flex align-items-center justify-content-between">
            <div class="me-3">
              <h6 class="text-uppercase text-muted fw-bold mb-1">Projets en cours</h6>
              <h2 class="fw-bold mb-0 text-warning">{{ $stats['projets_en_cours'] }}</h2>
            </div>
            <div class="stat-icon bg-warning-subtle text-warning rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="fas fa-bell"></i>
            </div>
          </div>
          <div class="progress mt-3 rounded-pill" style="height:8px;">
            <div class="progress-bar bg-warning" style="width:45%"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Montant investis -->
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-0">
        <div class="card-body py-4 px-4">
          <div class="d-flex align-items-center justify-content-between">
            <div class="me-3">
              <h6 class="text-uppercase text-muted fw-bold mb-1">Montant investis</h6>
              <h2 class="fw-bold mb-0 text-success">{{ $stats['montant_investi'] }} CFA</h2>
            </div>
            <div class="stat-icon bg-success-subtle text-success rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="fas fa-euro-sign"></i>
            </div>
          </div>
          <div class="progress mt-3 rounded-pill" style="height:8px;">
            <div class="progress-bar bg-success" style="width:60%"></div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<style>
  .stat-icon {
    width: 56px;
    height: 56px;
    font-size: 1.25rem;
    box-shadow: 0 4px 12px rgba(0,0,0,.08);
  }
</style>



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
