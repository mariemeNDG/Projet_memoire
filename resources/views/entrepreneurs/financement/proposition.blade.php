@extends('index')
@section('title', 'Propositions de Financement')
@section('content')
    <div class="pagetitle">
 <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Tableau de Bord</li>
                    <li class="breadcrumb-item active">Financement</li>
                </ol>
            </nav>

            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-hand-holding-usd text-primary me-2"></i>Propositions de Financement</h1>
                    <div>
                        <button class="btn btn-outline-secondary me-2">
                            <i class="fas fa-filter me-1"></i> Filtres
                        </button>
                        <button class="btn btn-outline-primary">
                            <i class="fas fa-download me-1"></i> Exporter
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Propositions reçues</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th>Investisseur</th>
                                        <th>Projet</th>
                                        <th>Type</th>
                                        <th>Montant</th>
                                        <th>Date</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../../assets/images/investisseurs/invest1.jpg" class="rounded-circle me-2" width="40">
                                                <span>AfricInvest</span>
                                            </div>
                                        </td>
                                        <td>EcoTech</td>
                                        <td>Capital</td>
                                        <td>150K€ (15%)</td>
                                        <td>12/06/2023</td>
                                        <td><span class="badge bg-success">Acceptée</span></td>
                                        <td>
                                            <a href="details.html" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                            <button class="btn btn-sm btn-outline-success"><i class="fas fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../../assets/images/investisseurs/invest2.jpg" class="rounded-circle me-2" width="40">
                                                <span>Green Capital</span>
                                            </div>
                                        </td>
                                        <td>EcoTech</td>
                                        <td>Prêt</td>
                                        <td>75K€ (5%)</td>
                                        <td>08/06/2023</td>
                                        <td><span class="badge bg-warning">En négociation</span></td>
                                        <td>
                                            <a href="details.html" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-comments"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../../assets/images/investisseurs/invest3.jpg" class="rounded-circle me-2" width="40">
                                                <span>SeedStars</span>
                                            </div>
                                        </td>
                                        <td>AgriConnect</td>
                                        <td>Subvention</td>
                                        <td>25K€</td>
                                        <td>02/06/2023</td>
                                        <td><span class="badge bg-danger">Refusée</span></td>
                                        <td>
                                            <a href="details.html" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-redo"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Statistiques des propositions</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="fundingStatsChart" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Montants moyens par type</h5>
                            </div>
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Capital</span>
                                            <strong>125K€ (12%)</strong>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Prêt</span>
                                            <strong>75K€</strong>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Subvention</span>
                                            <strong>25K€</strong>
                                        </div>
                                    </div>
                                    <div class="list-group-item bg-light">
                                        <div class="d-flex justify-content-between">
                                            <span class="fw-bold">Total moyen</span>
                                            <strong class="text-primary">75K€</strong>
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
