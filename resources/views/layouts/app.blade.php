<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loaded dark-layout">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? $system_name ?? config('app.name') }}</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/vendors/css/vendors.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/bootstrap-extended.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/colors.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/themes/dark-layout.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/themes/bordered-layout.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/app-assets/css/themes/semi-dark-layout.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/style.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static">
  <!-- Header -->
  <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
      <div class="bookmark-wrapper d-flex align-items-center">
        <ul class="nav navbar-nav d-xl-none">
          <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
        </ul>
      </div>
      <ul class="nav navbar-nav align-items-center ms-auto">
        <li class="nav-item dropdown dropdown-user">
          <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="avatar">
              <img class="round" src="{{ asset('uploads/logos.png') }}" alt="avatar" height="40" width="40">
              <span class="avatar-status-online"></span>
            </span>
            <span class="user-name d-none d-md-inline ms-1">
            {{ explode(' ', Auth::user()->name)[0] }}
          </span>
          </a>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
            <h6 class="dropdown-header">Minha Conta</h6>
            <a class="dropdown-item" href="{{ route('profile.edit') }}">
              <i class="me-50" data-feather="settings"></i> Configurações
            </a>
            <a class="dropdown-item" href="#">
              <i class="me-50" data-feather="file-text"></i> Documentos
            </a>
            <div class="dropdown-divider"></div>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="dropdown-item">
                <i class="me-50" data-feather="power"></i> Sair
              </button>
            </form>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item me-auto">
          <a class="navbar-brand" href="{{ url('/dashboard') }}">
            <span class="brand-logo"><img class="round" src="{{ asset('uploads/logos.png') }}" alt="avatar" height="40" width="40"></span>
            <h2 class="brand-text">{{ config('app.name', 'DollarMillon20') }}</h2>
          </a>
        </li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
  <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
    <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
      <i data-feather="home"></i>
      <span class="menu-title">Dashboard</span>
    </a>
  </li>

  <li class="navigation-header"><span>Packs</span></li>
  <li class="nav-item {{ request()->routeIs('packs.index') ? 'active' : '' }}">
    <a class="d-flex align-items-center" href="{{ route('packs.index') }}">
      <i data-feather="archive"></i>
      <span class="menu-title">Meus Packs</span>
    </a>
  </li>
  <li class="nav-item {{ request()->routeIs('packs.upgrade') ? 'active' : '' }}">
    <a class="d-flex align-items-center" href="{{ route('packs.upgrade') }}">
      <i data-feather="arrow-up-circle"></i>
      <span class="menu-title">Upgrade de Fase</span>
    </a>
  </li>
  <li class="nav-item {{ request()->routeIs('packs.benefits') ? 'active' : '' }}">
    <a class="d-flex align-items-center" href="{{ route('packs.benefits') }}">
      <i data-feather="gift"></i>
      <span class="menu-title">Benefícios</span>
    </a>
  </li>

  <li class="navigation-header"><span>Rede</span></li>
  <li class="nav-item {{ request()->routeIs('referrals.index') ? 'active' : '' }}">
    <a class="d-flex align-items-center" href="{{ route('referrals.index') }}">
      <i data-feather="user-plus"></i>
      <span class="menu-title">Meus Diretos</span>
    </a>
  </li>
  <li class="nav-item {{ request()->routeIs('tree.index') ? 'active' : '' }}">
    <a class="d-flex align-items-center" href="{{ route('tree.index') }}">
      <i data-feather="users"></i>
      <span class="menu-title">Árvore de Rede</span>
    </a>
  </li>
  <li class="nav-item {{ request()->routeIs('referral.link') ? 'active' : '' }}">
    <a class="d-flex align-items-center" href="{{ route('referral.link') }}">
      <i data-feather="link"></i>
      <span class="menu-title">Link de Indicação</span>
    </a>
  </li>
  <li class="nav-item {{ request()->routeIs('ranking.index') ? 'active' : '' }}">
    <a class="d-flex align-items-center" href="{{ route('ranking.index') }}">
      <i data-feather="bar-chart-2"></i>
      <span class="menu-title">Ranking</span>
    </a>
  </li>

  <li class="navigation-header"><span>Financeiro</span></li>
  <li class="nav-item {{ request()->routeIs('invoices.index') ? 'active' : '' }}">
    <a class="d-flex align-items-center" href="{{ route('invoices.index') }}">
      <i data-feather="file-text"></i>
      <span class="menu-title">Faturas</span>
    </a>
  </li>
  <li class="nav-item {{ request()->routeIs('wallet.index') ? 'active' : '' }}">
    <a class="d-flex align-items-center" href="{{ route('wallet.index') }}">
      <i data-feather="credit-card"></i>
      <span class="menu-title">Carteira</span>
    </a>
  </li>
  <li class="nav-item {{ request()->routeIs('withdrawals.index') ? 'active' : '' }}">
    <a class="d-flex align-items-center" href="{{ route('withdrawals.index') }}">
      <i data-feather="dollar-sign"></i>
      <span class="menu-title">Saques</span>
    </a>
  </li>
  <li class="nav-item {{ request()->routeIs('transactions.index') ? 'active' : '' }}">
    <a class="d-flex align-items-center" href="{{ route('transactions.index') }}">
      <i data-feather="list"></i>
      <span class="menu-title">Extrato</span>
    </a>
  </li>
</ul>


    </div>
  </div>

  <!-- Conteúdo -->
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

  <footer class="footer footer-static footer-light footer-shadow">
    <p class="clearfix mb-0 text-center">COPYRIGHT &copy; {{ date('Y') }} <a class="ms-25" href="#">DollarMillon20</a>, Todos os direitos reservados.</p>
  </footer>

  <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
  <script src="{{ asset('assets/frontend/app-assets/vendors/js/vendors.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/app-assets/js/core/app-menu.js') }}"></script>
  <script src="{{ asset('assets/frontend/app-assets/js/core/app.js') }}"></script>
  <script>$(window).on('load', function () { if (feather) { feather.replace(); } });</script>
</body>
</html>