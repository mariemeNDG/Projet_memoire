<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        {{-- === ADMIN === --}}
        @role('admin')
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard.main') ? '' : 'collapsed' }}" href="{{ route('dashboard.main') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard Admin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.utilisateurs') ? '' : 'collapsed' }}" href="{{ route('admin.utilisateurs') }}">
                    <i class="bi bi-people-fill"></i>
                    <span>Utilisateurs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.roles.index') ? '' : 'collapsed' }}" href="{{ route('admin.roles.index') }}">
                    <i class="bi bi-person-badge"></i>
                    <span>Rôles</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.projets') ? '' : 'collapsed' }}" href="{{ route('admin.projets') }}">
                    <i class="bi bi-patch-check"></i>
                    <span>Projets</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.signalements') ? '' : 'collapsed' }}" href="{{ route('admin.signalements') }}">
                    <i class="bi bi-flag"></i>
                    <span>Signalements</span>
                </a>
            </li>
        @endrole

        {{-- === ENTREPRENEUR === --}}
        @role('entrepreneur')
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('entrepreneur.dashboard') ? '' : 'collapsed' }}" href="{{ route('entrepreneur.dashboard') }}">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard Entrepreneur</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('entrepreneur.projets.index') ? '' : 'collapsed' }}" href="{{ route('entrepreneur.projets.index') }}">
                    <i class="bi bi-folder2-open"></i>
                    <span>Mes projets</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('entrepreneur.mentorat.index') ? '' : 'collapsed' }}" href="{{ route('entrepreneur.mentorat.index') }}">
                    <i class="bi bi-person-check"></i>
                    <span>Mentorat</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('entrepreneur.mentorat.sessions') ? '' : 'collapsed' }}" href="{{ route('entrepreneur.mentorat.sessions') }}">
                    <i class="bi bi-calendar-event"></i>
                    <span>Sessions</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('entrepreneur.incubateur.candidatures') ? '' : 'collapsed' }}" href="{{ route('entrepreneur.incubateur.candidatures') }}">
                    <i class="bi bi-building"></i>
                    <span>Incubateur</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('entrepreneur.financement.recherche') ? '' : 'collapsed' }}" href="{{ route('entrepreneur.financement.recherche') }}">
                    <i class="bi bi-search"></i>
                    <span>Financement</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('entrepreneur.financement.propositions') ? '' : 'collapsed' }}" href="{{ route('entrepreneur.financement.propositions') }}">
                    <i class="bi bi-hand-thumbs-up"></i>
                    <span>Proposition</span>
                </a>
            </li>
        @endrole

        {{-- === MENTOR === --}}
        @role('mentor')
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('mentor.dashboard') ? '' : 'collapsed' }}" href="{{ route('mentor.dashboard') }}">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard Mentor</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('mentor.accompagnement') ? '' : 'collapsed' }}" href="{{ route('mentor.accompagnement') }}">
                    <i class="bi bi-people"></i>
                    <span>Accompagnement</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('mentor.disponibilite') ? '' : 'collapsed' }}" href="{{ route('mentor.disponibilite') }}">
                    <i class="bi bi-folder2-open"></i>
                    <span>Projets disponibles</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('mentor.calendrier') ? '' : 'collapsed' }}" href="{{ route('mentor.calendrier') }}">
                    <i class="bi bi-calendar-week"></i>
                    <span>Disponibilités</span>
                </a>
            </li>

        @endrole

        {{-- === INVESTISSEUR === --}}
        @role('investisseur')
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('investisseur.dashboard') ? '' : 'collapsed' }}" href="{{ route('investisseur.dashboard') }}">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard Investisseur</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('investisseur.decouverte') ? '' : 'collapsed' }}" href="{{ route('investisseur.decouverte') }}">
                    <i class="bi bi-binoculars"></i>
                    <span>Découvertes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('investisseur.portfolio') ? '' : 'collapsed' }}" href="{{ route('investisseur.portfolio') }}">
                    <i class="bi bi-wallet2"></i>
                    <span>Investissements</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('investisseur.transactions') ? '' : 'collapsed' }}" href="{{ route('investisseur.transactions') }}">
                    <i class="bi bi-arrow-left-right"></i>
                    <span>Transactions</span>
                </a>
            </li>
        @endrole

        {{-- === INCUBATEUR === --}}
        @role('incubateur')
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('incubateur.dashboard') ? '' : 'collapsed' }}" href="{{ route('incubateur.dashboard') }}">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard Incubateur</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('incubateur.incubes') ? '' : 'collapsed' }}" href="{{ route('incubateur.incubes') }}">
                    <i class="bi bi-house-door"></i>
                    <span>Projets incubés</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('incubateur.selection') ? '' : 'collapsed' }}" href="{{ route('incubateur.selection') }}">
                    <i class="bi bi-ui-radios"></i>
                    <span>Sélection</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('incubateur.appel.lance') ? '' : 'collapsed' }}" href="{{ route('incubateur.appel.lance') }}">
                    <i class="bi bi-megaphone"></i>
                    <span>Appels à projets</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('incubateur.evenements') ? '' : 'collapsed' }}" href="{{ route('incubateur.evenements') }}">
                    <i class="bi bi-calendar-event"></i>
                    <span>Évènements</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('incubateur.equipe') ? '' : 'collapsed' }}" href="{{ route('incubateur.equipe') }}">
                    <i class="bi bi-people-fill"></i>
                    <span>Équipe</span>
                </a>
            </li>
        @endrole

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('profile.edit') ? '' : 'collapsed' }}" href="{{ route('profile.edit') }}">
                <i class="bi bi-person-circle"></i>
                <span>Mon Profil</span>
            </a>
        </li>

        {{-- 🔓 Déconnexion --}}
        <li class="has-sub mt-4 ml-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="btn btn-outline-danger d-flex align-items-center justify-content-center">
                    <i class="bi bi-box-arrow-right mr-2"></i> Déconnexion
                </button>
            </form>
        </li>

    </ul>
</aside>
