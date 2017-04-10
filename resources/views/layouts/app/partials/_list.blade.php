<script>
    function ajaxLoad(filename, content) {
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
        ajaxLoad('products/list/{{$type}}');
    });
    $('.list-group a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
    $('.filter').on('click', function (event) {
        event.preventDefault();
        var city = $('#city').val()
        ajaxLoad('products/list/{{$type}}?city='+city);
    });
</script>

