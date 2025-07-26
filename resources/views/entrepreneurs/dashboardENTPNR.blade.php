@extends('index')
@section('title', 'Tableau de Bord entrepreneur')
@section('content')
    <div class="pagetitle">
            <h1>Tableau de Bord</h1>

        </div>
        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Dépenses totales aujourd'hui -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Projets actifs</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cash-coin"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>
                                                10 FCFA
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dépenses totales -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Projet labellisé</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cash-coin"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>
                                                10 FCFA
                                            </h6>
                                            <span class="text-success small pt-1 fw-bold">
                                                10 FCFA
                                            </span>
                                            <span class="text-muted small pt-2 ps-1">ce mois</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Nombre de catégories -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Mentors</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-tags"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>
                                                10
                                            </h6>
                                            <span class="text-muted small pt-2 ps-1">différentes catégories</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Nombre de dépenses -->
                        <div class="col-xxl-4 col-xl-12">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Financement en cours</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-wallet2"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>
                                                10
                                            </h6>
                                            <span class="text-muted small pt-2 ps-1">enregistrées</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </section>

        <section class="section dashboard">

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5><i class="fas fa-tasks me-2"></i>Progression de mes projets</h5>
                            </div>
                            <div class="card-body">
                                <div class="progress-container">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>EcoTech</span>
                                        <span>65%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2 mt-3">
                                        <span>AgriConnect</span>
                                        <span>30%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%"></div>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2 mt-3">
                                        <span>HealthTech</span>
                                        <span>15%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 15%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5><i class="fas fa-bell me-2"></i>Mes alertes</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group list-group-flush">
                                    <a href="" class="list-group-item list-group-item-action">
                                        <div class="d-flex justify-content-between">
                                            <small class="text-muted">Aujourd'hui</small>
                                        </div>
                                        <p class="mb-1">Nouveau message de votre mentor</p>
                                        <small class="text-muted">Projet EcoTech</small>
                                    </a>
                                    <a href="financement/propositions.html" class="list-group-item list-group-item-action">
                                        <div class="d-flex justify-content-between">
                                            <small class="text-muted">Hier</small>
                                        </div>
                                        <p class="mb-1">Nouvelle offre de financement</p>
                                        <small class="text-muted">15K€ - Investisseur XYZ</small>
                                    </a>
                                    <a href="incubateurs/candidatures.html" class="list-group-item list-group-item-action">
                                        <div class="d-flex justify-content-between">
                                            <small class="text-muted">2 jours</small>
                                        </div>
                                        <p class="mb-1">Candidature incubateur acceptée</p>
                                        <small class="text-muted">Incubateur Tech</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5><i class="fas fa-project-diagram me-2"></i>Mes projets récents</h5>
                                <a href="{{ route('entrepreneur.projets.create') }}" class="btn btn-sm btn-light float-end">
                                    <i class="fas fa-plus me-1"></i> Nouveau projet
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="bg-secondary text-white">
                                            <tr>
                                                <th>Nom</th>
                                                <th>Statut</th>
                                                <th>Avancement</th>
                                                <th>Dernière mise à jour</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>EcoTech</td>
                                                <td><span class="badge bg-success">Labellisé</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress w-100 me-2" style="height: 6px;">
                                                            <div class="progress-bar bg-success" style="width: 65%"></div>
                                                        </div>
                                                        <small>65%</small>
                                                    </div>
                                                </td>
                                                <td>12/06/2023</td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                                    <a href="" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>AgriConnect</td>
                                                <td><span class="badge bg-info">En incubation</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress w-100 me-2" style="height: 6px;">
                                                            <div class="progress-bar bg-info" style="width: 30%"></div>
                                                        </div>
                                                        <small>30%</small>
                                                    </div>
                                                </td>
                                                <td>05/06/2023</td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                                    <a href="" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
