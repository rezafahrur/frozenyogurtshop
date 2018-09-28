<!-- tabel blog -->
<div id="dataTabelProduk" class="col-md-12">
    <div class="box box-success collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Form Tambah Posting</h3>

            <div class="box-tools pull-right">
                <button id="maxBlog" type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                <button id="closeBlog" type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form action="blog" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="inputJudul" class="col-sm-1 control-label">Judul</label>
                    <div class="col-sm-11">
                        <input type="text" name="judul" class="form-control" id="inputJudul" placeholder="Masukkan Judul">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputGambar" class="col-sm-1 control-label">Gambar</label>
                    <div class="col-sm-11">
                        <input type="file" name="image" class="form-control" id="inputGambar">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputIsiBlog" class="col-sm-1 control-label">Isi</label>
                    <div class="col-sm-11">
                        <textarea id="isiBlog" name="isi"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-success pull-right">Tambah Blog</button>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>