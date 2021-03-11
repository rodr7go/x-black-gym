@component('components.table')

    @slot('thead')

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Imagen</th>

            <th>Role</th>
            <th>Acciones</th>
        </tr>
    @endslot

    @slot('tbody')
{{--        @foreach($users as $user)--}}
{{--            <tr>--}}
{{--                <td>{{ $user->id }}</td>--}}
{{--                <td>{{ $user->name }}</td>--}}
{{--                <td>{{ $user->email }}</td>--}}
{{--                <td>{{ $user->phone }}</td>--}}
{{--                <td>--}}
{{--                    <img src="{{ $user->image }}" alt="" height="35">--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    --}}{{--<ul>--}}
{{--                    --}}{{--    @foreach($user->getRoleNames() as $roleName)--}}
{{--                    --}}{{--        <li>{{ trans("permissions.roles.$roleName") }}</li>--}}
{{--                    --}}{{--    @endforeach--}}
{{--                    --}}{{--</ul>--}}
{{--                    --}}
{{--                    {{ $user->roles->first()->trans_es }}--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    @can('edit_users')--}}
{{--                        @if (--}}
{{--                            ! $user->hasRole(['super-admin', 'company-owner'])--}}
{{--                            && $user->id != auth()->user()->id--}}
{{--                        )--}}
{{--                            <a href="{{ route('users.edit', [$user]) }}" class="btn btn-default btn-small text-primary" title="Editar">--}}
{{--                                <i class="fa fa-pencil"></i>--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    @endcan--}}

{{--                    @can('delete_users')--}}
{{--                        @if (--}}
{{--                            ! $user->hasRole(['super-admin', 'company-owner'])--}}
{{--                            && $user->id != auth()->user()->id--}}
{{--                        )--}}
{{--                            <a href="#" class="btn btn-default btn-small text-danger swal-delete" data-form="#delete-form-{{$user->id}}" title="Eliminar">--}}
{{--                                <i class="fa fa-trash"></i>--}}
{{--                            </a>--}}
{{--                            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE', 'id' => "delete-form-{$user->id}", 'style' => 'display:none']) !!}--}}
{{--                            {!! Form::close() !!}--}}
{{--                        @endif--}}
{{--                    @endcan--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
    @endslot
@endcomponent
