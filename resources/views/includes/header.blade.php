
 <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="" width="40" height="120">
        <span class="d-none d-lg-block">LinkUp</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->



        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg"  width="40" height="40" alt="Profile" class="rounded-circle" >
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->prenom }} {{ auth()->user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

              <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.edit') }}">
                <i class="bi bi-person"></i>
                <span>Mon Profil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>


            <li>
              <hr class="dropdown-divider">
            </li>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item d-flex align-items-center py-2 px-3 text-danger">
                    <i class="fas fa-sign-out-alt me-3" style="width: 20px;"></i>
                    <span>Se déconnecter</span>
                </button>
            </form>

          </ul>
        </li>

      </ul>
    </nav>

  </header>
