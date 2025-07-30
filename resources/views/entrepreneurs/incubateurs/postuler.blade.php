@extends('index')
@section('title', 'Postuler à un incubateur')
@section('content')
<div class="pagetitle">
    <h1><i class="fas fa-building text-primary me-2"></i>Postuler à {{ $incubateur->nom }}</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('entrepreneur.dashboard') }}">Tableau de Bord</a></li>
            <li class="breadcrumb-item"><a href="{{ route('entrepreneur.incubateur.recherches') }}">Incubateurs</a></li>
            <li class="breadcrumb-item active">Postuler</li>
        </ol>
    </nav>
</div>

<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Formulaire de candidature</h5>
        </div>
        <div class="card-body">
            <form id="candidatureForm" action="{{ route('entrepreneur.incubateur.store-candidature', $incubateur) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="projet_id" class="form-label">Projet à incuber <span class="text-danger">*</span></label>
                    <select class="form-select" id="projet_id" name="projet_id" required>
                        <option value="" selected disabled>Choisissez un projet</option>
                        @foreach($projets as $projet)
                        <option value="{{ $projet->id }}">{{ $projet->nom }} - {{ $projet->secteur_activite }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="motivation" class="form-label">Lettre de motivation <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="motivation" name="motivation" rows="6" required
                        placeholder="Pourquoi souhaitez-vous intégrer cet incubateur ? Comment votre projet correspond à leur offre ? (Minimum 100 caractères)"></textarea>
                </div>

                <div class="mb-3">
                    <label for="business_plan" class="form-label">Business Plan <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="business_plan" name="business_plan" accept=".pdf" required>
                    <small class="text-muted">Format PDF uniquement (max 2MB)</small>
                </div>

                <div class="mb-3">
                    <label class="form-label">Équipe <span class="text-danger">*</span></label>
                    <div id="equipeContainer">
                        <div class="row mb-2 equipe-member">
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="equipe[0][nom]" placeholder="Nom complet" required>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="equipe[0][role]" placeholder="Rôle dans le projet" required>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-danger w-100 remove-member" disabled>
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type="button" id="addMemberBtn" class="btn btn-sm btn-outline-primary mt-2">
                        <i class="fas fa-plus me-1"></i> Ajouter un membre
                    </button>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="budget_previsionnel" class="form-label">Budget prévisionnel (€) <span class="text-danger">*</span></label>
                        <input type="number" step="0.01" class="form-control" id="budget_previsionnel" name="budget_previsionnel" required>
                    </div>
                    <div class="col-md-6">
                        <label for="duree_incubation" class="form-label">Durée d'incubation souhaitée <span class="text-danger">*</span></label>
                        <select class="form-select" id="duree_incubation" name="duree_incubation" required>
                            <option value="" selected disabled>Choisir...</option>
                            <option value="3 mois">3 mois</option>
                            <option value="6 mois">6 mois</option>
                            <option value="12 mois">12 mois</option>
                            <option value="18 mois">18 mois</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Besoins spécifiques</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="besoins_specifiques[]" value="espace_bureau" id="espace_bureau">
                        <label class="form-check-label" for="espace_bureau">Espace de bureau</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="besoins_specifiques[]" value="accompagnement_technique" id="accompagnement_technique">
                        <label class="form-check-label" for="accompagnement_technique">Accompagnement technique</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="besoins_specifiques[]" value="reseautage" id="reseautage">
                        <label class="form-check-label" for="reseautage">Réseautage</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="besoins_specifiques[]" value="financement" id="financement">
                        <label class="form-check-label" for="financement">Accès au financement</label>
                    </div>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="conditions" required>
                    <label class="form-check-label" for="conditions">Je certifie que les informations fournies sont exactes et j'accepte les <a href="#" data-bs-toggle="modal" data-bs-target="#conditionsModal">conditions générales</a>.</label>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('entrepreneur.incubateur.recherches') }}" class="btn btn-outline-secondary me-2">
                        <i class="fas fa-arrow-left me-1"></i> Retour
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane me-1"></i> Soumettre la candidature
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Conditions -->
<div class="modal fade" id="conditionsModal" tabindex="-1" aria-labelledby="conditionsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="conditionsModalLabel">Conditions générales</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Processus de sélection</h6>
                <p>Les candidatures sont examinées selon les critères suivants :...</p>

                <h6 class="mt-4">Engagements</h6>
                <p>En postulant, vous vous engagez à :...</p>

                <h6 class="mt-4">Confidentialité</h6>
                <p>Toutes les informations soumises seront traitées confidentiellement...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">J'ai compris</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de l'ajout/suppression des membres d'équipe
    let memberCount = 1;

    document.getElementById('addMemberBtn').addEventListener('click', function() {
        const container = document.getElementById('equipeContainer');
        const newMember = document.createElement('div');
        newMember.className = 'row mb-2 equipe-member';
        newMember.innerHTML = `
            <div class="col-md-5">
                <input type="text" class="form-control" name="equipe[${memberCount}][nom]" placeholder="Nom complet" required>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="equipe[${memberCount}][role]" placeholder="Rôle dans le projet" required>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger w-100 remove-member">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;
        container.appendChild(newMember);
        memberCount++;

        // Activer tous les boutons de suppression
        document.querySelectorAll('.remove-member').forEach(btn => {
            btn.disabled = false;
        });
    });

    // Délégation d'événement pour les boutons de suppression
    document.getElementById('equipeContainer').addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-member') || e.target.closest('.remove-member')) {
            const memberDiv = e.target.closest('.equipe-member');
            if (document.querySelectorAll('.equipe-member').length > 1) {
                memberDiv.remove();
            }

            // Désactiver le bouton de suppression s'il ne reste qu'un membre
            if (document.querySelectorAll('.equipe-member').length === 1) {
                document.querySelector('.remove-member').disabled = true;
            }
        }
    });
});
</script>

<style>
    .equipe-member {
        align-items: center;
    }
    #equipeContainer {
        border: 1px solid #eee;
        padding: 15px;
        border-radius: 5px;
    }
</style>
@endsection
