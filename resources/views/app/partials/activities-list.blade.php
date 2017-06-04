@foreach($products as $product)
    <!-- // verificamos si esta en design-you-plan o en pick-you-plan //-->
    @if(Session::get('plan')=='design')
        @if($product->type == 4)
            <div class="col-md-6">
                @include('app.partials._products_design_plan_4')
            </div>
        @else
            @include('app.partials._products_design_plan')
        @endif
    @else
        @include('app.partials._products')
    @endif
@endforeach
@if(Session::get('plan')<>'design')
    <div class="block block-bordered  flex overflow-hidden">
        <div class="block-content block-content-full text-center">
            <p class="">¿No encuentras el plan perfecto para ti aún?<br>
                                   No olvides que puedes armar tu plan como lo deseas.</p>
            <a class="btn text-capitalize btn-minw btn-primary" href="{{url(trans('cabecera.Design'))}}">@lang('cabecera.Design')</a>
        
        </div>
    </div>
@endif

<div class="col-sm-12">
    <div class="block block-rounded block-bordered">
        <div class="block-content-mini text-center">
            {{ $products->links() }}
        </div>
    </div>
</div>

<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>