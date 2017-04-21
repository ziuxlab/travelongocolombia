<div class="book">
    <div class="bg-white ">
        <div class="block">
            <div class="block-header bg-primary text-center h3 text-white">
                - Booking -
            </div>
            <div class="block-content block-content-full ">
                {!! Form::open(['action'=> ['CartController@store'],'id'=>'formulario_book']) !!}
                <div class=" form-group">
                    <div class="form-group {{ $errors->has('checkout') || $errors->has('checkin') ? ' has-error' : '' }}">
                        @if($item->type==0)
                            <span>{!! Form::label('Fecha de Ida y de Regreso:', null, ['class' => 'control-label']) !!}</span>
                        @elseif($item->type==1)
                            {!! Form::label('Date:', null, ['class' => 'control-label']) !!}
                        @endif
                        <div class="input-daterange input-group" data-date-format="mm/dd/yyyy">
                            {!! Form::text('checkin', Carbon\Carbon::tomorrow()->format('m/d/Y'), ['class' => 'js-datepicker form-control','required','id'=>'checkin']) !!}
                            @if($item->type==0)
                                <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                {!! Form::text('checkout', Carbon\Carbon::tomorrow()->addDays($item->days)->format('m/d/Y'), ['class' => 'js-datepicker form-control','required','disabled','id'=>'checkout']) !!}
                            @endif
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
                @if($item->type == 2)
                    <div class=" form-group">
                        <div class="form-group {{ $errors->has('nights') ? ' has-error' : '' }}">
                            {!! Form::label('Nights:', null, ['class' => 'control-label']) !!}
                            <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-xs btn-default value-control"
                                        data-action="minus" data-target="nights">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </button>
                            </span>
                                {!! Form::text('nights', old('nights'), ['class' => 'form-control','placeholder'=>'Ingrese el Número de noches','id'=>'nights','min'=>0,'max'=>10]) !!}
                                <span class="input-group-btn">
                                <button type="button" class="btn btn-xs  btn-default value-control"
                                        data-action="plus" data-target="nights">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </span>
                                @if ($errors->has('nights'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('nights') }}</strong>
                        </span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-sm-4 col-md-6 col-lg-4">
                        <div class="form-group {{ $errors->has('adults')  ? ' has-error' : '' }}">
                            {!! Form::label('Adultos:', null, ['class' => 'control-label']) !!}
                            <div class="input-group">
                                  <span class="input-group-btn">
                                      <button type="button" class="btn btn-xs btn-default value-control"
                                              data-action="minus" data-target="adults">
                                          <span class="glyphicon glyphicon-minus"></span>
                                      </button>
                                  </span>
                                {!! Form::number('adults', old('adults') or 1, ['class' => 'text-center form-control','required','id'=>'adults','min'=>0,'max'=>10]) !!}
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
                    <div class="col-sm-4 col-md-6 col-lg-4">
                        
                        <div class="form-group {{ $errors->has('children') ? ' has-error' : '' }}">
                            {!! Form::label('Niños:', null, ['class' => 'control-label']) !!}
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
                    <div class="col-sm-4 col-md-6 col-lg-4">
                        
                        <div class="form-group {{ $errors->has('infants') ? ' has-error' : '' }}">
                            {!! Form::label('Bebés:', null, ['class' => 'text-center control-label']) !!}
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
                <div class="border-t ">
                    <div class="text-right bg-gray-lighter overflow-hidden content-mini content-mini-full ">
                        <label class="h3 font-w600 col-xs-6 control-label ">Total:</label>
                        <div class="col-xs-6 h3 text-left font-w700">
                            $<span id="total">{{number_format($item->price_adults)}}</span>
                        </div>
                    </div>
                </div>
                <div class="text-center push-15-t">
                    <button class="btn btn-minw btn-primary " type="button" data-toggle="modal"
                            data-target="#book-modal-0">@lang('general.book now')
                    </button>
                </div>
                {!! Form::hidden('type',$item->type)!!}
                {!! Form::hidden('id',$item->id)!!}
                {!! Form::hidden('choice',0,['id'=>'choice'])!!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@include('app.partials.needhelp')
@include('app.partials._modal_book', ['type'=>3,'id'=>0])



@push('scripts')
<script>
    $(function () {
        App.initHelper('datepicker');
    });
    $('#checkin').change(function () {
        var today = $('#checkin').datepicker('getDate');
        today.setDate(today.getDate() + parseInt('{{$item->days}}'));
        $('#checkout').datepicker('setDate', today);
    });
    
    function costos() {
        var price_adults   = '{{$item->price_adults * (1 - ($item->discount/100))}}';
        var price_children = '{{$item->price_children * (1 - ($item->discount/100))}}';
        var adults         = $('#adults').val();
        var children       = $('#children').val();
        var total          = adults * price_adults + children * price_children;
        $('#total').html(total);
        console.log(total)
    }
    
    
    $(document).on('click', '.value-control', function () {
        console.log(1)
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
        costos()
    });
    
    
    function enviar_formulario_book(choice, id = 0) {
        //choice es la opcion 0 o 1 si es 0 va al checkout y si escoge 1 va a buscar vuelos
        var formulario = $('#formulario_book');
        $('#choice').val(choice);
        formulario.submit();
    }


</script>

@endpush