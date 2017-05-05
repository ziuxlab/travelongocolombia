<div class="content-boxed ">
    <div class="row steps">
        <div class="col-sm-12">
            @include('app.design._steps',['step'=>2])
        </div>
    </div>
</div>
<div class="content-boxed content remove-padding-t">
    <div class="row">
        <!-- sider -->
        <div class="col-md-3 push ">
            @include('app.partials._filters', ['type'=> 2])
            @include('app.partials.needhelp')
        </div>
        <!-- end sider -->
        <div class="col-md-9">
            <div id="content"></div>
        </div>
    </div>
</div>
@push('scripts')
@include('layouts.app.partials._list', ['type'=> 2])

<script>
    $(document).on('click', '.value-control', function () {
        var action = $(this).attr('data-action');
        var target = $(this).attr('data-target');
        var value  = parseFloat($('[id="' + target + '"]').val());
        if (action == "plus") {
            value++;
        }
        if (action == "minus" && value > 0) {
            value--;
        }
        $('[id="' + target + '"]').val(value);
    });
</script>

@endpush