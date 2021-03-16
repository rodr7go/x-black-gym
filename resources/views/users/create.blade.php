@extends('layouts.app', ['breadcrumbs' => [
    'Usuarios' => 'users',
    'Crear' => ''
]])

@section('content')

    @component('components.basic-card')
        @slot('title')
            <h2>Crear Usuario</h2>
        @endslot

        @slot('content')
            @include('users.partials.form')
        @endslot
    @endcomponent

@endsection

@push('scripts')
    <script src="{{ asset('theme/plugins/inputmask/jquery.inputmask.min.js') }}"></script>

    <script>
        $('.datemask').inputmask()
    </script>
@endpush
