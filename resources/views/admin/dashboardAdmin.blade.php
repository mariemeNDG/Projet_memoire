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
            <div class="container my-5">
                <div class="container my-5">
                    <div class="row g-4 mb-5">

                        <!-- Utilisateurs -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card shadow-sm border-0 h-100">
                                <div class="card-body py-4 px-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="me-3">
                                            <h6 class="text-uppercase text-muted fw-bold mb-1">Utilisateurs</h6>
                                            <h2 class="fw-bold mb-0 text-primary">{{ $conteurs['users'] }}</h2>
                                        </div>
                                        <div
                                            class="stat-icon bg-white text-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                            <i class="fas fa-users fa-2x"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Projets -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card shadow-sm border-0 h-100">
                                <div class="card-body py-4 px-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="me-3">
                                            <h6 class="text-uppercase text-muted fw-bold mb-1">Projets</h6>
                                            <h2 class="fw-bold mb-0 text-success">{{ $conteurs['projets'] }}</h2>
                                        </div>
                                        <div
                                            class="stat-icon bg-white text-success rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                            <i class="fas fa-lightbulb fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- projets_finances -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card shadow-sm border-0 h-100">
                                <div class="card-body py-4 px-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="me-3">
                                            <h6 class="text-uppercase text-muted fw-bold mb-1">Projets en Financement</h6>
                                            <h2 class="fw-bold mb-0 text-danger">{{ $conteurs['projets_finances'] }}</h2>
                                        </div>
                                        <div
                                            class="stat-icon bg-white text-danger rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                            <i class="fas fa-flag fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Projets en Incubation -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card shadow-sm border-0 h-100">
                                <div class="card-body py-4 px-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="me-3">
                                            <h6 class="text-uppercase text-muted fw-bold mb-1">Projets en Incubation</h6>
                                            <h2 class="fw-bold mb-0 text-warning">{{ $conteurs['projets_incubation'] }}</h2>
                                        </div>
                                        <div
                                            class="stat-icon bg-white text-warning rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                            <i class="fas fa-history fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Projets en Mentorat -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card shadow-sm border-0 h-100">
                                <div class="card-body py-4 px-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="me-3">
                                            <h6 class="text-uppercase text-muted fw-bold mb-1">projets en Mentorat</h6>
                                            <h2 class="fw-bold mb-0 text-info">{{ $conteurs['mentorat'] }}</h2>
                                        </div>
                                        <div
                                            class="stat-icon bg-white text-info rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                            <i class="fas fa-flag fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pending Actions -->
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Projets récents</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th width="25%">Nom</th>
                                        <th width="20%">Etat</th>
                                        <th width="20%">Entrepreneur</th>
                                        <th width="20%">Date</th>
                                        <th width="15%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($projets as $item)
                                        <tr>
                                            <td>{{ $item->nom }}</td>
                                            <td><span class="badge bg-secondary">{{ $item->etat }}</span></td>
                                            <td> {{ $item->user->name }}</td>
                                            <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-success me-1">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Aucun projet récent</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Charts Row -->
                <div class="row mb-4">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Répartition des projets par état</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="projetsChart" height="250"></canvas>
                            </div>
                        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('projetsChart').getContext('2d');
    new Chart(ctx, {
        type: 'doughnut', // ou 'pie'
        data: {
            labels: @json($projetsParEtat->keys()), // états (ex: En financement, En incubation)
            datasets: [{
                label: 'Nombre de projets',
                data: @json($projetsParEtat->values()), // valeurs (ex: 5, 3, 7)
                backgroundColor: [
                    '#007bff',
                    '#28a745',
                    '#ffc107',
                    '#dc3545',
                    '#6f42c1',
                    '#20c997'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
</script>

@endsection
