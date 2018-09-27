<div class="modal fade" id="modal-kategori">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Kategori</h4>
        </div>
        <div class="modal-body">
            <form action="produk" method="post" class="form-horizontal">
                @csrf
                <input type="hidden" name="jenisForm" value="kategori">
               <div class="form-group">
                 <label for="inputNamaKategori" class="col-sm-2 control-label">Nama Kategori</label>
                 <div class="col-sm-10">
                   <input type="text" name="namaKategori" class="form-control" id="inputNamaKategori" placeholder="Nama Kategori">
                 </div>
               </div>
               <div class="form-group">
                  <label for="inputNamaKategori" class="col-sm-2 control-label">Detail Kategori</label>
                  <div class="col-sm-10">
                      <textarea id="detailKategori" name="detailKategori"></textarea>
                  </div>
                </div>
             </div> <!--- /.modal body -->
             <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
               <button type="submit" class="btn btn-warning">Tambah Kategori</button>
             </div>
           </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->