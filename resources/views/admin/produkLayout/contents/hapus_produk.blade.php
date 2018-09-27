<div class="modal fade" id="modal-produk-hapus">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Hapus Data Produk?</h3>
        </div>
        <div class="modal-body">
         <h4>Apakah Anda Yakin Ingin Menghapus Produk {{$hapusProduk->nama_produk}} Dari Daftar Produk?</h4>
         <a>(Sekali Dihapus Data Tidak Bisa Dikembalikan Lagi)</a>
        </div> <!--- /.modal body -->
        <div class="modal-footer">
          <div class="row pull-right">
            <div class="col-md-5">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
        </div>
        <div class="col-md-1">
          <form action="buku/buku/{{ $hapusBuku->id }}" method="post">
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