@extends('layouts.app', [
    'titleBreads' => 'Usuarios'
])

@section('content')
    @if (session('message'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Cool!</strong> La asistencia se ha asignado con exito
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @component('components.basic-card')

        @slot('title')
            <a href="{{ route('users.create') }}" class="btn btn-success btn-sm pull-right">Crear Usuario</a>

            <a href="{{ route('users.expiration') }}" class="btn btn-info btn-sm">
                <i class="fa fas fa-calendar-alt"></i>
                Proximos pagos
            </a>

{{--            @can('create_users')--}}
{{--                <a href="{{ route('users.create') }}" class="btn btn-success btn-sm pull-right">Agregar</a>--}}
{{--            @endcan--}}
        @endslot

        @slot('content')
            @include('users.partials.table')
        @endslot
    @endcomponent

@endsection

@push('scripts')
    <script src="{{ asset('theme/plugins/inputmask/jquery.inputmask.min.js') }}"></script>

    <script>
        $('.datemask').inputmask()
    </script>
@endpush
