<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <div class="d-flex sidebar-profile">
          <div class="sidebar-profile-image">
            <img src="{{asset('admin/template/images/faces/face29.png')}}" alt="image">
            <span class="sidebar-status-indicator"></span>
          </div>
          @auth
          <div class="sidebar-profile-name">
            <p class="sidebar-name">{{ Auth::user()->name }}</p>
            <p class="sidebar-designation">
              Welcome
            </p>
          </div>
        </div>
          @endauth
          @guest
          <div class="sidebar-profile-name">
            <p class="sidebar-name">Login Dahulu!</p>
          </div>
        </div>
          @endguest
          
        <p class="sidebar-menu-title">Dash menu</p>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <i class="typcn typcn-device-desktop menu-icon"></i>
          <span class="menu-title">Dashboard </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/film">
          <i class=" typcn typcn-image-outline menu-icon"></i>
          <span class="menu-title">Film </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ticket">
          <i class="typcn typcn-film  menu-icon"></i>
          <span class="menu-title">Ticket </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/dataBuyers">
          <i class="typcn typcn-group-outline menu-icon"></i>
          <span class="menu-title">Data Buyers </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/buyers">
          <i class="typcn typcn-group-outline menu-icon"></i>
          <span class="menu-title">Buyers </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/transactions">
          <i class="typcn typcn-printer menu-icon"></i>
          <span class="menu-title">Transaction </span>
        </a>
      </li>
      
    </ul>
  </nav>