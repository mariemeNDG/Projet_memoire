@extends('index')
@section('title', 'Mes projets')
@section('content')
    <div class="pagetitle">
        <h1>Mes Projets</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Tableau de Bord</li>
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
            <a class="btn btn-primary" href="{{ route('entrepreneur.projets.create') }}">
                <i class="fas fa-plus me-1"></i> Nouveau projet
            </a>
        </div>

        <!-- Statistiques -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center py-4">
                        <h3 class="text-primary">{{ $stats['total'] }}</h3>
                        <p class="mb-0">Projets créés</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center py-4">
                        <h3 class="text-success">{{ $stats['labellises'] }}</h3>
                        <p class="mb-0">Projets labellisés</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center py-4">
                        <h3 class="text-info">{{ $stats['incubation'] }}</h3>
                        <p class="mb-0">En incubation</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center py-4">
                        <h3 class="text-warning">{{ $stats['financement'] }}</h3>
                        <p class="mb-0">En financement</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Liste des projets -->
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Liste de mes projets</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th>Nom</th>
                                <th>Secteur</th>
                                <th>Statut</th>
                                <th>Date création</th>
                                <th>Budget</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($projets as $projet)
                                <tr>
                                    <td>{{ $projet->nom }}</td>
                                    <td>{{ $projet->secteur_activite }}</td>
                                    <td>{!! $projet->etat_badge !!}</td>
                                    <td>{{ $projet->created_at->format('d/m/Y') }}</td>
                                    <td>{{ number_format($projet->budget, 0, ',', ' ') }} CFA</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('entrepreneur.projets.show', $projet) }}"
                                            class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('entrepreneur.projets.edit', $projet) }}"
                                            class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('entrepreneur.projets.destroy', $projet) }}"
                                                method="POST" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce projet?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-danger text-center fw-bold">Aucun projet trouvé.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
@endsection
