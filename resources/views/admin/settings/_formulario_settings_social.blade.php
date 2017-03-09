<div class="form-group {{ $errors->has('facebook') ? ' has-error' : '' }}">
    {!! Form::label('Página de Facebook:', null, ['class' => 'control-label']) !!}
    {!! Form::text('facebook', old('facebook'), ['class' => 'form-control','placeholder'=>'Ingrese su Página de Facebook']) !!}
    @if ($errors->has('facebook'))
        <span class="help-block">
            <strong>{{ $errors->first('facebook') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('twitter') ? ' has-error' : '' }}">
    {!! Form::label('Página de Twitter:', null, ['class' => 'control-label']) !!}
    {!! Form::text('twitter', old('twitter'), ['class' => 'form-control','placeholder'=>'Ingrese su Página de Twitter']) !!}
    @if ($errors->has('twitter'))
        <span class="help-block">
            <strong>{{ $errors->first('twitter') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('instagram') ? ' has-error' : '' }}">
    {!! Form::label('Página de Instagram:', null, ['class' => 'control-label']) !!}
    {!! Form::text('instagram', old('instagram'), ['class' => 'form-control','placeholder'=>'Ingrese su Página de Instagram']) !!}
    @if ($errors->has('instagram'))
        <span class="help-block">
            <strong>{{ $errors->first('instagram') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('google') ? ' has-error' : '' }}">
    {!! Form::label('Página de Google+:', null, ['class' => 'control-label']) !!}
    {!! Form::text('google', old('google'), ['class' => 'form-control','placeholder'=>'Ingrese su Página de Google+']) !!}
    @if ($errors->has('google'))
        <span class="help-block">
            <strong>{{ $errors->first('google') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('pinterest') ? ' has-error' : '' }}">
    {!! Form::label('Página de Pinterest:', null, ['class' => 'control-label']) !!}
    {!! Form::text('pinterest', old('pinterest'), ['class' => 'form-control','placeholder'=>'Ingrese su Página de Pinterest']) !!}
    @if ($errors->has('pinterest'))
        <span class="help-block">
            <strong>{{ $errors->first('pinterest') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('youtube') ? ' has-error' : '' }}">
    {!! Form::label('Página de Youtube:', null, ['class' => 'control-label']) !!}
    {!! Form::text('youtube', old('youtube'), ['class' => 'form-control','placeholder'=>'Ingrese su Página de Youtube']) !!}
    @if ($errors->has('youtube'))
        <span class="help-block">
            <strong>{{ $errors->first('youtube') }}</strong>
        </span>
    @endif
</div>





   

