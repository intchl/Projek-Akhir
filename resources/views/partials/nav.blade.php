<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="../../index.html">
          <img src="{{ asset('admin/template/images/logo.svg') }}" alt="logo"/>
      </a>
      <a class="navbar-brand brand-logo-mini" href="../../index.html">
          <img src="{{ asset('admin/template/images/logo-mini.svg') }}" alt="logo"/>
      </a>
      <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button" data-toggle="minimize">
          <span class="typcn typcn-th-menu"></span>
      </button>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
                  <i class="typcn typcn-user-outline mr-0 text-primary"></i>
                  @auth
                  <span class="text-primary" style="font-weight: 500">{{ Auth::user()->name }}</span>
                  @endauth
                  @guest
                  <span class="text-primary" style="font-weight: 500">Login Dahulu</span>
                  @endguest
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  @auth
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                  @endauth
                  @guest
                  <a class="dropdown-item" href="{{ route('login') }}">
                      <i class="typcn typcn-power text-primary"></i>
                      Login
                  </a>
                  @endguest
              </div>
          </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
      </button>
  </div>
</nav>