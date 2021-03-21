@extends('layouts.app')

@section('content')

    @component('components.panel')
        @slot('title')
            <h2>Hola! {{ $user->name }}</h2>
        @endslot

        @slot('content')
            <div class="col-lg-6">
                {!! Form::open(['route' => ['users.update.profile'], 'method' => 'POST', 'files' => true]) !!}
                    <ul class="list-group" style="margin-top: 2em">
                        @if ($user->image)
                            <li class="list-group-item">
                                <img src="{{ $user->image }}" alt="{{ $user->name }}" width="200px">
    
                                <div style="display: inline-block; vertical-align: top">
    
                                    <p class="m-l-md">
                                        <i class="fa fa-user"></i>
                                        <strong>{{ $user->roles->first()->trans_es }}</strong>
                                    </p>
                                </div>
                            </li>
                        @endif
                        
                        <li class="list-group-item">{{ $user->name }}</li>
                        <li class="list-group-item">{{ $user->email }}</li>
                        <li class="list-group-item">{{ $user->phone }}</li>
                        
                        <li class="list-group-item">
                            {!! Field::file('image') !!}
                        </li>
                        
                        <li class="list-group-item">
                            {!! Field::password('password') !!}
                        </li>
                        
                        <li class="list-group-item">
                            {!! Field::password('password_confirmation') !!}
                        </li>
                        
                        <li class="list-group-item">
                            <a href="{{ back()->getTargetUrl() }}" class="btn btn-default m-t-lg">Regresar</a>
                            {!! Form::submit('Actualizar Perfil', ['class' => 'btn btn-success m-t-lg']) !!}
                        </li>
                    </ul>
                {!! Form::close() !!}
            </div>
            
        @endslot
    @endcomponent

@endsection
