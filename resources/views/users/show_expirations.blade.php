@extends('layouts.app', [
    'titleBreads' => 'Pagos que expiran en los proximos 5 días.'
])

@section('content')
    @component('components.basic-card')

        @slot('title')

        @endslot

        @slot('content')
            @include('users.partials.expirations_table')
        @endslot
    @endcomponent
@endsection
