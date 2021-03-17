@extends('layouts.app', ['breadcrumbs' => [
    'Costos' => 'costs',
    'Crear' => ''
]])

@section('content')

    @component('components.basic-card')
        @slot('title')
            <h4>Crear Costo</h4>
        @endslot

        @slot('content')
            @include('costs.partials.form')
        @endslot
    @endcomponent

@endsection
