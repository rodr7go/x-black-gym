@component('components.table')

    @slot('thead')

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Plan</th>
            <th>Ultimo pago</th>
            <th>Fecha de expiración</th>
            <th>Ultima asistencia</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Registrado por</th>
            <th>Acciones</th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->payments->last() ? $user->payments->last()->cost->name: '' }}</td>
                <td>{{ $user->payments->last() ? date("d-m-Y", strtotime($user->payments->last()->payment_date)) : '' }}</td>
                <td>{{ $user->payments->last() ? date("d-m-Y", strtotime($user->payments->last()->expiration_date)) : '' }}</td>
                <td>
                    {{ $user->attendances->last() ? date("d-m-Y", strtotime($user->attendances->last()->date)) : '' }}
                    <br>
                    {{ $user->attendances->last()->hour ?? '' }}
                </td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->createdBy->name }}</td>

                <td>
                    <button type="button" data-userID="{{ $user->id }}" class="payment-modal btn btn-default" data-toggle="modal" data-target="#modal-payment-{{ $user->id }}">
                        <i class="fa fas fa-dollar-sign"></i>
                    </button>

                    <a href="{{ route('user.add.attendance', $user->id) }}" class="btn btn-default btn-small text-success" title="Agregar asistencia">
                        <i class="fa fa-check-circle"></i>
                    </a>

                    <a href="{{ route('users.edit', [$user]) }}" class="btn btn-default btn-small text-primary" title="Editar">
                        <i class="fa fa-pencil-alt"></i>
                    </a>

                    <a href="#" class="btn btn-default btn-small text-danger delete-user-form" data-form="#delete-form-{{$user->id}}" title="Agregar pago">
                        <i class="fa fa-trash"></i>
                    </a>

                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE', 'id' => "delete-form-{$user->id}", 'style' => 'display:none']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @include('users.partials.payment_modal')
        @endforeach
    @endslot

@endcomponent

@push('scripts')
    <script>
        $(function() {
            deleteUser();
            showModal();

            function deleteUser(){
                $('.delete-user-form').on('click', function (e) {
                    let form = $(e.currentTarget).attr('data-form')
                    $(form).submit();
                })
            }

            function showModal() {
                $('.payment-modal').on('click', function (e) {
                    e.preventDefault()
                    let userID = $(e.currentTarget).attr('data-userID');
                    $(`#modal-payment-${userID}`).modal('show');
                })
            }
        })
    </script>
@endpush
