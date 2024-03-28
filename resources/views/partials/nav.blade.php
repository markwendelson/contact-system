<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
      <div class="navbar-logo">
        <a href="{{ route('home') }}">
          <!-- <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="Theme-Logo" /> -->
          {{ config('app.name', 'Laravel') }}
        </a>
        <i class="feather icon-more-horizontal"></i>
        {{-- <a class="mobile-menu" id="mobile-collapse" href="#!">
            <i class="feather icon-menu icon-toggle-right"></i>
        </a> --}}
        <a class="mobile-options waves-effect waves-light">
            <i class="feather icon-more-horizontal"></i>
        </a>
      </div>
      <div class="navbar-container container-fluid">
        <ul class="nav-left">
          <li>
            <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
              <i class="full-screen feather icon-maximize"></i>
            </a>
          </li>
        </ul>
        <ul class="nav-right">
            @auth
            <li class="user-profile header-notification">
              <div class="dropdown-primary dropdown">
                <div class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset('images/avatar-4.jpg') }}" class="img-radius" alt="User-Profile-Image">
                  <span>{{ auth()->user()->name }}</span>
                  <i class="feather icon-chevron-down"></i>
                </div>
                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <li>
                        <a href="#">
                          <i class="feather icon-lock"></i> Change password </a>
                      </li>
                    <li>
                    <a href="{{ route('logout') }}">
                      <i class="feather icon-log-out"></i> Logout </a>
                  </li>
                </ul>
              </div>
            </li>
            @endauth
            @guest
            <li>
                <button class="btn btn-primary btn-login" type="button">Login</button>
            </li>
            @endguest
        </ul>
      </div>
    </div>
</nav>
