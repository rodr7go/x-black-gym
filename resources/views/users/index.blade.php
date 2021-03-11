@extends('layouts.app')

@section('content')
    @component('components.basic-card')
        @slot('content')

            @include('users.partials.table')

        @endslot
    @endcomponent
{{--    @component('components.panel')--}}
{{--        @slot('title')--}}
{{--            <h2>Usuarios</h2>--}}

{{--            @can('create_users')--}}
{{--                <a href="{{ route('users.create') }}" class="btn btn-success btn-sm pull-right">Agregar</a>--}}
{{--            @endcan--}}
{{--        @endslot--}}

{{--        @slot('content')--}}
{{--            @include('tenant.users.partials.table')--}}
{{--        @endslot--}}
{{--    @endcomponent--}}

@endsection
