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

            if ((target.indexOf("adults") >= 0) || (target.indexOf("children") >= 0 )) {
                var kind_room = $('#' + target).parent().parent().parent().parent().find(".room").val();
                if (kind_room == 1 && value < 1) {
                    value++;
                }
                if (kind_room == 2 && value < 4) {
                    value++;
                }
                if (kind_room == 3 && value < 2) {
                    value++;
                }
            } else {
                value++;

            }
        }
        if (action == "minus" && value > 0) {
            value--;
        }
        $('[id="' + target + '"]').val(value);
    });
</script>

@endpush