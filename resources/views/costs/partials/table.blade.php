@component('components.table')

    @slot('thead')

        <tr>
            <th>Nombre</th>
            <th>Monto</th>
            <th>Meses</th>
            <th>Acciones</th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach($costs as $cost)
            <tr>
                <td>{{ $cost->name }}</td>
                <td>{{ $cost->amount }}</td>
                <td>{{ $cost->duration_months }}</td>

                <td>
                    <a href="{{ route('costs.edit', [$cost]) }}" class="btn btn-default btn-small text-primary" title="Editar">
                        <i class="fa fa-pencil-alt"></i>
                    </a>

                    <a href="#" class="btn btn-default btn-small text-danger delete-user-form" data-form="#delete-form-{{$cost->id}}" title="Eliminar">
                        <i class="fa fa-trash"></i>
                    </a>
                    {!! Form::open(['route' => ['costs.destroy', $cost->id], 'method' => 'DELETE', 'id' => "delete-form-{$cost->id}", 'style' => 'display:none']) !!}
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
