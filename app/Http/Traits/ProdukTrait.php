<?php 
namespace App\Http\Traits;

use Illuminate\Support\Facades\DB;
use App\Models\Produk;


trait ProdukTrait {

  public function tampilDataProdukTrait() {
    $produk = Produk::orderBy('id','desc')->get();
  
    return $produk;
  }

  public function tampilDetailProdukTrait($id){
    $produk = Produk::find($id);
    $kategoris = DB::table('kategoris')
                    ->join('produks', 'kategoris.id', '=', 'produks.id_kategori')
                    ->select('produks.id_kategori','kategoris.nama_kategori')
                    ->get();
            foreach($kategoris as $kategori) 
            {
                if($produk->id_kategori == $kategori->id_kategori){
                  $namaKategori = $kategori->nama_kategori;
                }
            }
            $produk->namaKategori = $namaKategori;  
            
        return $produk;
  }

  public function tambahDataProdukTrait($request, $filename) {
    $produk = new Produk;
    $produk->nama_produk = $request->namaProduk;
    $produk->image = $filename;
    $produk->id_kategori = $request->idKategori;

    $produk->save();
  }

  public function updateDataProdukTrait($request, $id, $filename) {
    $produk = Produk::find($id);
    $produk->nama_produk = $request->namaProduk;
    $produk->image = $filename;
    $produk->id_kategori = $request->idKategori;

    $produk->save();
  }

  public function hapusDataProdukTrait($id){
        $produk = Produk::find($id);
        $produk->delete();
  }

  public function tampilDataUserTrait(){
    $user = User::orderBy('id', 'desc')->get();
    return $user;
  }
}
