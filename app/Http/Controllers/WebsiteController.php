<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\ProdukTrait;
use App\Http\Traits\KategoriTrait;

class WebsiteController extends Controller
{
    //use trait
    use ProdukTrait;
    use KategoriTrait;

    function showProducts() {
        
        $dataKategoris = $this->tampilDataKategoriTrait();
        $dataProduks = $this->tampilDataProdukTrait();

        return view('website.produkWebLayout.produkWeb', [
            'dataKategoris'=>$dataKategoris,
            'dataProduks'=>$dataProduks
]);


    }
}
