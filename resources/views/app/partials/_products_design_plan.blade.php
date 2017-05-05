<div class="block block-bordered  flex overflow-hidden">
    <div class="col-md-4 col-sm-3 col-xs-12  bg-image remove-padding"
          style="background-image: url('{{asset(count($product->photos)>0 ? $product->photos->sortBy('order')->first()->img : 'img/banner/about-us.jpg')}}'); background-position-x: 50%;">
        <div class="mheight-150">
            @if($product->discount > 0 or $product->discount <> null)
                <div class=" ribbon ribbon-bookmark ribbon-primary ribbon-left">
                    <div class="ribbon-box font-w600">
                        {{$product->discount}}% Off
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 border-black-op-r border-black-op-b  content">
        <h2 class="text-capitalize h3">{{$product->tittle}}</h2>
        <p class="push-5">{{substr($product->description,0,171)}}...</p>
        <div class="push-20 text-center">
            @foreach($product->features->where('type',$product->type)->take(5) as $feature)
                <span style="cursor: default" class="btn bg-gray-lighter border push-15-t push-10-r"
                      data-original-title="{{$feature->feature}}" data-toggle="tooltip" data-placement="top">
                <i class="{{$feature->icon}}"></i>
                </span>
            @endforeach
        </div>
    </div>
    <div class="col-md-2 col-sm-3 col-xs-12 border-black-op-b content-mini content-mini-full text-center flex-center">
        <div>
        <!--
            <div class="h1 font-w700 ">
             ${{number_format($product->price_adults * ( 1 - ($product->discount/100)))}}*
            </div>
            <div>*@lang('general.person'){{$product->type == 2 ? '|*'.trans('general.night'):''}}</div>-->
            {!! Form::open(['action'=> ['DesignController@store'], 'id'=>'formulario_book_'.$product->id]) !!}
            @if($product->type == 2)
                <div class="form-group {{ $errors->has('bed') ? ' has-error' : '' }}">
                    {!! Form::label(trans('general.beds').':', null, ['class' => 'push-10-t control-label']) !!}
                    <div class="input-group">
                                    <span class="input-group-btn">
                                <button type="button" class="btn btn-xs btn-default value-control"
                                        data-action="minus" data-target="bed">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </button>
                            </span>
                        {!! Form::text('bed', old('bed') or 1, ['class' => 'form-control text-center','id'=>'bed','min'=>0,'max'=>10]) !!}
                        <span class="input-group-btn">
                                <button type="button" class="btn btn-xs  btn-default value-control"
                                        data-action="plus" data-target="bed">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </span>
                    </div>
                    @if ($errors->has('bed'))
                        <span class="help-block"><strong>{{ $errors->first('bed') }}</strong></span>
                    @endif
                </div>
            @endif
            {!! Form::hidden('step', Session::get('step')) !!}
            {!! Form::hidden('agregate', 0,['id'=>'agregate_'.$product->id]) !!}
            {!! Form::hidden('product_id', $product->id) !!}
            <div class="text-center push-10-t">
                @if(Session::get('step') == 3)
                    <button class="btn btn-primary btn-minw" type="button" data-toggle="modal"
                            data-target="#book-modal-{{$product->id}}">@lang('general.booking')
                    </button>
                    @include('app.partials._modal_book', ['type'=>1,'id'=>$product->id])
                @else
                    <button class="btn btn-primary btn-minw text-capitalize"
                            type="submit">@lang('general.booking')</button>
                @endif
            </div>
            {!! Form::close() !!}
            <a href="#product_{{$product->id}}" data-toggle="collapse" data-parent="#faq1"
               class="accordion-toggle btn-minw btn btn-default push-15-t text-capitalize">@lang('general.view details')</a>
        </div>
    </div>
    <div id="product_{{$product->id}}" class="col-sm-12 panel-collapse collapse">
        <div class="panel-body">
            <div class="content content-narrow">
                <div>
                    <h3 class="h3 text-capitalize push-15 ">
                        <i class=" text-primary  fa fa-file-text-o"></i>
                        @if($product->type == 0)
                            @lang('general.details_resumen',['name'=> trans('general.packages')])
                        @elseif($product->type == 1)
                            @lang('general.details_resumen',['name'=> trans('general.activities')])
                        @elseif($product->type == 2)
                            @lang('general.details_resumen',['name'=> trans('general.hotels')])
                        @endif
                    </h3>
                    <p class="text-muted text-justify">{{$product->description}}</p>
                </div>
                @if($product->type !== 2)
                    <div class="row content-mini content-mini-full border-t">
                        <h4 class=" h5 col-xs-6">@lang('general.duration'):</h4>
                        <div class="text-muted col-xs-6">
                            <ul class="fa-ul ">
                                <li class="text-capitalize">
                                    <i class="fa text-primary fa-clock-o fa-li"></i>{{$product->days}}
                                </li>
                            </ul>
                        </div>
                    </div>
                @endif
                @if($product->include !== null)
                    <div class="row content-mini content-mini-full border-t">
                        <h4 class=" h5 col-xs-6">@lang('general.price_include'):</h4>
                        <div class="text-muted col-xs-6">
                            <ul class="fa-ul">
                                @foreach(explode(',', $product->include) as $option)
                                    <li class="text-capitalize">
                                        <i class="fa text-success  fa-check fa-li"></i>{{$option}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                @if($product->suggestion !== null)
                    <div class="row content-mini content-mini-full border-t">
                        <h4 class=" h5 col-xs-6">@lang('general.suggestions'):</h4>
                        <div class="text-muted col-xs-6">
                            <ul class="fa-ul">
                                @foreach(explode(',', $product->suggestion) as $option)
                                    <li class="text-capitalize">
                                        <i class="fa text-success fa-check fa-li"></i>{{$option}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <div class="push-30">
                    <h3 class="h3 text-capitalize push-15 "><i
                                class=" text-primary fa fa-camera-retro"></i> @lang('general.photos')</h3>
                    @if(count($product->photos)>0)
                        <div class="row">
                            @foreach($product->photos as $photo)
                                <div class="col-sm-4" >
                                    <a href="{{asset($photo->img)}}" data-toggle="lightbox">
                                        <img class="img-responsive border img-thumb" src="{{asset($photo->img)}}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        
        
        </div>
    </div>
</div>
@include('layouts.app.partials._tooltip')

