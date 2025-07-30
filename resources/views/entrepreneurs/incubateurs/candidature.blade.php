@extends('index')
@section('title', 'Mes Candidatures')
@section('content')
<div class="pagetitle">
    <h1><i class="fas fa-paper-plane text-primary me-2"></i>Mes Candidatures</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('entrepreneur.dashboard') }}">Tableau de Bord</a></li>
            <li class="breadcrumb-item active">Incubateurs</li>
        </ol>
    </nav>
</div>

<div class="container-fluid mt-4">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1></h1>
        <a class="btn btn-primary" href="{{ route('entrepreneur.incubateur.recherches') }}">
            <i class="fas fa-plus me-1"></i> Nouvelle candidature
        </a>
    </div>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Historique des candidatures</h5>
        </div>
        <div class="card-body">
            @if($candidatures->isEmpty())
                <div class="alert alert-info text-center">
                    <i class="fas fa-info-circle me-2"></i> Vous n'avez aucune candidature en cours
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th>Incubateur</th>
                                <th>Projet</th>
                                <th>Date candidature</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($candidatures as $candidature)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @if($candidature->incubateur->photo)
                                        <img src="{{ asset('storage/'.$candidature->incubateur->photo) }}" class="rounded-circle me-2" width="40" height="40" style="object-fit: cover;">
                                        @else
                                        <div class="rounded-circle bg-light text-center me-2" style="width: 40px; height: 40px; line-height: 40px;">
                                            <i class="fas fa-building text-muted"></i>
                                        </div>
                                        @endif
                                        <span>{{ $candidature->incubateur->nom }}</span>
                                    </div>
                                </td>
                                <td>{{ $candidature->projet->nom }}</td>
                                <td>{{ $candidature->created_at->format('d/m/Y') }}</td>
                                <td>
                                    @if($candidature->statut == 'accepte')
                                        <span class="badge bg-success">Acceptée</span>
                                    @elseif($candidature->statut == 'refuse')
                                        <span class="badge bg-danger">Refusée</span>
                                    @elseif($candidature->statut == 'en_revue')
                                        <span class="badge bg-info">En revue</span>
                                    @elseif($candidature->statut == 'entretien')
                                        <span class="badge bg-primary">Entretien</span>
                                    @else
                                        <span class="badge bg-warning">En attente</span>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#detailsModal{{ $candidature->id }}">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    @if($candidature->statut == 'en_attente')
                                    <form action="{{ route('entrepreneur.incubateur.annuler-candidature', $candidature) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Annuler cette candidature ?')">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>
                                    @endif
                                </td>
                            </tr>

                            <!-- Modal Détails -->
                            <div class="modal fade" id="detailsModal{{ $candidature->id }}" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title" id="detailsModalLabel">Détails de la candidature</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <h6>Incubateur</h6>
                                                    <p>{{ $candidature->incubateur->nom }}</p>
                                                    <p class="text-muted">{{ $candidature->incubateur->adresse }}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6>Projet</h6>
                                                    <p>{{ $candidature->projet->nom }}</p>
                                                    <p class="text-muted">{{ $candidature->projet->secteur_activite }}</p>
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <h6>Motivation</h6>
                                                <p>{{ $candidature->motivation }}</p>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <h6>Budget prévisionnel</h6>
                                                    <p>{{ number_format($candidature->budget_previsionnel, 2, ',', ' ') }} €</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6>Durée souhaitée</h6>
                                                    <p>{{ $candidature->duree_incubation }}</p>
                                                </div>
                                            </div>

                                            @if($candidature->besoins_specifiques)
                                            <div class="mb-4">
                                                <h6>Besoins spécifiques</h6>
                                                <div>
                                                    @foreach(json_decode($candidature->besoins_specifiques) as $besoin)
                                                    <span class="badge bg-light text-dark me-1">{{ $besoin }}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                            @endif

                                            <div class="mb-4">
                                                <h6>Équipe</h6>
                                                <div class="table-responsive">
                                                    <table class="table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>Nom</th>
                                                                <th>Rôle</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach(json_decode($candidature->equipe) as $membre)
                                                            <tr>
                                                                <td>{{ $membre->nom }}</td>
                                                                <td>{{ $membre->role }}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <a href="{{ asset('storage/'.$candidature->business_plan) }}" class="btn btn-outline-primary" target="_blank">
                                                    <i class="fas fa-file-pdf me-1"></i> Voir le business plan
                                                </a>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    {{ $candidatures->links() }}
                </div>
            @endif
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-light">
            <h5 class="mb-0"><i class="fas fa-chart-pie me-2"></i>Statistiques de mes candidatures</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <canvas id="applicationsChart" height="250"></canvas>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card stat-card bg-success text-white">
                                <i class="fas fa-check-circle"></i>
                                <h2>{{ $stats['acceptees'] }}</h2>
                                <p>Acceptées</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card stat-card bg-warning text-dark">
                                <i class="fas fa-hourglass-half"></i>
                                <h2>{{ $stats['en_attente'] }}</h2>
                                <p>En attente</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card stat-card bg-danger text-white">
                                <i class="fas fa-times-circle"></i>
                                <h2>{{ $stats['refusees'] }}</h2>
                                <p>Refusées</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card stat-card bg-info text-white">
                                <i class="fas fa-percentage"></i>
                                <h2>{{ $stats['taux_acceptation'] }}%</h2>
                                <p>Taux d'acceptation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('applicationsChart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Acceptées', 'En attente', 'Refusées'],
            datasets: [{
                data: [{{ $stats['acceptees'] }}, {{ $stats['en_attente'] }}, {{ $stats['refusees'] }}],
                backgroundColor: [
                    '#28a745',
                    '#ffc107',
                    '#dc3545'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                }
            }
        }
    });
});
</script>

<style>
    .stat-card {
        padding: 20px;
        text-align: center;
        border-radius: 8px;
        height: 100%;
    }
    .stat-card i {
        font-size: 2rem;
        margin-bottom: 10px;
    }
    .stat-card h2 {
        font-size: 2rem;
        margin: 10px 0;
    }
    .stat-card p {
        margin-bottom: 0;
        font-weight: 500;
    }
</style>
@endsection
