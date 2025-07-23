@extends('index')
@section('title', 'alerte')
@section('content')

            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-history me-2"></i>Historique des Alertes</h1>
                    <div>
                        <button class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#filterAlertsModal">
                            <i class="fas fa-filter me-1"></i> Filtrer
                        </button>
                        <button class="btn btn-outline-danger" id="clearAlerts">
                            <i class="fas fa-trash-alt me-1"></i> Tout effacer
                        </button>
                    </div>
                </div>

                <!-- Alerts List -->
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Mes alertes</h5>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="unreadOnly" checked>
                            <label class="form-check-label" for="unreadOnly">Non lues seulement</label>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action unread-alert">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">
                                        <i class="fas fa-bell text-warning me-2"></i>
                                        Nouveau projet correspondant à vos critères
                                    </h6>
                                    <small>Il y a 2 heures</small>
                                </div>
                                <p class="mb-1">Le projet "GreenEnergy" recherche 250K€ dans le secteur Environnement</p>
                                <small class="text-muted">Maturité: Prototype | Localisation: Paris</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">
                                        <i class="fas fa-chart-line text-info me-2"></i>
                                        Mise à jour projet
                                    </h6>
                                    <small>Hier</small>
                                </div>
                                <p class="mb-1">"AgriConnect" a atteint 150% de son objectif de vente</p>
                                <small class="text-muted">Votre investissement: 80K€ | ROI actuel: 1.8x</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">
                                        <i class="fas fa-calendar-check text-success me-2"></i>
                                        Rappel: Réunion demain
                                    </h6>
                                    <small>Avant-hier</small>
                                </div>
                                <p class="mb-1">Réunion avec l'équipe de "MediTrack" demain à 14h</p>
                                <small class="text-muted">Lieu: Zoom | Lien dans votre calendrier</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action unread-alert">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">
                                        <i class="fas fa-exclamation-triangle text-danger me-2"></i>
                                        Action requise
                                    </h6>
                                    <small>3 jours</small>
                                </div>
                                <p class="mb-1">"EduTech" nécessite une décision pour le prochain tour de financement</p>
                                <small class="text-muted">Délai: 5 jours | Montant: 100K€</small>
                            </a>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <nav aria-label="Alerts pagination">
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
            </div>
        </div>
    </div>

    <!-- Filter Alerts Modal -->
    <div class="modal fade" id="filterAlertsModal" tabindex="-1" aria-labelledby="filterAlertsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="filterAlertsModalLabel">Filtrer les alertes</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="alertsFilterForm">
                        <div class="mb-3">
                            <label class="form-label">Type d'alerte</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="alertTypeNew" checked>
                                <label class="form-check-label" for="alertTypeNew">Nouveaux projets</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="alertTypeUpdate" checked>
                                <label class="form-check-label" for="alertTypeUpdate">Mises à jour</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="alertTypeAction">
                                <label class="form-check-label" for="alertTypeAction">Actions requises</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="alertTypeEvent">
                                <label class="form-check-label" for="alertTypeEvent">Événements</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Période</label>
                            <select class="form-select">
                                <option selected>30 derniers jours</option>
                                <option>7 derniers jours</option>
                                <option>3 derniers mois</option>
                                <option>Tout l'historique</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Statut</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="alertStatusUnread" checked>
                                <label class="form-check-label" for="alertStatusUnread">Non lues</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="alertStatusRead">
                                <label class="form-check-label" for="alertStatusRead">Lues</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Appliquer</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/investisseurs.js"></script>
    <script>
        // Gestion du filtre "Non lues seulement"
        document.getElementById('unreadOnly').addEventListener('change', function() {
            const unreadAlerts = document.querySelectorAll('.unread-alert');
            const allAlerts = document.querySelectorAll('.list-group-item');

            if (this.checked) {
                allAlerts.forEach(alert => {
                    if (!alert.classList.contains('unread-alert')) {
                        alert.style.display = 'none';
                    } else {
                        alert.style.display = 'block';
                    }
                });
            } else {
                allAlerts.forEach(alert => {
                    alert.style.display = 'block';
                });
            }
        });

        // Effacer toutes les alertes
        document.getElementById('clearAlerts').addEventListener('click', function() {
            if (confirm('Êtes-vous sûr de vouloir effacer tout l\'historique des alertes ? Cette action est irréversible.')) {
                // Ici vous feriez normalement un appel API pour effacer
                const alertsList = document.querySelector('.list-group');
                alertsList.innerHTML = '<div class="text-center py-4 text-muted">Aucune alerte dans l\'historique</div>';

                // Notification
                const toast = document.createElement('div');
                toast.className = 'toast align-items-center text-white bg-success border-0 position-fixed bottom-0 end-0 m-3';
                toast.innerHTML = `
                    <div class="d-flex">
                        <div class="toast-body">Historique effacé avec succès</div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                    </div>
                `;
                document.body.appendChild(toast);
                new bootstrap.Toast(toast, { autohide: true, delay: 3000 }).show();
            }
        });

        // Marquer une alerte comme lue lorsqu'on clique dessus
        document.querySelectorAll('.list-group-item').forEach(item => {
            item.addEventListener('click', function(e) {
                if (e.target.tagName !== 'A' && !e.target.classList.contains('btn-close')) {
                    this.classList.remove('unread-alert');
                }
            });
        });
    </script>

@endsection
