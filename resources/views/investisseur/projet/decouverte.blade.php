@extends('index')
@section('title', 'Découverte')
@section('content')

    <!-- Discovery Content -->
    <div class="container-fluid mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1><i class="fas fa-search me-2"></i>Découverte de Projets</h1>
            <div>
                <button class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#filtersModal">
                    <i class="fas fa-filter me-1"></i> Filtres
                </button>
                <button class="btn btn-primary" id="refreshProjects">
                    <i class="fas fa-sync-alt me-1"></i> Actualiser
                </button>
            </div>
        </div>
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
        <!-- Project Filters -->
        <div class="row mb-4" id="activeFilters">
            <div class="col-12">
                <div class="alert alert-light d-flex align-items-center">
                    <strong class="me-3">Filtres actifs :</strong>
                    <span class="badge bg-light text-dark me-2">
                        Technologie <button class="btn-close btn-close-sm ms-1"></button>
                    </span>
                    <span class="badge bg-light text-dark me-2">
                        50K-500K€ <button class="btn-close btn-close-sm ms-1"></button>
                    </span>
                    <span class="badge bg-light text-dark">
                        Prototype <button class="btn-close btn-close-sm ms-1"></button>
                    </span>
                    <button class="btn btn-link ms-auto">Effacer tout</button>
                </div>
            </div>
        </div>


        <!-- Projects Grid -->
        <div class="row" id="projectsGrid">
            @foreach ($projets as $projet)
                <div class="col-xl-4 col-lg-6 mb-4">
                    <div class="card h-100 project-card">
                        <div class="card-img-top project-image"
                            style="background-image: url('../../../assets/images/projets/projet1.jpg');">
                            <span class="position-absolute top-0 end-0 m-2">{!! $projet->etat_badge !!}</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <h5 class="card-title">{{ $projet->nom }}</h5>

                            </div>
                            <p class="card-text text-muted">
                                <i class="fas fa-map-marker-alt me-1"></i> Mbour, Sénégal
                            </p>
                            <p class="card-text">
                                {{ $projet->description }}
                            </p>
                            <div class="financement-section mt-3">
                                <h6 class="text-primary">Demandes de financement</h6>
                                @foreach ($projet->financements as $financement)
                                    <div class="mb-2 p-2 border rounded">
                                        <div class="d-flex justify-content-between">
                                            <strong>{{ $financement->type }}</strong>
                                            <span class="badge bg-warning">{{ ucfirst($financement->statut) }}</span>
                                        </div>
                                        <div class="d-flex justify-content-between mt-1">
                                            <span>Montant: {{ number_format($financement->montant, 2) }} €</span>
                                            <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                                data-bs-target="#investModal" data-projet-id="{{ $projet->id }}"
                                                data-financement-id="{{ $financement->id }}">
                                                Investir
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <nav aria-label="Projects pagination">
            <ul class="pagination justify-content-center">
                {{ $projets->links() }}
            </ul>
        </nav>
    </div>
    </div>
    </div>

<!-- Invest Modal -->
<div class="modal fade" id="investModal" tabindex="-1" aria-labelledby="investModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="investModalLabel">Exprimer son intérêt</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('investisseur.investir') }}">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="financementId" name="financement_id" value="">

                    <div class="mb-3">
                        <label for="investmentAmount" class="form-label">Votre montant (CFA)</label>
                        <input type="number" class="form-control" id="investmentAmount" name="montant" required>
                    </div>

                    <div class="mb-3">
                        <label for="investmentMessage" class="form-label">Message</label>
                        <textarea class="form-control" id="investmentMessage" name="message" rows="3" required></textarea>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/investisseurs.js"></script>
    <script>
        // Gestion des filtres actifs
        document.querySelectorAll('#activeFilters .btn-close').forEach(btn => {
            btn.addEventListener('click', function() {
                this.parentElement.remove();
            });
        });

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Initialisation du modal et passage des données
    document.addEventListener('DOMContentLoaded', function() {
        const investModal = document.getElementById('investModal');

        investModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const financementId = button.getAttribute('data-financement-id');

            // Mettre à jour la valeur du champ caché
            document.getElementById('financementId').value = financementId;
        });
    });
</script>


    </script>
@endsection
