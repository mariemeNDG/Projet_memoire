@extends('index')
@section('title', 'Mes projets')
@section('content')
    <div class="pagetitle">
            <h1>Mes Projets</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Tableau de Bord</li>
                </ol>
            </nav>
                  <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-project-diagram text-primary me-2"></i></h1>
                    <a class="btn btn-primary" href="{{ route('newProjets-entrepreneur') }}">
                        <i class="fas fa-plus me-1"></i> Nouveau projet
                    </a>
                </div>

                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center py-4">
                                <h3 class="text-primary">5</h3>
                                <p class="mb-0">Projets créés</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center py-4">
                                <h3 class="text-success">2</h3>
                                <p class="mb-0">Projets labellisés</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center py-4">
                                <h3 class="text-info">1</h3>
                                <p class="mb-0">En incubation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center py-4">
                                <h3 class="text-warning">1</h3>
                                <p class="mb-0">En financement</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Liste de mes projets</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Secteur</th>
                                        <th>Statut</th>
                                        <th>Date création</th>
                                        <th>Budget</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>EcoTech</td>
                                        <td>Environnement</td>
                                        <td><span class="badge bg-success">Labellisé</span></td>
                                        <td>15/05/2023</td>
                                        <td>50K€</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('projetDetails-entrepreneur') }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                                <a href="{{ route('editProjets-entrepreneur') }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AgriConnect</td>
                                        <td>Agriculture</td>
                                        <td><span class="badge bg-info">En incubation</span></td>
                                        <td>22/04/2023</td>
                                        <td>30K€</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('projetDetails-entrepreneur') }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                                <a href="{{ route('editProjets-entrepreneur') }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>HealthTech</td>
                                        <td>Santé</td>
                                        <td><span class="badge bg-warning">En conception</span></td>
                                        <td>10/06/2023</td>
                                        <td>75K€</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('projetDetails-entrepreneur') }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                                <a href="{{ route('editProjets-entrepreneur') }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <nav aria-label="Page navigation" class="mt-4">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Précédent</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Suivant</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </section>
@endsection
