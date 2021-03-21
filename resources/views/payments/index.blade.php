@extends('layouts.app', [
    'titleBreads' => 'Historial de Pagos'
])

@section('content')
    @component('components.basic-card')
        @slot('title')
{{--            <a href="{{ route('payments.create') }}" class="btn btn-success btn-sm pull-right">Crear Pago</a>--}}

{{--            @can('create_users')--}}
{{--                <a href="{{ route('users.create') }}" class="btn btn-success btn-sm pull-right">Agregar</a>--}}
{{--            @endcan--}}
        @endslot

        @slot('content')
            @include('payments.partials.table')
        @endslot
    @endcomponent

@endsection

@push('scripts')
    <script src="{{ asset('theme/plugins/inputmask/jquery.inputmask.min.js') }}"></script>

    <script>
        $('.datemask').inputmask()
    </script>
@endpush
