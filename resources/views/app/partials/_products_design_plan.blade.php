<div class="block block-bordered  flex overflow-hidden">
    <div class="col-md-4 col-sm-3 col-xs-12  bg-image remove-padding"
         style="background-image: url('{{asset($product->photos->sortBy('order')->first()->img)}}');">
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
        @if($product->type == 0)
            <a href="{{url(trans('general.packages').'/'.$product->slug_url)}}">
                <h2 class="h3 text-capitalize">{{$product->tittle}}</h2>
            </a>
        @endif
        @if($product->type == 1)
            <a href="{{url(trans('general.activities').'/'.$product->slug_url)}}">
                <h2 class="h4 text-capitalize">{{substr($product->tittle,0,36)}}</h2></a>
        @endif
        @if($product->type == 2)
            <a href="{{url(trans('general.hotels').'/'.$product->slug_url)}}">
                <h2 class="text-capitalize h3">{{$product->tittle}}</h2></a>
        @endif
        <p class="push-5">{{substr($product->description,0,171)}}...</p>
        <div class="push-20 text-center">
            @foreach($product->features->where('type',$product->type)->take(5) as $feature)
                <span style="cursor: default" class="btn bg-gray-lighter border push-15-t push-10-r"
                      data-original-title="{{$feature->feature}}" data-toggle="tooltip" data-placement="top">
                <i class="{{$feature->icon}}"></i>
                </span>
            @endforeach
            <a href="#product_{{$product->id}}" data-toggle="collapse" data-parent="#faq1"
               class="accordion-toggle btn btn-default push-15-t text-capitalize">@lang('general.view details')</a>
        </div>
    </div>
    <div class="col-md-2 col-sm-3 col-xs-12 border-black-op-b content content-full text-center flex-center">
        <div>
            <div class="h1 font-w700 ">
                ${{number_format($product->price_adults * ( 1 + ($product->discount/100)))}}*
            </div>
            <div>*@lang('general.person')</div>
            {!! Form::open(['action'=> ['DesignController@store'], 'id'=>'formulario_book_'.$product->id]) !!}
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
                    <button class="btn btn-primary btn-minw text-capitalize" type="submit">@lang('general.booking')</button>
                @endif
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div id="product_{{$product->id}}" class="col-sm-12 panel-collapse collapse">
        <div class="panel-body">
            <div class="content content-narrow">
                @if($product->type == 0)
                    <h3 class="h3 push-15 "><i
                                class=" text-primary fa fa-file-text-o"></i> @lang('general.packages')
                        Details</h3>
                @endif
                @if($product->type == 1)
                    <h3 class="h3 push-15 "><i
                                class=" text-primary fa fa-file-text-o"></i> @lang('general.activities')
                        Details</h3>
                @endif
                @if($product->type == 2)
                    <h3 class="h3 push-15 "><i
                                class="text-primary fa fa-file-text-o"></i> @lang('general.hotels') Details
                    </h3>
                @endif
                <p class="text-muted text-justify">{{$product->description}}</p>
            </div>
        </div>
    </div>
</div>
@include('layouts.app.partials._tooltip')