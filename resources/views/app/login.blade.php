@extends('templates.app')

@section('content')



    <div class="container ">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-4">

            <div class="card">
              <div class="card-header">
                <h3> @Lang('app-home.login-title')</h3>
              </div>
              <div class="card-block">

              {!! Form::open( ['url'=> route('login'), 'autocomplete' =>'off' ]) !!}

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                  <label class="control-label" for='email'>  @Lang('app-home.login_email_title')   </label>
                    {!! Form::text('email', null,  [
                          'class'       => 'form-control',
                          'placeholder' => Lang::get('app-home.login-email-placeholder'),
                          'maxlength'   => Config::get('app.config.email-maxlength'),
                        ])
                      !!}
                      @if ( $errors->has('email'))
                        <p class="text-danger"> <i class="fa fa-exclamation-circle" ></i> {{ $errors->first('email') }}<p>
                      @endif
                </div>


                <div class="form-group {{ $errors->has('pass_usuario') ? 'has-error' : '' }}">
                  <label class="control-label" for='pass_usuario'>  @Lang('app-home.login_pass_title')   </label>
                  {!! Form::password('pass_usuario',   ['class'=> 'form-control',])  !!}
                      @if ( $errors->has('pass_usuario'))
                        <p class="text-danger"> <i class="fa fa-exclamation-circle" ></i> {{ $errors->first('pass_usuario') }}<p>
                      @endif
                </div>


                <div class="checkbox {{ $errors->has('remember_me') ? 'has-error' : '' }}">
                    <label>
                    {!! Form::checkbox('remember_me', 'acepted')!!}
                      @Lang('app-home.login_remember_me')
                    </label>
                      @if ( $errors->has('remember_me'))
                        <p class="text-danger"> <i class="fa fa-exclamation-circle" ></i> {{ $errors->first('remember_me') }}<p>
                      @endif
                </div>

                <div class="form-group">
                      <button class="btn btn-primary" type="submit"> @Lang('app-home.login-btn-ingresar')</button>
                      <button class="btn btn-success" type="submit"> @Lang('app-home.login-btn-ingresa-inv')</button>
                </div>




              {!! Form::close() !!}
            </div>
            </div>
           </div>
        </div>

    </div>

@endsection

