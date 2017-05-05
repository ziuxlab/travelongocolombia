<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('Nombre:', null, ['class' => 'control-label']) !!}
            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            {!! Form::label('Email:', null, ['class' => 'control-label']) !!}
            {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
            {!! Form::label('Telefono:', null, ['class' => 'control-label']) !!}
            {!! Form::text('phone', old('phone'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('country') ? ' has-error' : '' }}">
            {!! Form::label('Pais/ciudad:', null, ['class' => 'control-label']) !!}
            {!! Form::text('country', old('country'), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
    {!! Form::label('Mensaje:', null, ['class' => 'control-label']) !!}
    {!! Form::textarea('message', old('message'), ['class' => 'form-control']) !!}
</div>




   

