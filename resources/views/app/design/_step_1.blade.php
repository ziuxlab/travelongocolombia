
    <div class="content-boxed content">
        <div class="row steps">
            <div class="col-sm-12">
                <div class="block">
                    @include('app.design._steps',['step'=>1])
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
