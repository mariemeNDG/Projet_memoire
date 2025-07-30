@extends('index')
@section('title', 'Détails du projet')
@section('content')
    <div class="pagetitle">
        <h1>Détails du projet</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('entrepreneur.dashboard') }}">Tableau de bord</a></li>
                <li class="breadcrumb-item"><a href="{{ route('entrepreneur.projets.index') }}">Mes projets</a></li>
                <li class="breadcrumb-item active">{{ $projet->nom }}</li>
            </ol>
        </nav>
    </div>

    <div class="container-fluid mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1><i class="fas fa-project-diagram text-primary me-2"></i>{{ $projet->nom }}</h1>
            </div>
            <div>
                <a href="{{ route('entrepreneur.projets.edit', $projet) }}" class="btn btn-warning me-2">
                    <i class="fas fa-edit me-1"></i> Modifier
                </a>
                <a href="{{ route('entrepreneur.projets.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Retour
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Informations générales</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Secteur :</strong> {{ $projet->secteur_activite }}</p>
                                <p><strong>Statut :</strong>
                                    <span
                                        class="badge
                                        @if ($projet->etat == 'labellisé') bg-success
                                        @elseif($projet->etat == 'en incubation') bg-info
                                        @elseif($projet->etat == 'en financement') bg-primary
                                        @elseif($projet->etat == 'en conception') bg-warning
                                        @else bg-secondary @endif">
                                        {{ ucfirst($projet->etat) }}
                                    </span>
                                </p>
                                <p><strong>Date création :</strong> {{ $projet->created_at->format('d/m/Y') }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Budget estimé :</strong> {{ number_format($projet->budget, 0, ',', ' ') }} €</p>
                                <p><strong>Durée estimée :</strong> {{ $projet->duree }} mois</p>
                                <p><strong>Équipe :</strong> {{ $projet->equipe }} personne(s)</p>
                            </div>
                        </div>
                        <hr>
                        <h5>Description</h5>
                        <p>{{ $projet->description ?? 'Aucune description disponible' }}</p>
                    </div>
                </div>

                @if ($projet->document)
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Documents</h5>
                        </div>
                        <div class="card-body">
                            <div class="list-group">
                                <a href="{{ asset('storage/' . $projet->document) }}" target="_blank"
                                    class="list-group-item list-group-item-action">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-file-pdf text-danger me-2"></i>
                                            {{ basename($projet->document) }}
                                        </div>
                                        @php
                                            $filePath = storage_path('app/public/' . $projet->document);
                                            $fileSize = file_exists($filePath)
                                                ? round(filesize($filePath) / 1024 / 1024, 1)
                                                : 'N/A';
                                        @endphp
                                        <span class="badge bg-light text-dark">{{ $fileSize }} MB</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="col-md-4">
                {{-- <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Avancement</h5>
                    </div>
                    <div class="card-body text-center">
                        <div class="progress-circle mx-auto mb-3" data-value="{{ $projet->avancement ?? 0 }}">
                            <svg class="progress-circle-svg" viewBox="0 0 36 36">
                                <path class="progress-circle-bg" d="M18 2.0845
                                        a 15.9155 15.9155 0 0 1 0 31.831
                                        a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="progress-circle-fill" stroke-dasharray="{{ $projet->avancement ?? 0 }}, 100"
                                    d="M18 2.0845
                                        a 15.9155 15.9155 0 0 1 0 31.831
                                        a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text class="progress-circle-text" x="18" y="20.35">{{ $projet->avancement ?? 0 }}%</text>
                            </svg>
                        </div>
                        <h5>Projet à {{ $projet->avancement ?? 0 }}%</h5>
                        <p class="text-muted">
                            @if (($projet->avancement ?? 0) < 30)
                                Phase de conception
                            @elseif(($projet->avancement ?? 0) < 70)
                                Phase de développement
                            @else
                                Phase finale
                            @endif
                        </p>
                    </div>
                </div> --}}

                @if ($projet->accompagnement && is_array(json_decode($projet->accompagnement, true)))
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Accompagnement recherché</h5>
                        </div>
                        <div class="card-body">
                            @foreach (json_decode($projet->accompagnement, true) as $item)
                                <span class="badge bg-light text-dark mb-2 me-1">
                                    <i
                                        class="fas
                                            @if ($item == 'mentor') fa-user-tie text-primary
                                            @elseif($item == 'incubateur') fa-building text-success
                                            @elseif($item == 'financement') fa-hand-holding-usd text-warning @endif me-1">
                                    </i>
                                    {{ ucfirst($item) }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Actions rapides</h5>
                    </div>
                    <div class="card-body mb-3">
                        <a href="" class="btn btn-outline-primary w-100 mb-2">
                            <i class="fas fa-user-tie me-1"></i> Demander un mentor
                        </a>
                        <a href="" class="btn btn-outline-success w-100 mb-2">
                            <i class="fas fa-building me-1"></i> Postuler à un incubateur
                        </a>
                        <a href="" class="btn btn-outline-warning w-100">
                            <i class="fas fa-hand-holding-usd me-1"></i> Chercher un financement
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .progress-circle {
            position: relative;
            width: 120px;
            height: 120px;
        }

        .progress-circle-svg {
            transform: rotate(-90deg);
        }

        .progress-circle-bg {
            fill: none;
            stroke: #e6e6e6;
            stroke-width: 3;
        }

        .progress-circle-fill {
            fill: none;
            stroke: #4CAF50;
            stroke-width: 3;
            stroke-linecap: round;
            transition: stroke-dasharray 0.6s ease;
        }

        .progress-circle-text {
            font-size: 0.5rem;
            font-weight: bold;
            fill: #333;
            text-anchor: middle;
        }
    </style>
@endsection
