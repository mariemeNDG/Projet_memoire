@extends('index')
@section('title', 'Candidatures')
@section('content')
    <div class="pagetitle">
              <h1><i class="fas fa-paper-plane text-primary me-2"></i>Mes Candidatures</h1>

 <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Tableau de Bord</li>
                    <li class="breadcrumb-item active">Incubateurs</li>
                </ol>
            </nav>

            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1></h1>
                    <a class="btn btn-primary" href="{{ route('recherches-entrepreneur') }}">
                        <i class="fas fa-plus me-1"></i> Nouvelle candidature
                    </a>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Historique des candidatures</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th>Incubateur</th>
                                        <th>Projet</th>
                                        <th>Date candidature</th>
                                        <th>Statut</th>
                                        <th>Réponse</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../../assets/images/incubateurs/incubateur1.jpg" class="rounded-circle me-2" width="40">
                                                <span>TechHub Dakar</span>
                                            </div>
                                        </td>
                                        <td>EcoTech</td>
                                        <td>10/06/2023</td>
                                        <td><span class="badge bg-success">Acceptée</span></td>
                                        <td>15/06/2023</td>
                                        <td>
                                            <a href="details.html" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                            <button class="btn btn-sm btn-outline-success"><i class="fas fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../../assets/images/incubateurs/incubateur2.jpg" class="rounded-circle me-2" width="40">
                                                <span>GreenValley</span>
                                            </div>
                                        </td>
                                        <td>EcoTech</td>
                                        <td>05/06/2023</td>
                                        <td><span class="badge bg-warning">En cours</span></td>
                                        <td>-</td>
                                        <td>
                                            <a href="details.html" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../../assets/images/incubateurs/incubateur3.jpg" class="rounded-circle me-2" width="40">
                                                <span>AgriBoost</span>
                                            </div>
                                        </td>
                                        <td>AgriConnect</td>
                                        <td>28/05/2023</td>
                                        <td><span class="badge bg-danger">Refusée</span></td>
                                        <td>02/06/2023</td>
                                        <td>
                                            <a href="details.html" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-redo"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header bg-light">
                        <h5 class="mb-0"><i class="fas fa-chart-pie me-2"></i>Statistiques de mes candidatures</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <canvas id="applicationsChart" height="250"></canvas>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="card stat-card bg-success text-white">
                                            <i class="fas fa-check-circle"></i>
                                            <h2>1</h2>
                                            <p>Acceptées</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card stat-card bg-warning text-dark">
                                            <i class="fas fa-hourglass-half"></i>
                                            <h2>1</h2>
                                            <p>En attente</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card stat-card bg-danger text-white">
                                            <i class="fas fa-times-circle"></i>
                                            <h2>1</h2>
                                            <p>Refusées</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card stat-card bg-info text-white">
                                            <i class="fas fa-percentage"></i>
                                            <h2>33%</h2>
                                            <p>Taux d'acceptation</p>
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

        </section>
@endsection
