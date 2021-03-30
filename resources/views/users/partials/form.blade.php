{!! Form::model($user, [
    'route' => $user->id
        ? ['users.update', $user]
        : 'users.store',
    'method' => $user->id
        ? 'PUT'
        : 'POST',
    'class' => '',
    'files' => true,
]) !!}

    @foreach ($errors->all() as $error)
        <li class="text-danger">
            {{ $error }}
        </li>
    @endforeach
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                {!! Form::label('name', 'Nombre *') !!}
                {!! Form::text('name', null, ['class' => 'form-control','required']) !!}
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                {!! Form::label('email', 'E-Mail *') !!}
                {!! Form::email('email', null,['class' => 'form-control', 'required']) !!}
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::password('password', ['class' => 'form-control', 'min' => '6']) !!}
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                {!! Form::label('password_confirmation', 'Confirmación de Contraseña') !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                {!! Form::label('internal_user_id', 'ID del cliente') !!}
                {!! Form::text('internal_user_id', null,['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                {!! Form::label('phone', 'Teléfono') !!}
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                {!! Form::label('registered_at', 'Fecha de registro *') !!}

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input name="registered_at"
                           value="{{ $user->registered_at ?? \Carbon\Carbon::now()->toDateString() }}"
                           type="text" class="datemask form-control"
                           data-inputmask-alias="datetime"
                           data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                </div>

            </div>
        </div>

{{--        <div class="col-lg-3">--}}
{{--            <div class="form-group">--}}
{{--                {!! Form::label('is_admin', 'Es admin?') !!}--}}
{{--                {!! Form::checkbox('is_admin', null) !!}--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    <div class="form-group">

        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <a href="{{ route('users.index') }}" class="btn btn-danger" type="button">Cancelar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
            {{--            <button class="btn btn-primary" type="reset">Limpiar Formulario</button>--}}
        </div>

    </div>
{!! Form::close() !!}
