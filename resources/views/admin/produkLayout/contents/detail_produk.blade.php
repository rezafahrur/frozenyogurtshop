<div class="modal fade" id="modal-produk-detail">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Detail Produk {{$detailProduk->nama_produk}}</h4>
        </div>
        <div class="modal-body">
<div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="{{ asset("storage/imagesUpload/$detailProduk->image")}}" alt="User profile picture">

      <h3 class="profile-username text-center"> {{$detailProduk->nama_produk}}</h3>

      <p class="text-muted text-center">Kategori - {{$detailProduk->nama_kategori}} </p>
      <!--
      <ul class="list-group list-group-unbordered">
          
      </ul> -->
    </div>
    <!-- /.box-body -->
  </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <a href="produk/{{ $detail = "produk" }}/{{$detailProduk->id}}/edit">
              <button type="button" class="btn btn-primary">Edit</button>
            </a>
          </div>
         
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->