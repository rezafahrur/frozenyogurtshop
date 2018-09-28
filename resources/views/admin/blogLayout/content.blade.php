<div class="row blur">
  @include('admin.blogLayout.contents.form_blog')
</div>
<div class="row blur">
  @include('admin.blogLayout.contents.tabel_blog')
</div>

<!-- modal Form hapus blog -->
@if ($hapusBlog= Session::get('hapusBlog'))
  @include('admin.blogLayout.contents.hapus_blog')
@endif

<!-- Edit Blog -->
@if ($editBlog = Session::get('editBlog'))
  @include('admin.blogLayout.contents.edit_blog')
@endif