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
            <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-sm-12 text-left ">Correo electrónico</label>
                    
                    <div class="col-sm-12">
                        <input id="email" type="email" class="form-control" name="email"
                               value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary btn-minw">
                            Enviar contraseña
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection
