<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loaded dark-layout">
<head>
  <meta charset="utf-8">
  <meta name="description" content="{{ $meta_description ?? '' }}">
  <meta name="keywords" content="{{ $meta_tags ?? '' }}">
  <meta name="author" content="{{ $system_name ?? config('app.name') }}">
  <meta property="og:title" content="{{ $system_name ?? config('app.name') }}">
  <meta property="og:description" content="{{ $meta_description ?? '' }}">
  <meta property="og:image" content="{{ asset('assets/preview.png') }}">
  <meta property="og:url" content="{{ url('/') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? $system_name ?? config('app.name') }}</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

  {{-- Vendor CSS --}}
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/vendors/css/vendors.min.css') }}">

  {{-- Theme CSS --}}
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/bootstrap-extended.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/colors.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/themes/dark-layout.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/themes/bordered-layout.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/themes/semi-dark-layout.css') }}">

  {{-- Page CSS --}}
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/plugins/forms/form-validation.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/pages/authentication.css') }}">

  {{-- Custom CSS --}}
  <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/dist/css/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/plugins/toastr/toastr.min.css') }}">

  {{-- SweetAlert2 --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @if(session('error'))
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Erro!',
        text: '{{ session('error') }}',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
      });
    </script>
  @endif
  @if(session('success'))
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Sucesso!',
        text: '{{ session('success') }}',
        confirmButtonColor: '#28a745',
        confirmButtonText: 'Fechar'
      });
    </script>
  @endif
</head>

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static">
  {{-- HEADER / MENU / TOPO DINÂMICO AQUI --}}
  
 <!-- Laravel Blade version of Header -->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
  <div class="navbar-container d-flex content">
    <div class="bookmark-wrapper d-flex align-items-center">
      <ul class="nav navbar-nav d-xl-none">
        <li class="nav-item">
          <a class="nav-link menu-toggle" href="#">
            <i class="ficon" data-feather="menu"></i>
          </a>
        </li>
      </ul>
    </div>
    <ul class="nav navbar-nav align-items-center ms-auto">
    
     

      <li class="nav-item dropdown dropdown-user">
        <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="avatar">
            <img class="round" src="{{ asset('uploads/logos.png') }}" alt="avatar" height="40" width="40">
            <span class="avatar-status-online"></span>
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
          <a class="dropdown-item" href="{{ route('profile.edit') }}">
            <i class="me-50" data-feather="user"></i> Perfil
          </a>
          <div class="dropdown-divider"></div>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item">
              <i class="me-50" data-feather="power"></i> Logout
            </button>
          </form>
        </div>
      </li>
    </ul>
  </div>
</nav>

<!-- Menu principal (substitua os links por rotas reais do Laravel) -->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item me-auto">
        <a class="navbar-brand" href="{{ url('/dashboard') }}">
          <span class="brand-logo">
            <img class="round" src="{{ asset('uploads/logos.png') }}" alt="avatar" height="40" width="40">
          </span>
          <h2 class="brand-text">{{ config('app.name', 'DollarMillon20') }}</h2>
        </a>
      </li>
      <li class="nav-item nav-toggle">
        <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
          <i class="d-block d-xl-none text-success toggle-icon font-medium-4" data-feather="x"></i>
          <i class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary" data-feather="disc"></i>
        </a>
      </li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="nav-item">
        <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
          <i data-feather="home"></i>
          <span class="menu-title text-truncate">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="d-flex align-items-center" href="{{ route('packs.index') }}">
          <i data-feather="archive"></i>
          <span class="menu-title text-truncate">Packs</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="d-flex align-items-center" href="{{ route('tree.index') }}">
          <i data-feather="users"></i>
          <span class="menu-title text-truncate">Árvore de Rede</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="d-flex align-items-center" href="{{ route('profile.edit') }}">
          <i data-feather="user"></i>
          <span class="menu-title text-truncate">Minha Conta</span>
        </a>
      </li>
    </ul>
  </div>
</div>

<!-- Breadcrumb e título -->
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
      <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
          <div class="col-12">
            <h2 class="content-header-title float-start mb-0">@yield('page_title', 'Dashboard')</h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">@yield('page_title', 'Dashboard')</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      @yield('content')
    </div>
  </div>
</div>
  </div>

  {{-- Footer --}}
  <footer class="footer footer-static footer-light footer-shadow">
    <p class="clearfix mb-0 text-center">COPYRIGHT &copy; {{ date('Y') }} <a class="ms-25" href="#">DollarMillon20</a>, Todos os direitos reservados.</p>
  </footer>

  <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>

  {{-- JS Scripts --}}
  <script src="{{ asset('assets/frontend/app-assets/vendors/js/vendors.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
  <script src="{{ asset('assets/frontend/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/app-assets/js/core/app-menu.js') }}"></script>
  <script src="{{ asset('assets/frontend/app-assets/js/core/app.js') }}"></script>
  <script>
    $(window).on('load', function() {
      if (feather) {
        feather.replace({ width: 14, height: 14 });
      }
    });
  </script>
</body>
</html>
