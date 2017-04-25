<div class="content-boxed content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-12 bg-white remove-padding">
            <div class="table-responsive">
                <table class="table table-header-bg table-vcenter">
                    <thead>
                    <tr>
                        <th class="hidden-xs"></th>
                        <th>producto</th>
                        <th class="text-center">cantidad</th>
                        <th class="text-right">precio</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="content">
                    @foreach(Cart::getContent() as $key => $item)
                        <tr>
                            <td class="text-center hidden-xs" style="width: 100px">
                                <img class="img-thumbnail img-responsive" src="{{asset($item->attributes->img)}}"
                                     alt="{{$item->name}}">
                            </td>
                            <td>
                                <span class="h5">{{$item->name}}</span>
                                @if($item->attributes->type == 0)
                                    <div class="font-s12 text-muted">Package Tour</div>
                                @elseif($item->attributes->type == 1)
                                    <div class="font-s12 text-muted">Activity</div>
                                @elseif($item->attributes->type == 2)
                                    <div class="font-s12 text-muted">Hotel</div>
                                @else
                                    <div class="font-s12 text-muted">Flight</div>
                                @endif
                            </td>
                            <td class="text-center">
                                <span class="badge">{{$item->quantity}}</span>
                            </td>
                            <td class="text-right">
                                <div class="h3 font-w700 text-success">${{number_format($item->price * $item->quantity) }}</div>
                            </td>
                            <td class="text-center">
                                {!! Form::open(['action'=> ['CartController@destroy',$item->id],'method'=>'delete']) !!}
                                <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-times"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    <tr class="active">
                        <td class="hidden-xs"></td>
                        <td class="text-right" colspan="2">
                            <span class="h3 font-w600">Total</span>
                        </td>
                        <td class="text-right">
                            <div class="h3 font-w600 text-success">${{number_format(Cart::getTotal())}}</div>
                        </td>
                        <TD></TD>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="content">
                {!! Form::open(['action'=> ['CheckoutController@store']]) !!}
                <div class="form-group {{ $errors->has('note') ? ' has-error' : '' }}">
                    {!! Form::label('Aditional Information:', null, ['class' => 'control-label']) !!}
                    {!! Form::textarea('note', old('note'), ['class' => 'form-control','placeholder'=>'Ingrese cualquier informacion adicional que desee','rows'=>3]) !!}
                    @if ($errors->has('note'))
                        <span class="help-block">
                                    <strong>{{ $errors->first('note') }}</strong>
                                </span>
                    @endif
                </div>
                <div class="push-20 text-right">
                    <a href="{{Session::get('plan') == 'pick' ? url(trans('general.activities')) : url(str_slug(trans('cabecera.Design')).'?step=3')}}"
                       type="button" class="btn btn-default push-15-r">Continue Shopping</a>
                    <button type="submit" class="btn btn-primary">Proceed payment</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div class="content-boxed content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-12 remove-padding">
            @include('app.partials.needhelp')
        </div>
    </div>
</div>