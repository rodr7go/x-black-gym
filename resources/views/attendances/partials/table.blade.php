@component('components.table')

    @slot('thead')

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Hora</th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach($attendances as $attendance)
            <tr>
                <td>{{ $attendance->id }}</td>
                <td>{{ $attendance->user->name }}</td>
                <td>{{ date("d-m-Y", strtotime($attendance->date))}}</td>
                <td>{{ date("d-m-Y", strtotime($attendance->hour))}}</td>

{{--                <td>--}}
{{--                    <button type="button" data-userID="{{ $user->id }}" class="payment-modal btn btn-default" data-toggle="modal" data-target="#modal-payment-{{ $user->id }}">--}}
{{--                        <i class="fa fas fa-dollar-sign"></i>--}}
{{--                    </button>--}}

{{--                    <a href="{{ route('users.edit', [$user]) }}" class="btn btn-default btn-small text-primary" title="Editar">--}}
{{--                        <i class="fa fa-pencil-alt"></i>--}}
{{--                    </a>--}}

{{--                    <a href="#" class="btn btn-default btn-small text-danger delete-user-form" data-form="#delete-form-{{$user->id}}" title="Eliminar">--}}
{{--                        <i class="fa fa-trash"></i>--}}
{{--                    </a>--}}

{{--                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE', 'id' => "delete-form-{$user->id}", 'style' => 'display:none']) !!}--}}
{{--                    {!! Form::close() !!}--}}
{{--                </td>--}}
            </tr>
        @endforeach
    @endslot

@endcomponent
