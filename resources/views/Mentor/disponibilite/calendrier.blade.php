@extends('index')
@section('title', 'Calendrier Mentor')
@section('content')
    <div class="pagetitle">
        <h1><i class="fas fa-calendar-alt me-2"></i>Mon Calendrier</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Tableau de Bord</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Historique des sessions planifiées</h5>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th>Projet</th>
                                <th>Date</th>
                                <th>Durée</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($sessions as $session)
                                <tr>
                                    <td>{{ $session->projet->nom ?? 'Projet inconnu' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($session->date_session)->format('d/m/Y à H:i') }}</td>
                                    <td>{{ $session->duree }} min</td>
                                    <td>{{ $session->type }}</td>
                                    <td>{{ $session->description ?? '-' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-danger">
                                        Aucune session planifiée pour le moment.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
