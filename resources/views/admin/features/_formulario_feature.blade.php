<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('feature') ? ' has-error' : '' }}">
            {!! Form::label('Categoría Inglés:', null, ['class' => 'control-label']) !!}
            {!! Form::text('feature', old('feature'), ['class' => 'form-control','placeholder'=>'Ingrese  la categoria en EN','required']) !!}
            @if ($errors->has('feature'))
                <span class="help-block">
            <strong>{{ $errors->first('feature') }}</strong>
        </span>
            @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('feature_es') ? ' has-error' : '' }}">
            {!! Form::label('Categoría Español:', null, ['class' => 'control-label']) !!}
            {!! Form::text('feature_es', old('feature_es'), ['class' => 'form-control','placeholder'=>'Ingrese la categoria en ES','required']) !!}
            @if ($errors->has('feature_es'))
                <span class="help-block">
            <strong>{{ $errors->first('feature_es') }}</strong>
        </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-3">
        <div class="form-group {{ $errors->has('in_categories') ? ' has-error' : '' }}">
            {!! Form::label('En Menú:', null, ['class' => 'control-label']) !!}
            {!! Form::select('in_categories', [1=>'Si',0=>'No'] ,old('in_categories'), ['class' => 'form-control','required']) !!}
            @if ($errors->has('in_categories'))
                <span class="help-block">
            <strong>{{ $errors->first('in_categories') }}</strong>
        </span>
            @endif
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
            {!! Form::label('Tipo de Categoría:', null, ['class' => 'control-label']) !!}
            {!! Form::select('type',[0=>'Paquete',1=>'Actividad',2=>'Hotel'], old('type'), ['class' => 'form-control','required']) !!}
            @if ($errors->has('type'))
                <span class="help-block">
                <strong>{{ $errors->first('type') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('icon') ? ' has-error' : '' }}">
            {!! Form::label('Ícono:', null, ['class' => 'control-label']) !!}
            {!! Form::text('icon', old('icon'), ['class' => 'form-control','placeholder'=>'Ingrese el nombre del ícono','required']) !!}
            @if ($errors->has('icon'))
                <span class="help-block">
                <strong>{{ $errors->first('icon') }}</strong>
            </span>
            @endif
        </div>
    </div>

</div>



   

