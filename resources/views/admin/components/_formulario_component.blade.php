<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('Nombre del componente:', null, ['class' => 'control-label']) !!}
    {!! Form::text('name', old('name'), ['class' => 'form-control','placeholder'=>'Ingrese el nombre de su complemento','required']) !!}
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
    {!! Form::label('Contenido:', null, ['class' => 'control-label']) !!}
    {!! Form::textarea('body', old('body'), ['class' => 'form-control','id'=>'js-ckeditor','placeholder'=>'Ingrese su contenido']) !!}
    @if ($errors->has('body'))
        <span class="help-block">
            <strong>{{ $errors->first('body') }}</strong>
        </span>
    @endif
</div>
<div class="row">
    <div class="col-sm-3">
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
    
    <div class="col-sm-3">
        <div class="form-group {{ $errors->has('page_id') ? ' has-error' : '' }}">
            {!! Form::label('Página:', null, ['class' => 'control-label']) !!}
            {!! Form::select('page_id', $pages ,old('page_id'), ['class' => 'form-control']) !!}
            @if ($errors->has('page_id'))
                <span class="help-block">
            <strong>{{ $errors->first('page_id') }}</strong>
        </span>
            @endif
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group {{ $errors->has('order_component') ? ' has-error' : '' }}">
            {!! Form::label('Ubicación:', null, ['class' => 'control-label']) !!}
            {!! Form::number('order_component', old('order_component'), ['class' => 'form-control','placeholder'=>'Ingrese el número de ubicación','required']) !!}
            @if ($errors->has('order_component'))
                <span class="help-block">
                <strong>{{ $errors->first('order_component') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group {{ $errors->has('local') ? ' has-error' : '' }}">
            {!! Form::label('Idioma:', null, ['class' => 'control-label']) !!}
            {!! Form::select('local',['es'=>'Español','en'=>'English'], old('local'), ['class' => 'form-control']) !!}
            @if ($errors->has('local'))
                <span class="help-block">
                <strong>{{ $errors->first('local') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>



   

