@extends('layouts.app', [
    'titleBreads' => 'Proximos pagos'
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
