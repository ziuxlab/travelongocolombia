<div class="row">
    <div class="col-sm-5">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('departure') ? ' has-error' : '' }}">
                    {!! Form::label('Origen:', null, ['class' => 'control-label']) !!}
                    {!! Form::text('departure', old('departure'), ['id'=>'departure',
                    'class' => 'js-autocomplete form-control','placeholder'=>'Ingrese su Origen','required','autocomplete'=>'off']) !!}
                    @if ($errors->has('departure'))
                        <span class="help-block">
                                       <strong>{{ $errors->first('departure') }}</strong>
                                   </span>
                    @endif
                    {!! Form::hidden('departure_id', old('departure_id'), ['class'=>'airport']) !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('destination') ? ' has-error' : '' }}">
                    {!! Form::label('Destino:', null, ['class' => 'control-label']) !!}
                    {!! Form::select('destination', $cities, old('destination'), [ 'class' => 'form-control','placeholder'=>'Ingrese su Destino','required']) !!}
                    @if ($errors->has('destination'))
                        <span class="help-block">
                            <strong>{{ $errors->first('destination') }}</strong>
                        </span>
                    @endif
                  
                </div>
            </div>
        </div>
    
    
    </div>
    <div class="col-sm-4">
        
        <div class="form-group {{ $errors->has('checkout') || $errors->has('checkin') ? ' has-error' : '' }}">
            {!! Form::label('Fecha de Ida y de Regreso:', null, ['class' => 'control-label']) !!}
            <div class="input-daterange input-group" data-date-format="mm/dd/yyyy">
                {!! Form::text('checkin', old('checkin'), ['class' => 'js-datepicker form-control','required','placeholder'=>'Desde']) !!}
                <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                {!! Form::text('checkout', old('checkout'), ['class' => 'js-datepicker form-control','required','placeholder'=>'Hasta']) !!}
            </div>
            @if ($errors->has('checkout'))
                <span class="help-block">
                                               <strong>{{ $errors->first('checkout') }}</strong>
                                           </span>
            @endif
            @if ($errors->has('checkin'))
                <span class="help-block">
                                               <strong>{{ $errors->first('checkin') }}</strong>
                                           </span>
            @endif
        </div>
    </div>
    <div class="col-sm-3">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group {{ $errors->has('adults')  ? ' has-error' : '' }}">
                    {!! Form::label('Adultos:', null, ['class' => 'control-label']) !!}
                    {!! Form::number('adults', old('adults') or 1, ['class' => 'form-control','required']) !!}
                    @if ($errors->has('adults'))
                        <span class="help-block">
                                               <strong>{{ $errors->first('adults') }}</strong>
                                           </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group {{ $errors->has('children') ? ' has-error' : '' }}">
                    {!! Form::label('Niños:', null, ['class' => 'control-label']) !!}
                    {!! Form::number('children', old('children') or 0, ['class' => 'form-control']) !!}
                    @if ($errors->has('children'))
                        <span class="help-block">
                                               <strong>{{ $errors->first('children') }}</strong>
                                           </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group {{ $errors->has('infants') ? ' has-error' : '' }}">
                    {!! Form::label('Bebés:', null, ['class' => 'control-label']) !!}
                    {!! Form::number('infants', old('infants') or 0, ['class' => 'form-control']) !!}
                    @if ($errors->has('infants'))
                        <span class="help-block">
                                               <strong>{{ $errors->first('infants') }}</strong>
                                           </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>