<div class="block block-bordered  flex overflow-hidden">
    <div class="col-sm-3 col-xs-12  bg-image remove-padding"
         style="background-image: url('{{asset($product->photos->sortBy('order')->first()->img)}}');">
        <div class="mheight-100">
        </div>
    </div>
    <div class=" col-sm-6 col-xs-12  border-black-op-r border-black-op-b  content-mini content-mini-full">
        <h2 class="text-capitalize h4">{{$product->tittle}}</h2>
        <p class="push-5">{{substr($product->description,0,171)}}...</p>
    </div>
    <div class=" col-sm-3 col-xs-12 border-black-op-b content-mini content-mini-full text-center flex-center">
        <div>
            {!! Form::open(['action'=> ['DesignController@store'], 'id'=>'formulario_book_'.$product->id]) !!}
            {!! Form::hidden('step', Session::get('step')) !!}
            {!! Form::hidden('services_additional', 0,['id'=>'agregate_'.$product->id]) !!}
            {!! Form::hidden('product_id', $product->id) !!}
            <div class="text-center push-10-t">
                <button class="btn btn-primary btn-minw" type="button" data-toggle="modal"
                        data-target="#book-modal-{{$product->id}}">@lang('general.add')
                </button>
                @include('app.partials._modal_book', ['type'=>4,'id'=>$product->id])
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>


