<script src="{{ asset ("/js/app.js") }}"></script>
<script src="{{ asset ("/js/admin.js") }}"></script>
<script src="{{ asset ("/plugins/tinymce/tinymce.min.js") }}"></script>
<script>
    //text editor
    tinymce.init({
        selector: "textarea#isiBlog",
        branding: false,
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    tinymce.suffix = ".min";
    tinyMCE.baseURL = '{{ asset ("/plugins/tinymce") }}';

    // edit blog
    tinymce.init({
        selector: "textarea#isiBlogEdit",
        branding: false,
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    tinymce.suffix = ".min";
    tinyMCE.baseURL = '{{ asset ("/plugins/tinymce") }}';
</script>


@if(Session::get('successBlog') == true)
<script src="{{ asset ("/js/blog/successBlog.js") }}"></script>
@endif

@if (Session::get('editBlog') == true)
<script src="{{ asset("/js/blog/editBlog.js") }}"></script>
@endif
@if (Session::get('successUpdateBlog') == true)
<script src="{{ asset("/js/blog/successUpdateBlog.js") }}"></script>
@endif

@if (Session::get('hapusBlog') == true)
<script src="{{ asset("/js/blog/hapusBlog.js") }}"></script>
@endif
@if (Session::get('successDeleteBlog') == true)
<script src="{{ asset("/js/blog/successDeleteBlog.js") }}"></script>
@endif

@if (Session::get('salah') == true)
<script src="{{ asset("/js/salah.js") }}"></script>
@endif