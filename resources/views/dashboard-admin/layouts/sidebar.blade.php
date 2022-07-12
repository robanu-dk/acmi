<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
      </ul>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/profile') ? 'active' : '' }}" aria-current="page" href="/dashboard/profile">
            <span data-feather="user"></span>
            Profile
          </a>
        </li>
      </ul>

      @cannot('admin')
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/mycompetition') ? 'active' : '' }}" aria-current="page" href="/dashboard/mycompetition">
            <span data-feather="star"></span>
            Competition
          </a>
        </li>
      </ul>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/mytablighakbar') ? 'active' : '' }}" aria-current="page" href="/dashboard/mytablighakbar">
            <span data-feather="star"></span>
            Tabligh Akbar
          </a>
        </li>
      </ul>
      @endcannot

      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/competition*') ? 'active' : '' }}" href="/dashboard/competition">
            <span data-feather="award"></span>
            Competition
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/tabligh-akbar') ? 'active' : '' }}" href="/dashboard/tabligh-akbar">
            <span data-feather="clipboard"></span>
            Tabligh Akbar
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/participants') ? 'active' : '' }}" href="/dashboard/participants">
            <span data-feather="users"></span>
            Participants
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/qna') ? 'active' : '' }}" href="/dashboard/qna">
            <span data-feather="message-circle"></span>
            QnA
          </a>
        </li>
      </ul>
      @endcan

    </div>
  </nav>