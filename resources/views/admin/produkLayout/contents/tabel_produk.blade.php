
    <!-- Data produk -->
    <div id="dataTabelProduk" class="col-md-6">
        <div class="box box-primary box-solid collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">Data Produk</h3>
              
              <div class="box-tools pull-right">
                  <button id="maxProduk" type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                  <button id="closeProduk" type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="produk" class="table table-bordered table-hover table-striped display nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Produk</th>
                  <th>Kategori</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($dataProduks as $dataProduk)
                <tr>
                    <td> {{$noProduk++}} </td>
                    <td> {{$dataProduk->nama_produk}} </td>
                    <td> 
                      @foreach ($dataKategoris as $dataKategori)
                          @if ($dataProduk->id_kategori == $dataKategori->id)
                              {{$dataKategori->nama_kategori}}
                          @endif
                      @endforeach
                    </td>
                    <td>  
                      <a href="produk/{{$dataProduk->id}}">
                        <button type="button" class="btn btn-info">Detail</button>
                        </a>
                     
                      <a href="produk/{{ $detail = "produk" }}/{{$dataProduk->id}}/edit">
                          <button type="button" class="btn btn-primary">Edit</button>
                        </a>
                        <a href="buku/{{ $detail = "produk" }}/{{$dataProduk->id}}/konfirmasi">
                          <button type="button" class="btn btn-danger">Hapus</button>
                        </a>
                    
                    </td>
                  @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <button type="button" class="btn btn-primary addForm" data-toggle="modal" data-target="#modal-produk">Tambah Data Produk?</button>
            </div>
          </div>
          <!-- /.box -->
      </div>
      
      