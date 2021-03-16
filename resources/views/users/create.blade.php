@extends('layouts.app', ['breadcrumbs' => [
    'Usuarios' => 'users',
    'Crear' => ''
]])

@section('content')

    @component('components.basic-card')
        @slot('title')
            <h4>Crear Usuario</h4>
        @endslot

        @slot('content')
            @include('users.partials.form')
        @endslot
    @endcomponent

@endsection
