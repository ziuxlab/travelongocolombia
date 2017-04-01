<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('Nombre:', null, ['class' => 'control-label']) !!}
            {!! Form::text('name', old('name'), ['class' => 'form-control','placeholder'=>'Ingrese el nombre de la página','required']) !!}
            @if ($errors->has('name'))
                <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
            @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('tittle') ? ' has-error' : '' }}">
            {!! Form::label('Titulo de la página:', null, ['class' => 'control-label']) !!}
            {!! Form::text('tittle', old('tittle'), ['class' => 'form-control','placeholder'=>'Ingrese su titulo de la página (H1)','required']) !!}
            @if ($errors->has('tittle'))
                <span class="help-block">
            <strong>{{ $errors->first('tittle') }}</strong>
        </span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('slug_url') ? ' has-error' : '' }}">
            {!! Form::label('Url:', null, ['class' => 'control-label']) !!}
            {!! Form::text('slug_url', old('slug_url'), ['class' => 'form-control','placeholder'=>'Ingrese su Url']) !!}
            @if ($errors->has('slug_url'))
                <span class="help-block">
            <strong>{{ $errors->first('slug_url') }}</strong>
        </span>
            @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('tipo') ? ' has-error' : '' }}">
            {!! Form::label('Tipo de Página:', null, ['class' => 'control-label']) !!}
            {!! Form::select('tipo', [1=>'Grupo de Componentes',0=>'Pagina'] ,old('tipo'), ['class' => 'form-control']) !!}
            @if ($errors->has('tipo'))
                <span class="help-block">
            <strong>{{ $errors->first('tipo') }}</strong>
        </span>
            @endif
        </div>
    </div>
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
<div class="form-group {{ $errors->has('meta_description') ? ' has-error' : '' }}">
    {!! Form::label('Resumen:', null, ['class' => 'control-label']) !!}
    {!! Form::textarea('meta_description', old('meta_description'), ['class' => 'form-control','placeholder'=>'Ingrese su resumen (SEO)','rows'=>'3']) !!}
    @if ($errors->has('meta_description'))
        <span class="help-block">
            <strong>{{ $errors->first('meta_description') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('keywords') ? ' has-error' : '' }}">
    {!! Form::label('Palabras Clave:', null, ['class' => 'control-label']) !!}
    {!! Form::text('keywords', old('keywords'), ['class' => 'form-control','placeholder'=>'Ingrese sus Palabras Clave']) !!}
    @if ($errors->has('keywords'))
        <span class="help-block">
            <strong>{{ $errors->first('keywords') }}</strong>
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
        <div class="form-group {{ $errors->has('menu') ? ' has-error' : '' }}">
            {!! Form::label('menú:', null, ['class' => 'control-label']) !!}
            {!! Form::select('menu',[1=>'Si',0=>'No'], old('menu'), ['class' => 'form-control']) !!}
            @if ($errors->has('menu'))
                <span class="help-block">
                <strong>{{ $errors->first('menu') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group {{ $errors->has('menu_order') ? ' has-error' : '' }}">
            {!! Form::label('Ubicación:', null, ['class' => 'control-label']) !!}
            {!! Form::number('menu_order', 0, ['class' => 'form-control','placeholder'=>'Ingrese el número de ubicación en el menú']) !!}
            @if ($errors->has('menu_order'))
                <span class="help-block">
                <strong>{{ $errors->first('menu_order') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group {{ $errors->has('local') ? ' has-error' : '' }}">
            {!! Form::label('Idioma:', null, ['class' => 'control-label']) !!}
            {!! Form::select('local',['es'=>'Español','en'=>'English'], old('menu'), ['class' => 'form-control']) !!}
            @if ($errors->has('local'))
                <span class="help-block">
                <strong>{{ $errors->first('local') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group {{ $errors->has('img') ? ' has-error' : '' }}">
            {!! Form::label('Imagen Principal:', null, ['class' => 'control-label']) !!}
            {!! Form::file('img',['class'=>'btn btn-default']) !!}
            @if ($errors->has('img'))
                <span class="help-block">
            <strong>{{ $errors->first('img') }}</strong>
        </span>
            @endif
        </div>
    </div>
</div>



   

