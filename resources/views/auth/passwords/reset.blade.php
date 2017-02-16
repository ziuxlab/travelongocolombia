@extends('layouts.admin.auth')

@section('content')
    
    <div class="block block-rounded">
        <div class="block-header bg-gray-lighter ">
            <div class="h5 font-w600">Cambiar contraseña</div>
        </div>
        <div class="block-content">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                
                <input type="hidden" name="token" value="{{ $token }}">
                
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-sm-12 text-left ">Correo electrónico</label>
                    
                    <div class="col-sm-12">
                        <input id="email" type="email" class="form-control" name="email"
                               value="{{ $email or old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-sm-12 text-left">Contraseña</label>
                    
                    <div class="col-sm-12">
                        <input id="password" type="password" class="form-control" name="password" required>
                        
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="col-sm-12 text-left">Confirmar contraseña</label>
                    <div class="col-sm-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               required>
                        
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group ">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary btn-minw">
                            Cambiar contraseña
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
