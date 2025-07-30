@extends('index')
@section('title', 'Demandes de Mentorat')
@section('content')
<div class="pagetitle">
    <h1><i class="fas fa-user-tie text-primary me-2"></i>Demandes de Mentorat</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('entrepreneur.dashboard') }}">Tableau de Bord</a></li>
            <li class="breadcrumb-item active">Mentorat</li>
        </ol>
    </nav>
</div>

<div class="container-fluid mt-4">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1></h1>
        <a class="btn btn-primary" href="{{ route('entrepreneur.mentorat.create') }}">
            <i class="fas fa-plus me-1"></i> Nouvelle demande
        </a>
    </div>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Historique des demandes</h5>
        </div>
        <div class="card-body">
            @if($demandes->isEmpty())
                <div class="alert alert-info text-center">
                    <i class="fas fa-info-circle me-2"></i> Vous n'avez aucune demande de mentorat
                </div>
            @else
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
                            @foreach($demandes as $demande)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/utilisateurs/avatar-mentor.jpg') }}"
                                             class="rounded-circle me-2" width="40">
                                        <span>{{ $demande->mentor->name }} {{ $demande->mentor->prenom }}</span>
                                    </div>
                                </td>
                                <td>{{ $demande->projet->nom }}</td>
                                <td>{{ $demande->created_at->format('d/m/Y') }}</td>
                                <td>{!! $demande->status_badge !!}</td>
                                <td>
                                    <a href="{{ route('entrepreneur.mentorat.show', $demande) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    @if($demande->statut === 'En attente')
                                    <form action="{{ route('entrepreneur.mentorat.destroy', $demande) }}"
                                          method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Annuler cette demande?')">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
