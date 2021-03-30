@component('components.table')

    @slot('thead')

        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Fecha de expiración</th>
            <th>Acciones</th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach($expirations as $expiration)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $expiration->user->name }}</td>
                <td>{{ $expiration->user->email }}</td>
                <td>{{ $expiration->expiration_date }}</td>

                <td>
                    @if($expiration->user->email)

                        <a href="{{ route('payments.send.email', $expiration) }}" class="btn btn-default btn-small text-success" title="Enviar recordatorio">
                            <i class="fa fa-envelope"></i>
                        </a>

                    @endif

                </td>
            </tr>
        @endforeach
    @endslot

@endcomponent
