@extends('index')
@section('title', 'Nouvel appel à projets')
@section('content')
    <div class="pagetitle">

            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-plus-circle me-2"></i>Nouvel appel à projets</h1>
                    
                    <div>
                        <button class="btn btn-outline-secondary me-2" id="saveDraftBtn">
                            <i class="fas fa-save me-1"></i> Sauvegarder brouillon
                        </button>
                        <button class="btn btn-primary" id="publishBtn">
                            <i class="fas fa-paper-plane me-1"></i> Publier
                        </button>
                    </div>
                </div>

                <!-- Creation Steps -->
                <ul class="nav nav-pills mb-4" id="creationSteps" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="step1-tab" data-bs-toggle="pill" data-bs-target="#step1" type="button">
                            <span class="badge bg-primary rounded-circle me-1">1</span> Informations
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="step2-tab" data-bs-toggle="pill" data-bs-target="#step2" type="button">
                            <span class="badge bg-secondary rounded-circle me-1">2</span> Critères
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="step3-tab" data-bs-toggle="pill" data-bs-target="#step3" type="button">
                            <span class="badge bg-secondary rounded-circle me-1">3</span> Contenu
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="step4-tab" data-bs-toggle="pill" data-bs-target="#step4" type="button">
                            <span class="badge bg-secondary rounded-circle me-1">4</span> Revue
                        </button>
                    </li>
                </ul>

                <!-- Steps Content -->
                <div class="tab-content" id="creationStepsContent">
                    <!-- Step 1: Basic Info -->
                    <div class="tab-pane fade show active" id="step1" role="tabpanel">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i> Informations de base</h5>
                            </div>
                            <div class="card-body">
                                <form id="basicInfoForm">
                                    <div class="row mb-3">
                                        <div class="col-md-8">
                                            <label class="form-label">Titre de l'appel </label>
                                            <input type="text" class="form-control" placeholder="Ex: Innovation EdTech 2023" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Référence</label>
                                            <input type="text" class="form-control" placeholder="Générée automatiquement" disabled>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <label class="form-label">Description courte *</label>
                                            <textarea class="form-control" rows="2" placeholder="Résumé en 1-2 phrases (visible dans les listes)" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Thématique principale *</label>
                                            <select class="form-select" required>
                                                <option value="" disabled selected>Choisir une thématique</option>
                                                <option>Technologie</option>
                                                <option>Santé</option>
                                                <option>Environnement</option>
                                                <option>Éducation</option>
                                                <option>Agriculture</option>
                                                <option>Industrie</option>
                                                <option>Services</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Thématiques secondaires</label>
                                            <select class="form-select" multiple>
                                                <option>Technologie</option>
                                                <option>Santé</option>
                                                <option>Environnement</option>
                                                <option>Éducation</option>
                                                <option>Agriculture</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label">Date d'ouverture *</label>
                                            <input type="date" class="form-control" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Date limite *</label>
                                            <input type="date" class="form-control" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Date de sélection</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Budget total (€) *</label>
                                            <input type="number" class="form-control" placeholder="Ex: 150000" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Nombre de projets attendus</label>
                                            <input type="number" class="form-control" placeholder="Ex: 15">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Financement max/projet (€)</label>
                                            <input type="number" class="form-control" placeholder="Ex: 25000">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="text-end mt-3">
                            <button class="btn btn-primary" id="nextToStep2">
                                Suivant <i class="fas fa-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Evaluation Criteria -->
                    <div class="tab-pane fade" id="step2" role="tabpanel">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0"><i class="fas fa-clipboard-check me-2"></i> Critères d'évaluation</h5>
                            </div>
                            <div class="card-body">
                                <form id="criteriaForm">
                                    <div class="mb-4">
                                        <h6><i class="fas fa-lightbulb me-2"></i> Critères principaux</h6>
                                        <div class="table-responsive">
                                            <table class="table" id="mainCriteriaTable">
                                                <thead>
                                                    <tr>
                                                        <th width="40%">Critère</th>
                                                        <th width="15%">Poids (%)</th>
                                                        <th width="35%">Description</th>
                                                        <th width="10%"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" value="Innovation" required>
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control" value="30" min="1" max="100" required>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" value="Degré de nouveauté et créativité">
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-danger" type="button">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <!-- Plus de critères... -->
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="4">
                                                            <button class="btn btn-sm btn-outline-primary" type="button" id="addMainCriterion">
                                                                <i class="fas fa-plus me-1"></i> Ajouter un critère
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <h6><i class="fas fa-check-circle me-2"></i> Éligibilité</h6>
                                        <div class="table-responsive">
                                            <table class="table" id="eligibilityTable">
                                                <thead>
                                                    <tr>
                                                        <th width="80%">Condition</th>
                                                        <th width="20%"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" value="Projet en phase de prototypage ou pré-commercialisation" required>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-danger" type="button">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <!-- Plus de conditions... -->
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2">
                                                            <button class="btn btn-sm btn-outline-primary" type="button" id="addEligibility">
                                                                <i class="fas fa-plus me-1"></i> Ajouter une condition
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <h6><i class="fas fa-file-alt me-2"></i> Documents requis</h6>
                                        <div class="table-responsive">
                                            <table class="table" id="documentsTable">
                                                <thead>
                                                    <tr>
                                                        <th width="40%">Document</th>
                                                        <th width="20%">Format</th>
                                                        <th width="30%">Description</th>
                                                        <th width="10%"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" value="Business Plan" required>
                                                        </td>
                                                        <td>
                                                            <select class="form-select">
                                                                <option>PDF</option>
                                                                <option>Word</option>
                                                                <option>PPT</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" value="Maximum 20 pages">
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-danger" type="button">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <!-- Plus de documents... -->
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="4">
                                                            <button class="btn btn-sm btn-outline-primary" type="button" id="addDocument">
                                                                <i class="fas fa-plus me-1"></i> Ajouter un document
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <button class="btn btn-outline-secondary" id="backToStep1">
                                <i class="fas fa-arrow-left me-1"></i> Précédent
                            </button>
                            <button class="btn btn-primary" id="nextToStep3">
                                Suivant <i class="fas fa-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Step 3: Detailed Content -->
                    <div class="tab-pane fade" id="step3" role="tabpanel">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0"><i class="fas fa-align-left me-2"></i> Contenu détaillé</h5>
                            </div>
                            <div class="card-body">
                                <form id="contentForm">
                                    <div class="mb-4">
                                        <label class="form-label">Description complète *</label>
                                        <textarea id="fullDescription" class="form-control" required></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Objectifs *</label>
                                        <textarea id="objectives" class="form-control" required></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Public cible *</label>
                                        <textarea id="target" class="form-control" required></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Calendrier et étapes</label>
                                        <textarea id="timeline" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Modalités de participation</label>
                                        <textarea id="participation" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Contacts et informations complémentaires</label>
                                        <textarea id="contacts" class="form-control"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <button class="btn btn-outline-secondary" id="backToStep2">
                                <i class="fas fa-arrow-left me-1"></i> Précédent
                            </button>
                            <button class="btn btn-primary" id="nextToStep4">
                                Suivant <i class="fas fa-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Step 4: Review & Publish -->
                    <div class="tab-pane fade" id="step4" role="tabpanel">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0"><i class="fas fa-search me-2"></i> Revue et publication</h5>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-info">
                                    <i class="fas fa-info-circle me-2"></i> Vérifiez attentivement toutes les informations avant de publier l'appel.
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-4">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0"><i class="fas fa-info-circle me-2"></i> Informations de base</h6>
                                            </div>
                                            <div class="card-body">
                                                <p><strong>Titre:</strong> <span id="reviewTitle">Innovation EdTech 2023</span></p>
                                                <p><strong>Thématique:</strong> <span id="reviewTheme">Éducation, Technologie</span></p>
                                                <p><strong>Dates:</strong> Du <span id="reviewStartDate">01/07/2023</span> au <span id="reviewEndDate">15/08/2023</span></p>
                                                <p><strong>Budget:</strong> <span id="reviewBudget">150 000 €</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mb-4">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0"><i class="fas fa-clipboard-check me-2"></i> Critères principaux</h6>
                                            </div>
                                            <div class="card-body">
                                                <ul class="mb-0" id="reviewCriteria">
                                                    <li>Innovation (30%)</li>
                                                    <li>Potentiel marché (25%)</li>
                                                    <li>Équipe (20%)</li>
                                                    <li>Faisabilité technique (15%)</li>
                                                    <li>Impact social (10%)</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h6 class="mb-0"><i class="fas fa-file-alt me-2"></i> Aperçu du contenu</h6>
                                    </div>
                                    <div class="card-body">
                                        <div id="reviewContent">
                                            <h5>Description</h5>
                                            <p>Cet appel à projets vise à soutenir les innovations technologiques dans le domaine de l'éducation...</p>
                                            <h5 class="mt-3">Objectifs</h5>
                                            <ul>
                                                <li>Promouvoir l'innovation pédagogique</li>
                                                <li>Faciliter l'accès à l'éducation</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Commentaires internes (optionnel)</label>
                                    <textarea class="form-control" rows="3" placeholder="Notes pour votre équipe..."></textarea>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="confirmCheck" required>
                                    <label class="form-check-label" for="confirmCheck">
                                        Je confirme que toutes les informations sont exactes et complètes *
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <button class="btn btn-outline-secondary" id="backToStep3">
                                <i class="fas fa-arrow-left me-1"></i> Précédent
                            </button>
                            <button class="btn btn-success" id="confirmPublish">
                                <i class="fas fa-paper-plane me-1"></i> Publier l'appel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-fr-FR.min.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/incubateurs.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize Summernote editors
            $('#fullDescription, #objectives, #target, #timeline, #participation, #contacts').summernote({
                lang: 'fr-FR',
                height: 200,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

            // Navigation between steps
            $('#nextToStep2').click(function() {
                if ($('#basicInfoForm')[0].checkValidity()) {
                    $('#step1-tab').removeClass('active').addClass('completed');
                    $('#step2-tab').addClass('active');
                    $('#step1').removeClass('show active');
                    $('#step2').addClass('show active');
                    $('.badge', '#step2-tab').removeClass('bg-secondary').addClass('bg-primary');
                } else {
                    $('#basicInfoForm')[0].reportValidity();
                }
            });

            $('#backToStep1').click(function() {
                $('#step2-tab').removeClass('active');
                $('#step1-tab').addClass('active');
                $('#step2').removeClass('show active');
                $('#step1').addClass('show active');
            });

            // Similar handlers for other steps...
            // Step navigation would be implemented similarly for all steps

            // Add criterion row
            $('#addMainCriterion').click(function() {
                const newRow = `
                    <tr>
                        <td><input type="text" class="form-control" required></td>
                        <td><input type="number" class="form-control" min="1" max="100" required></td>
                        <td><input type="text" class="form-control"></td>
                        <td><button class="btn btn-sm btn-outline-danger" type="button"><i class="fas fa-times"></i></button></td>
                    </tr>`;
                $('#mainCriteriaTable tbody').append(newRow);
            });

            // Similar handlers for adding eligibility and document rows...

            // Save draft
            $('#saveDraftBtn').click(function() {
                alert('Brouillon sauvegardé avec succès !');
                // In a real app, this would save to database via AJAX
            });

            // Publish call
            $('#confirmPublish').click(function() {
                if ($('#confirmCheck').is(':checked')) {
                    alert('Appel publié avec succès !');
                    // In a real app, this would submit the form
                } else {
                    alert('Veuillez confirmer que les informations sont exactes.');
                }
            });
        });
    </script>
@endsection
