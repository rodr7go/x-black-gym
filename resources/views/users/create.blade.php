@extends('layouts.app', ['breadcrumbs' => [
    'Usuarios' => 'users',
    'Crear' => ''
]])

@section('content')

    @component('components.panel')
        @slot('title')
            <h2>Crear Usuario</h2>
        @endslot

        @slot('content')
            @include('tenant.users.partials.form')
        @endslot
    @endcomponent

@endsection