<div class="slimScrollDiv">
    <div id="side-overlay-scroll">
        <div class="side-header side-content">
            <button class="btn btn-default pull-right" type="button" data-toggle="layout"
                    data-action="side_overlay_close">
                <i class="fa fa-times"></i>
            </button>
            <span>
                @if (!Auth::guest())
                    @if(Auth::user()->img == null)
                        <img class="img-avatar img-avatar32"
                             src="{{url('img/default.png')}}"
                             alt="{{Auth::user()->name}}">
                    @else
                        
                        <img class="img-avatar img-avatar32"
                             src="{{url(Auth::user()->img)}}"
                             alt="{{Auth::user()->name}}">
                    @endif
                    <span class="font-w600 push-10-l">{{Auth::user()->name}}</span>
                @endif
                   
                </span>
        </div>
        <div class="side-content remove-padding-t">
            <div class="block pull-r-l">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle"
                                    data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">@lang('general.shopping_cart') ({{Cart::getTotalQuantity()}})</h3>
                </div>
                <div class="block-content">
                    <div class="pull-r-l">
                        <table class="table table-borderless table-vcenter">
                            <tbody>
                            @foreach(Cart::getContent() as $item)
                            <tr>
                                <td class="text-center">
                                    {!! Form::open(['action'=> ['CartController@destroy',$item->id],'method'=>'delete']) !!}
                                    <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-times"></i></button>
                                    {!! Form::close() !!}
                                      </td>
                                <td class="text-center">
                                    <span class="badge">{{$item->quantity}}</span>
                                </td>
                                <td>
                                    <span class="h5 text-capitalize" >{{$item->name}}</span>
                                    <div class="font-s12 text-muted text-capitalize">
                                        @if($item->attributes->type == 0)
                                            @lang('general.packages')
                                        @elseif($item->attributes->type == 1)
                                            @lang('general.activities')
                                        @elseif($item->attributes->type == 2)
                                            @lang('general.hotel')
                                        @elseif($item->attributes->type == 3)
                                            @lang('general.flight')
                                        @elseif($item->attributes->type == 4)
                                            @lang('general.additional services')
                                        @endif
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="font-w600 text-success">${{number_format($item->price) }}</div>
                                </td>
                            </tr>
                            @endforeach
                            <tr class="success">
                                <td class="text-right" colspan="3">
                                    <span class="h4 font-w600">Total</span>
                                </td>
                                <td class="text-right">
                                    <div class="h4 font-w600 text-success">${{number_format(Cart::getTotal())}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" colspan="4">
                                    <a class="btn btn-minw  btn-default push-10-r" href="{{url('cart/clear')}}">
                                         @lang('general.clear')
                                    </a>
                                    <a class="btn  btn-minw btn-primary" href="{{url('cart')}}">
                                        @lang('general.checkout')
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slimScrollBar"
         style="background: rgb(0, 0, 0); width: 5px; position: absolute; top: 0px; opacity: 0.35; display: none; border-radius: 7px; z-index: 99; right: 2px; height: 969px;"></div>
    <div class="slimScrollRail"
         style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 1; z-index: 90; right: 2px;"></div>
</div>
