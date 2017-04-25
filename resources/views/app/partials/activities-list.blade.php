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

@if(count($products) > 5)
        <div class="col-sm-12">
            <div class="block">
                <div class="block-content-mini text-center">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
@endif

<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>