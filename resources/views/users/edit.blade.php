@extends('layouts.app', ['breadcrumbs' => [
    'Usuarios' => 'users',
    'Editar' => ''
]])

@section('content')

    @component('components.panel')
        @slot('title')
            <h2>Editar Usuario {{ $user->name }}</h2>
        @endslot

        @slot('content')
            @include('tenant.users.partials.form')
        @endslot
    @endcomponent

@endsection