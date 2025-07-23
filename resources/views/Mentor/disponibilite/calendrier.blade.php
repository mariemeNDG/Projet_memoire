@extends('index')
@section('title', 'Calendrier Mentor')
@section('content')
    <div class="pagetitle">
          <h1><i class="fas fa-calendar-alt me-2"></i>Mon Calendrier</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Tableau de Bord</li>
                </ol>
            </nav>


            <!-- Calendar Content -->
            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1></h1>
                    <div>
                        <button class="btn btn-outline-secondary me-2" id="exportCalendar">
                            <i class="fas fa-download me-1"></i> Exporter
                        </button>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAvailabilityModal">
                            <i class="fas fa-plus me-1"></i> Ajouter des créneaux
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Disponibilités et sessions</h5>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-light" id="prevWeek">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="btn btn-sm btn-light" id="today">
                                    Aujourd'hui
                                </button>
                                <button class="btn btn-sm btn-light" id="nextWeek">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="mentorCalendar"></div>
                    </div>
                </div>

                <!-- Legend -->
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="d-flex flex-wrap">
                            <div class="me-3 mb-2 d-flex align-items-center">
                                <span class="legend-color availability me-2"></span>
                                <small>Disponibilité</small>
                            </div>
                            <div class="me-3 mb-2 d-flex align-items-center">
                                <span class="legend-color session me-2"></span>
                                <small>Session planifiée</small>
                            </div>
                            <div class="me-3 mb-2 d-flex align-items-center">
                                <span class="legend-color completed me-2"></span>
                                <small>Session terminée</small>
                            </div>
                            <div class="me-3 mb-2 d-flex align-items-center">
                                <span class="legend-color cancelled me-2"></span>
                                <small>Session annulée</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Availability Modal -->
    <div class="modal fade" id="addAvailabilityModal" tabindex="-1" aria-labelledby="addAvailabilityModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addAvailabilityModalLabel">Ajouter des créneaux</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="availabilityForm">
                        <div class="mb-3">
                            <label class="form-label">Type</label>
                            <select class="form-select" id="availabilityType">
                                <option selected>Disponibilité standard</option>
                                <option>Disponibilité exceptionnelle</option>
                                <option>Session spécifique</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date de début</label>
                            <input type="datetime-local" class="form-control" id="startTime">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date de fin</label>
                            <input type="datetime-local" class="form-control" id="endTime">
                        </div>
                        <div class="mb-3" id="projectField" style="display: none;">
                            <label class="form-label">Projet</label>
                            <select class="form-select">
                                <option selected>EcoTech</option>
                                <option>AgriConnect</option>
                                <option>MediTrack</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Répétition</label>
                            <select class="form-select" id="recurrence">
                                <option selected>Une seule fois</option>
                                <option>Toutes les semaines</option>
                                <option>Tous les 15 jours</option>
                                <option>Tous les mois</option>
                            </select>
                        </div>
                        <div class="mb-3" id="recurrenceEnd" style="display: none;">
                            <label class="form-label">Jusqu'au</label>
                            <input type="date" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>


        </section>
@endsection
