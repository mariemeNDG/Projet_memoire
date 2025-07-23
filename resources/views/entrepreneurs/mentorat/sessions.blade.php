@extends('index')
@section('title', 'sessions')
@section('content')
    <div class="pagetitle">
            <h1><i class="fas fa-calendar-check text-primary me-2"></i>Sessions de Mentorat</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Tableau de Bord</li>
                    <li class="breadcrumb-item active">Sessions</li>
                </ol>
            </nav>
     <!-- Main Content -->
        <div id="content">


            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1></h1>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newSessionModal">
                        <i class="fas fa-plus me-1"></i> Nouvelle session
                    </button>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Calendrier des sessions</h5>
                            </div>
                            <div class="card-body">
                                <div id="mentoringCalendar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Prochaines sessions</h5>
                            </div>
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="mb-1">Session stratégie</h6>
                                            <small class="text-muted">Aujourd'hui</small>
                                        </div>
                                        <small class="text-muted">
                                            <i class="far fa-clock me-1"></i> 14h00 - 15h30
                                        </small>
                                        <p class="mb-1 mt-2">Avec Dr. Jean Martin</p>
                                        <small class="text-muted">Projet EcoTech</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="mb-1">Revue financière</h6>
                                            <small class="text-muted">Demain</small>
                                        </div>
                                        <small class="text-muted">
                                            <i class="far fa-clock me-1"></i> 10h00 - 11h00
                                        </small>
                                        <p class="mb-1 mt-2">Avec Sophie Lambert</p>
                                        <small class="text-muted">Projet AgriConnect</small>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-4">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Mentors actifs</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="../../../assets/images/utilisateurs/mentor1.jpg" class="rounded-circle me-3" width="50">
                                    <div>
                                        <h6 class="mb-0">Dr. Jean Martin</h6>
                                        <small class="text-muted">Expert en technologies vertes</small>
                                        <div class="mt-1">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star-half-alt text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="../../../assets/images/utilisateurs/mentor2.jpg" class="rounded-circle me-3" width="50">
                                    <div>
                                        <h6 class="mb-0">Sophie Lambert</h6>
                                        <small class="text-muted">Spécialiste financement</small>
                                        <div class="mt-1">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Nouvelle Session -->
    <div class="modal fade" id="newSessionModal" tabindex="-1" aria-labelledby="newSessionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="newSessionModalLabel">Planifier une session</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="sessionForm">
                        <div class="mb-3">
                            <label for="sessionMentor" class="form-label">Mentor</label>
                            <select class="form-select" id="sessionMentor" required>
                                <option value="" selected disabled>Choisir un mentor</option>
                                <option value="1">Dr. Jean Martin</option>
                                <option value="2">Sophie Lambert</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sessionProject" class="form-label">Projet concerné</label>
                            <select class="form-select" id="sessionProject" required>
                                <option value="" selected disabled>Choisir un projet</option>
                                <option value="1">EcoTech</option>
                                <option value="2">AgriConnect</option>
                                <option value="3">HealthTech</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sessionDate" class="form-label">Date et heure</label>
                            <input type="datetime-local" class="form-control" id="sessionDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="sessionDuration" class="form-label">Durée (minutes)</label>
                            <select class="form-select" id="sessionDuration" required>
                                <option value="30">30 minutes</option>
                                <option value="60" selected>60 minutes</option>
                                <option value="90">90 minutes</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sessionTopic" class="form-label">Sujet de la session</label>
                            <input type="text" class="form-control" id="sessionTopic" required>
                        </div>
                        <div class="mb-3">
                            <label for="sessionNotes" class="form-label">Notes préparatoires</label>
                            <textarea class="form-control" id="sessionNotes" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" form="sessionForm" class="btn btn-primary">Planifier</button>
                </div>
            </div>
        </div>
    </div>

        </section>
@endsection
