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

    @if ($user->id && $user->image)
        <div class="col-lg-12">
            <img src="{{ $user->image }}" alt="" height="200">
        </div>
    @endif

    <div class="col-lg-6">
        {!! Field::text('name', ['required']) !!}
    </div>

    <div class="col-lg-6">
        {!! Field::email('email', ['required']) !!}
    </div>

    <div class="col-lg-6">
        {!! Field::tel('phone') !!}
    </div>

    <div class="col-lg-6">
        {!! Field::file('image') !!}
    </div>

    <div class="col-lg-6">
        {!! Field::password('password', [$user->id ?: 'required']) !!}
    </div>

    <div class="col-lg-6">
        {!! Field::password('password_confirmation') !!}
    </div>

    
    <div class="col-lg-6">
        {!! Field::select('role', $roles, $user->roles->count() ? $user->roles->first()->name : null,  ['required', 'class' => 'select2']) !!}
    </div>
    

    <div class="clearfix"></div>

    
    @if( count($permissions) )
        <div class="divider"></div>
        
        <div class="col-lg-12">
            
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#specialPermissionsField">Permisos Especiales <i class="fa fa-chevron-down"></i> </button>
            
            <div class="{{ $userPermissions->count() ?: 'collapse' }}" id="specialPermissionsField">
                
                {!! Field::select(
                    'permissions[]',
                    $permissions,
                    $userPermissions->count() ? $user->permissions()->pluck('name')->toArray() : null,
                    ['multiple', 'id' => 'selectPermissions', 'label' => '', 'class' => 'collapse']
                ) !!}
            </div>
        </div>
    @endif

    <div class="clearfix"></div>

    <div class="ln_solid"></div>

    <div class="form-group">

        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <a href="{{ route('users.index') }}" class="btn btn-primary" type="button">Cancelar</a>
            <button class="btn btn-primary" type="reset">Limpiar Formulario</button>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>

    </div>
{!! Form::close() !!}

@push('scripts')

    <script>
        $(function () {
            $('#selectPermissions').multiSelect({
                selectableOptgroup: true,

                selectableHeader: "<input type='text' class='search-input form-control' autocomplete='off' placeholder='Buscar'>",

                selectionHeader: "<input type='text' class='search-input form-control' autocomplete='off' placeholder='Buscar'>",

                afterInit: function(ms){
                    var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';

                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function(e){
                            if (e.which === 40){
                                that.$selectableUl.focus();
                                return false;
                            }
                        });

                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function(e){
                            if (e.which == 40){
                                that.$selectionUl.focus();
                                return false;
                            }
                        });
                },
                afterSelect: function(){
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function(){
                    this.qs1.cache();
                    this.qs2.cache();
                }
            });
        });
    </script>
@endpush