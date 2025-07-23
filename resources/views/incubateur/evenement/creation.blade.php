@extends('index')
@section('title', 'Création d\'événement')
@section('content')
    <div class="pagetitle">

            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-plus-circle me-2"></i>Créer un nouvel événement</h1>
                    <div>
                        <button class="btn btn-outline-secondary me-2" id="saveDraftBtn">
                            <i class="fas fa-save me-1"></i> Sauvegarder brouillon
                        </button>
                        <button class="btn btn-primary" id="publishBtn">
                            <i class="fas fa-paper-plane me-1"></i> Publier
                        </button>
                    </div>
                </div>

                <!-- Creation Form -->
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="fas fa-calendar-plus me-2"></i> Formulaire de création</h5>
                    </div>
                    <div class="card-body">
                        <form id="eventForm">
                            <div class="row mb-4">
                                <div class="col-md-8">
                                    <label class="form-label">Titre de l'événement *</label>
                                    <input type="text" class="form-control" placeholder="Ex: Atelier Pitch Deck" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Type d'événement *</label>
                                    <select class="form-select" required>
                                        <option value="" disabled selected>Choisir un type</option>
                                        <option>Atelier</option>
                                        <option>Conférence</option>
                                        <option>Réseautage</option>
                                        <option>Pitch</option>
                                        <option>Formation</option>
                                        <option>Autre</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label class="form-label">Date et heure de début *</label>
                                    <input type="text" class="form-control datetimepicker" placeholder="JJ/MM/AAAA HH:MM" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Date et heure de fin *</label>
                                    <input type="text" class="form-control datetimepicker" placeholder="JJ/MM/AAAA HH:MM" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Fuseau horaire</label>
                                    <select class="form-select">
                                        <option selected>GMT +0 (Dakar)</option>
                                        <option>GMT +1 (Paris)</option>
                                        <option>GMT -5 (New York)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label">Lieu *</label>
                                    <select class="form-select" id="locationType" required>
                                        <option value="" disabled selected>Type de lieu</option>
                                        <option value="physical">Lieu physique</option>
                                        <option value="online">En ligne</option>
                                        <option value="hybrid">Hybride</option>
                                    </select>
                                    <div id="physicalLocation" class="mt-2">
                                        <input type="text" class="form-control" placeholder="Adresse complète">
                                    </div>
                                    <div id="onlineLocation" class="mt-2 d-none">
                                        <input type="text" class="form-control" placeholder="Lien de la visioconférence">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Responsable *</label>
                                    <select class="form-select" required>
                                        <option value="" disabled selected>Choisir un responsable</option>
                                        <option>Paul Ndiaye</option>
                                        <option>Amina Diop</option>
                                        <option>Jean Martin</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Description détaillée *</label>
                                <textarea id="eventDescription" class="form-control" required></textarea>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label class="form-label">Capacité maximale</label>
                                    <input type="number" class="form-control" placeholder="Nombre de participants">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Public cible</label>
                                    <select class="form-select" multiple>
                                        <option selected>Porteurs de projets</option>
                                        <option>Mentors</option>
                                        <option>Investisseurs</option>
                                        <option>Public externe</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Visibilité</label>
                                    <select class="form-select">
                                        <option selected>Public (visible par tous)</option>
                                        <option>Interne (uniquement incubés)</option>
                                        <option>Privé (sur invitation)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Intervenants</label>
                                <div class="table-responsive">
                                    <table class="table" id="speakersTable">
                                        <thead>
                                            <tr>
                                                <th width="30%">Nom</th>
                                                <th width="25%">Rôle</th>
                                                <th width="30%">Organisation</th>
                                                <th width="15%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Nom complet">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Expert pitch">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Capital Ventures">
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-danger" type="button">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4">
                                                    <button class="btn btn-sm btn-outline-primary" type="button" id="addSpeaker">
                                                        <i class="fas fa-plus me-1"></i> Ajouter un intervenant
                                                    </button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Matériel nécessaire</label>
                                <div class="table-responsive">
                                    <table class="table" id="materialsTable">
                                        <thead>
                                            <tr>
                                                <th width="60%">Description</th>
                                                <th width="20%">Quantité</th>
                                                <th width="20%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Projecteur">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" placeholder="1">
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-danger" type="button">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3">
                                                    <button class="btn btn-sm btn-outline-primary" type="button" id="addMaterial">
                                                        <i class="fas fa-plus me-1"></i> Ajouter du matériel
                                                    </button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Image de couverture</label>
                                <input type="file" class="form-control" accept="image/*">
                                <small class="text-muted">Format recommandé : 1200x630 pixels</small>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="sendNotifications">
                                <label class="form-check-label" for="sendNotifications">
                                    Envoyer des notifications aux participants concernés
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-fr-FR.min.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/incubateurs.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize datetime picker
            flatpickr(".datetimepicker", {
                enableTime: true,
                dateFormat: "d/m/Y H:i",
                locale: "fr",
                minDate: "today"
            });

            // Initialize Summernote editor
            $('#eventDescription').summernote({
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

            // Location type toggle
            $('#locationType').change(function() {
                const type = $(this).val();
                $('#physicalLocation, #onlineLocation').addClass('d-none');

                if (type === 'physical') {
                    $('#physicalLocation').removeClass('d-none');
                } else if (type === 'online') {
                    $('#onlineLocation').removeClass('d-none');
                } else if (type === 'hybrid') {
                    $('#physicalLocation, #onlineLocation').removeClass('d-none');
                }
            });

            // Add speaker row
            $('#addSpeaker').click(function() {
                const newRow = `
                    <tr>
                        <td><input type="text" class="form-control" placeholder="Nom complet"></td>
                        <td><input type="text" class="form-control" placeholder="Rôle"></td>
                        <td><input type="text" class="form-control" placeholder="Organisation"></td>
                        <td><button class="btn btn-sm btn-outline-danger" type="button"><i class="fas fa-times"></i></button></td>
                    </tr>`;
                $('#speakersTable tbody').append(newRow);
            });

            // Add material row
            $('#addMaterial').click(function() {
                const newRow = `
                    <tr>
                        <td><input type="text" class="form-control" placeholder="Description"></td>
                        <td><input type="number" class="form-control" placeholder="Quantité"></td>
                        <td><button class="btn btn-sm btn-outline-danger" type="button"><i class="fas fa-times"></i></button></td>
                    </tr>`;
                $('#materialsTable tbody').append(newRow);
            });

            // Save draft
            $('#saveDraftBtn').click(function() {
                alert('Brouillon sauvegardé avec succès !');
                // In a real app, this would save to database via AJAX
            });

            // Publish event
            $('#publishBtn').click(function() {
                if ($('#eventForm')[0].checkValidity()) {
                    alert('Événement publié avec succès !');
                    // In a real app, this would submit the form
                } else {
                    $('#eventForm')[0].reportValidity();
                }
            });

            // Delete row handlers
            $(document).on('click', '.btn-outline-danger', function() {
                $(this).closest('tr').remove();
            });
        });
    </script>
@endsection
