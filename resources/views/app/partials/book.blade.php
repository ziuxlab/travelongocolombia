<div class="book">
    <div class="bg-white ">
        <div class="block">
            <div class="block-header bg-primary text-center h3 text-white">
                - Booking -
            </div>
            <div class="block-content block-content-full ">
                {!! Form::open(['action'=> ['CartController@store'],'id'=>'tiempo']) !!}
                <div class=" form-group">
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
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group {{ $errors->has('adults')  ? ' has-error' : '' }}">
                            {!! Form::label('Adultos:', null, ['class' => 'control-label']) !!}
                            {!! Form::number('adults', old('adults') or 1, ['class' => 'form-control','required','id'=>'adults']) !!}
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
                            {!! Form::number('children', old('children') or 0, ['class' => 'form-control','id'=>'children']) !!}
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
                            {!! Form::number('infants', old('infants') or 0, ['class' => 'form-control','id'=>'infants']) !!}
                            @if ($errors->has('infants'))
                                <span class="help-block">
                                               <strong>{{ $errors->first('infants') }}</strong>
                                           </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="border-t ">
                    <div class="text-right bg-gray-lighter overflow-hidden content-mini content-mini-full ">
                        <label class="h3 font-w600 col-xs-6 control-label ">Total:</label>
                        <div class="col-xs-6 h3 text-left font-w700">
                            $<span id="total">{{number_format($item->price_adults)}}</span>
                        </div>
                    </div>
                </div>
                <div class="text-center push-15-t">
                    <button class="btn btn-minw btn-primary " type="submit">Book now</button>
            </div>
                {!! Form::hidden('type',$item->type)!!}
                {!! Form::hidden('id',$item->id)!!}
               {!! Form::close() !!}
            </div>
        </div>
    </div>
    @include('app.partials.needhelp')
</div>