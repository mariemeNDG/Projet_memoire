@extends('index')
@section('title', 'Tableau de Bord Mentor')
@section('content')
    <div class="container-fluid mt-4">
        <div class="container my-5">
            <div class="row g-4">
                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card shadow-sm border-0">
                        <div class="card-body text-center py-4">
                            <i class="fas fa-briefcase fa-2x text-primary mb-3"></i>
                            <h2 class="fw-bold">{{ $compteurs['total_accompagnements'] }}</h2>
                            <p class="text-muted mb-0">Projets accompagnés</p>
                        </div>
                    </div>
                </div>
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card shadow-sm border-0">
                        <div class="card-body text-center py-4">
                            <i class="fas fa-clock fa-2x text-success mb-3"></i>
                            <h2 class="fw-bold">{{ $compteurs['total_heures'] }}</h2>
                            <p class="text-muted mb-0">Total heures</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card shadow-sm border-0">
                        <div class="card-body text-center py-4">
                            <i class="fas fa-calendar fa-2x text-warning mb-3"></i>
                            <h2 class="fw-bold">{{ $compteurs['total_sessions'] }}</h2>
                            <p class="text-muted mb-0">Session programmée</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card shadow-sm border-0">
                        <div class="card-body text-center py-4">
                            <i class="fas fa-bell fa-2x text-info mb-3"></i>
                            <h2 class="fw-bold">{{ $compteurs['total_demandes'] }}</h2>
                            <p class="text-muted mb-0">Nouvelles demandes</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
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
                                    @forelse($sessions as $session)
                                        <tr>
                                            <td>{{ \Carbon\Carbon::parse($session->date_session)->format('d/m/Y à H:i') }}</td>
                                            <td>{{ $session->projet->nom }}</td>
                                            <td>{{ $session->type }}</td>
                                            <td>{{ $session->duree }} min</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary"><i
                                                        class="fas fa-video"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-secondary"><i
                                                        class="fas fa-info-circle"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Aucune session à venir</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="card mt-4">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Derniers projets demandés par mes mentorés</h5>
                <a href="{{ route('mentor.disponibilite') }}" class="btn btn-light btn-sm">
                    Voir tout
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    @forelse ($projetsdemandes as $item)
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <h6 class="mb-0">{{ $item->projet->nom }}</h6>
                                    </div>
                                    <div class="mb-2">
                                        <span class="badge bg-info text-dark">{{ $item->user->name }}</span>
                                        <span class="badge bg-secondary">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</span>
                                    </div>
                                    <p class="mb-0">{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <p class="mb-0">Aucun projet demandé récemment.</p>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/mentors.js"></script>

    <script src="../../js/main.js"></script>
    <script src="../../js/mentors.js"></script>

@endsection
