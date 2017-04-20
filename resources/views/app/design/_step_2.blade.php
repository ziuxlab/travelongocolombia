<div class="content-boxed content">
    <div class="row">
        <div class="col-sm-12">
            <div class="block">
                <div class="block-content block-content-narrow block-content-full">
                    <div class="text-center">
                        <h3 class="">Paso a paso arma tu propio paquete</h3>
                    </div>
                    <div class="progress progress-mini">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
                    </div>
                    <div class="progress-steps flex-between">
                        <div class="text-center">
                            <div class="item item-circle item-bg-primary bg-gray-lighter">
                                1
                            </div>
                            <div class="push-5-t">Ingresar Información</div>
                        </div>
                        <div class="text-center">
                            <div class="item item-circle item-bg-primary bg-secondary text-white ">
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
        <!-- sider -->
        <div class="col-md-3 push ">
            @include('app.partials._filters', ['type'=> 2])
            @include('app.partials.needhelp')
        </div>
        <!-- end sider -->
        <div class="col-md-9">
            <div id="content"></div>
        </div>
    </div>
</div>
</div>

@section('scripts')
    {{$Config->scripts_footer}}
    @include('layouts.app.partials._list', ['type'=> 2])
@stop