@foreach ($dataKategoris as $dataKategori)
<ul>
  <li>
  <h1>{{$dataKategori->nama_kategori}}</h1>
    <p>{!! $dataKategori->detail_kategori !!}</p>
  </li>
  @foreach ($dataProduks as $dataProduk)
  @if ($dataKategori->id == $dataProduk->id_kategori)
  <li>
    <img src="{{asset("storage/imagesUpload/$dataProduk->image")}}" alt="">
    <h2>{{$dataProduk->nama_produk}}</h2>
  </li>
  @endif
  @endforeach
</ul>
@endforeach
