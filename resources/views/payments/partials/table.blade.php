@component('components.table')

    @slot('thead')

        <tr>
            <th>Usuario</th>
            <th>Monto</th>
            <th>Fecha de pago</th>
            <th>Fecha de expiración</th>
            <th>Acciones</th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->user->name ?? '' }}</td>
                <td>{{ $payment->amount }}</td>
                <td>{{ $payment->payment_date }}</td>
                <td>{{ $payment->expiration_date }}</td>
                <td>
                    <a href="{{ route('payments.edit', [$payment]) }}" class="btn btn-default btn-small text-primary" title="Editar">
                        <i class="fa fa-pencil-alt"></i>
                    </a>

                    <a href="#" class="btn btn-default btn-small text-danger delete-user-form" data-form="#delete-form-{{$payment->id}}" title="Eliminar">
                        <i class="fa fa-trash"></i>
                    </a>
                    {!! Form::open(['route' => ['payments.destroy', $payment->id], 'method' => 'DELETE', 'id' => "delete-form-{$payment->id}", 'style' => 'display:none']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    @endslot
@endcomponent

@push('scripts')
    <script>
        $(function() {
            deleteUser();

            function deleteUser(){
                $('.delete-user-form').on('click', function (e) {
                    let form = $(e.currentTarget).attr('data-form')
                    $(form).submit();
                })
            }
        })
    </script>
@endpush
