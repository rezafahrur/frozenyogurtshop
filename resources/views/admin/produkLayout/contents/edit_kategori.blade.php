<div class="modal fade" id="modal-kategori-edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Data Kategori {{$editKategori->nama_kategori}} </h4>
        </div>
        <div class="modal-body">
        <form action="produk/{{$editKategori->id}}" method="post" class="form-horizontal">
                @csrf
                <input type="hidden" name="jenisForm" value="kategori">
               <div class="form-group">
                 <label for="editNamaKategori" class="col-sm-2 control-label">Nama Kategori</label>
                 <div class="col-sm-10">
                   <input type="text" name="namaKategori" class="form-control" id="editNamaKategori" value="{{$editKategori->nama_kategori}}">
                 </div>
               </div>
               <div class="form-group">
                <label for="inputDetailKategori" class="col-sm-2 control-label">Detail Kategori</label>
                <div class="col-sm-10">
                    <textarea id="detailKategoriEdit" name="detailKategori">
                      {{$editKategori->detail_kategori}}
                    </textarea>
                </div>
              </div>
             </div> <!--- /.modal body -->
             <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
               <button type="submit" class="btn btn-warning">Ubah Kategori</button>
             </div>
             <input type="hidden" name="_method" value="PUT">
           </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->