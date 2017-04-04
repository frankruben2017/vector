                     <div class="form-group{{ $errors->has('product_code') ? ' has-error' : '' }}">
                            {!!Form::label('product_code','Codigo',['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                                {!!Form::text('product_code',null,['class'=>'form-control','placeholder'=>'Ingresa el codigo'])!!}
                                @if ($errors->has('product_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                            {!!Form::label('product_name','Nombre',['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                                {!!Form::text('product_name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre'])!!}
                                @if ($errors->has('product_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            {!!Form::label('description','Descripcion',['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                                {!!Form::text('description',null,['class'=>'form-control','placeholder'=>'Descripcion del catalogo'])!!}
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('monto') ? ' has-error' : '' }}">
                            {!!Form::label('monto','Monto',['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                                {!!Form::text('monto',null,['class'=>'form-control','placeholder'=>'Monto del catalogo'])!!}
                                @if ($errors->has('monto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('monto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('plazo_to_pay') ? ' has-error' : '' }}">
                            {!!Form::label('plazo_to_pay','Plazo a pagar',['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                                {!!Form::text('plazo_to_pay',null,['class'=>'form-control','placeholder'=>'Plazo a pagar'])!!}
                                @if ($errors->has('plazo_to_pay'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('plazo_to_pay') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>