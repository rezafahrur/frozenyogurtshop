<div class="modal fade" id="modal-kategori-hapus">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Hapus Kategori?</h3>
        </div>
        <div class="modal-body">
         <h4>Apakah Anda Yakin Ingin Menghapus Kategori {{$hapusKategori->nama_kategori}} Dari Daftar Kategori?</h4>
         <a>(Sekali Dihapus Data Tidak Bisa Dikembalikan Lagi)</a>
        </div> <!--- /.modal body -->
        <div class="modal-footer">
          <div class="row pull-right">
            <div class="col-md-5">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
        </div>
        <div class="col-md-1">
          <form action="buku/kategori/{{ $hapusKategori->id }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
                <input type="hidden" name="_method" value="DELETE">
            </form>
          </div>
          </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->