@extends('index')
@section('title', 'Transactions Investisseur')
@section('content')

            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-exchange-alt me-2"></i>Historique des Transactions</h1>
                    <div>
                        <button class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#filterTransactionsModal">
                            <i class="fas fa-filter me-1"></i> Filtrer
                        </button>
                        <button class="btn btn-primary" id="exportTransactions">
                            <i class="fas fa-file-export me-1"></i> Exporter
                        </button>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card stat-card bg-primary text-white">
                            <div class="card-body">
                                <h6 class="text-uppercase">Total investi</h6>
                                <h2 class="mb-0">650K€</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card bg-success text-white">
                            <div class="card-body">
                                <h6 class="text-uppercase">Retours perçus</h6>
                                <h2 class="mb-0">320K€</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card bg-info text-white">
                            <div class="card-body">
                                <h6 class="text-uppercase">Transactions</h6>
                                <h2 class="mb-0">24</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card bg-warning text-dark">
                            <div class="card-body">
                                <h6 class="text-uppercase">En attente</h6>
                                <h2 class="mb-0">2</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transactions Table -->
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Détail des transactions</h5>
                        <div class="input-group" style="width: 300px;">
                            <input type="text" class="form-control" placeholder="Rechercher...">
                            <button class="btn btn-light" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th>Date</th>
                                        <th>Projet</th>
                                        <th>Type</th>
                                        <th>Montant</th>
                                        <th>Statut</th>
                                        <th>Preuve</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>15/06/2023</td>
                                        <td>EcoTech</td>
                                        <td>Investissement</td>
                                        <td>150K€</td>
                                        <td><span class="badge bg-success">Complété</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-receipt"></i> Contrat
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10/05/2023</td>
                                        <td>AgriConnect</td>
                                        <td>Investissement</td>
                                        <td>80K€</td>
                                        <td><span class="badge bg-success">Complété</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-receipt"></i> Contrat
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>22/03/2023</td>
                                        <td>MediTrack</td>
                                        <td>Investissement</td>
                                        <td>200K€</td>
                                        <td><span class="badge bg-success">Complété</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-receipt"></i> Contrat
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15/01/2023</td>
                                        <td>EduTech</td>
                                        <td>Dividende</td>
                                        <td>25K€</td>
                                        <td><span class="badge bg-success">Complété</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-receipt"></i> Reçu
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05/01/2023</td>
                                        <td>GreenEnergy</td>
                                        <td>Investissement</td>
                                        <td>120K€</td>
                                        <td><span class="badge bg-warning text-dark">En attente</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-secondary" disabled>
                                                <i class="fas fa-receipt"></i> En cours
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <nav aria-label="Transactions pagination">
                            <ul class="pagination justify-content-center mb-0">
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

                <!-- Annual Summary -->
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Résumé annuel</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="annualChart" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Transactions Modal -->
    <div class="modal fade" id="filterTransactionsModal" tabindex="-1" aria-labelledby="filterTransactionsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="filterTransactionsModalLabel">Filtrer les transactions</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="transactionsFilterForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Période</label>
                                    <select class="form-select">
                                        <option selected>Toutes dates</option>
                                        <option>2023</option>
                                        <option>2022</option>
                                        <option>30 derniers jours</option>
                                        <option>Dernière semaine</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Type</label>
                                    <select class="form-select" multiple>
                                        <option selected>Investissement</option>
                                        <option selected>Dividende</option>
                                        <option>Remboursement</option>
                                        <option>Frais</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Statut</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="statusCompleted" checked>
                                        <label class="form-check-label" for="statusCompleted">Complété</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="statusPending" checked>
                                        <label class="form-check-label" for="statusPending">En attente</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="statusFailed">
                                        <label class="form-check-label" for="statusFailed">Échoué</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="statusCancelled">
                                        <label class="form-check-label" for="statusCancelled">Annulé</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Montant (K€)</label>
                                    <div class="d-flex align-items-center">
                                        <input type="number" class="form-control me-2" placeholder="Min" value="0">
                                        <span class="mx-2">à</span>
                                        <input type="number" class="form-control ms-2" placeholder="Max" value="500">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Projet</label>
                            <select class="form-select" multiple>
                                <option selected>Tous les projets</option>
                                <option>EcoTech</option>
                                <option>AgriConnect</option>
                                <option>MediTrack</option>
                                <option>EduTech</option>
                                <option>GreenEnergy</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-outline-secondary">Réinitialiser</button>
                    <button type="button" class="btn btn-primary">Appliquer</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/investisseurs.js"></script>
    <script>
        // Annual Summary Chart
        const annualCtx = document.getElementById('annualChart');
        if (annualCtx) {
            new Chart(annualCtx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
                    datasets: [
                        {
                            label: 'Investissements',
                            data: [50, 80, 120, 90, 150, 200, 0, 0, 0, 0, 0, 0],
                            backgroundColor: 'rgba(52, 152, 219, 0.7)',
                            borderColor: 'rgba(52, 152, 219, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Retours',
                            data: [0, 0, 25, 30, 45, 50, 0, 0, 0, 0, 0, 0],
                            backgroundColor: 'rgba(46, 204, 113, 0.7)',
                            borderColor: 'rgba(46, 204, 113, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': ' + context.parsed.y + 'K€';
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Export Transactions
        document.getElementById('exportTransactions').addEventListener('click', function() {
            // Ici vous feriez normalement un appel API pour générer l'export
            alert('Export des transactions en cours de préparation... Vous recevrez un email avec le document PDF.');

            // Simulation de délai
            setTimeout(() => {
                const toast = document.createElement('div');
                toast.className = 'toast align-items-center text-white bg-success border-0 position-fixed bottom-0 end-0 m-3';
                toast.innerHTML = `
                    <div class="d-flex">
                        <div class="toast-body">Export généré avec succès ! Consultez votre email.</div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                    </div>
                `;
                document.body.appendChild(toast);
                new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show();
            }, 2000);
        });

        // Gestion de l'affichage des contrats/reçus
        document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(element => {
            new bootstrap.Tooltip(element);
        });
    </script>
@endsection
