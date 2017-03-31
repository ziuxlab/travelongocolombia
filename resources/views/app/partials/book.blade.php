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
                        {!! Form::label('Fecha de Ida y de Regreso:', null, ['class' => 'control-label']) !!}
                        <div class="input-daterange input-group" data-date-format="mm/dd/yyyy">
                            {!! Form::text('checkin', Carbon\Carbon::tomorrow()->format('m/d/Y'), ['class' => 'js-datepicker form-control','required','id'=>'checkin']) !!}
                            <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                            {!! Form::text('checkout', Carbon\Carbon::tomorrow()->addDays($item->days)->format('m/d/Y'), ['class' => 'js-datepicker form-control','required','disabled','id'=>'checkout']) !!}
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
                    <button class="btn btn-minw btn-primary " type="button" data-toggle="modal"
                            data-target="#book-modal">Book now
                    </button>
                </div>
                {!! Form::hidden('type',$item->type)!!}
                {!! Form::hidden('id',$item->id)!!}
                {!! Form::hidden('choice',0,['id'=>'choice'])!!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @include('app.partials.needhelp')
</div>

<div class="modal" id="book-modal">
    <div class="modal-dialog modal-dialog-popin" >
        <div class="modal-content modal-rounded">
            <div class="block block-rounded block-themed block-transparent ">
                <div class="block-content block-content-full">
                    <h3 class="text-center push-20">¿Qué deseas hacer ahora?</h3>
                    <div class="row push-20">
                        <div class="col-xs-6 text-center border-r">
                            <div class="item item-2x item-circle push-20  bg-gray-lighter">
                                <img class="img-responsive" src="{{asset('img/icons/airplane.svg')}}" alt="airplane">

                            </div>
                             <p>Escoger un vuelo para este paquete</p>
                            <div class="text-center">
                                <button class="btn btn-minw btn-primary" onclick="enviar_formulario_book(1)"
                                        data-dismiss="modal">Buscar Vuelos
                                </button>
                            </div>
                        </div>
                        <div class="col-xs-6 text-center">
                            <div class="item item-2x item-circle push-20  bg-gray-lighter">
                                <img class="img-responsive" src="{{asset('img/icons/cash.svg')}}" alt="cash">
    
                            </div>
                            <p>Ir directamente al sistema de pagos.</p>
                            <div class="text-center">
                                <button class="btn btn-minw btn-primary" onclick="enviar_formulario_book(0)"
                                        data-dismiss="modal"> Pagar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
    
    $('#adults').change(function () {
        costos()
    });
    $('#children').change(function () {
        costos()
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
    function enviar_formulario_book(choice) {
        //choice es la opcion 0 o 1 si es 0 va al checkout y si escoge 1 va a buscar vuelos
        var formulario = $('#formulario_book');
        $('#choice').val(choice);
        formulario.submit();
    }
</script>

@endpush
