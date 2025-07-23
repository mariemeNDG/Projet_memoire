@extends('index')
@section('title', 'Demandes de Mentorat')
@section('content')
    <div class="pagetitle">
           <h1><i class="fas fa-user-tie text-primary me-2"></i>Demandes de Mentorat</h1>

            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Tableau de Bord</li>
                    <li class="breadcrumb-item active">Mentorat</li>
                </ol>
            </nav>

            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                           <h1></h1>
                    <a class="btn btn-primary" href="{{ route('newDemandes-entrepreneur') }}">
                        <i class="fas fa-plus me-1"></i> Nouvelle demande
                    </a>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Historique des demandes</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th>Mentor</th>
                                        <th>Projet</th>
                                        <th>Date demande</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../../assets/images/utilisateurs/mentor1.jpg" class="rounded-circle me-2" width="40">
                                                <span>Dr. Jean Martin</span>
                                            </div>
                                        </td>
                                        <td>EcoTech</td>
                                        <td>12/06/2023</td>
                                        <td><span class="badge bg-success">Acceptée</span></td>
                                        <td>
                                            <a href="details.html" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../../assets/images/utilisateurs/mentor2.jpg" class="rounded-circle me-2" width="40">
                                                <span>Sophie Lambert</span>
                                            </div>
                                        </td>
                                        <td>AgriConnect</td>
                                        <td>05/06/2023</td>
                                        <td><span class="badge bg-warning">En attente</span></td>
                                        <td>
                                            <a href="details.html" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../../assets/images/utilisateurs/mentor3.jpg" class="rounded-circle me-2" width="40">
                                                <span>Pierre Dubois</span>
                                            </div>
                                        </td>
                                        <td>HealthTech</td>
                                        <td>28/05/2023</td>
                                        <td><span class="badge bg-danger">Refusée</span></td>
                                        <td>
                                            <a href="details.html" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                            <button class="btn btn-sm btn-success"><i class="fas fa-redo"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header bg-light">
                        <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i>Comment trouver un mentor ?</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center p-3">
                                    <div class="icon-circle bg-primary text-white mb-3">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <h5>1. Recherche</h5>
                                    <p>Parcourez notre annuaire de mentors spécialisés par domaine d'expertise</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center p-3">
                                    <div class="icon-circle bg-primary text-white mb-3">
                                        <i class="fas fa-paper-plane"></i>
                                    </div>
                                    <h5>2. Demande</h5>
                                    <p>Envoyez une demande détaillée expliquant vos besoins</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center p-3">
                                    <div class="icon-circle bg-primary text-white mb-3">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <h5>3. Validation</h5>
                                    <p>Le mentor accepte et vous convenez d'un planning de sessions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        </section>
@endsection
