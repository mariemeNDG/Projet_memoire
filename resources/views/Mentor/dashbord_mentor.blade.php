@extends('index')
@section('title', 'Tableau de Bord Mentor')
@section('content')
    <div class="pagetitle">
                    <div class="container-fluid mt-4">


                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Prochaines sessions</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Projet</th>
                                                <th>Type</th>
                                                <th>Durée</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>15/06 - 14h</td>
                                                <td>EcoTech</td>
                                                <td>Stratégie</td>
                                                <td>1h</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-video"></i></button>
                                                    <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-info-circle"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>17/06 - 10h</td>
                                                <td>AgriConnect</td>
                                                <td>Technique</td>
                                                <td>1h30</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-video"></i></button>
                                                    <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-info-circle"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Disponibilité</h5>
                            </div>
                            <div class="card-body">
                                <div id="mentorAvailability"></div>
                                <button class="btn btn-primary w-100 mt-3">
                                    <i class="fas fa-plus me-1"></i> Ajouter des créneaux
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Dernières évaluations</h5>
                        <a href="{{ route('donnee_evaluation_mentor') }}" class="btn btn-light btn-sm">
                            Voir tout
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="../../assets/images/projets/projet1.jpg" class="rounded-circle me-2" width="40">
                                            <h6 class="mb-0">EcoTech</h6>
                                        </div>
                                        <div class="mb-2">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                        <p class="mb-0">"Marie a été d'une grande aide pour notre stratégie marketing..."</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Plus d'évaluations... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/mentors.js"></script>
    <script>
        // Initialisation du calendrier de disponibilité
        document.addEventListener('DOMContentLoaded', function() {
            // Ici vous intégreriez un calendrier (FullCalendar, etc.)
            const availabilityEl = document.getElementById('mentorAvailability');
            if (availabilityEl) {
                availabilityEl.innerHTML = `
                    <div class="text-center py-3 text-muted">
                        <i class="fas fa-calendar-alt fa-2x mb-2"></i>
                        <p>Votre calendrier de disponibilité sera affiché ici</p>
                    </div>
                `;
            }
        });
    </script>


@endsection
