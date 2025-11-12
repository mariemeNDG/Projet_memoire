@extends('index')
@section('title', 'Validation des Projets')
@section('content')
            <div class="container-fluid">
 <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-users me-2"></i>Projets</h1>
                    <div>
                        <button class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#filtersModal">
                            <i class="fas fa-filter me-1"></i> Filtres
                        </button>
                
                    </div>
                </div>

                 <!-- Pending Actions -->
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Projets récents</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th width="25%">Nom</th>
                                        <th width="20%">Etat</th>
                                        <th width="20%">Entrepreneur</th>
                                        <th width="20%">Date</th>
                                        <th width="15%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($projets as $item)
                                        <tr>
                                            <td>{{ $item->nom }}</td>
                                            <td><span class="badge bg-secondary">{{ $item->etat }}</span></td>
                                            <td> {{ $item->user->name }}</td>
                                            <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-success me-1">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Aucun projet récent</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/admin.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab switching
            document.getElementById('pendingTab').addEventListener('click', function() {
                document.getElementById('pendingProjects').classList.remove('d-none');
                document.getElementById('approvedProjects').classList.add('d-none');
                document.getElementById('rejectedProjects').classList.add('d-none');
                this.classList.add('active');
                document.getElementById('approvedTab').classList.remove('active');
                document.getElementById('rejectedTab').classList.remove('active');
            });

            document.getElementById('approvedTab').addEventListener('click', function() {
                document.getElementById('pendingProjects').classList.add('d-none');
                document.getElementById('approvedProjects').classList.remove('d-none');
                document.getElementById('rejectedProjects').classList.add('d-none');
                this.classList.add('active');
                document.getElementById('pendingTab').classList.remove('active');
                document.getElementById('rejectedTab').classList.remove('active');
            });

            document.getElementById('rejectedTab').addEventListener('click', function() {
                document.getElementById('pendingProjects').classList.add('d-none');
                document.getElementById('approvedProjects').classList.add('d-none');
                document.getElementById('rejectedProjects').classList.remove('d-none');
                this.classList.add('active');
                document.getElementById('pendingTab').classList.remove('active');
                document.getElementById('approvedTab').classList.remove('active');
            });

            // Approve/reject actions
            document.querySelectorAll('.btn-success').forEach(btn => {
                btn.addEventListener('click', function() {
                    // In a real app, this would send an API request
                    console.log('Project approved');
                });
            });

            document.querySelectorAll('.btn-danger').forEach(btn => {
                btn.addEventListener('click', function() {
                    // In a real app, this would send an API request
                    console.log('Project rejected');
                });
            });
        });
    </script>
@endsection
