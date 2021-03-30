<!-- Navbar TOP BAR -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
{{--    <form class="form-inline ml-3">--}}
{{--        <div class="input-group input-group-sm">--}}
{{--            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">--}}
{{--            <div class="input-group-append">--}}
{{--                <button class="btn btn-navbar" type="submit">--}}
{{--                    <i class="fas fa-search"></i>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                {{ auth()->user()->name ?? '' }} <i class="fas fa-user"></i>
            </button>
            <div class="dropdown-menu">
                <a class="logout-btn p-2" href="#">
                    Cerrar sesion
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-widget="control-sideba" data-slide="true" href="#" role="button">--}}
{{--                <i class="fas fa-user"></i>--}}
{{--            </a>--}}
{{--        </li>--}}
    </ul>
</nav>
<!-- /.navbar -->

@push('scripts')
    <script>
        $('.logout-btn').on('click', function (){
            $('#logout-form').submit()
        });
    </script>
@endpush
