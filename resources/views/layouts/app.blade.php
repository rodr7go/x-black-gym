<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'X-BLACK GYM') }}</title>

    @include('layouts.styles')

    @stack('styles')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar TOP BAR -->
    @include('layouts.nav-var')
    <!-- /.navbar -->

    <!-- Main Sidebar Container BARRA LATERAL -->
    @include('layouts.side-bar')

    <!-- Content Wrapper. Contains page content BREAD CRUMBS -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('layouts.bread-crumbs')

    <!-- /.content-header -->

        <!-- Main content CONTENIDO PRINCIPAL DE LA PAGINA -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                @yield('content')

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('layouts.footer')
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('layouts.scripts')
@stack('scripts')
</body>


</html>
