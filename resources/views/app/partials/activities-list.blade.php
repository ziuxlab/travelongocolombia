@foreach($products as $product)
    <!-- // verificamos si esta en design-you-plan o en pick-you-plan //-->
    @if(Session::get('plan')=='design')
        @include('app.partials._products_design_plan')
    @else
        @include('app.partials._products')
    @endif
@endforeach

@if(count($products) > 4)
    <div class="row">
        <div class="col-sm-12">
            <div class="block">
                <div class="block-content text-center">
                    {{ $products->links() }}
                </div>
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