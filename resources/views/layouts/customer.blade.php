<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ $pageTitle }}</title>
    <!-- Favicon -->
    <link href="{{ asset('img/brand/favicon.png') }}" rel="icon" type="image/png" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Icons -->
    <link href="{{ asset('js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link href="{{ asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    @yield('css')
  </head>

  <body class="">
    @php
        $route = Route::currentRouteName();
    @endphp
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
      <!-- Container KIRI -->
      <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="javascript:void(0)">
          <img src="{{ asset('img/brand/logo-panjang.png') }}" class="navbar-brand-img" alt="..." />
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  @if ( Auth::user()->img_user_encrypted != null)
                        <img src="{{ asset('storage/image/user/'.Auth::user()->img_user_encrypted) }}" class="rounded-circle">
                    @else
                        <img alt="Image placeholder" src="{{ asset('img/profile/akun_kosong.png') }}">
                    @endif
                </span>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>keluar</span>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </a>
            </div>
          </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="{{ route('dashboard-consumen.index') }}">
                  <img src="{{ asset('img/brand/logo-panjang.png') }}" />
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Form -->
          <form class="mt-4 mb-3 d-md-none">
            <div class="input-group input-group-rounded input-group-merge">
              <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search" />
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="fa fa-search"></span>
                </div>
              </div>
            </div>
          </form>
          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item @if($route == 'dashboard-consumen.index') active @endif">
              <a class="nav-link @if($route == 'dashboard-consumen.index') active @endif" href="{{ route('dashboard-consumen.index') }}" style="font-weight: bold"> <i class="ni ni-tv-2" style="color: #288afb"></i> Dashboard </a>
            </li>
            <li class="nav-item @if($route == 'destinasi-consumen.index') active @endif">
              <a class="nav-link @if($route == 'destinasi-consumen.index') active @endif" href="{{ route('destinasi-consumen.index') }}" style="font-weight: bold"> <i class="bi bi-map" style="color: #288afb"></i> Destinasi </a>
            </li>
            <li class="nav-item @if($route == 'history-consumen.index') active @endif">
              <a class="nav-link @if($route == 'history-consumenn.index') active @endif" href="{{ route('history-consumen.index') }}" style="font-weight: bold">
                <i class="ni ni-circle-08" style="color: #288afb"></i>
                Order history
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3" />
          <!-- Heading -->
          <h3 style="color: #288afb" ;>INFO</h3>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item @if($route == 'info-consumen.index') active @endif">
              <a class="nav-link @if($route == 'info-consumen.index') active @endif" href="{{ route('info-consumen.index') }}" style="font-weight: bold"> <i class="ni ni-tv-2 text-primary"></i> Tentang </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" style="font-weight: bold" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="bi bi-box-arrow-right text-primary"></i>
                  <span>Keluar</span>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="main-content">
      <!-- Navbar -->
      <nav class="navbar navbar-top navbar-expand-md navbar-light" style="background-color: #fff" id="navbar-main">
        <div class="container-fluid">
          <!-- Brand -->
          <a class="h4 mb-0 d-none d-lg-inline-block" href="{{ route('dashboard-consumen.index') }}" style="color: #288afb; font-size: 20px; font-weight: bold">Ship Shine</a>

          <!-- User -->
          <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    @if ( Auth::user()->img_user_encrypted != null)
                        <img src="{{ asset('storage/image/user/'.Auth::user()->img_user_encrypted) }}" class="rounded-circle">
                    @else
                        <img alt="Image placeholder" src="{{ asset('img/profile/akun_kosong.png') }}">
                    @endif
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="./examples/profile.html" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="./examples/profile.html" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Keluar</span>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End Navbar -->
      @yield('content')
    </div>
    <!--   Core   -->
    <script src="{{ asset('js/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--   Optional JS   -->
    <script src="{{ asset('js/plugins/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('js/plugins/chart.js/dist/Chart.extension.js') }}"></script>
    <!--   Argon JS   -->
    <script src="{{ asset('js/argon-dashboard.min.js?v=1.1.2') }}"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script src="{{ asset('js/detailDestinasi.js') }}"></script>
    <!--   Upload JS   -->
    @yield('js')
    <script>
      window.TrackJS &&
        TrackJS.install({
          token: "ee6fab19c5a04ac1a32a645abde4613a",
          application: "argon-dashboard-free",
        });
    </script>
  </body>
</html>
