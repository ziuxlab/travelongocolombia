<div class="modal" id="book-modal-{{$id}}">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content modal-rounded">
            <div class="block block-rounded block-themed block-transparent ">
                <div class="block-content block-content-full">
                    <h3 class="text-center push-20">¿Qué deseas hacer ahora?</h3>
                    <div class="row push-20">
                        <div class="col-xs-6 text-center border-r">
                            @if($type==1 or $type ==2)
                                <div class="item item-2x item-circle push-20  bg-gray-lighter">
                                    <img class="img-responsive" src="{{asset('img/icons/photo-camera.svg')}}"
                                         alt="airplane">
                                </div>
                                <p>Seguir agregando actividades</p>
                                <div class="text-center">
                                    <button class="btn btn-minw btn-primary text-capitalize" onclick="enviar_formulario_book(1,{{$id}})"
                                            data-dismiss="modal">Agregar actividades
                                    </button>
                                </div>
                            @endif
                            @if($type==0)
                                <div class="item item-2x item-circle push-20  bg-gray-lighter">
                                    <img class="img-responsive" src="{{asset('img/icons/airplane.svg')}}"
                                         alt="airplane">
                                </div>
                                <p>Escoger un vuelo para este paquete</p>
                                <div class="text-center">
                                    <button class="btn btn-minw btn-primary" onclick="enviar_formulario_book(3)"
                                            data-dismiss="modal">Buscar Vuelos
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="col-xs-6 text-center">
                            <div class="item item-2x item-circle push-20  bg-gray-lighter">
                                <img class="img-responsive" src="{{asset('img/icons/cash.svg')}}" alt="cash">
                            
                            </div>
                            <p>Ir directamente al sistema de pagos.</p>
                            <div class="text-center">
                                <button class="btn btn-minw btn-primary" onclick="enviar_formulario_book(0,{{$id}})"
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

