<div class="row blur">
    <!-- Tabel Produk -->
    @include('admin.produkLayout.contents.tabel_produk')
    <!-- Tabel Kategori -->
    @include('admin.produkLayout.contents.tabel_kategori')
</div>

<!-- modal Form Produk -->
  @include('admin.produkLayout.contents.form_produk')
<!-- modal Form kategori -->
@include('admin.produkLayout.contents.form_kategori')
<!-- modal Form hapus -->
@if ($hapusProduk= Session::get('hapusProduk'))
  @include('admin.produkLayout.contents.hapus_produk')
@endif
<!-- modal Form hapus Kategori -->
@if ($hapusKategori = Session::get('hapusKategori'))
  @include('admin.produkLayout.contents.hapus_kategori')
@endif
<!-- Detail Produk -->
@if ($detailProduk = Session::get('detailProduk'))
  @include('admin.produkLayout.contents.detail_produk')
@endif
<!-- Edit Produk -->
@if ($editProduk = Session::get('editProduk'))
  @include('admin.produkLayout.contents.edit_produk')
@endif
<!-- Edit Kategori -->
@if ($editKategori = Session::get('editKategori'))
  @include('admin.produkLayout.contents.edit_kategori')
@endif

