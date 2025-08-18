@extends('index')
@section('title', 'Projets Disponibles')
@section('content')
<div class="pagetitle">
    <h1><i class="fas fa-search me-2"></i>Projets Disponibles</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Tableau de Bord</li>
        </ol>
    </nav>

    <div class="container-fluid mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1></h1>
            <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#filtersModal">
                <i class="fas fa-filter me-1"></i> Filtres
            </button>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">
            @foreach($demandes_mentors as $demande)
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img-top project-image" style="background-image: url('{{ asset('assets/img/product-3.jpg') }}'); height:200px; background-size:cover;"></div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $demande->projet->nom }}</h5>
                            <p class="card-text text-muted">{!! $demande->status_badge !!}</p>
                            <p class="card-text">{{ $demande->projet->description }}</p>
                            <div class="mb-3">
                                @foreach($demande->domaine_accompagnement as $domaine)
                                    <span class="badge bg-light text-dark">{{ $domaine }}</span>
                                @endforeach
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="fas fa-user-tie text-info"></i>
                                    <small class="text-muted ms-1">1 mentor actuel</small>
                                </div>
                                <div>
                                    <i class="fas fa-clock text-primary"></i>
                                    <small class="text-muted ms-1">{{ $demande->disponibilites }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <!-- Bouton qui ouvre le modal -->
                            <button class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#modalAccompagnement{{ $demande->projet->id }}">
                                <i class="fas fa-hand-paper me-1"></i> Exprimer son intérêt
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal dynamique -->
                <div class="modal fade" id="modalAccompagnement{{ $demande->projet->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title">Exprimer son intérêt - {{ $demande->projet->nom }}</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>
                            <form method="POST" action="{{ route('mentor.accompagnements.store') }}">
                                @csrf
                                <input type="hidden" name="projet_id" value="{{ $demande->projet->id }}">
                                <input type="hidden" name="mentorat_id" value="{{ $demande->id }}">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Message au porteur</label>
                                        <textarea name="messages" class="form-control" rows="3" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Disponibilités</label>
                                        <input type="text" name="disponibilites" class="form-control" placeholder="Ex: Lundi et mercredi après-midi" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Type d'accompagnement</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="domaine_accompagnement[]" value="Stratégie">
                                            <label class="form-check-label">Stratégie</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="domaine_accompagnement[]" value="Technique">
                                            <label class="form-check-label">Technique</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="domaine_accompagnement[]" value="Réseau">
                                            <label class="form-check-label">Réseau</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="domaine_accompagnement[]" value="Financement">
                                            <label class="form-check-label">Financement</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="domaine_accompagnement[]" value="Marketing">
                                            <label class="form-check-label">Marketing</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="domaine_accompagnement[]" value="Juridique">
                                            <label class="form-check-label">Juridique</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <nav aria-label="Projects pagination">
            <ul class="pagination justify-content-center">
                {{ $demandes_mentors->links() }}
            </ul>
        </nav>
    </div>
</div>

<!-- Filters Modal -->
<div class="modal fade" id="filtersModal" tabindex="-1" aria-labelledby="filtersModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="filtersModalLabel">Filtrer les projets</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="projectsFilter">
                    <div class="mb-3">
                        <label class="form-label">Secteurs</label>
                        <select class="form-select" multiple>
                            <option>Technologie</option>
                            <option>Santé</option>
                            <option>Environnement</option>
                            <option>Agriculture</option>
                            <option>Éducation</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Niveau d'engagement</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="commitmentLow" checked>
                            <label class="form-check-label" for="commitmentLow">Faible (1-3h/semaine)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="commitmentMedium" checked>
                            <label class="form-check-label" for="commitmentMedium">Moyen (3-5h/semaine)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="commitmentHigh">
                            <label class="form-check-label" for="commitmentHigh">Élevé (5h+/semaine)</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Type d'accompagnement</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="typeStrategy" checked>
                            <label class="form-check-label" for="typeStrategy">Stratégie</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="typeTechnical" checked>
                            <label class="form-check-label" for="typeTechnical">Technique</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="typeBusiness">
                            <label class="form-check-label" for="typeBusiness">Business Model</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Appliquer</button>
            </div>
        </div>
    </div>
</div>
@endsection
