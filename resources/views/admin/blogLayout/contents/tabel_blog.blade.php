<!-- tabel blog -->
<div id="dataTabelProduk" class="col-md-12">
    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Data Blog</h3>

            <div class="box-tools pull-right">
                <button id="maxBlog" type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button id="closeBlog" type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="blog" class="table table-bordered table-hover table-striped display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Sekilas Isi</th>
                            <th>Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($dataBlogs as $dataBlog)
                        <tr>
                            <td> {{$noBlog++}} </td>
                            <td> {{$dataBlog->judul}} </td>
                            <td>
                                    {!! PotongString::potong($dataBlog->isi, 100) !!}
                            </td>
                            <td>
                                <a href="#" target="_blank">
                                    <button type="button" class="btn btn-info">Detail</button>
                                </a>

                                <a href="blog/{{ $dataBlog->id }}/edit">
                                    <button type="button" class="btn btn-primary">Edit</button>
                                </a>
                                <a href="blog/{{ $dataBlog->id }}/konfirmasi">
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>