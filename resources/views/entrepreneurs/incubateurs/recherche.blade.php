@extends('index')
@section('title', 'Recherche Incubateurs')
@section('content')
    <div class="pagetitle">
        <h1><i class="fas fa-building text-primary me-2"></i>Recherche d'Incubateurs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('entrepreneur.dashboard') }}">Tableau de Bord</a></li>
                <li class="breadcrumb-item active">Incubateurs</li>
            </ol>
        </nav>
    </div>

    <div class="container-fluid mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1></h1>
            <div class="d-flex">
                <button class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#filterModal">
                    <i class="fas fa-filter me-1"></i> Filtres
                </button>
                <button class="btn btn-outline-primary">
                    <i class="fas fa-map-marker-alt me-1"></i> Carte
                </button>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-12">
                <form action="{{ route('entrepreneur.incubateur.recherches') }}" method="GET">
                    <div class="search-bar input-group">
                        <input type="text" class="form-control" name="search" placeholder="Rechercher un incubateur..."
                               value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        @if($incubateurs->isEmpty())
            <div class="alert alert-info text-center">
                <i class="fas fa-info-circle me-2"></i> Aucun incubateur trouvé
            </div>
        @else
            <div class="row">
                @foreach($incubateurs as $incubateur)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 incubator-card">
                        @if($incubateur->photo)
                        <img src="{{ asset('storage/'.$incubateur->photo) }}" class="card-img-top" alt="{{ $incubateur->nom }}" style="height: 200px; object-fit: cover;">
                        @else
                        <div class="bg-secondary text-white text-center p-5" style="height: 200px;">
                            <i class="fas fa-building fa-3x"></i>
                            <p class="mt-2">Pas de photo</p>
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <h5 class="card-title">{{ $incubateur->nom }}</h5>
                                <span class="badge bg-success">Disponible</span>
                            </div>
                            <p class="card-text text-muted">
                                <i class="fas fa-map-marker-alt me-1"></i> {{ $incubateur->adresse }}
                            </p>
                            <p class="card-text">{{ Str::limit($incubateur->description, 100) }}</p>
                            @if($incubateur->secteur)
                            <div class="">
                                @foreach(explode(',', $incubateur->secteur) as $secteur)
                                    <span class="badge bg-light text-dark me-1 mb-1">{{ trim($secteur) }}</span>
                                @endforeach
                            </div>
                            @endif

                        </div>
                        <div class="card-footer bg-white">
                            <a href="{{ route('entrepreneur.incubateur.postuler', $incubateur) }}" class="btn btn-primary">
                                <i class="fas fa-paper-plane me-1"></i> Postuler
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <nav aria-label="Page navigation" class="mt-4">
                {{ $incubateurs->links() }}
            </nav>
        @endif
    </div>

    <!-- Modal Filtres -->
    <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="filterModalLabel">Filtrer les incubateurs</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('entrepreneur.incubateur.recherches') }}" method="GET">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Secteurs</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="secteurs[]" value="Technologie" id="techCheck"
                                    {{ in_array('Technologie', request('secteurs', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="techCheck">Technologie</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="secteurs[]" value="Agriculture" id="agriCheck"
                                    {{ in_array('Agriculture', request('secteurs', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="agriCheck">Agriculture</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="secteurs[]" value="Environnement" id="envCheck"
                                    {{ in_array('Environnement', request('secteurs', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="envCheck">Environnement</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="secteurs[]" value="Santé" id="healthCheck"
                                    {{ in_array('Santé', request('secteurs', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="healthCheck">Santé</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="locationSelect" class="form-label">Localisation</label>
                            <input type="text" class="form-control" name="localisation" placeholder="Ville ou région"
                                   value="{{ request('localisation') }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('entrepreneur.incubateur.recherches') }}" class="btn btn-outline-danger me-auto">
                            Réinitialiser
                        </a>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Appliquer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .incubator-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .incubator-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .search-bar {
            max-width: 800px;
            margin: 0 auto;
        }
        .pagination .page-item.active .page-link {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
    </style>

    <script>
        // Script pour afficher la valeur du range
        document.getElementById('ratingRange').addEventListener('input', function() {
            document.getElementById('ratingValue').textContent = this.value;
        });
    </script>
@endsection
