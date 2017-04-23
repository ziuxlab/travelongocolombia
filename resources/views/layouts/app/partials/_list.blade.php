<script>
    function ajaxLoad(filename, content) {
        console.log(filename)
        content = typeof content !== 'undefined' ? content : 'content';
        $.ajax({
            type: "GET",
            url: filename,
            contentType: false,
            success: function (data) {
                $("#" + content).html(data);
            },
            error: function (xhr, status, error) {
                //alert(xhr.responseText);
            }
        });
    }
    $(document).ready(function () {
         ajaxLoad('products/list/{{$type}}'); // si se pone url() se toma la ruta absoluta y al admin le aparece el listado público
    });
    $('.list-group a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
    $('.filter').on('click', function (event) {
        event.preventDefault();
        var city = $('#city').val()
        ajaxLoad('{{url("products/list/".$type."?city=")}}'+city);
    });
</script>

