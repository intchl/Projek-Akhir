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
            <p class="sidebar-name">Belum login</p>
          </div>
        </div>
          @endguest
          
        <div class="nav-search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
            <div class="input-group-append">
              <span class="input-group-text" id="search">
                <i class="typcn typcn-zoom"></i>
              </span>
            </div>
          </div>
        </div>
        <p class="sidebar-menu-title">Dash menu</p>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contoh">
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
        <a class="nav-link" href="/buyer">
          <i class="typcn typcn-group-outline menu-icon"></i>
          <span class="menu-title">Buyer </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../index.html">
          <i class="typcn typcn-printer menu-icon"></i>
          <span class="menu-title">Transaction </span>
        </a>
      </li>
      @auth
      <li class="nav-item bg-danger">
        <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>
      @endauth
      @guest
      <li class="nav-item bg-primary">
        <a class="nav-link" href="/login">
          <span class="menu-title">Login</span>
        </a>
      </li>
      @endguest
      
    </ul>
  </nav>