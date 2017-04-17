
<script src="{{url('js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('js/plugins/sweetalert2/es6-promise.auto.min.js') }}"></script>
<script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery-ui/jquery-ui.js') }}"></script>
<script>
    $(function () {
        App.initHelper('datepicker');
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        jQuery(".btn-success").button().click( function (e) {
            //App.blocks('#results', 'refresh_toggle');
            App.loader('show')
            e.preventDefault();
            id    = $(this).attr("data-id");
            data  = $('#flights').serialize();
            url   = $('#flights').attr('action');
            table = '';

            if ($('#only_hotel').is(':checked')){
                  $('#flights').submit()
            }

            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: function (data) {
                    //App.blocks('#results', 'refresh_toggle');
                    $('#flights-response').html(data)
                    App.loader('hide')
                },
                error: function (data) {
                    App.loader('hide')
                    swal({
                        title: "Error!",
                        text: "Ha ocurrido un error en la busqueda",
                        type: "error",
                        confirmButtonColor: "#1b8bf9"
                    })

                }
            });
        })

    })
</script>
<script>
    $('.js-autocomplete').keyup(function () {
        var query = $(this).val();
        var url = '{{url("admin/flights/buscar")}}' + '/' + query;
        if (query.length > 2) {
            //Create list for results

            $(this).addClass('loading');
            $(this).after('<div class="autosugest push-10-t"></div>');

            //Prevent redrawing/binding of list
            //Add results to the list
            Buscar(url, $(this));
            $(this).removeClass('loading');
        }
    })

    function Buscar(url, e) {
        $.ajax({
            dataType: "json",
            type: 'GET',
            url: url,
            success: function (data) {
                padre    = $(e).parent();
                objetivo = padre.find('.autosugest');
                objetivo.html('');
                for (term in data) {
                    objetivo.append('<a class="list-group-item " href="#" data-id="' + data[term]['data']
                        + '"  data-airport="' + data[term]['value'] + '" onclick="cargar(this)" id="2">' +
                        data[term]['value'] + '<span class="text-muted"> - ' + data[term]['pais'] + "</span></a>");
                }
            },
            error: function (data) {
                return data;
            }
        });
    }


    function cargar(e) {
        padre = $(e).parent().parent();
        padre.find('.js-autocomplete').val($(e).data('airport'));
        padre.find('.airport').val($(e).data('id'));
        padre.find('.autosugest').remove();
    }

</script>