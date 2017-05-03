<!-- Scripts -->
<script src="{{ asset('js/oneui.min.js') }}"></script>
@yield('scripts')
@stack('scripts')

<script>
    $('.search').keyup(function (event) {
        if (event.which == 13) {
            event.preventDefault();
        }
        var search = $('.search');
        var data   = $('#search').serialize();
        var url    = $('#search').attr('action');
        var parent = $('#search').parent();
        if (search.val().length > 2) {
            $('#results_search').remove();
            $.ajax({
                type: 'GET',
                url: url,
                data: data,
                success: function (msg) {
                    parent.append('<div id="results_search"></div>')
                    $('#results_search').html(msg)
                }
            })
        }
    })
</script>