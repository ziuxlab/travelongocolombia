<script src="{{ asset('js/plugins/sweetalert2/es6-promise.auto.min.js') }}"></script>
<script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
@if(isset($name))
<script type="text/javascript">
    $(document).ready(function () {
        jQuery(".js-swal-confirm").on("click", function (e) {
            e.preventDefault();
            id   = $(this).attr("data-id");
            data = $('#item_' + id).serialize();
            url  = $('#item_' + id).attr('action');
            console.log(data,url);
            swal({
                title: "Are you sure?",
                text: "{{$name}} will be removed from the database!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#1b8bf9",
                cancelButtonColor: '#f55',
                confirmButtonText: "Yes, Delete!",
                cancelButtonText: 'No, Cancel!',
                html: !1,
            }).then(function (n) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    success: function (msg) {
                        swal({
                            title: "Confirmed!",
                            text: "{{$name}} was delete of the database.",
                            type: "success",
                            confirmButtonColor: "#1b8bf9"
                        });
                        $('#' + id).remove();
                        
                    },
                    error: function (data) {
                        swal({
                            title: "Error!",
                            text: "{{$name}} wasn`t delete of the database.",
                            type: "error",
                            confirmButtonColor: "#1b8bf9"
                        })
                    }
                });
            }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss == 'cancel') {
                    swal('Cancel', "{{$name}} wasn`t delete of the database!", 'error')
                }
            })
        })
        jQuery(".js-swal-update").on("click", function (e) {
            e.preventDefault();
            id   = $(this).attr("data-id");
            data = $('#update_' + id).serialize();
            url  = $('#update_' + id).attr('action');
            swal({
                title: "Order of presentation of the images",
                input: 'number',
                showLoaderOnConfirm: true,
                showCancelButton: true,
                confirmButtonColor: "#1b8bf9",
                cancelButtonColor: '#f55',
                confirmButtonText: "Send!",
                cancelButtonText: 'No, Cancel!',
                allowOutsideClick: false,
                html: !1,
            }).then(function (number) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data + "&order=" + number,
                    success: function (msg) {
                        console.log(msg);
                        
                        swal({
                            title: "Confirmed!",
                            text: "El orden de {{$name}} was update in the database.",
                            type: "success",
                            confirmButtonColor: "#1b8bf9"
                        });
                        $('#order_' + id).html(msg)
                        
                    },
                    error: function (data) {
                        swal({
                            title: "Error!",
                            text: "{{$name}} wasn`t update in the database.",
                            type: "error",
                            confirmButtonColor: "#1b8bf9"
                        })
                    }
                });
            }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss == 'cancel') {
                    swal('Canceled', "Nothing changed in the database!", 'error')
                }
            })
        })
    })
</script>
@endif
@if(Session::has('mensaje'))
    <script type="text/javascript">
        $(document).ready(function () {
            swal('Confirmed!', "{{Session::get('mensaje')}}", 'success')
        });
    </script>
@endif
@if(Session::has('error'))
    <script type="text/javascript">
        $(document).ready(function () {
            swal('Error!', "{{Session::get('error')}}", 'error')
        });
    </script>
@endif