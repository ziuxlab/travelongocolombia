<div class="row">
    <div class="col-md-4 col-sm-6">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('departure') ? ' has-error' : '' }}">
                    {!! Form::label(trans('general.departure_airport').':', null, ['class' => 'control-label']) !!}
                    {!! Form::text('departure', old('departure'), ['id'=>'departure',
                    'class' => 'js-autocomplete form-control','placeholder'=>trans('general.enter_city'),'required','autocomplete'=>'off']) !!}
                    @if ($errors->has('departure'))
                        <span class="help-block"><strong>{{ $errors->first('departure') }}</strong></span>
                    @endif
                    {!! Form::hidden('departure_id', old('departure_id'), ['class'=>'airport']) !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('destination') ? ' has-error' : '' }}">
                    {!! Form::label(trans('general.destination').':', null, ['class' => 'control-label']) !!}
                    {!! Form::select('destination', $cities->where('city_code','<>',null)->pluck('city', 'city_code'), old('destination'), [ 'class' => 'form-control','placeholder'=>trans('general.select_destination'),'required']) !!}
                    @if ($errors->has('destination'))
                        <span class="help-block"><strong>{{ $errors->first('destination') }}</strong></span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="form-group text-center {{ $errors->has('checkout') || $errors->has('checkin') ? ' has-error' : '' }}">
            {!! Form::label(trans('general.between_dates').':', null, ['class' => ' control-label']) !!}
            <div class="input-daterange input-group" >
                {!! Form::text('checkin', old('checkin'), ['class' => 'js-datepicker form-control','data-date-format'=>'dd-mm-yyyy','required','placeholder'=> trans('general.since')]) !!}
                <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                {!! Form::text('checkout', old('checkout'), ['class' => 'js-datepicker form-control','data-date-format'=>'dd-mm-yyyy','required','placeholder'=> trans('general.until')]) !!}
            </div>
            @if ($errors->has('checkout'))
                <span class="help-block"><strong>{{ $errors->first('checkout') }}</strong></span>
            @endif
            @if ($errors->has('checkin'))
                <span class="help-block"><strong>{{ $errors->first('checkin') }}</strong></span>
            @endif
        </div>
    </div>
    <div class="col-md-5 col-xs-12">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group {{ $errors->has('adults')  ? ' has-error' : '' }}">
                    {!! Form::label(trans('general.Adults').':', null, ['class' => 'control-label']) !!}
                    <div class="input-group">
                                  <span class="input-group-btn">
                                      <button type="button" class="btn btn-xs btn-default value-control"
                                              data-action="minus" data-target="adults">
                                          <span class="glyphicon glyphicon-minus"></span>
                                      </button>
                                  </span>
                        {!! Form::text('adults', old('adults') or 1, ['class' => 'text-center form-control','required','id'=>'adults','min'=>0,'max'=>10]) !!}
                        <span class="input-group-btn">
                                      <button type="button" class="btn btn-xs  btn-default value-control"
                                              data-action="plus" data-target="adults">
                                          <span class="glyphicon glyphicon-plus"></span>
                                      </button>
                                  </span>
                    </div>
                    @if ($errors->has('adults'))
                        <span class="help-block">
                         <strong>{{ $errors->first('adults') }}</strong>
                     </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group {{ $errors->has('children') ? ' has-error' : '' }}">
                    {!! Form::label(trans('general.children').' (3-12):', null, ['class' => 'control-label']) !!}
                    <div class="input-group">
                                  <span class="input-group-btn">
                                      <button type="button" class="btn btn-xs btn-default value-control"
                                              data-action="minus" data-target="children">
                                          <span class="glyphicon glyphicon-minus"></span>
                                      </button>
                                  </span>
                        {!! Form::text('children', 0, ['class' => 'text-center form-control','id'=>'children','min'=>0,'max'=>10]) !!}
                        <span class="input-group-btn">
                                      <button type="button" class="btn btn-xs  btn-default value-control"
                                              data-action="plus" data-target="children">
                                          <span class="glyphicon glyphicon-plus"></span>
                                      </button>
                                  </span>
                    </div>
                    @if ($errors->has('children'))
                        <span class="help-block">
                                     <strong>{{ $errors->first('children') }}</strong>
                                 </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group {{ $errors->has('infants') ? ' has-error' : '' }}">
                    {!! Form::label(trans('general.infants').' (0-2):', null, ['class' => 'text-center control-label']) !!}
                    <div class="input-group">
                                  <span class="input-group-btn">
                                      <button type="button" class="btn btn-xs btn-default value-control"
                                              data-action="minus" data-target="infants">
                                          <span class="glyphicon glyphicon-minus"></span>
                                      </button>
                                  </span>
                        {!! Form::text('infants', 0, ['class' => 'text-center form-control','id'=>'infants','min'=>0,'max'=>10]) !!}
                        <span class="input-group-btn">
                                      <button type="button" class="btn btn-xs  btn-default value-control"
                                              data-action="plus" data-target="infants">
                                          <span class="glyphicon glyphicon-plus"></span>
                                      </button>
                                  </span>
                    </div>
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
@push('scripts')
<script>
    $(document).on('click', '.value-control', function () {
        var action = $(this).attr('data-action');
        var target = $(this).attr('data-target');
        var value  = parseFloat($('[id="' + target + '"]').val());
        if (action == "plus") {
            value++;
        }
        if (action == "minus" && value > 0) {
            value--;
        }
        $('[id="' + target + '"]').val(value);
    });
</script>
@endpush