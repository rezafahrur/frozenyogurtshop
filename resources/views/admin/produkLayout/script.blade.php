<script src="{{ asset ("/js/app.js") }}"></script>
<script src="{{ asset ("/js/admin.js") }}"></script>
<script src="{{ asset ("/plugins/tinymce/tinymce.min.js") }}"></script>
<script>
    //text editor
    tinymce.init({
        selector: "textarea#detailKategori",
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

    tinymce.init({
        selector: "textarea#detailKategoriEdit",
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


@if(Session::get('successKategori') == true)
<script src="{{ asset ("/js/produk/successKategori.js") }}"></script>
@endif
@if(Session::get('successProduk') == true)
<script src="{{ asset ("/js/produk/successProduk.js") }}"></script>
@endif
@if (Session::get('editKategori') == true)
<script src="{{ asset("/js/produk/editKategori.js") }}"></script>
@endif
@if (Session::get('editProduk') == true)
<script src="{{ asset("/js/produk/editProduk.js") }}"></script>
@endif
@if (Session::get('successUpdateKategori') == true)
<script src="{{ asset("/js/produk/successUpdateKategori.js") }}"></script>
@endif
@if (Session::get('successUpdateProduk') == true)
<script src="{{ asset("/js/produk/successUpdateProduk.js") }}"></script>
@endif
@if (Session::get('successDeleteKategori') == true)
<script src="{{ asset("/js/produk/successDeleteKategori.js") }}"></script>
@endif
@if (Session::get('successDeleteProduk') == true)
<script src="{{ asset("/js/produk/successDeleteProduk.js") }}"></script>
@endif
@if (Session::get('detailProduk') == true)
<script src="{{ asset("/js/produk/detailProduk.js") }}"></script>
@endif
@if (Session::get('hapusProduk') == true)
<script src="{{ asset("/js/produk/hapusProduk.js") }}"></script>
@endif
@if (Session::get('hapusKategori') == true)
<script src="{{ asset("/js/produk/hapusKategori.js") }}"></script>
@endif

@if (Session::get('salah') == true)
<script src="{{ asset("/js/salah.js") }}"></script>
@endif