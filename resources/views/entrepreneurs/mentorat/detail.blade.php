@extends('index')
@section('title', 'Détails de la demande de mentorat')
@section('content')
<div class="pagetitle">
    <h1><i class="fas fa-user-tie text-primary me-2"></i>Détails de la demande</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('entrepreneur.dashboard') }}">Tableau de Bord</a></li>
            <li class="breadcrumb-item"><a href="{{ route('entrepreneur.mentorat.index') }}">Mentorat</a></li>
            <li class="breadcrumb-item active">Détails</li>
        </ol>
    </nav>
</div>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Détails de la demande</h5>
                    <span class="badge
                        @if($mentorat->statut == 'Accepté') bg-success
                        @elseif($mentorat->statut == 'Refusé') bg-danger
                        @else bg-warning
                        @endif">
                        {{ $mentorat->statut }}
                    </span>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6><i class="fas fa-user-tie text-primary me-2"></i>Mentor</h6>
                            <div class="d-flex align-items-center mt-3">
                                <img src="{{ asset('assets/images/utilisateurs/avatar-mentor.jpg') }}"
                                     class="rounded-circle me-3" width="60">
                                <div>
                                    <h5 class="mb-0">{{ $mentorat->mentor->name }}</h5>
                                    <p class="text-muted mb-0">{{ $mentorat->mentor->competences ?? 'Expertise non spécifiée' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6><i class="fas fa-project-diagram text-primary me-2"></i>Projet</h6>
                            <div class="mt-3">
                                <h5>{{ $mentorat->projet->nom }}</h5>
                                <p class="text-muted mb-1">{{ $mentorat->projet->secteur_activite }}</p>
                                <p class="mb-0">Budget: {{ number_format($mentorat->projet->budget, 0, ',', ' ') }} €</p>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="mb-4">
                        <h6><i class="fas fa-bullseye text-primary me-2"></i>Domaines d'accompagnement</h6>
                        <div class="mt-3">
                            @foreach($mentorat->domaine_accompagnement as $domaine)
                                <span class="badge bg-light text-dark me-1 mb-1">
                                    {{ ucfirst($domaine) }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6><i class="fas fa-tasks text-primary me-2"></i>Objectifs</h6>
                        <p class="mt-3">{{ $mentorat->objectif_accompagnement }}</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h6><i class="fas fa-calendar-alt text-primary me-2"></i>Disponibilités</h6>
                            <p class="mt-3">{{ $mentorat->disponibilites }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6><i class="fas fa-clock text-primary me-2"></i>Durée souhaitée</h6>
                            <p class="mt-3">{{ $mentorat->duree }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Informations</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Date de la demande</span>
                            <strong>{{ $mentorat->created_at->format('d/m/Y H:i') }}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Dernière mise à jour</span>
                            <strong>{{ $mentorat->updated_at->format('d/m/Y H:i') }}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Statut</span>
                            <strong class="text-
                                @if($mentorat->statut == 'Accepté') success
                                @elseif($mentorat->statut == 'Refusé') danger
                                @else warning
                                @endif">
                                {{ $mentorat->statut }}
                            </strong>
                        </li>
                    </ul>
                </div>
            </div>

            @if($mentorat->statut == 'En attente')
            <div class="card">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Actions</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('entrepreneur.mentorat.destroy', $mentorat) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100 mb-2"
                                onclick="return confirm('Annuler cette demande de mentorat?')">
                            <i class="fas fa-times me-1"></i> Annuler la demande
                        </button>
                    </form>
                    
                </div>
            </div>
            @endif
        </div>
    </div>

    @if($mentorat->statut == 'Accepté')
    <div class="card">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0"><i class="fas fa-check-circle me-2"></i>Mentorat accepté</h5>
        </div>
        <div class="card-body">
            <div class="alert alert-success">
                <h6><i class="fas fa-info-circle me-2"></i>Prochaines étapes</h6>
                <ol class="mb-0">
                    <li>Le mentor vous contactera pour planifier votre première session</li>
                    <li>Préparez vos questions et objectifs pour cette première rencontre</li>
                    <li>Consultez votre messagerie régulièrement</li>
                </ol>
            </div>
            <a href="#" class="btn btn-success">
                <i class="fas fa-envelope me-1"></i> Contacter le mentor
            </a>
        </div>
    </div>
    @endif
</div>
@endsection
