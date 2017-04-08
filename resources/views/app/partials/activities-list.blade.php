@foreach($products as $product)
    @include('app.partials._products')
@endforeach

<div class="row">
    <div class="col-sm-12">
        <div class="block">
            <div class="block-content text-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>

<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });

    $('.list-group a').on('click', function (event) {
        event.preventDefault();
        console.log('1')
        ajaxLoad($(this).attr('href'));
    });
</script>