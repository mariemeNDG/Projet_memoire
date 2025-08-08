@extends('index')
@section('title', 'Recherche de Financement')
@section('content')
    <div class="pagetitle">
        <h1><i class="fas fa-hand-holding-usd text-primary me-2"></i>Recherche de Financement</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Tableau de Bord</li>
                <li class="breadcrumb-item active">Financement</li>
            </ol>
        </nav>

        <div class="container-fluid mt-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1></h1>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newFundingModal">
                    <i class="fas fa-bullhorn me-1"></i> Publier une demande
                </button>
            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="input-group">
                                        <input type="text" class="form-control"
                                            placeholder="Rechercher des investisseurs...">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="dropdown ms-3">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown">
                                        <i class="fas fa-filter me-1"></i> Filtres
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <h6 class="dropdown-header">Type de financement</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="far fa-check-circle me-2"></i>Capital-risque</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="far fa-check-circle me-2"></i>Prêt</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="far fa-check-circle me-2"></i>Subvention</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <h6 class="dropdown-header">Montant</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="far fa-check-circle me-2"></i>Moins de 50K€</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="far fa-check-circle me-2"></i>50K€ - 200K€</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="far fa-check-circle me-2"></i>Plus de 200K€</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-5">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Mes demandes de financement</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($financements as $financement)
                            <div class="col-md-4 mb-4 mt-2">
                                <div class="card h-100 shadow-sm border">
                                    <div class="card-body">
                                        <h6 class="fw-bold mb-2">{{ $financement->projet->nom ?? 'Projet inconnu' }}</h6>
                                        <p class="mb-1"><strong>Type :</strong> {{ ucfirst($financement->type) }}</p>
                                        <p class="mb-1"><strong>Montant :</strong>
                                            {{ number_format($financement->montant, 0, ',', ' ') }} FCFA</p>

                                        <p class="mb-2"><strong>Description :</strong>
                                            {{ Str::limit($financement->description, 80) }}
                                        </p>
                                        <p class="mb-2"><strong>Statut :</strong>
                                            <span class="badge bg-{{ $financement->statut == 'En attente' ? 'warning' : ($financement->statut == 'Accepté' ? 'success' : 'danger') }}">
                                                {{ $financement->statut }}
                                            </span>
                                        </p>
                                        @if ($financement->document)
                                            <a href="{{ asset('storage/' . $financement->document) }}" target="_blank"
                                                class="btn btn-sm btn-outline-primary">
                                                Voir document
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>

    <!-- Modal Nouvelle Demande -->
    <div class="modal fade" id="newFundingModal" tabindex="-1" aria-labelledby="newFundingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="newFundingModalLabel">Publier une demande de financement</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="fundingForm" method="POST" action="{{ route('entrepreneur.financement.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="fundingProject" class="form-label">Projet *</label>
                                <select class="form-select" id="fundingProject" name="projet_id" required>
                                    <option value="" selected disabled>Choisir un projet</option>
                                    @foreach ($projets as $projet)
                                        <option value="{{ $projet->id }}">{{ $projet->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="fundingType" class="form-label">Type de financement *</label>
                                <select class="form-select" id="fundingType" name="type" required>
                                    <option value="" selected disabled>Choisir un type</option>
                                    <option value="Prêt">Prêt</option>
                                    <option value="Subvention">Subvention</option>
                                    <option value="Mixte">Mixte</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="fundingAmount" class="form-label">Montant recherché (cfa) *</label>
                                <input type="number" class="form-control" id="fundingAmount" name="montant" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="fundingDescription" class="form-label">Description de la demande *</label>
                            <textarea class="form-control" id="fundingDescription" name="description" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="fundingDocuments" class="form-label">Documents complémentaires</label>
                            <input type="file" class="form-control" id="fundingDocuments" name="document">
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="fundingVisibility">
                            <label class="form-check-label" for="fundingVisibility">
                                Rendre cette demande visible par tous les investisseurs
                            </label>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Publier la demande</button>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>

    </section>
@endsection

@if (session('success'))
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1050">
        <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
