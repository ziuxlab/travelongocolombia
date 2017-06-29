<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('Nombre:', null, ['class' => 'control-label']) !!}
    {!! Form::text('name', old('name'), ['class' => 'form-control','placeholder'=>'Ingrese su nombre ','required']) !!}
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('Email:', null, ['class' => 'control-label']) !!}
    {!! Form::text('email', old('email'), ['class' => 'form-control','placeholder'=>'Ingrese su correo electrónico','required']) !!}
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    {!! Form::label('Contraseña:', null, ['class' => 'control-label']) !!}
    {!! Form::password('password', ['class' => 'form-control','placeholder'=>'Ingrese su contraseña']) !!}
</div>
<div class="form-group">
    {!! Form::label('Rol:', null, ['class' => 'control-label']) !!}
    {!! Form::select('role', $roles, $user_role, ['class' => 'form-control','onchange'=>'role_hotel(this)']) !!}

</div>
<div class="form-group hidden" id="hotel">
    {!! Form::label('Hotel Asignado:', null, ['class' => 'control-label']) !!}
    {!! Form::select('hotel[]', $hotels, null, ['class' => 'form-control','placeholder'=>'Select the hotel','multiple']) !!}

</div>
<div class="form-group {{ $errors->has('img') ? ' has-error' : '' }}">
    {!! Form::label('Imagen:', null, ['class' => 'control-label']) !!}
    {!! Form::file('img',['class'=>'btn btn-default']) !!}
    @if ($errors->has('img'))
        <span class="help-block">
            <strong>{{ $errors->first('img') }}</strong>
        </span>
    @endif
</div>
<script>
    function role_hotel($item) {
        if($item.value == 2){
            $('#hotel').removeClass('hidden')
        }else {
            $('#hotel').addClass('hidden')
        }
    }
</script>
   

