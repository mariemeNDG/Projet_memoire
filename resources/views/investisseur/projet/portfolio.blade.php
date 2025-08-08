@extends('index')
@section('title', 'Portfolio Investisseur')
@section('content')

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1><i class="fas fa-briefcase me-2"></i>Projets investis</h1>
        <div>
            <button class="btn btn-outline-secondary me-2" id="exportPortfolio">
                <i class="fas fa-download me-1"></i> Exporter
            </button>
            <button class="btn btn-primary" onclick="window.location.href='{{ route('investisseur.decouverte') }}'">
                <i class="fas fa-plus me-1"></i> Nouvel investissement
            </button>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Investments Table -->
    <div class="card mt-4">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Mes investissements</h5>
            <div class="input-group" style="width: 300px;">
                <input type="text" class="form-control" placeholder="Rechercher un projet...">
                <button class="btn btn-light" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th>Projet</th>
                            <th>Date</th>
                            <th>Montant Investi</th>
                            <th>Montant demandé</th>
                            <th>Restant</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($investissements as $investissement)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/projets/projet'.$loop->iteration.'.jpg') }}" class="rounded-circle me-2" width="40">
                                    <span>{{ $investissement->financement->projet->nom }}</span>
                                </div>
                            </td>

                            <td>{{ $investissement->created_at->format('d/m/Y') }}</td>
                            <td>{{ number_format($investissement->montant, 0) }} CFA</td>
                            <td>{{ number_format($investissement->financement->montant, 0) }} CFA</td>
                            <td>
                                @php
                                    $restant = $investissement->financement->montant - $investissement->montant;
                                    $isComplet = $investissement->financement->montant == $investissement->montant;
                                @endphp
                                @if($isComplet)
                                    <span class="badge bg-success">Complet</span>
                                @elseif($restant > 0)
                                    <span class="badge bg-warning text-dark">{{ number_format($restant, 0) }} CFA</span>
                                @else
                                    <span class="badge bg-danger">Néant</span>
                                @endif
                            </td>
                            <td>
                                <span class="badge {{ $investissement->statut == 'investi' ? 'bg-success' : 'bg-warning' }}">
                                    {{ ucfirst($investissement->statut) }}
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-primary"><i class="fas fa-chart-line"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white">
            <nav aria-label="Investments pagination">
                <ul class="pagination justify-content-center mb-0">
                    {{ $investissements->links() }}
                </ul>
            </nav>
        </div>
    </div>

    <!-- Sector Distribution -->
    <div class="row mt-4">
    
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Données pour les graphiques (à adapter avec vos données réelles)


    // // Sector Distribution Chart
    // // const sectorCtx = document.getElementById('sectorChart');
    // // if (sectorCtx) {
    // //     new Chart(sectorCtx, {
    // //         type: 'doughnut',
    // //         data: {
    // //             labels: Object.keys(sectorData),
    // //             datasets: [{
    // //                 data: Object.values(sectorData),
    // //                 backgroundColor: [
    // //                     '#3498db',
    // //                     '#e74c3c',
    // //                     '#2ecc71',
    // //                     '#f39c12',
    // //                     '#9b59b6'
    // //                 ],
    // //                 borderWidth: 0
    // //             }]
    // //         },
    // //         options: {
    // //             responsive: true,
    // //             plugins: {
    // //                 legend: {
    // //                     position: 'right'
    // //                 }
    // //             },
    // //             cutout: '60%'
    // //         }
    // //     });
    // // }

    // // Investment Type Chart
    // const typeCtx = document.getElementById('typeChart');
    // if (typeCtx) {
    //     new Chart(typeCtx, {
    //         type: 'bar',
    //         data: {
    //             labels: Object.keys(typeData),
    //             datasets: [{
    //                 label: 'Montant investi (K€)',
    //                 data: Object.values(typeData),
    //                 backgroundColor: [
    //                     'rgba(52, 152, 219, 0.7)',
    //                     'rgba(46, 204, 113, 0.7)',
    //                     'rgba(241, 196, 15, 0.7)'
    //                 ],
    //                 borderColor: [
    //                     'rgba(52, 152, 219, 1)',
    //                     'rgba(46, 204, 113, 1)',
    //                     'rgba(241, 196, 15, 1)'
    //                 ],
    //                 borderWidth: 1
    //             }]
    //         },
    //         options: {
    //             responsive: true,
    //             plugins: {
    //                 legend: {
    //                     display: false
    //                 }
    //             },
    //             scales: {
    //                 y: {
    //                     beginAtZero: true
    //                 }
    //             }
    //         }
    //     });
    // }

    // Export Portfolio
    document.getElementById('exportPortfolio').addEventListener('click', function() {
        alert('Export de votre portfolio en cours de préparation... Vous recevrez un email avec le document.');
    });
</script>

@endsection
