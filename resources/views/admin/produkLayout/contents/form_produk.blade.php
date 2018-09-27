<div class="modal fade" id="modal-produk">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Data Produk</h4>
        </div>
        <div class="modal-body">
         <form action="produk" method="post" class="form-horizontal">
           @csrf
           <input type="hidden" name="jenisForm" value="produk">
          <div class="form-group">
            <label for="inputNamaProduk" class="col-sm-2 control-label">Nama Produk</label>
            <div class="col-sm-10">
              <input type="text" name="namaProduk" class="form-control" id="inputNamaProduk" placeholder="Nama Produk">
            </div>
          </div>
          <div class="form-group">
            <label for="inputGambar" class="col-sm-2 control-label">Gambar</label>
            <div class="col-sm-10">
              <input type="text" name="image" class="form-control" id="inputGambar" placeholder="Ini Gambar">
            </div>
          </div>
          <div class="form-group">
              <label for="inputKategori" class="col-sm-2 control-label">Kategori</label>
              <div class="col-sm-8">
                <select class="form-control" name="idKategori">
                    <option value="NULL" selected>Pilih Kategori Produk</option>
                    @foreach ($dataKategoris as $dataKategori)
                <option value="{{$dataKategori->id}}">{{$dataKategori->nama_kategori}}</option>
                    @endforeach
                </select>
              </div>
            </div>
        </div> <!--- /.modal body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah Data Produk</button>
        </div>
      </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  