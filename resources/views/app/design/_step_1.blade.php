
    <div class="content-boxed content">
        <div class="row">
            <div class="col-sm-12">
                <div class="block">
                    <div class="block-content block-content-narrow block-content-full">
                        <div class="text-center">
                            <h3 class="">Paso a paso arma tu propio paquete</h3>
                        </div>
                        <div class="progress progress-mini">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                        </div>
                        <div class="progress-steps flex-between">
                            <div class="text-center">
                                <div class="item item-circle item-bg-primary bg-secondary text-white bg-gray-lighter">
                                    1
                                </div>
                                <div class="push-5-t">Ingresar Información</div>
                            </div>
                            <div class="text-center">
                                <div class="item item-circle bg-gray-lighter">
                                    2
                                </div>
                                <div class="push-5-t">Buscar Hotel</div>
                            </div>
                            <div class="text-center">
                                <div class="item item-circle bg-gray-lighter">
                                    3
                                </div>
                                <div class="push-5-t">Buscar Actividades</div>
                            </div>
                            <div class="text-center">
                                <div class="item item-circle bg-gray-lighter">
                                    4
                                </div>
                                <div class="push-5-t">Realizar Checkout</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="block block-bordered block-rounded block-themed " >
                    {!! Form::open(['action'=> ['FlightController@store'],'id' => 'flights']) !!}
                    <div class="block-header bg-primary">
                        <h3 class="h4">Información básica</h3>
                    </div>
                    <div class="block-content block-content-full ">
                      @include('admin.flights._flights_formulario')
                        <div class="row">
                            <div class="form-group">
                                <label class="col-xs-12">Incluir en el Paquete</label>
                                 <div class="col-md-2 col-sm-4 col-xs-6">
                                     <label class="css-input css-radio css-radio-primary">
                                         <input type="radio" name="options" value="vueloHotel" checked="true" ><span></span> Hotel + vuelo
                                     </label>
                                 </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <label class="css-input css-radio css-radio-primary">
                                        <input type="radio" name="options" value="onlyHotel" id="only_hotel" ><span></span> Hotel
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content border-t text-center">
                        <div class="form-group">
                            <button class="btn btn-success btn-minw" type="submit">Buscar</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="row">
            <!-- activities -->
            <div class="col-sm-12">
                <div class="block">
                    <div class="block-content block-content-full" id="flights-response">
                
                    </div>
                </div>
            </div>
            <!-- end activities -->
        </div>
    </div>
