<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\ProdukTrait;
use App\Http\Traits\KategoriTrait;
use App\Http\Traits\PostTrait;


class WebsiteController extends Controller
{
    //use traits
    use ProdukTrait;
    use KategoriTrait;
    use PostTrait;

    public function showProducts() {
        
        $dataKategoris = $this->tampilDataKategoriTrait();
        $dataProduks = $this->tampilDataProdukTrait();

        return view('website.produkWebLayout.produkWeb', [
                                                    'dataKategoris'=>$dataKategoris,
                                                    'dataProduks'=>$dataProduks
                                                    ]);

        }

    public function showBlogs() {
        
        $dataBlogs = $this->tampilDataPostSkipTrait();
        $recent = $this->tampilRecentPostTrait();

        return view('website.blogWebLayout.blogWeb', [
                                                        'dataBlogs'=>$dataBlogs,
                                                        'recentPost'=>$recent
                                                    ]);
        
    
    }
    
    public function showPost($id) {

        $post = $this->tampilDetailPostTrait($id);
        $recent = $this->tampilRecentPostTrait();

        return view('website.singlePostLayout.singlePost', [
                                                            'post'=>$post, 
                                                            'recentPost'=>$recent
                                                            ]);
    }
        

    }
