<div class="form-group {{ $errors->has('tittle') ? ' has-error' : '' }}">
    {!! Form::label('title:', null, ['class' => 'control-label']) !!}
    {!! Form::text('tittle', old('tittle'), ['class' => 'form-control','placeholder'=>'Ingrese aquí los estilos que desea agregar, todos quedarán dentro de las etiquetas "styles"','rows'=>'4']) !!}
    @if ($errors->has('tittle'))
        <span class="help-block">
            <strong>{{ $errors->first('tittle') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('meta_description') ? ' has-error' : '' }}">
    {!! Form::label('Meta Descripción:', null, ['class' => 'control-label']) !!}
    {!! Form::textarea('meta_description', old('meta_descriptionr'), ['class' => 'form-control','placeholder'=>'Ingrese una breve descripción de su sitio web utilizando las palabras clave','rows'=>'3']) !!}
    @if ($errors->has('meta_description'))
        <span class="help-block">
            <strong>{{ $errors->first('meta_description') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('keywords') ? ' has-error' : '' }}">
    {!! Form::label('Palabras claves:', null, ['class' => 'control-label']) !!}
    {!! Form::text('keywords', old('keywords'), ['class' => 'form-control','placeholder'=>'Ingrese las palabras claves (SEO) con las que desea ser encontrado en los motores de busqueda']) !!}
    @if ($errors->has('keywords'))
        <span class="help-block">
            <strong>{{ $errors->first('keywords') }}</strong>
        </span>
    @endif
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
            {!! Form::label('Teléfono:', null, ['class' => 'control-label']) !!}
            {!! Form::text('phone', old('phone'), ['class' => 'form-control','placeholder'=>'Ingrese su Teléfono']) !!}
            @if ($errors->has('phone'))
                <span class="help-block">
            <strong>{{ $errors->first('phone') }}</strong>
        </span>
            @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            {!! Form::label('Correo Electrónico:', null, ['class' => 'control-label']) !!}
            {!! Form::email('email', old('email'), ['class' => 'form-control','placeholder'=>'Ingrese su Correo Electrónico']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
            @endif
        </div>
    </div>
</div>
<div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
    {!! Form::label('Dirección:', null, ['class' => 'control-label']) !!}
    {!! Form::text('address', old('address'), ['class' => 'form-control','placeholder'=>'Ingrese su Dirección']) !!}
    @if ($errors->has('address'))
        <span class="help-block">
            <strong>{{ $errors->first('address') }}</strong>
        </span>
    @endif
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
            {!! Form::label('Estado:', null, ['class' => 'control-label']) !!}
            {!! Form::select('status', [1=>'Habilitado',0=>'Deshabilitado'] ,old('status'), ['class' => 'form-control']) !!}
            @if ($errors->has('status'))
                <span class="help-block">
            <strong>{{ $errors->first('status') }}</strong>
        </span>
            @endif
        </div>
    </div>
</div>




   

