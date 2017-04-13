@foreach($products as $product)
    @include('app.partials._products')
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