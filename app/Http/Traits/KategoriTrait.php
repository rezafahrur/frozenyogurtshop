<?php 
namespace App\Http\Traits;

use App\Models\Kategori;


trait KategoriTrait {

  public function tampilDataKategoriTrait() {
    $kategori = Kategori::orderBy('id','desc')->get();
    return $kategori;
  }

  public function tampilDetailKategoriTrait($id){
    $kategori = Kategori::find($id);
    return $kategori;
  }

  public function tambahDataKategoriTrait($request) {
    $kategori = new Kategori;
    $kategori->nama_kategori = $request->namaKategori;
    $kategori->detail_kategori = $request->detailKategori;

    $kategori->save();
  }

  public function updateDataKategoriTrait($request, $id) {
    $kategori = Kategori::find($id);
    $kategori->nama_kategori = $request->namaKategori;
    $kategori->detail_kategori = $request->detailKategori;
    
    $kategori->save();
  }

  public function hapusDataKategoriTrait($id){
    $kategori = Kategori::find($id);
    $kategori->delete();
  }

}
?>