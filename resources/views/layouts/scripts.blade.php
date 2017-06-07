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
        buscar()
    })
    
    function buscar() {
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
    }
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
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function(){ var widget_id = 'IvNwSHIW8m';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

