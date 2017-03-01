<div class="form-group {{ $errors->has('css') ? ' has-error' : '' }}">
    {!! Form::label('css:', null, ['class' => 'control-label']) !!}
    {!! Form::textarea('css', old('css'), ['class' => 'form-control','placeholder'=>'Ingrese aquí los estilos que desea agregar, todos quedarán dentro de las etiquetas "styles"','rows'=>'4']) !!}
    @if ($errors->has('css'))
        <span class="help-block">
            <strong>{{ $errors->first('css') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('scripts_header') ? ' has-error' : '' }}">
    {!! Form::label('Header:', null, ['class' => 'control-label']) !!}
    {!! Form::textarea('scripts_header', old('scripts_header'), ['class' => 'form-control','placeholder'=>'Ingrese los scripts y metas necesarios y quedarán en la parte superior de su Html']) !!}
    @if ($errors->has('scripts_header'))
        <span class="help-block">
            <strong>{{ $errors->first('scripts_header') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('scripts_footer') ? ' has-error' : '' }}">
    {!! Form::label('Footer:', null, ['class' => 'control-label']) !!}
    {!! Form::textarea('scripts_footer', old('scripts_footer'), ['class' => 'form-control','placeholder'=>'Ingrese los scripts necesarios y quedarán en la parte final del Html']) !!}
    @if ($errors->has('scripts_footer'))
        <span class="help-block">
            <strong>{{ $errors->first('scripts_footer') }}</strong>
        </span>
    @endif
</div>


   

