@component('components.table')

    @slot('thead')

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
{{--            <th>Telefono</th>--}}
{{--            <th>Registrado por</th>--}}
{{--            <th>Acciones</th>--}}
        </tr>
    @endslot

    @slot('tbody')
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
{{--                <td>{{ $user->phone }}</td>--}}
{{--                <td>{{ $user->createdBy->name }}</td>--}}

{{--                <td>--}}

{{--                    <a href="{{ route('users.edit', [$user]) }}" class="btn btn-default btn-small text-primary" title="Editar">--}}
{{--                        <i class="fa fa-pencil-alt"></i>--}}
{{--                    </a>--}}
{{--                </td>--}}
            </tr>
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

        })
    </script>
@endpush
