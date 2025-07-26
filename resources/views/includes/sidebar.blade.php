<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        {{-- === ADMIN === --}}
        @role('admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.main') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard Admin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin.utilisateurs') }}">
                    <i class="bi bi-card-list"></i>
                    <span>Utilisateurs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin.roles') }}">
                    <i class="bi bi-card-list"></i>
                    <span>Rôles</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin.validations') }}">
                    <i class="bi bi-card-list"></i>
                    <span>Validation projets</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin.signalements') }}">
                    <i class="bi bi-card-list"></i>
                    <span>Signalements</span>
                </a>
            </li>
        @endrole

        {{-- === ENTREPRENEUR === --}}
        @role('entrepreneur')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('entrepreneur.dashboard') }}">
                    <i class="bi bi-cash-coin"></i>
                    <span>Dashboard Entrepreneur</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('entrepreneur.projets.index') }}">
                    <i class="bi bi-card-list"></i>
                    <span>Mes projets</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('entrepreneur.mentorat.demandes') }}">
                    <i class="bi bi-card-list"></i>
                    <span>Mentorat</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Sessions</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Incubateur</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Financement</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Proposition</span>
                </a>
            </li>
        @endrole

        {{-- === MENTOR === --}}
        @role('mentor')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('mentor.dashboard') }}">
                    <i class="bi bi-card-list"></i>
                    <span>Dashboard Mentor</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Accompagnement</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Projets disponibles</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Disponibilités</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Préférences Mentor</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Évaluations</span>
                </a>
            </li>
        @endrole

        {{-- === INVESTISSEUR === --}}
        @role('investisseur')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('investisseur.dashboard') }}">
                    <i class="bi bi-card-list"></i>
                    <span>Dashboard Investisseur</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Découverte</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Portfolio</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Préférences d'alerte</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Historique des alertes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Transactions</span>
                </a>
            </li>
        @endrole

        {{-- === INCUBATEUR === --}}
        @role('incubateur')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('incubateur.dashboard') }}">
                    <i class="bi bi-card-list"></i>
                    <span>Dashboard Incubateur</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Projets incubés</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Sélection</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Appels à projets</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Évènements</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-card-list"></i>
                    <span>Équipe</span>
                </a>
            </li>
        @endrole

        <li class="nav-item {{ request()->routeIs('profile.edit') ? 'active' : '' }}">
            <a class="nav-link collapsed" href="{{ route('profile.edit') }}">
                <i class="fa fa-user-circle"></i>
                <span>Mon Profil</span>
            </a>
        </li>

        {{-- 🔓 Déconnexion --}}
        <li class="has-sub mt-4 ml-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="btn btn-outline-danger d-flex align-items-center justify-content-center">
                    <i class="fas fa-sign-out-alt mr-2"></i> Déconnexion
                </button>
            </form>
        </li>

    </ul>
</aside>
