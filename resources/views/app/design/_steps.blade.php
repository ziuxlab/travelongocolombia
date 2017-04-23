<div class="block">
    <div class="block-content block-content-narrow block-content-full">
        <div class="text-center">
            <h3 class="">Paso a paso arma tu propio paquete</h3>
        </div>
        <div class="progress progress-mini">
            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="25"
                 aria-valuemin="0" aria-valuemax="100" style="width: {{$step > 3 ? '100%' : ($step > 2 ? '70%': ($step > 1 ? '35%':'0%'))}}"></div>
        </div>
        <div class="progress-steps flex-between">
            <a class="text-center" href="{{url(str_slug(trans('cabecera.Design')).'?step=1')}}">
                <div class="item item-circle {{$step > 0 ? 'item-bg-primary' : ''}}
                {{$step == 1 ? 'bg-secondary text-white' : 'bg-gray-lighter text-primary-dark'}} ">
                    1
                </div>
                <div class="push-5-t text-primary-dark">Ingresar Información</div>
            </a>
            <a class="text-center " href="{{url(str_slug(trans('cabecera.Design')).'?step=2')}}">
                <div class="item item-circle {{$step > 1 ? 'item-bg-primary' : ''}}
                {{$step == 2 ? 'bg-secondary text-white' : 'bg-gray-lighter text-primary-dark'}}  ">
                    2
                </div>
                <div class="push-5-t text-primary-dark">Buscar Hotel</div>
            </a>
            <a class="text-center " href="{{url(str_slug(trans('cabecera.Design')).'?step=3')}}">
                <div class="item item-circle {{$step > 2 ? 'item-bg-primary' : ''}}
                {{$step == 3 ? 'bg-secondary text-white' : 'bg-gray-lighter text-primary-dark'}}">
                    3
                </div>
                <div class="push-5-t text-primary-dark">Buscar Actividades</div>
            </a>
            <a class="text-center " href="{{url(str_slug(trans('cabecera.Design')).'?step=4')}}">
                <div class="item item-circle {{$step > 3 ? 'item-bg-primary' : ''}}
                {{$step == 4 ? 'bg-secondary text-white' : 'bg-gray-lighter text-primary-dark'}}">
                    4
                </div>
                <div class="push-5-t text-primary-dark">Realizar Checkout</div>
            </a>
        </div>
    </div>
</div>