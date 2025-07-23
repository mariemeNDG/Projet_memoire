@extends('index')
@section('title', 'Portfolio Investisseur')
@section('content')

            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-briefcase me-2"></i>Mon Portfolio</h1>
                    <div>
                        <button class="btn btn-outline-secondary me-2" id="exportPortfolio">
                            <i class="fas fa-download me-1"></i> Exporter
                        </button>
                        <button class="btn btn-primary" onclick="window.location.href='decouverte.html'">
                            <i class="fas fa-plus me-1"></i> Nouvel investissement
                        </button>
                    </div>
                </div>

                <!-- Stats and Charts -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Performance du portfolio</h5>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-light active">6 mois</button>
                                    <button class="btn btn-sm btn-light">1 an</button>
                                    <button class="btn btn-sm btn-light">3 ans</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="portfolioChart" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Résumé</h5>
                            </div>
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Investissement total</span>
                                            <strong>650K€</strong>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Valeur actuelle</span>
                                            <strong>1.56M€</strong>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>ROI moyen</span>
                                            <strong class="text-success">2.4x</strong>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Projets actifs</span>
                                            <strong>8</strong>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Projets sortis</span>
                                            <strong>3</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sector Distribution -->
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Répartition par secteur</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="sectorChart" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Répartition par type</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="typeChart" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Investments Table -->
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Mes investissements</h5>
                        <div class="input-group" style="width: 300px;">
                            <input type="text" class="form-control" placeholder="Rechercher un projet...">
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
                                        <th>Projet</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>Montant</th>
                                        <th>Valeur actuelle</th>
                                        <th>ROI</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../../assets/images/projets/projet1.jpg" class="rounded-circle me-2" width="40">
                                                <span>EcoTech</span>
                                            </div>
                                        </td>
                                        <td>Capital (15%)</td>
                                        <td>15/06/2023</td>
                                        <td>150K€</td>
                                        <td>480K€</td>
                                        <td><span class="badge bg-success">3.2x</span></td>
                                        <td><span class="badge bg-success">Actif</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-chart-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../../assets/images/projets/projet2.jpg" class="rounded-circle me-2" width="40">
                                                <span>AgriConnect</span>
                                            </div>
                                        </td>
                                        <td>Prêt convertible</td>
                                        <td>10/05/2023</td>
                                        <td>80K€</td>
                                        <td>120K€</td>
                                        <td><span class="badge bg-warning text-dark">1.5x</span></td>
                                        <td><span class="badge bg-info">En cours</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-chart-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../../assets/images/projets/projet3.jpg" class="rounded-circle me-2" width="40">
                                                <span>MediTrack</span>
                                            </div>
                                        </td>
                                        <td>Capital (10%)</td>
                                        <td>22/03/2023</td>
                                        <td>200K€</td>
                                        <td>820K€</td>
                                        <td><span class="badge bg-success">4.1x</span></td>
                                        <td><span class="badge bg-success">Actif</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-chart-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../../assets/images/projets/projet4.jpg" class="rounded-circle me-2" width="40">
                                                <span>EduTech</span>
                                            </div>
                                        </td>
                                        <td>Capital (12%)</td>
                                        <td>15/01/2023</td>
                                        <td>120K€</td>
                                        <td>140K€</td>
                                        <td><span class="badge bg-success">1.2x</span></td>
                                        <td><span class="badge bg-secondary">Sorti</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-chart-line"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <nav aria-label="Investments pagination">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Précédent</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/investisseurs.js"></script>
    <script>
        // Portfolio Performance Chart
        const portfolioCtx = document.getElementById('portfolioChart');
        if (portfolioCtx) {
            new Chart(portfolioCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
                    datasets: [{
                        label: 'Valeur du portfolio (K€)',
                        data: [450, 520, 600, 750, 980, 1560],
                        borderColor: '#2ecc71',
                        backgroundColor: 'rgba(46, 204, 113, 0.1)',
                        fill: true,
                        tension: 0.3
                    }]
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
                            beginAtZero: false
                        }
                    }
                }
            });
        }

        // Sector Distribution Chart
        const sectorCtx = document.getElementById('sectorChart');
        if (sectorCtx) {
            new Chart(sectorCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Technologie', 'Santé', 'Environnement', 'Agriculture', 'Éducation'],
                    datasets: [{
                        data: [45, 25, 15, 10, 5],
                        backgroundColor: [
                            '#3498db',
                            '#e74c3c',
                            '#2ecc71',
                            '#f39c12',
                            '#9b59b6'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'right'
                        }
                    },
                    cutout: '60%'
                }
            });
        }

        // Investment Type Chart
        const typeCtx = document.getElementById('typeChart');
        if (typeCtx) {
            new Chart(typeCtx, {
                type: 'bar',
                data: {
                    labels: ['Capital', 'Prêt', 'Convertible'],
                    datasets: [{
                        label: 'Montant investi (K€)',
                        data: [470, 120, 60],
                        backgroundColor: [
                            'rgba(52, 152, 219, 0.7)',
                            'rgba(46, 204, 113, 0.7)',
                            'rgba(241, 196, 15, 0.7)'
                        ],
                        borderColor: [
                            'rgba(52, 152, 219, 1)',
                            'rgba(46, 204, 113, 1)',
                            'rgba(241, 196, 15, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
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

        // Export Portfolio
        document.getElementById('exportPortfolio').addEventListener('click', function() {
            // Simulation d'export
            alert('Export de votre portfolio en cours de préparation... Vous recevrez un email avec le document.');

            // Ici vous feriez normalement un appel API pour générer l'export
            setTimeout(() => {
                showToast('Votre export est prêt ! Consultez votre email.', 'success');
            }, 2000);
        });

        function showToast(message, type) {
            const toast = document.createElement('div');
            toast.className = `toast align-items-center text-white bg-${type} border-0 position-fixed bottom-0 end-0 m-3`;
            toast.setAttribute('role', 'alert');
            toast.setAttribute('aria-live', 'assertive');
            toast.setAttribute('aria-atomic', 'true');
            toast.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">${message}</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            `;
            document.body.appendChild(toast);
            new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show();
        }
    </script>


        </section>
@endsection
