<div class="modal fade" id="modal-produk-edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Data Produk {{$editProduk->nama_produk}} </h4>
        </div>
        <div class="modal-body">
            <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="{{ asset("storage/imagesUpload/$editProduk->image")}}" alt="User profile picture">
                </div>
            </div>
        <form action="produk/{{$editProduk->id}}" method="post" class="form-horizontal" enctype="multipart/form-data">
           @csrf
           <input type="hidden" name="jenisForm" value="produk">
          <div class="form-group">
            <label for="editNamaProduk" class="col-sm-2 control-label">Nama Produk</label>
            <div class="col-sm-10">
            <input type="text" name="namaProduk" class="form-control" id="editNamaProduk" value="{{$editProduk->nama_produk}}">
            </div>
          </div>
          <div class="form-group">
              <label for="editGambar" class="col-sm-2 control-label">Gambar</label>
              <div class="col-sm-10">
                <input type="file" name="editImage" class="form-control" id="editGambar">
              </div>
            </div>
          <div class="form-group">
              <label for="editKategori" class="col-sm-2 control-label">Kategori</label>
              <div class="col-sm-8">
                <select class="form-control" name="idKategori">
                  <option value="{{$editProduk->id_kategori}}" selected>{{$editProduk->namaKategori}}</option>
                  @foreach ($dataKategoris as $dataKategori)
                  <option value="{{$dataKategori->id}}">{{$dataKategori->nama_kategori}}</option>
                  @endforeach
                  </select>
              </div>
            </div>
          
            <input type="hidden" name="_method" value="PUT">
        </div> <!--- /.modal body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Ubah Data Produk</button>
        </div>
      </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->