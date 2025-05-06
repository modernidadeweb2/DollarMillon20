<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loaded dark-layout">
<head>
<meta charset="utf-8">
<meta name="description" content="{{ $meta_description }}">
<meta name="keywords" content="{{ $meta_tags }}">
<meta name="author" content="{{ $system_name }}">
<meta property="og:title" content="{{ $system_name }}">
<meta property="og:description" content="{{ $meta_description }}">
<meta property="og:image" content="{{ asset('assets/preview.png') }}">
<meta property="og:url" content="{{ url('/') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title ?? $system_name }}</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
<link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
<!-- BEGIN: Vendor CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/app-assets/vendors/css/vendors.min.css') }}">
<!-- END: Vendor CSS-->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ session('error') }}',
        confirmButtonText: 'OK',
        customClass: {
            confirmButton: 'btn btn-primary'
        },
        buttonsStyling: false
    });
</script>
@endif

@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Tudo certo!',
        text: '{{ session('success') }}',
        confirmButtonText: 'Fechar',
        customClass: {
            confirmButton: 'btn btn-success'
        },
        buttonsStyling: false
    });
</script>
@endif

<!-- BEGIN: Theme CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/app-assets/css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/app-assets/css/bootstrap-extended.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/app-assets/css/colors.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/app-assets/css/components.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/app-assets/css/themes/dark-layout.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/app-assets/css/themes/bordered-layout.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/app-assets/css/themes/semi-dark-layout.css') }}">

<!-- BEGIN: Page CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/app-assets/css/plugins/forms/form-validation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/app-assets/css/pages/authentication.css') }}">
<!-- END: Page CSS -->

<!-- BEGIN: Custom CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/assets/css/style.css') }}">

<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('assets/backend/plugins/fontawesome-free/css/all.min.css') }}">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="{{ asset('assets/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('assets/backend/dist/css/custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/plugins/toastr/toastr.min.css') }}">
</head>

<body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static" data-open="hover" data-menu="horizontal-menu" data-col="blank-page">
<div class="margin:0px;padding:0px;" align="center">

<!-- BEGIN: Content-->
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper">
    <div class="content-header row"> </div>
    <div class="content-body">
      <div class="auth-wrapper auth-basic px-2">
        <div class="auth-inner my-2"> 
          <!-- Login basic -->
          <div class="card mb-0">
            <div class="card-body">
              <!-- Main Content -->
              {{ $slot }}
            </div>
            <!-- /.card-body --> 
          </div>
          <!-- /Login basic --> 
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END: Content--> 

<!-- jQuery --> 
<script src="{{ asset('assets/backend/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap 4 --> 
<script src="{{ asset('assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Toastr and other scripts -->
<script src="{{ asset('assets/backend/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('assets/backend/multi-matrix.js') }}"></script>

</body>
</html>
