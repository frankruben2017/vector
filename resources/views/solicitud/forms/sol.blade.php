                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!!Form::label('name','Name',['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                                {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre'])!!}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('lastnames') ? ' has-error' : '' }}">
                            {!!Form::label('lastnames','Lastnames',['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                                {!!Form::text('lastnames',null,['class'=>'form-control','placeholder'=>'Ingresa los apellidos'])!!}
                                @if ($errors->has('lastnames'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastnames') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            {!!Form::label('city','City',['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                                {!!Form::text('city',null,['class'=>'form-control','placeholder'=>'Ciudad'])!!}
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('CIN') ? ' has-error' : '' }}">
                            {!!Form::label('CIN','CIN',['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                                {!!Form::text('CIN',null,['class'=>'form-control','placeholder'=>'CIN:'])!!}
                                @if ($errors->has('CIN'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('CIN') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {!!Form::label('email','E-Mail Address',['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                               {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el correo'])!!}
                                
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            {!!Form::label('phone','Phone',['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                               {!!Form::text('phone',null,['class'=>'form-control','placeholder'=>'Ingresa el telefono'])!!}
                                
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        