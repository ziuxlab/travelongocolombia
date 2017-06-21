<div class="modal" id="book-modal-{{$id}}">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content modal-rounded">
            <div class="block block-rounded block-themed block-transparent ">
                <div class="block-content block-content-full">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="text-center push-10">@lang('general.What_do_you_want')</h3>
                    @if($type==1)
                        @if(App::isLocale('en'))
                            
                            <p class="text-center push-10">
                                The activities you have selected will be added to the shopping cart for your entire
                                family.</p>
                        @else
                            <p class="text-center push-10">Las actividades que seleccionastes serán agregadas al carrito
                                                           de compra para todo tu nucleo
                                                           familiar.</p>
                        @endif
                    @endif
                    <div class="row push-20 flex">
                        <div class="col-xs-6 text-center border-r">
                            @if($type==0)
                                <div class="item item-2x item-circle push-20  bg-gray-lighter">
                                    <img class="img-responsive" src="{{asset('img/icons/photo-camera.svg')}}"
                                         alt="airplane">
                                </div>
                            <!-- <div class="item item-2x item-circle push-20  bg-gray-lighter">
                                    <img class="img-responsive" src="{{asset('img/icons/airplane.svg')}}"
                                         alt="airplane">
                                </div>
                                <p>@lang('general.Choose_flight')</p>
                                <div class="text-center">
                                    <button class="btn btn-minw btn-primary" onclick="enviar_formulario_book(3)"
                                            data-dismiss="modal">@lang('general.Search_Flights')
                                    </button>
                                </div>-->
                                <p>@lang('general.keep_adding_packages')</p>
                               
                            @endif
                            @if($type==1  )
                                <div class="item item-2x item-circle push-20  bg-gray-lighter">
                                    <img class="img-responsive" src="{{asset('img/icons/photo-camera.svg')}}"
                                         alt="airplane">
                                </div>
                                <p>@lang('general.keep_adding_activities')</p>
                               
                            @endif
                            @if($type==2 )
                                <div class="item item-2x item-circle push-20  bg-gray-lighter">
                                    <img class="img-responsive" src="{{asset('img/icons/photo-camera.svg')}}"
                                         alt="airplane">
                                </div>
                                <p>@lang('general.keep_adding_activities_hotels')</p>
                               
                            @endif
                            @if($type==4)
                                <div class="item item-2x item-circle push-20  bg-gray-lighter">
                                    <img class="img-responsive" src="{{asset('img/icons/photo-camera.svg')}}"
                                         alt="airplane">
                                </div>
                                <p>@lang('general.keep_adding_services')</p>
                               
                            @endif
                        </div>
                        <div class="col-xs-6 text-center">
                            <div class="item item-2x item-circle push-20  bg-gray-lighter">
                                <img class="img-responsive" src="{{asset('img/icons/cash.svg')}}" alt="cash">
                            
                            </div>
                            <p>@lang('general.Go_to_checkout')</p>
                           
                        </div>
                        <div class="col-xs-6 border-r">
                            @if($type==0)
                                <div class="text-center">
                                    <button class="btn btn-minw btn-primary" onclick="enviar_formulario_book(4)"
                                            data-dismiss="modal">@lang('general.add_packages')
                                    </button>
                                </div>
                                @elseif($type==1)
                                <div class="text-center">
                                    <button class="btn btn-minw btn-primary text-capitalize"
                                            onclick="enviar_formulario_book(1,{{$id}})"
                                            data-dismiss="modal">@lang('general.add_activities')
                                    </button>
                                </div>
                                @elseif($type==2)
                                <div class="text-center">
                                    <button class="btn btn-minw btn-primary text-capitalize"
                                            onclick="enviar_formulario_book(1,{{$id}})"
                                            data-dismiss="modal">@lang('general.add_activities')
                                    </button>
                                </div>
                                @elseif($type==4)
                                <div class="text-center">
                                    <button class="btn btn-minw btn-primary text-capitalize"
                                            onclick="enviar_formulario_book(4,{{$id}})"
                                            data-dismiss="modal">@lang('general.add_services')
                                    </button>
                                </div>
                                @endif
                        </div>
                        <div class="col-xs-6 ">
                            <div class="text-center">
                                <button class="btn btn-minw btn-primary" onclick="enviar_formulario_book(0,{{$id}})"
                                        data-dismiss="modal"> @lang('general.pay')
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

