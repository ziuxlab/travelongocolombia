@foreach ($itineraries as $flight)
    <div class="row">
        <div class="col-sm-12 table-responsive">
            <table class="table text-center">
                <tr class="border">
                    <td style="vertical-align: middle;" class="text-success padding-20">
                        <i class="fa fa-2x fa-plane"></i>
                        <div class="text-muted">
                            Outbound
                        </div>
                    </td>
                    <td>
                        <div class="h5 text-muted "> {{Session::get('departure')}}</div>
                        <div class="h4"> {{Carbon\Carbon::parse($flight["Outbound"]["DepartureDate"])->format('h:i A')}}
                        </div>
                        <div class="h5 text-muted "> {{Carbon\Carbon::parse($flight["Outbound"]["DepartureDate"])->format('d-m-y')}}
                        </div>
                    </td>
                    <td style="vertical-align: middle;">
                        <img height="50px"
                             src="{{url('img/carriers/' . $flight["Outbound"]['Carrier'] . '.png')}}"
                             alt="{{$flight["Outbound"]['Carrier']}} "></td>
                    <td>
                        <div class="h5 text-muted "> Duration</div>
                        <div class="h4"> {{gmdate('H:i', $flight['Outbound']['Duration'] * 60)}}
                        </div>
                        <div class="h5 text-muted ">
                            {{$flight['Outbound']['Stops']}} Stops
                        </div>
                    </td>
                    <td>
                        <div class="h5 text-muted ">{{Session::get('destination')}}
                        </div>
                        <div class="h4"> {{Carbon\Carbon::parse($flight['Outbound']['ArrivalDate'])->format('h:i A')}}
                        </div>
                        <div class="h5 text-muted "> {{Carbon\Carbon::parse($flight['Outbound']['ArrivalDate'])->format('d-m-y')}}
                        </div>
                    </td>
                    <td class="bg-gray-light border" style="width: 25%; vertical-align: middle" rowspan="2">
                        <div class="h1 font-w700 ">
                            ${{$flight['saleTotal'] }}
                        </div>
                        <div>
                            {!! Form::open(['action'=> ['DesignController@store']]) !!}
                            {!! Form::hidden('step', 1) !!}
                            {!! Form::hidden('Carrier', url('img/carriers/' . $flight["Outbound"]['Carrier'] . '.png')) !!}
                            {!! Form::hidden('Salida_Outbound',$flight['Outbound']['DepartureDate']) !!}
                            {!! Form::hidden('Llegada_Outbound',$flight['Outbound']['ArrivalDate']) !!}
                            {!! Form::hidden('Salida_Inbound',$flight['Inbound']['DepartureDate']) !!}
                            {!! Form::hidden('Llegada_Inbound',$flight['Inbound']['ArrivalDate']) !!}
                            {!! Form::hidden('Total',$flight['saleTotal']) !!}
                            {!! Form::submit(trans('general.booking'),['class'=>'btn btn-primary push-10-t']) !!}
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                <tr class="border">
                    <td style="vertical-align: middle;" class="text-danger padding-20">
                        <i class="fa fa-2x fa-rotate-270 fa-plane"></i>
                        <div class="text-muted">
                            Inbound
                        </div>
                    </td>
                    <td>
                        <div class="h5 text-muted ">{{Session::get('destination')}}</div>
                        <div class="h4"> {{Carbon\Carbon::parse($flight['Inbound']['DepartureDate'])->format('h:i A')}}</div>
                        <div class="h5 text-muted "> {{Carbon\Carbon::parse($flight['Inbound']['DepartureDate'])->format('d-m-y')}}
                        </div>
                    </td>
                    <td style="vertical-align: middle;">
                        <img height="50px" src="{{url('img/carriers/' . $flight['Inbound']['Carrier'] . '.png')}}"
                             alt="{{$flight['Inbound']['Carrier']}}">
                    </td>
                    <td>
                        <div class="h5 text-muted "> Duration</div>
                        <div class="h4"> {{gmdate('H:i', $flight['Inbound']['Duration'] * 60)}}</div>
                        <div class="h5 text-muted ">{{$flight['Inbound']['Stops']}} Stops</div>
                    </td>
                    <td>
                        <div class="h5 text-muted "> {{Session::get('departure')}}</div>
                        <div class="h4"> {{Carbon\Carbon::parse($flight['Inbound']['ArrivalDate'])->format('h:i A')}}</div>
                        <div class="h5 text-muted "> {{Carbon\Carbon::parse($flight['Inbound']['ArrivalDate'])->format('d-m-y')}}</div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endforeach