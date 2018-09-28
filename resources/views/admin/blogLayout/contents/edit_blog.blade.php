<div class="modal fade" id="modal-blog-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data Blog {{$editBlog->judul}} </h4>
            </div>
            <div class="modal-body">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{ asset("storage/imagesUpload/$editBlog->image")}}"
                            alt="User profile picture">
                    </div>
                </div>
                <form action="blog/{{$editBlog->id}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="editJudul" class="col-sm-2 control-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" name="judul" class="form-control" id="editJudul" value="{{$editBlog->judul}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="editGambar" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" name="editImage" class="form-control" id="editGambar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputIsiBlog" class="col-sm-2 control-label">Isi</label>
                        <div class="col-sm-10">
                            <textarea id="isiBlogEdit" name="isi">
                    {{$editBlog->isi}}
                  </textarea>
                        </div>
                    </div>
            </div>
            <!--- /.modal body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-warning">Ubah Post</button>
            </div>
            <input type="hidden" name="_method" value="PUT">
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->