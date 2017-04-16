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
        @if($type=='bookings')
        ajaxLoad('list-bookings');
        @elseif($type=='payments')
        ajaxLoad('list-payments');
        @endif
    });
</script>
