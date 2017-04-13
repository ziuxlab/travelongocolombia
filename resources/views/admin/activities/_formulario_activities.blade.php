<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('tittle') ? ' has-error' : '' }}">
            {!! Form::label(trans('form_product.title').':', null, ['class' => 'control-label']) !!}
            {!! Form::text('tittle', old('tittle'), ['class' => 'form-control','placeholder'=>'The Coffe Park']) !!}
            @if ($errors->has('tittle'))
                <span class="help-block">
                <strong>{{ $errors->first('tittle') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('slug_url') ? ' has-error' : '' }}">
            {!! Form::label(trans('form_product.url').':', null, ['class' => 'control-label']) !!}
            {!! Form::text('slug_url', old('slug_url'), ['class' => 'form-control','placeholder'=>'the-coffe-park']) !!}
            @if ($errors->has('slug_url'))
                <span class="help-block">
                <strong>{{ $errors->first('slug_url') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
            {!! Form::label(trans('form_product.description').':', null, ['class' => 'control-label']) !!}
            {!! Form::textarea('description', old('descripcion'), ['class' => 'form-control','placeholder'=>'THE COFFEE PARK (El Parque del Café), as its name suggests, is a theme park with fairly obvious theme. It is in part a condensed tour of Quindío’s renowned coffee horticulture...']) !!}
            @if ($errors->has('description'))
                <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-3">
        <div class="form-group {{ $errors->has('days') ? ' has-error' : '' }}">
            {!! Form::label(trans('form_product.days').':', null, ['class' => 'control-label']) !!}
            {!! Form::text('days', old('days'), ['class' => 'form-control','placeholder'=>'1','readonly']) !!}
            @if ($errors->has('days'))
                <span class="help-block">
                <strong>{{ $errors->first('days') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group {{ $errors->has('price_adults') ? ' has-error' : '' }}">
            {!! Form::label(trans('form_product.price_adults').':', null, ['class' => 'control-label']) !!}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-usd"></i></span>
                {!! Form::number('price_adults', old('price_adults'), ['class' => 'form-control','placeholder'=>'99']) !!}

                <span class="input-group-addon">.00</span>
            </div>
            @if ($errors->has('price_adults'))
                <span class="help-block">
                <strong>{{ $errors->first('price_adults') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group {{ $errors->has('price_children') ? ' has-error' : '' }}">
            {!! Form::label(trans('form_product.price_children').':', null, ['class' => 'control-label']) !!}
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
    <div class="col-sm-3">
        <div class="form-group {{ $errors->has('discount') ? ' has-error' : '' }}">
            {!! Form::label(trans('form_product.discount').':', null, ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::number('discount', old('discount'), ['class' => 'form-control','placeholder'=>'10']) !!}

                <span class="input-group-addon"><i class="fa fa-percent"></i></span>
            </div>
            @if ($errors->has('discount'))
                <span class="help-block">
                <strong>{{ $errors->first('discount') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
@if($form=='edit')
    @php
    $items = explode(",", $activity->itinerary);
    $first = array_shift($items);
    @endphp
    <div class="form-group {{ $errors->has('itinerary') ? ' has-error' : '' }}">
        {!! Form::label(trans('form_product.itinerary').':', null, ['class' => 'control-label']) !!}
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="input_fields_wrap">
                    <button class="btn btn-default push add_field_button">add field</button>
                    {!! Form::text('itinerary', $first, ['class' => 'form-control','placeholder'=>'Breackfast', 'name'=>'itinerary[]']) !!}
                    @foreach($items as $i)
                        @if($i!=null)
                            <div class="row"><br>
                            <div class="col-sm-11">
                            {!! Form::text('itinerary', $i, ['class' => 'form-control','name'=>'itinerary[]']) !!}
                            </div>
                            <div class="col-sm-1">
                            <a href="#" class="remove_field"><i class="fa fa-times fa-2x text-danger"></i></a>
                            </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@else
    <div class="form-group {{ $errors->has('itinerary') ? ' has-error' : '' }}">
        {!! Form::label(trans('form_product.itinerary').':', null, ['class' => 'control-label']) !!}
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="input_fields_wrap">
                    <button class="btn btn-default push add_field_button">@lang('form_product.add_field')</button>
                        {!! Form::text('itinerary', null, ['class' => 'form-control','placeholder'=>'Breackfast', 'name'=>'itinerary[]']) !!}
                </div>
            </div>
        </div>
    </div>
@endif


<div class="form-group {{ $errors->has('meta_description') ? ' has-error' : '' }}">
    {!! Form::label(trans('form_product.resume').':', null, ['class' => 'control-label']) !!}
    {!! Form::textarea('meta_description', old('meta_description'), ['class' => 'form-control','placeholder'=>'Ingrese su resumen (SEO)','rows'=>'3']) !!}
    @if ($errors->has('meta_description'))
        <span class="help-block">
        <strong>{{ $errors->first('meta_description') }}</strong>
    </span>
    @endif
</div>
<div class="form-group {{ $errors->has('keywords') ? ' has-error' : '' }}">
    {!! Form::label(trans('form_product.keywords').':', null, ['class' => 'control-label']) !!}
    {!! Form::text('keywords', old('keywords'), ['class' => 'form-control','placeholder'=>'coffe, nature, atractions, culture']) !!}
    @if ($errors->has('keywords'))
        <span class="help-block">
        <strong>{{ $errors->first('keywords') }}</strong>
    </span>
    @endif
</div>
<div class="row">
    <div class="col-sm-3">
        <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
            {!! Form::label(trans('form_product.status').':', null, ['class' => 'control-label']) !!}
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
            {!! Form::label(trans('form_product.languaje').':', null, ['class' => 'control-label']) !!}
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
            {!! Form::label(trans('form_product.main_image').':', null, ['class' => 'control-label']) !!}
            {!! Form::file('img[]',['class'=>'btn btn-default', 'multiple']) !!}
            @if ($errors->has('img'))
                <span class="help-block">
                <strong>{{ $errors->first('img') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>