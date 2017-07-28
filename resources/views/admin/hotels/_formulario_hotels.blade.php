@role('hotel')
{!! Form::hidden('hotel_role', 1) !!}
@endrole
@role('admin')
<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('tittle') ? ' has-error' : '' }}">
            {!! Form::label('Titulo:', null, ['class' => 'control-label']) !!}
            {!! Form::text('tittle', old('tittle'), ['class' => 'form-control','placeholder'=>'Ingrese su título de la paquete (H1)','required']) !!}
            @if ($errors->has('tittle'))
                <span class="help-block">
            <strong>{{ $errors->first('tittle') }}</strong>
        </span>
            @endif
        </div>
    </div>
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
</div>
<div class="row">
    <div class="col-sm-3">
        <div class="form-group {{ $errors->has('price_children') ? ' has-error' : '' }}">
            {!! Form::label('Precio Niños:', null, ['class' => 'control-label']) !!}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-usd"></i></span>
                {!! Form::number('price_children', old('price_children'), ['class' => 'form-control','placeholder'=>'99']) !!}

                <span class="input-group-addon">.00</span>
            </div>
            @if ($errors->has('price_children'))
                <span class="help-block">
            <strong>{{ $errors->first('price_children') }}</strong>
        </span>
            @endif
        </div>
    </div>
</div>
@endrole
<div class="row">
    @foreach($kindshotel as $item)
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('Habitación '.$item->kind_room.':', null, ['class' => 'control-label']) !!}
                <?php
                $kind_room = isset($package) ? $package->kindsHotel->where('id', $item->id)
                                                                        ->first() : null;
                ?>
                <div class="row">
                    @role('admin')
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon">Precio:</span>

                            {!! Form::number('kindshotel['.$item->id.'][price]', $kind_room != null ? $kind_room->pivot->price : 0 , ['class' => 'form-control']) !!}


                        </div>
                    
                    </div>
                    @endrole
                    @role('hotel')
                    {!! Form::hidden('kindshotel['.$item->id.'][price]', $kind_room != null ? $kind_room->pivot->price : 0 ) !!}
                    @endrole

                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon">cantidad:</span>
                            {!! Form::number('kindshotel['.$item->id.'][quantity]',$kind_room != null ? $kind_room->pivot->quantity : 0, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
@role('admin')
<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('Descripción:', null, ['class' => 'control-label']) !!}
    {!! Form::textarea('description', old('description'), ['class' => 'form-control','placeholder'=>'Ingrese su Descripción']) !!}
    @if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('short_description') ? ' has-error' : '' }}">
    {!! Form::label('Descripción Corta:', null, ['class' => 'control-label']) !!}
    {!! Form::textarea('short_description', old('short_description'), ['class' => 'form-control','rows'=>3,'placeholder'=>'Ingrese su Descripción Corta']) !!}
    @if ($errors->has('short_description'))
        <span class="help-block">
            <strong>{{ $errors->first('short_description') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('include') ? ' has-error' : '' }}">
    {!! Form::label('Incluye:', null, ['class' => 'control-label']) !!}
    {!! Form::textarea('include', old('include'), ['class' => 'form-control','rows'=>3,'placeholder'=>'Ingrese lo que incluye el paquete']) !!}
    @if ($errors->has('include'))
        <span class="help-block">
            <strong>{{ $errors->first('include') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('suggestion') ? ' has-error' : '' }}">
    {!! Form::label('Sugerencias:', null, ['class' => 'control-label']) !!}
    {!! Form::textarea('suggestion', old('suggestion'), ['class' => 'form-control','rows'=>3,'placeholder'=>'Ingrese lo que sugiere del paquete']) !!}
    @if ($errors->has('suggestion'))
        <span class="help-block">
            <strong>{{ $errors->first('suggestion') }}</strong>
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
    <div class="col-sm-3">
        <div class="form-group {{ $errors->has('city_id') ? ' has-error' : '' }}">
            {!! Form::label('Ciudad:', null, ['class' => 'control-label']) !!}
            {!! Form::select('city_id',$cities->pluck('city','id'), old('city_id'), ['class' => 'form-control']) !!}
            @if ($errors->has('city_id'))
                <span class="help-block">
                <strong>{{ $errors->first('city_id') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group {{ $errors->has('features[]') ? ' has-error' : '' }}">
            {!! Form::label('Características:', null, ['class' => 'control-label']) !!}
            <select class="form-control js-select2 " multiple="multiple" name="features[]" style="width: 100%;"
                    data-placeholder="Escoge una o varias...">
                <option></option>
                @foreach($features->where('type',2) as $feature)
                    @if(isset($package))
                        <option value="{{$feature->id}}" {{count($package->features->where('id',$feature->id)) > 0 ?'selected':''}}>{{$feature->feature}}</option>
                    @else
                        <option value="{{$feature->id}}">{{$feature->feature}}</option>
                    @endif
                @endforeach
            </select>
            @if ($errors->has('features[]'))
                <span class="help-block">
                <strong>{{ $errors->first('features[]') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group {{ $errors->has('img') ? ' has-error' : '' }}">
            {!! Form::label('Imagen Principal:', null, ['class' => 'control-label']) !!}
            {!! Form::file('img[]',['class'=>'btn btn-default', 'multiple']) !!}
            @if ($errors->has('img'))
                <span class="help-block">
            <strong>{{ $errors->first('img') }}</strong>
        </span>
            @endif
        </div>
    </div>
</div>
@endrole