@extends('index')
@section('title', 'Projets Accompagnés')
@section('content')
    <div class="pagetitle">
        <h1><i class="fas fa-hands-helping me-2"></i>Projets Accompagnés</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Tableau de Bord</li>
            </ol>
        </nav>

        <div class="container-fluid mt-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1></h1>
                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#newSessionModal">
                    <i class="fas fa-plus me-1"></i> Nouvelle session
                </button>
            </div>
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row">
                @forelse($projetsAccompagnes as $accompagnement)
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <div
                                class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">{{ $accompagnement->mentorat->projet->nom ?? 'Nom du projet' }}</h5>
                                <span class="badge bg-success">{{ $accompagnement->mentorat->statut ?? 'Inconnu' }}</span>
                            </div>
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <img src="{{ asset('assets/img/product-3.jpg') }}" class="rounded-circle me-3"
                                        width="60">
                                    <div>
                                        <h6>Porteur: {{ $accompagnement->mentorat->user->name ?? 'Inconnu' }}</h6>
                                        <p>{{ $accompagnement->mentorat->user->email ?? 'Inconnu' }}</p>
                                    </div>
                                </div>
                                <p>{{ $accompagnement->messages ?? 'Pas de description disponible' }}</p>
                                <div class="mb-3">
                                    @foreach ($accompagnement->domaine_accompagnement as $domaine)
                                        <span class="badge bg-light text-dark">{{ $domaine }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <i class="fas fa-clock text-info me-1"></i>
                                        <small>{{ $accompagnement->disponibilites ?? 'N/A' }}</small>
                                    </div>

                                </div>

                            </div>
                            <div class="card-footer bg-white d-flex justify-content-between">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#sessionModal">
                                    <i class="fas fa-calendar me-1"></i> Sessions
                                </button>

                                <button class="btn btn-primary" 
                                    data-bs-toggle="modal" data-bs-target="#contactModal{{ $accompagnement->id }}">
                                <i class="fas fa-comments me-1"></i> Contacter
                            </button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal contact -->
                    <div class="modal fade" data-backdrop="static" data-keyboard="false"
                        id="contactModal{{ $accompagnement->id }}" tabindex="-1"
                        aria-labelledby="contactModalLabel{{ $accompagnement->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="contactModalLabel{{ $accompagnement->id }}">Contacter le
                                        porteur</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('mentor.accompagnement.envoyerMessage') }}">
                                        @csrf
                                        <!-- ID du porteur -->
                                        <input type="hidden" name="user_id"
                                            value="{{ $accompagnement->mentorat->user_id }}">

                                        <!-- Message -->
                                        <div class="mb-3">
                                            <label class="form-label">Message</label>
                                            <textarea name="message" class="form-control" rows="3" placeholder="Écrivez votre message ici..." required></textarea>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn btn-primary">Envoyer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted text-center text-danger">Aucun projet accompagné pour le moment.</p>
                @endforelse
            </div>
        </div>
    </div>
    </div>

    <!-- New Session Modal -->
    <div class="modal fade" id="sessionModal" tabindex="-1" aria-labelledby="newSessionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="newSessionModalLabel">Planifier une session</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="sessionForm">
                        <div class="mb-3">
                            <label class="form-label">Projet</label>
                            <select class="form-select">
                                <option selected>EcoTech</option>
                                <option>AgriConnect</option>
                                <option>MediTrack</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date et heure</label>
                            <input type="datetime-local" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Durée (minutes)</label>
                            <input type="number" class="form-control" value="60">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Type de session</label>
                            <select class="form-select">
                                <option selected>Stratégie</option>
                                <option>Technique</option>
                                <option>Business Model</option>
                                <option>Financement</option>
                                <option>Autre</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Planifier</button>
                </div>
            </div>
        </div>
    </div>


    </section>
@endsection
