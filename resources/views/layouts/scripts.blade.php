<!-- Scripts -->
<script src="{{ asset('js/oneui.min.js') }}"></script>
@yield('scripts')
@stack('scripts')
@include('layouts.admin.partials._sweetalert')
<script>
    $('.search').keyup(function (event) {
        if (event.which == 13) {
            event.preventDefault();
        }
        var search = $('.search');
        var data   = $('#search').serialize();
        var url    = $('#search').attr('action');
        var parent = $('#search').parent();
        $('#results_search').remove();
        if (search.val().length > 2) {
            $.ajax({
                type: 'GET',
                url: url,
                data: data,
                success: function (msg) {
                    parent.append('<div id="results_search" style=" position: absolute;top: 50px;right: 0px;z-index: 10000;"></div>')
                    $('#results_search').html(msg)
                }
            })
        }
    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.min.js"></script>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true,
            showArrows:true,
        });
    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-99918601-1', 'auto');
    ga('send', 'pageview');

</script>
