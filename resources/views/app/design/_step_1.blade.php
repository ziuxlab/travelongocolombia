<div class="content-boxed ">
    <div class="row steps">
        <div class="col-sm-12">
            @include('app.design._steps',['step'=>1])
        </div>
    </div>
</div>
<div class="content-boxed content remove-padding-t">
    <div class="row">
        <div class="col-sm-12">
            <div class="block block-bordered block-rounded block-themed ">
                {!! Form::open(['action'=> ['FlightController@store'],'id' => 'flights']) !!}
                <div class="block-header bg-primary">
                    <h3 class="h4">@lang('general.personal information')</h3>
                </div>
                <div class="block-content block-content-full ">
                @include('admin.flights._flights_formulario')
                {!! Form::hidden('options', 'onlyHotel') !!}
                <!--
                    <div class="row">
                        <div class="form-group">
                            <label class="col-xs-12">@lang('general.Include in package')</label>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <label class="css-input css-radio css-radio-primary">
                                    <input type="radio" name="options" value="vueloHotel"
                                           checked="true"><span></span> @lang('general.hotel') + @lang('general.flight')
                        </label>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <label class="css-input css-radio css-radio-primary">
                            <input type="radio" name="options" value="onlyHotel"
                                   id="only_hotel"><span></span> @lang('general.hotel')
                        </label>
                    </div>
                </div>
            </div>-->
                </div>
                <div class="block-content border-t text-center">
                    <div class="form-group">
                        <button class="btn btn-success btn-minw" type="submit">@lang('general.save')</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!--
    <div class="row">
        <div class="col-sm-12">
            <div class="block">
                <div class="block-content block-content-full" id="flights-response">
                
                </div>
            </div>
        </div>
    </div>
-->
</div>