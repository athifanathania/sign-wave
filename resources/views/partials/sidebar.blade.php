  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('dashboard-admin') ? 'active' : 'collapsed' }}" href="{{ route('dashboard-admin') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('kelola-kamus') ? 'active' : 'collapsed' }}" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Kelola Kamus</span>
        </a>
      </li><!-- End Kamus Nav -->
      <li class="nav-item">
        <li class="nav-item">
    <a class="nav-link {{ request()->routeIs('latihan.index', 'latihan.edit', 'latihan.create') ? 'active' : '' }}" href="{{ route('latihan.index') }}">
        <i class="bi bi-card-list"></i>
        <span>Kelola Latihan</span>
    </a>
</li>

      </li><!-- End Latihan Page Nav -->
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('kelola-artikel') ? 'active' : 'collapsed' }}" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Kelola Artikel</span>        
        </a>
      </li><!-- End Artikel Nav -->
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('kelola-feedback') ? 'active' : 'collapsed' }}" href="{{ route('kelola-feedback') }}">
          <i class="bi bi-envelope"></i>
          <span>Feedback</span>
        </a>
      </li><!-- End Feedback Page Nav -->


      <li class="nav-heading">akun</li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('profile-admin') ? 'active' : 'collapsed' }}" href="{{ route('profile-admin') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('index-kelola-user') ? 'active' : 'collapsed' }}" href="{{ route('index-kelola-user') }}">
          <i class="bi bi-person"></i>
          <span>Kelola User</span>
        </a>
      </li><!-- End User Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Log Out</span>
        </a>
      </li><!-- End Login Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->