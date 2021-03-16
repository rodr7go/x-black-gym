@component('components.table')

    @slot('thead')

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>

                <td>
                    <a href="{{ route('users.edit', [$user]) }}" class="btn btn-default btn-small text-primary" title="Editar">
                        <i class="fa fa-pencil-alt"></i>
                    </a>

                    <a href="#" class="btn btn-default btn-small text-danger delete-user-form" data-form="#delete-form-{{$user->id}}" title="Eliminar">
                        <i class="fa fa-trash"></i>
                    </a>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE', 'id' => "delete-form-{$user->id}", 'style' => 'display:none']) !!}
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
