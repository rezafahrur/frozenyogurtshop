<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\ProdukTrait;
use App\Http\Traits\KategoriTrait;

class ProdukController extends Controller
{
    //
    //use traits
    use ProdukTrait;
    use KategoriTrait;

    public function index(){

        $noProduk = 1;
        $noKategori = 1;
        $dataKategoris = $this->tampilDataKategoriTrait();
        $dataProduks = $this->tampilDataProdukTrait();

        return view('admin.produkLayout.produk', [
                                                    'noProduk' => $noProduk,
                                                    'noKategori'=>$noKategori,
                                                    'dataKategoris'=>$dataKategoris,
                                                    'dataProduks'=>$dataProduks
                                    ]);
    }

    public function store(Request $request){
        if($request->jenisForm == "kategori"){
            $this->tambahDataKategoriTrait($request);
            return redirect()->route('produk')->with('successKategori', 'kategori ditambah');
        }
        if($request->jenisForm == "produk"){

            if($request->hasFile('image')) {
                $filename = $request->image->getClientOriginalName();
                $request->image->storeAs('public/imagesUpload', $filename);
                $this->tambahDataProdukTrait($request, $filename);
                return redirect()->route('produk')->with('successProduk', 'produk ditambah');
            }
            else {
                return redirect()->route('produk')->with('salah', 'gagal ditambah');
            }
        }
    }

    public function edit($detail, $id){
        if($detail == "kategori"){
            $editKategori = $this->tampilDetailKategoriTrait($id);
            return redirect()->route('produk')->with('editKategori', $editKategori);
        }
        if($detail == "produk"){
            $editProduk = $this->tampilDetailProdukTrait($id);
            return redirect()->route('produk')->with('editProduk', $editProduk);
        }
    }

    public function update(Request $request, $id){
        if($request->jenisForm == "kategori"){
            $this->updateDataKategoriTrait($request, $id);
            return redirect()->route('produk')->with('successUpdateKategori', 'kategori diubah');
        }
        if($request->jenisForm == "produk"){
            if($request->hasFile('editImage')) {
                $filename = $request->editImage->getClientOriginalName();
                $request->editImage->storeAs('public/imagesUpload', $filename);
            }
            else {
                $filename = $request->prevImage;
            }
            $this->UpdateDataProdukTrait($request, $id, $filename);
            return redirect()->route('produk')->with('successUpdateProduk', 'produk diubah');
        }
    }

    public function destroy($detail, $id){
        if($detail == "kategori"){
            $this->hapusDataKategoriTrait($id);
            return redirect()->route('produk')->with('successDeleteKategori', 'kategori dihapus');
        }
        if($detail == "produk"){
            $this->hapusDataProdukTrait($id);
            return redirect()->route('produk')->with('successDeleteProduk', 'produk dihapus');
        }
    }

    public function show($id){
        $detailProduk = $this->tampilDetailProdukTrait($id);
        return redirect()->route('produk')->with('detailProduk', $detailProduk);

    }
    
    public function konfirmasi($detail, $id){
        if($detail == "produk"){
            $hapusProduk = $this->tampilDetailProdukTrait($id);
            return redirect()->route('produk')->with('hapusProduk', $hapusProduk);
        }
        if($detail == "kategori"){
            $hapusKategori = $this->tampilDetailKategoriTrait($id);
            return redirect()->route('produk')->with('hapusKategori', $hapusKategori);
        }
    }
}
