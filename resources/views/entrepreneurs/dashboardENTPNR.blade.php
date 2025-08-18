@extends('index')
@section('title', 'Tableau de Bord entrepreneur')
@section('content')
    <div class="pagetitle">
            <h1>Tableau de Bord</h1>

        </div>
        <section class="section dashboard">
           <div class="container my-5">
  <div class="row g-4">

    <!-- Projets actifs -->
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body py-4 px-4">
          <div class="d-flex align-items-center justify-content-between">
            <div class="me-3">
              <h6 class="text-uppercase text-muted fw-bold mb-1">Projets actifs</h6>
              <h2 class="fw-bold mb-0 text-primary">10</h2>
            </div>
            <div class="stat-icon bg-white text-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="fas fa-project-diagram fa-2x"></i>
            </div>
          </div>
          <div class="progress mt-3 rounded-pill" style="height:8px;">
            <div class="progress-bar bg-primary" style="width:70%"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Projets labellisés -->
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body py-4 px-4">
          <div class="d-flex align-items-center justify-content-between">
            <div class="me-3">
              <h6 class="text-uppercase text-muted fw-bold mb-1">Projets labellisés</h6>
              <h2 class="fw-bold mb-0 text-success">10</h2>
              <small class="text-muted">ce mois</small>
            </div>
            <div class="stat-icon bg-white text-success rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="fas fa-award fa-2x"></i>
            </div>
          </div>
          <div class="progress mt-3 rounded-pill" style="height:8px;">
            <div class="progress-bar bg-success" style="width:50%"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mentors -->
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body py-4 px-4">
          <div class="d-flex align-items-center justify-content-between">
            <div class="me-3">
              <h6 class="text-uppercase text-muted fw-bold mb-1">Mentors</h6>
              <h2 class="fw-bold mb-0 text-info">10</h2>
              <small class="text-muted">différentes catégories</small>
            </div>
            <div class="stat-icon bg-white text-info rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="fas fa-user-tie fa-2x"></i>
            </div>
          </div>
          <div class="progress mt-3 rounded-pill" style="height:8px;">
            <div class="progress-bar bg-info" style="width:40%"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Financement en cours -->
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body py-4 px-4">
          <div class="d-flex align-items-center justify-content-between">
            <div class="me-3">
              <h6 class="text-uppercase text-muted fw-bold mb-1">Financement en cours</h6>
              <h2 class="fw-bold mb-0 text-warning">10</h2>
              <small class="text-muted">enregistrés</small>
            </div>
            <div class="stat-icon bg-white text-warning rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="fas fa-hand-holding-usd fa-2x"></i>
            </div>
          </div>
          <div class="progress mt-3 rounded-pill" style="height:8px;">
            <div class="progress-bar bg-warning" style="width:65%"></div>
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
