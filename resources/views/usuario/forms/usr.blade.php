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

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {!!Form::label('password','Password',['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                                {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el password'])!!}
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {!!Form::label('password_confirmation','Confirm-Password',['class'=>'col-md-4 control-label'])!!}

                            <div class="col-md-6">
                                {!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Confirme el password'])!!}
                            </div>
                        </div>