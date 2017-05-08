@extends('layouts.admin.app')

@section('title')
@stop

@section('description')
@stop

@section('style')

@stop

@section('breadcrumb')
@stop

@section('contenido')
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Reserva','h2'=>'Ver Reserva'])
    <div class="content overflow-hidden">
        <div class="col-sm-12">
            <div CLASS="block block-bordered block-rounded block-themed ">
                <div class="block-header bg-primary">
                    <h3 class="h4">Reserva</h3>
                </div>
                <div class="block-content  block-content-narrow">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group ">
                                {!! Form::label('Nombre:', null, ['class' => 'control-label']) !!}
                                {!! Form::text('name', $booking->user->name, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group ">
                                {!! Form::label('Email:', null, ['class' => 'control-label']) !!}
                                {!! Form::text('user.email', $booking->user->email, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group ">
                                {!! Form::label('Precio:', null, ['class' => 'control-label']) !!}
                                {!! Form::text('price', number_format($booking->price) , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group ">
                                {!! Form::label('Estado:', null, ['class' => 'control-label']) !!}
                                {!! Form::text('status', $booking->status, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group ">
                                {!! Form::label('Nota:', null, ['class' => 'control-label']) !!}
                                {!! Form::textarea('note', $booking->note, ['class' => 'form-control','rows'=>3]) !!}
                            </div>
                        </div>
                    </div>
                
                </div>
                <div class="block-content  block-content-narrow">
                    <div CLASS="block block-bordered block-rounded block-themed ">
                        <div class="block-header bg-primary">
                            <h3 class="h4">Detalle de la reserva</h3>
                        </div>
                        <table class="table table-striped remove-margin-b table-condensed">
                            <thead>
                            <tr>
                                <th>Producto</th>
                                <th class="text-center">Cantidad</th>
                                <th class="text-center">valor</th>
                                <th class="text-center">tipo</th>
                                <th class="text-center">Noches</th>
                                <th class="text-center">Camas</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($booking->details as $item)
                                <tr>
                                    <td class="font-w600">{{$item->name}}</td>
                                    <td class="font-w600 text-center">{{$item->quantity}}</td>
                                    <td class="font-w600 text-center">${{number_format($item->price)}}</td>
                                    <td class=" text-center">
                                        @if($item->type == 0)
                                            <span class="badge badge-primary">Paquete</span>
                                        @elseif($item->type == 1)
                                            <span class="badge badge-success">Actividad</span>
                                        @elseif($item->type == 2)
                                            <span class="badge badge-danger">Hotel</span>
                                        @elseif($item->type == 4)
                                            <span class="badge badge-default">Servicio Adicional</span>
                                        @endif
                                    </td>
                                    <td class="text-center"><span class="badge badge-danger">{{$item->nights}}</span></td>
                                    <td class="text-center"><span class="badge badge-success">{{$item->bed}}</span></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="block-content  block-content-narrow">
                    <div CLASS="block block-bordered block-rounded block-themed ">
                        <div class="block-header bg-primary">
                            <h3 class="h4">Contactos de la reserva</h3>
                        </div>
                        <table class="table table-striped remove-margin-b table-condensed">
                            <thead>
                            <tr>
                                <th>nombre</th>
                                <th class="text-center">email</th>
                                <th class="text-center">edad</th>
                                <th class="text-center">País</th>
                                <th class="text-center">tipo</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($booking->contacts as $item)
                                <tr>
                                    <td class="font-w600">{{$item->name}}</td>
                                    <td class=" text-center">{{$item->email}}</td>
                                    <td class=" text-center">{{($item->age)}}</td>
                                    <td class="text-center">
                                    {{($item->country)}}</th>
                                    <td class=" text-center">
                                        @if($item->type == 0)
                                            <span class="badge badge-primary">Adulto</span>
                                        @elseif($item->type == 1)
                                            <span class="badge badge-success">Niño</span>
                                        @elseif($item->type == 2)
                                            <span class="badge badge-danger">Infante</span>
                                        @endif
                                    </td>
                                
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="block-content  block-content-narrow">
                    <div CLASS="block block-bordered block-rounded block-themed ">
                        <div class="block-header bg-primary">
                            <h3 class="h4">Pago de la reserva</h3>
                        </div>
                        <table class="table table-striped remove-margin-b table-condensed">
                            <thead>
                            <tr>
                                <th>valor</th>
                                <th class="text-center">stripe</th>
                                <th class="text-center">estado</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($booking->payments as $item)
                                <tr>
                                    <td class="font-w600">{{$item->value}}</td>
                                    <td class=" text-center">{{$item->stripe}}</td>
                                    <td class=" text-center">
                                        <span class="badge badge-primary">{{$item->status}}</span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            
            </div>
        
        </div>
    
    
    </div>
@stop

@section('scripts')

@stop