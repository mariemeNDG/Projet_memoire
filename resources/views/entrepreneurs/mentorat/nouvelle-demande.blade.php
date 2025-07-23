@extends('index')
@section('title', 'Nouvelle demande de mentorat')
@section('content')
    <div class="pagetitle">
            <h1><i class="fas fa-user-tie text-primary me-2"></i>Nouvelle demande de mentorat</h1>

             <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Tableau de Bord</li>
                    <li class="breadcrumb-item active">Mentorat</li>
                </ol>
            </nav>
                  <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1></i></h1>
                    <a class="btn btn-primary" href="{{ route('newProjets-entrepreneur') }}">
                        <i class="fas fa-plus me-1"></i> Nouveau projet
                    </a>
                </div>
            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1></i></h1>
                    <a href="{{ route('demandes-entrepreneur') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left me-1"></i> Retour
                    </a>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Formulaire de demande</h5>
                            </div>
                            <div class="card-body">
                                <form id="mentoratForm">
                                    <div class="mb-3">
                                        <label for="projet" class="form-label">Projet concerné <span class="text-danger">*</span></label>
                                        <select class="form-select" id="projet" required>
                                            <option value="" selected disabled>Choisissez un projet</option>
                                            <option value="1">EcoTech - Solution de recyclage intelligent</option>
                                            <option value="2">AgriConnect - Plateforme agricole</option>
                                            <option value="3">HealthTech - Suivi médical</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="mentor" class="form-label">Mentor ciblé <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="mentorSearch" placeholder="Rechercher un mentor...">
                                            <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#mentorModal">
                                                <i class="fas fa-search"></i> Parcourir
                                            </button>
                                        </div>
                                        <div id="selectedMentor" class="mt-2 d-none">
                                            <div class="d-flex align-items-center bg-light p-2 rounded">
                                                <img id="mentorAvatar" src="" class="rounded-circle me-2" width="40">
                                                <div>
                                                    <h6 id="mentorName" class="mb-0"></h6>
                                                    <small id="mentorExpertise" class="text-muted"></small>
                                                </div>
                                                <input type="hidden" id="mentorId" name="mentorId">
                                                <button type="button" class="btn btn-sm btn-outline-danger ms-auto" id="removeMentor">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="domaines" class="form-label">Domaines d'accompagnement <span class="text-danger">*</span></label>
                                        <select class="form-select" id="domaines" multiple required>
                                            <option value="stratégie">Stratégie d'entreprise</option>
                                            <option value="marketing">Marketing & Vente</option>
                                            <option value="technique">Développement technique</option>
                                            <option value="juridique">Aspect juridique</option>
                                            <option value="finance">Finance & Levée de fonds</option>
                                            <option value="international">Développement international</option>
                                        </select>
                                        <small class="text-muted">Maintenez Ctrl (Windows) ou Cmd (Mac) pour sélectionner plusieurs options</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="objectifs" class="form-label">Objectifs de l'accompagnement <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="objectifs" rows="3" required placeholder="Décrivez vos attentes et ce que vous souhaitez accomplir avec ce mentorat..."></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="disponibilites" class="form-label">Disponibilités <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="disponibilites" rows="2" required placeholder="Indiquez vos disponibilités pour les sessions..."></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="duree" class="form-label">Durée souhaitée</label>
                                        <select class="form-select" id="duree">
                                            <option value="1-3">1-3 mois</option>
                                            <option value="3-6" selected>3-6 mois</option>
                                            <option value="6-12">6-12 mois</option>
                                            <option value="indeterminee">À déterminer</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="conditions" required>
                                        <label class="form-check-label" for="conditions">Je certifie que les informations fournies sont exactes et j'accepte les <a href="#">conditions d'utilisation</a>.</label>
                                    </div>

                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="reset" class="btn btn-outline-secondary me-md-2">
                                            <i class="fas fa-eraser me-1"></i> Annuler
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-paper-plane me-1"></i> Envoyer la demande
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <h5 class="mb-0"><i class="fas fa-lightbulb me-2"></i>Conseils pour votre demande</h5>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-info">
                                    <h6><i class="fas fa-info-circle me-2"></i>Rédigez une demande efficace</h6>
                                    <ul class="small">
                                        <li>Soyez précis dans vos objectifs</li>
                                        <li>Montrez que vous avez fait des recherches sur le mentor</li>
                                        <li>Indiquez clairement ce que vous attendez de l'accompagnement</li>
                                        <li>Proposez des disponibilités réalistes</li>
                                    </ul>
                                </div>

                                <div class="alert alert-warning">
                                    <h6><i class="fas fa-exclamation-triangle me-2"></i>À éviter</h6>
                                    <ul class="small">
                                        <li>Demandes trop génériques ou vagues</li>
                                        <li>Objectifs irréalistes ou trop ambitieux</li>
                                        <li>Disponibilités trop restreintes</li>
                                        <li>Ne pas personnaliser la demande</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header bg-light">
                                <h5 class="mb-0"><i class="fas fa-question-circle me-2"></i>Questions fréquentes</h5>
                            </div>
                            <div class="card-body">
                                <div class="accordion" id="faqAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                                Combien de temps pour une réponse ?
                                            </button>
                                        </h2>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body small">
                                                Les mentors ont généralement 7 jours pour répondre à votre demande. Nous vous enverrons une notification dès que vous aurez une réponse.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                                Puis-je contacter plusieurs mentors ?
                                            </button>
                                        </h2>
                                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body small">
                                                Oui, vous pouvez envoyer des demandes à plusieurs mentors, mais nous recommandons de ne pas dépasser 3 demandes simultanées pour le même projet.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                                Y a-t-il un coût pour le mentorat ?
                                            </button>
                                        </h2>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body small">
                                                La plupart des mentors sur notre plateforme offrent leur accompagnement gratuitement. Certains mentors professionnels peuvent proposer des services payants, qui seront clairement indiqués.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mentor Modal -->
    <div class="modal fade" id="mentorModal" tabindex="-1" aria-labelledby="mentorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="mentorModalLabel">Rechercher un mentor</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Rechercher par nom, expertise...">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search"></i> Rechercher
                            </button>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <!-- Mentor 1 -->
                        <div class="col">
                            <div class="card h-100 mentor-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <img src="../../../assets/images/utilisateurs/mentor1.jpg" class="rounded-circle me-3" width="60">
                                        <div>
                                            <h5 class="mb-1">Dr. Jean Martin</h5>
                                            <p class="text-muted small mb-2">Expert en stratégie d'entreprise</p>
                                            <div class="mb-2">
                                                <span class="badge bg-primary me-1">Startups</span>
                                                <span class="badge bg-primary me-1">Scale-up</span>
                                                <span class="badge bg-primary">Levée de fonds</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="small mt-2">Ancien CEO de TechGrowth, j'accompagne les entrepreneurs dans leur développement stratégique.</p>
                                    <button class="btn btn-sm btn-outline-primary select-mentor"
                                            data-id="1"
                                            data-name="Dr. Jean Martin"
                                            data-expertise="Expert en stratégie d'entreprise"
                                            data-avatar="../../../assets/images/utilisateurs/mentor1.jpg">
                                        <i class="fas fa-check me-1"></i> Sélectionner
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Mentor 2 -->
                        <div class="col">
                            <div class="card h-100 mentor-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <img src="../../../assets/images/utilisateurs/mentor2.jpg" class="rounded-circle me-3" width="60">
                                        <div>
                                            <h5 class="mb-1">Sophie Lambert</h5>
                                            <p class="text-muted small mb-2">Spécialiste marketing digital</p>
                                            <div class="mb-2">
                                                <span class="badge bg-primary me-1">Growth</span>
                                                <span class="badge bg-primary me-1">SEO</span>
                                                <span class="badge bg-primary">Réseaux sociaux</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="small mt-2">Directrice marketing chez DigitalBoost, je partage mon expertise en acquisition clients.</p>
                                    <button class="btn btn-sm btn-outline-primary select-mentor"
                                            data-id="2"
                                            data-name="Sophie Lambert"
                                            data-expertise="Spécialiste marketing digital"
                                            data-avatar="../../../assets/images/utilisateurs/mentor2.jpg">
                                        <i class="fas fa-check me-1"></i> Sélectionner
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Mentor 3 -->
                        <div class="col">
                            <div class="card h-100 mentor-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <img src="../../../assets/images/utilisateurs/mentor3.jpg" class="rounded-circle me-3" width="60">
                                        <div>
                                            <h5 class="mb-1">Pierre Dubois</h5>
                                            <p class="text-muted small mb-2">Expert en technologies IA</p>
                                            <div class="mb-2">
                                                <span class="badge bg-primary me-1">Machine Learning</span>
                                                <span class="badge bg-primary me-1">Deep Learning</span>
                                                <span class="badge bg-primary">Big Data</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="small mt-2">CTO de AI Solutions, j'aide les startups tech à architecturer leurs solutions.</p>
                                    <button class="btn btn-sm btn-outline-primary select-mentor"
                                            data-id="3"
                                            data-name="Pierre Dubois"
                                            data-expertise="Expert en technologies IA"
                                            data-avatar="../../../assets/images/utilisateurs/mentor3.jpg">
                                        <i class="fas fa-check me-1"></i> Sélectionner
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Mentor 4 -->
                        <div class="col">
                            <div class="card h-100 mentor-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <img src="../../../assets/images/utilisateurs/mentor4.jpg" class="rounded-circle me-3" width="60">
                                        <div>
                                            <h5 class="mb-1">Marie Lefèvre</h5>
                                            <p class="text-muted small mb-2">Avocate spécialisée en droit des startups</p>
                                            <div class="mb-2">
                                                <span class="badge bg-primary me-1">Juridique</span>
                                                <span class="badge bg-primary me-1">Propriété intellectuelle</span>
                                                <span class="badge bg-primary">Contrats</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="small mt-2">Cabinet LegalStart, j'accompagne les entrepreneurs dans leurs démarches juridiques.</p>
                                    <button class="btn btn-sm btn-outline-primary select-mentor"
                                            data-id="4"
                                            data-name="Marie Lefèvre"
                                            data-expertise="Avocate spécialisée en droit des startups"
                                            data-avatar="../../../assets/images/utilisateurs/mentor4.jpg">
                                        <i class="fas fa-check me-1"></i> Sélectionner
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


        </section>
@endsection
