 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('main-dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard Admin</span>
        </a>
      </li>


       <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard-entrepreneur') }}">
          <i class="bi bi-cash-coin"></i>
          <span>Dashbord Entrepreneur</span>
        </a>
      </li>

      <li class="nav-item">
       <a class="nav-link collapsed" href="{{ route('mesProjets-entrepreneur') }}">
          <i class="bi bi-card-list"></i>
          <span>Mes projets</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('demandes-entrepreneur') }}">
          <i class="bi bi-card-list"></i>
          <span>Mentorat</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('session-entrepreneur') }}">
          <i class="bi bi-card-list"></i>
          <span>Sessions</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('candidatures-entrepreneur') }}">
          <i class="bi bi-card-list"></i>
          <span>Incubateur</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('financements-entrepreneur') }}">
          <i class="bi bi-card-list"></i>
          <span>Finacement</span>
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('propositions-entrepreneur') }}">
          <i class="bi bi-card-list"></i>
          <span>Proposition</span>
        </a>
      </li>

      {{-- Parti investisseur --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard-mentor') }}">
          <i class="bi bi-card-list"></i>
          <span>Dashboard Mentor</span>
        </a>
      </li>

        <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('accompagnement-mentor') }}">
          <i class="bi bi-card-list"></i>
          <span>Accompagnement</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('projets-disponibles-mentor') }}">
          <i class="bi bi-card-list"></i>
          <span>Projets disponible</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('calendrier-disponibles-mentor') }}">
          <i class="bi bi-card-list"></i>
          <span>Disponibilités</span>
        </a>
      </li>

       <li class="nav-item">
       <a class="nav-link collapsed" href="{{ route('preference-disponibles-mentor') }}">
          <i class="bi bi-card-list"></i>
          <span>Préférences Mentor</span>
        </a>
      </li>

       <li class="nav-item">
       <a class="nav-link collapsed" href="{{ route('donnee_evaluation_mentor') }}">
          <i class="bi bi-card-list"></i>
          <span>Evaluations</span>
        </a>
      </li>

      {{-- Parti investisseur --}}

       <li class="nav-item">
       <a class="nav-link collapsed" href="{{ route('dashboard_invess') }}">
          <i class="bi bi-card-list"></i>
          <span>Dashboard Investisseur</span>
        </a>
      </li>

       <li class="nav-item">
       <a class="nav-link collapsed" href="{{ route('decouverte') }}">
          <i class="bi bi-card-list"></i>
          <span>Découverte</span>
        </a>
      </li>

        <li class="nav-item">
       <a class="nav-link collapsed" href="{{ route('portfolio') }}">
          <i class="bi bi-card-list"></i>
          <span>Portfolio</span>
        </a>
      </li>

       <li class="nav-item">
       <a class="nav-link collapsed" href="{{ route('alerte_preference') }}">
          <i class="bi bi-card-list"></i>
          <span>Préférences d'alerte</span>
        </a>
      </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('liste-alerte') }}">
            <i class="bi bi-card-list"></i>
            <span>Historique des alertes</span>
          </a>

           <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('transactions') }}">
            <i class="bi bi-card-list"></i>
            <span>Transactions</span>
          </a>
      </li>

         {{-- Parti incubateur --}}

    <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('dashboard_incub') }}">
            <i class="bi bi-card-list"></i>
            <span>Dashboard Incubateur</span>
          </a>
      </li>

       <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('incubes') }}">
            <i class="bi bi-card-list"></i>
            <span>Projets incubés</span>
          </a>
      </li>

<li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('selection') }}">
            <i class="bi bi-card-list"></i>
            <span>Selection</span>
          </a>
      </li>

      <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('lance') }}">
            <i class="bi bi-card-list"></i>
            <span>Appels à projets</span>
          </a>
      </li>




       <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('liste_incubateurs') }}">
            <i class="bi bi-card-list"></i>
            <span>Evenements</span>
          </a>
      </li>

         <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('liste_incubateurs') }}">
            <i class="bi bi-card-list"></i>
            <span>Equipe</span>
          </a>
      </li>

       {{-- Parti admin --}}
       
               <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('dashboard_admin') }}">
            <i class="bi bi-card-list"></i>
            <span>Dashboard Admin</span>
          </a>
      </li>

                    <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('list_users') }}">
            <i class="bi bi-card-list"></i>
            <span>Utilisateurs</span>
          </a>
      </li>

                        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('roles_utilisateurs') }}">
            <i class="bi bi-card-list"></i>
            <span>Roles</span>
          </a>
      </li>

                              <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('validation_utilisateurs') }}">
            <i class="bi bi-card-list"></i>
            <span>Validation projets</span>
          </a>
      </li>

                                   <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('validation_utilisateurs') }}">
            <i class="bi bi-card-list"></i>
            <span>Signalements</span>
          </a>
      </li>


    </ul>

  </aside>
