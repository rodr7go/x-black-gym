@extends('layouts.app')

@section('content')

    @component('components.basic-card')
        @slot('title')
            <h4>Editar Usuario {{ $user->name }}</h4>
        @endslot

        @slot('content')
            @include('users.partials.form')
        @endslot
    @endcomponent

@endsection
