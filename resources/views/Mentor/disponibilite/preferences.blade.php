@extends('index')
@section('title', 'Préférences Mentor')
@section('content')
    <div class="pagetitle">
           <h1><i class="fas fa-sliders-h me-2"></i>Préférences de disponibilité</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Tableau de Bord</li>
                </ol>
            </nav>

            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1></h1>
                    <button class="btn btn-outline-primary" id="resetPreferences">
                        <i class="fas fa-undo me-1"></i> Réinitialiser
                    </button>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Disponibilités récurrentes</h5>
                    </div>
                    <div class="card-body">
                        <form id="availabilityPreferences">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Jour</th>
                                            <th>Matin</th>
                                            <th>Après-midi</th>
                                            <th>Soir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Lundi</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="mondayMorning" checked>
                                                    <label class="form-check-label" for="mondayMorning">9h-12h</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="mondayAfternoon">
                                                    <label class="form-check-label" for="mondayAfternoon">14h-17h</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="mondayEvening">
                                                    <label class="form-check-label" for="mondayEvening">18h-20h</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Autres jours... -->
                                    </tbody>
                                </table>
                            </div>

                            <div class="mb-4">
                                <h5><i class="fas fa-bell me-2"></i>Notifications</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="notifyNewRequest" checked>
                                    <label class="form-check-label" for="notifyNewRequest">Nouvelles demandes de mentorat</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="notifySessionReminder" checked>
                                    <label class="form-check-label" for="notifySessionReminder">Rappel avant une session</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="notifyEvaluation">
                                    <label class="form-check-label" for="notifyEvaluation">Demande d'évaluation</label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h5><i class="fas fa-user-tie me-2"></i>Types d'accompagnement</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="mentoringStrategy" checked>
                                            <label class="form-check-label" for="mentoringStrategy">Stratégie</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="mentoringTechnical" checked>
                                            <label class="form-check-label" for="mentoringTechnical">Technique</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="mentoringBusiness">
                                            <label class="form-check-label" for="mentoringBusiness">Business Model</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mt-4">
                                <button type="button" class="btn btn-outline-secondary me-2">
                                    <i class="fas fa-times me-1"></i> Annuler
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-1"></i> Enregistrer
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



        </section>
@endsection
