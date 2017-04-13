<script src="{{ asset('js/plugins/sweetalert2/es6-promise.auto.min.js') }}"></script>
<script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        jQuery(".js-swal-confirm").on("click", function (e) {
            e.preventDefault();
            id   = $(this).attr("data-id");
            data = $('#item_' + id).serialize();
            url  = $('#item_' + id).attr('action');
            @if($type=='booking')
            swal({
                title: '<div class="headmodal"><h4 class="titlepl text-left">@lang('dashboard_user.booking_details')</h4></div>',
                html:
                '<div class="table-responsive"><table class="table table-bordered">' +
                '<thead><th class="thtb">@lang('dashboard_user.type')</th><th class="thtb">@lang('dashboard_user.title')</th></thead><tbody>'+
                @for($i = 0; $i < 3; $i++)
                '<tr><td>Activity</td><td>The Coffee Park</td></tr>'+
                @endfor
                '</tbody></table></div>',
                showCloseButton: true,
                showCancelButton: false,
                showConfirmButton: false,
            })
            @elseif($type=='payment')
             swal({
                title: '<div class="headmodal"><h4 class="titlepl text-left">@lang('dashboard_user.payment_details')</h4></div>',
                html:
                '<div class="table-responsive"><table class="table table-bordered">' +
                '<thead><th class="thtb">detail1</th><th class="thtb">detail2</th></thead><tbody>'+
                @for($i = 0; $i < 3; $i++)
                '<tr><td>text1</td><td>text2</td></tr>'+
                @endfor
                '</tbody></table></div>',
                showCloseButton: true,
                showCancelButton: false,
                showConfirmButton: false,
            })
            @endif
        })
    })
</script>