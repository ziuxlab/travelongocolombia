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
                title: "¿Estás Seguro?",
                text: "{{$name}} se eliminará de la base de datos!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#1b8bf9",
                cancelButtonColor: '#f55',
                confirmButtonText: "Sí, Eliminar!",
                cancelButtonText: 'No, Cancelar!',
                html: !1,
            }).then(function (n) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    success: function (msg) {
                        swal({
                            title: "Confirmado!",
                            text: "{{$name}} ha sido Borrada de la base de datos.",
                            type: "success",
                            confirmButtonColor: "#1b8bf9"
                        });
                        $('#' + id).remove();
                        
                    },
                    error: function (data) {
                        swal({
                            title: "Error!",
                            text: "{{$name}} no ha sido Borrada de la base de datos.",
                            type: "error",
                            confirmButtonColor: "#1b8bf9"
                        })
                    }
                });
            }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss == 'cancel') {
                    swal('Cancelado', "{{$name}} No se eliminó de la base de datos!", 'error')
                }
            })
        })
        jQuery(".js-swal-update").on("click", function (e) {
            e.preventDefault();
            id   = $(this).attr("data-id");
            data = $('#update_' + id).serialize();
            url  = $('#update_' + id).attr('action');
            swal({
                title: "Orden de presentacion de las imagenes",
                input: 'number',
                showLoaderOnConfirm: true,
                showCancelButton: true,
                confirmButtonColor: "#1b8bf9",
                cancelButtonColor: '#f55',
                confirmButtonText: "Enviar!",
                cancelButtonText: 'No, Cancelar!',
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
                            title: "Confirmado!",
                            text: "El orden de {{$name}} ha sido actualizado de la base de datos.",
                            type: "success",
                            confirmButtonColor: "#1b8bf9"
                        });
                        $('#order_' + id).html(msg)
                        
                    },
                    error: function (data) {
                        swal({
                            title: "Error!",
                            text: "{{$name}} no ha sido Actualizada de la base de datos.",
                            type: "error",
                            confirmButtonColor: "#1b8bf9"
                        })
                    }
                });
            }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss == 'cancel') {
                    swal('Cancelado', "No se cambio nada de la base de datos!", 'error')
                }
            })
        })
    })
</script>
@endif
@if(Session::has('mensaje'))
    <script type="text/javascript">
        $(document).ready(function () {
            swal('Confirmado!', "{{Session::get('mensaje')}}", 'success')
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