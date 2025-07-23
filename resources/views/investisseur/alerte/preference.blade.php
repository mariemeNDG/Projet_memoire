@extends('index')
@section('title', 'Préférences d\'Alertes')
@section('content')


             <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1><i class="fas fa-bell me-2"></i>Préférences d'Alertes</h1>
                    <button class="btn btn-outline-primary" onclick="window.location.href='liste.html'">
                        <i class="fas fa-history me-1"></i> Historique
                    </button>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Configurer mes alertes</h5>
                    </div>
                    <div class="card-body">
                        <form id="alertForm">
                            <div class="mb-4">
                                <h5><i class="fas fa-filter me-2"></i>Filtres</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Secteurs</label>
                                            <select class="form-select" multiple>
                                                <option selected>Technologie</option>
                                                <option selected>Environnement</option>
                                                <option>Agriculture</option>
                                                <option>Santé</option>
                                                <option>Éducation</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Niveau de maturité</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="maturityIdeation" checked>
                                                <label class="form-check-label" for="maturityIdeation">Idée</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="maturityPrototype" checked>
                                                <label class="form-check-label" for="maturityPrototype">Prototype</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="maturityIncubation">
                                                <label class="form-check-label" for="maturityIncubation">Incubation</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h5><i class="fas fa-euro-sign me-2"></i>Montant recherché</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="minAmount" class="form-label">Minimum (K€)</label>
                                            <input type="number" class="form-control" id="minAmount" value="10">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="maxAmount" class="form-label">Maximum (K€)</label>
                                            <input type="number" class="form-control" id="maxAmount" value="500">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h5><i class="fas fa-bell me-2"></i>Fréquence des notifications</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="frequency" id="frequencyInstant" checked>
                                    <label class="form-check-label" for="frequencyInstant">Immédiate (dès qu'un projet correspond)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="frequency" id="frequencyDaily">
                                    <label class="form-check-label" for="frequencyDaily">Quotidienne (résumé à 9h)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="frequency" id="frequencyWeekly">
                                    <label class="form-check-label" for="frequencyWeekly">Hebdomadaire (résumé le lundi)</label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h5><i class="fas fa-envelope me-2"></i>Méthode de réception</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="methodEmail" checked>
                                    <label class="form-check-label" for="methodEmail">Email</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="methodPush">
                                    <label class="form-check-label" for="methodPush">Notification push (application mobile)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="methodSMS">
                                    <label class="form-check-label" for="methodSMS">SMS</label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mt-4">
                                <button type="button" class="btn btn-outline-secondary me-2">
                                    <i class="fas fa-times me-1"></i> Annuler
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-1"></i> Enregistrer les préférences
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../../js/investisseurs.js"></script>
    <script>
        // Gestion de la soumission du formulaire
        document.getElementById('alertForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Validation des montants
            const minAmount = parseInt(document.getElementById('minAmount').value);
            const maxAmount = parseInt(document.getElementById('maxAmount').value);

            if (minAmount >= maxAmount) {
                alert('Le montant maximum doit être supérieur au montant minimum');
                return;
            }

            // Préparation des données
            const formData = {
                sectors: Array.from(document.querySelectorAll('.form-select option:checked')).map(opt => opt.value),
                maturity: {
                    ideation: document.getElementById('maturityIdeation').checked,
                    prototype: document.getElementById('maturityPrototype').checked,
                    incubation: document.getElementById('maturityIncubation').checked
                },
                amountRange: {
                    min: minAmount,
                    max: maxAmount
                },
                frequency: document.querySelector('input[name="frequency"]:checked').value,
                methods: {
                    email: document.getElementById('methodEmail').checked,
                    push: document.getElementById('methodPush').checked,
                    sms: document.getElementById('methodSMS').checked
                }
            };

            // Simulation d'envoi au serveur
            console.log('Préférences à sauvegarder:', formData);

            // Affichage d'une notification
            const toast = document.createElement('div');
            toast.className = 'toast align-items-center text-white bg-success border-0 position-fixed bottom-0 end-0 m-3';
            toast.setAttribute('role', 'alert');
            toast.setAttribute('aria-live', 'assertive');
            toast.setAttribute('aria-atomic', 'true');
            toast.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">Préférences enregistrées avec succès !</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            `;
            document.body.appendChild(toast);
            new bootstrap.Toast(toast, { autohide: true, delay: 3000 }).show();

            // Ici vous feriez normalement un appel API :
            // fetch('/api/v1/alerts/preferences', {
            //     method: 'POST',
            //     headers: { 'Content-Type': 'application/json' },
            //     body: JSON.stringify(formData)
            // })
            // .then(response => response.json())
            // .then(data => {
            //     if (data.success) {
            //         showSuccessToast();
            //     }
            // });
        });

        // Validation en temps réel des montants
        document.getElementById('maxAmount').addEventListener('change', function() {
            const min = parseInt(document.getElementById('minAmount').value);
            const max = parseInt(this.value);

            if (max <= min) {
                alert('Le montant maximum doit être supérieur au minimum');
                this.value = min + 10;
            }
        });
    </script>
@endsection
