<div class="modal fade" id="modal-payment-{{ $user->id }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar pago {{ $user->name }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::model($user, ['route' => ['payments.store', 'user_id' => $user->id ]]) !!}
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="form-group">
                                {!! Form::label('amount', 'Monto *') !!}
                                {!! Form::number('amount', null, ['class' => 'form-control', 'id' => 'amount'.$user->id, 'required']) !!}
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                {!! Form::label('payment_date', 'Fecha de pago *') !!}

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input name="payment_date" value="{{ \Carbon\Carbon::now()->toDateString() }}" type="text" class="datemask form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                {!! Form::label('cost_id', 'Tipo de pago *') !!}
                                {!! Form::select('cost_id', $costs, null, ['class' => 'custom-select form-control-border', 'id' => 'cost_id'.$user->id,'required']) !!}
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            {!! Form::close() !!}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
