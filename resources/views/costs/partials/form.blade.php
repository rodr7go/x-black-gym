{!! Form::model($cost, [
    'route' => $cost->id
        ? ['costs.update', $cost]
        : 'costs.store',
    'method' => $cost->id
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
                {!! Form::label('amount', 'Monto *') !!}
                {!! Form::number('amount', null, ['class' => 'form-control','required']) !!}
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                {!! Form::label('name', 'Nombre *') !!}
                {!! Form::text('name', null,['class' => 'form-control', 'required']) !!}
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                {!! Form::label('duration_months', 'Duración') !!}
                {!! Form::select('duration_months', $months, null, ['class' => 'custom-select form-control-border']) !!}
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                {!! Form::label('offer', 'Es oferta?') !!}
                {!! Form::checkbox('offer', null) !!}
            </div>
        </div>

    </div>

    <div class="form-group">

        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <a href="{{ route('costs.index') }}" class="btn btn-danger" type="button">Cancelar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
            {{--            <button class="btn btn-primary" type="reset">Limpiar Formulario</button>--}}
        </div>

    </div>
{!! Form::close() !!}
