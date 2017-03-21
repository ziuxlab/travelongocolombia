
<script src="{{asset('js/plugins/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'js-ckeditor', {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}',
        extraAllowedContent: '*[*]{*}(*)'
    });

    CKEDITOR.editorConfig = function( config ) {
        config.extraAllowedContent = true;
        config.allowedContent = true;// remove '[id]', if you don't want IDs for HTML tags
    }
</script>