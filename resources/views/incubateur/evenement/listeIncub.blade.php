@extends('index')
@section('title', 'Evénements')
@section('content')
    <div class="pagetitle">

            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-calendar-day me-2"></i>Événements</h1>
                    <div>
                        <button class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#filtersModal">
                            <i class="fas fa-filter me-1"></i> Filtres
                        </button>
                        <button class="btn btn-primary" onclick="window.location.href='{{ route('incubateur.evenements.creation') }}'">
                            <i class="fas fa-plus me-1"></i> Nouvel événement
                        </button>
                    </div>
                </div>

                <!-- Calendar View Toggle -->
                <div class="card mb-4">
                    <div class="card-body py-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-primary active" id="listViewBtn">
                                    <i class="fas fa-list me-1"></i> Liste
                                </button>
                                <button type="button" class="btn btn-outline-primary" id="calendarViewBtn">
                                    <i class="fas fa-calendar me-1"></i> Calendrier
                                </button>
                            </div>
                            <div>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-download me-1"></i> Exporter
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Events List -->
                <div class="card" id="eventsListCard">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Prochains événements</h5>
                        <div class="d-flex">
                            <div class="input-group input-group-sm me-2" style="width: 200px;">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Rechercher...">
                            </div>
                            <select class="form-select form-select-sm" style="width: 150px;">
                                <option>Tous les types</option>
                                <option>Atelier</option>
                                <option>Conférence</option>
                                <option>Réseautage</option>
                                <option>Pitch</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="eventsTable" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="15%">Date</th>
                                        <th width="25%">Événement</th>
                                        <th width="15%">Type</th>
                                        <th width="15%">Lieu</th>
                                        <th width="15%">Participants</th>
                                        <th width="15%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>15/06/2023</strong><br>
                                            <small>14h-16h</small>
                                        </td>
                                        <td>
                                            <strong>Atelier Pitch Deck</strong><br>
                                            <small class="text-muted">Préparation aux investisseurs</small>
                                        </td>
                                        <td><span class="badge bg-info">Atelier</span></td>
                                        <td>Salle de conférence</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress me-2" style="height: 6px; width: 60px;">
                                                    <div class="progress-bar bg-success" style="width: 85%"></div>
                                                </div>
                                                <small>17/20</small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-outline-primary" title="Voir">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary" title="Éditer">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-outline-danger" title="Annuler">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Plus d'événements... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Calendar View (Hidden by default) -->
                <div class="card d-none" id="calendarCard">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Vue calendrier</h5>
                    </div>
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>
                </div>

                <!-- Past Events -->
                <div class="card mt-4">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Événements passés</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="pastEventsTable" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="15%">Date</th>
                                        <th width="25%">Événement</th>
                                        <th width="15%">Participants</th>
                                        <th width="20%">Satisfaction</th>
                                        <th width="25%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10/06/2023</td>
                                        <td>Rencontre investisseurs</td>
                                        <td>24</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="rating me-2">
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star-half-alt text-warning"></i>
                                                </div>
                                                <small>4.4/5</small>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="fas fa-chart-pie me-1"></i> Stats
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-redo me-1"></i> Répéter
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Plus d'événements passés... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <!-- Event Detail Modal -->
    <div class="modal fade" id="eventDetailModal" tabindex="-1" aria-labelledby="eventDetailModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="eventDetailModalLabel">Détails de l'événement</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>Atelier Pitch Deck</h3>
                            <div class="mb-4">
                                <span class="badge bg-info me-2">Atelier</span>
                                <span class="text-muted"><i class="fas fa-calendar-alt me-1"></i> 15/06/2023, 14h-16h</span>
                                <span class="text-muted ms-3"><i class="fas fa-map-marker-alt me-1"></i> Salle de conférence</span>
                            </div>
                            <div class="mb-4">
                                <h5>Description</h5>
                                <p>Session intensive de préparation aux pitchs d'investissement. Les participants apprendront à structurer leur présentation, mettre en valeur leur proposition de valeur et répondre aux questions des investisseurs.</p>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <h5>Intervenants</h5>
                                    <div class="d-flex align-items-center mb-2">
                                        <img src="../../../assets/images/utilisateurs/user1.jpg" class="rounded-circle me-2" width="40">
                                        <div>
                                            <strong>Marie Dupont</strong><br>
                                            <small class="text-muted">Investisseuse, Capital Ventures</small>
                                        </div>
                                    </div>
                                    <!-- Plus d'intervenants... -->
                                </div>
                                <div class="col-md-6">
                                    <h5>Participants inscrits (17/20)</h5>
                                    <div class="avatar-group">
                                        <img src="../../../assets/images/utilisateurs/user2.jpg" class="rounded-circle avatar-xs" title="Jean Martin">
                                        <!-- Plus d'avatars... -->
                                    </div>
                                    <button class="btn btn-sm btn-link mt-2">Voir la liste complète</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0">Organisation</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <h6>Responsable</h6>
                                        <div class="d-flex align-items-center">
                                            <img src="../../../assets/images/utilisateurs/user3.jpg" class="rounded-circle me-2" width="30">
                                            <span>Paul Ndiaye</span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h6>Matériel nécessaire</h6>
                                        <ul class="mb-0">
                                            <li>Projecteur</li>
                                            <li>Micro</li>
                                            <li>Post-its</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0">Actions rapides</h6>
                                </div>
                                <div class="card-body">
                                    <button class="btn btn-sm btn-outline-primary w-100 mb-2">
                                        <i class="fas fa-envelope me-1"></i> Envoyer un rappel
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary w-100 mb-2">
                                        <i class="fas fa-edit me-1"></i> Modifier
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger w-100">
                                        <i class="fas fa-times me-1"></i> Annuler
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Voir la page publique</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters Modal -->
    <div class="modal fade" id="filtersModal" tabindex="-1" aria-labelledby="filtersModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="filtersModalLabel"><i class="fas fa-filter me-2"></i>Filtres avancés</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Période</label>
                            <input class="form-control" type="text" id="dateRange" placeholder="Sélectionner une période">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Type d'événement</label>
                            <select class="form-select" multiple>
                                <option selected>Atelier</option>
                                <option>Conférence</option>
                                <option selected>Réseautage</option>
                                <option>Pitch</option>
                                <option>Formation</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Statut</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="statusPlanned" checked>
                                <label class="form-check-label" for="statusPlanned">Planifié</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="statusCompleted" checked>
                                <label class="form-check-label" for="statusCompleted">Terminé</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="statusCanceled">
                                <label class="form-check-label" for="statusCanceled">Annulé</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Responsable</label>
                            <select class="form-select">
                                <option selected>Tous les responsables</option>
                                <option>Paul Ndiaye</option>
                                <option>Amina Diop</option>
                                <option>Jean Martin</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Appliquer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/incubateurs.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize DataTables
            $('#eventsTable, #pastEventsTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
                },
                responsive: true,
                pageLength: 10
            });

            // Date Range Picker
            flatpickr("#dateRange", {
                mode: "range",
                locale: "fr",
                dateFormat: "d/m/Y",
                defaultDate: ["today", new Date().fp_incr(30)]
            });

            // Calendar View Toggle
            $('#calendarViewBtn').click(function() {
                $('#listViewBtn').removeClass('active');
                $(this).addClass('active');
                $('#eventsListCard').addClass('d-none');
                $('#calendarCard').removeClass('d-none');

                // Initialize FullCalendar if not already done
                if ($('#calendar').is(':empty')) {
                    initCalendar();
                }
            });

            $('#listViewBtn').click(function() {
                $('#calendarViewBtn').removeClass('active');
                $(this).addClass('active');
                $('#calendarCard').addClass('d-none');
                $('#eventsListCard').removeClass('d-none');
            });

            // Initialize FullCalendar
            function initCalendar() {
                const calendarEl = document.getElementById('calendar');
                const calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'fr',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: [
                        {
                            title: 'Atelier Pitch Deck',
                            start: '2023-06-15T14:00:00',
                            end: '2023-06-15T16:00:00',
                            backgroundColor: '#3498db',
                            borderColor: '#3498db'
                        },
                        // More events...
                    ],
                    eventClick: function(info) {
                        $('#eventDetailModal').modal('show');
                        info.jsEvent.preventDefault();
                    }
                });
                calendar.render();
            }
        });
    </script>
@endsection
