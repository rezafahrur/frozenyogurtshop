<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\PostTrait;

class BlogController extends Controller
{
    //use trait
    use PostTrait;

    public function index(){

        $noBlog = 1;
        $dataBlogs = $this->tampilDataPostTrait();
  
        return view('admin.blogLayout.blog', [
                                                'noBlog' => $noBlog,
                                                'dataBlogs'=>$dataBlogs
                                            ]);
    }

    public function store(Request $request){

            if($request->hasFile('image')) {
                $filename = $request->image->getClientOriginalName();
                $request->image->storeAs('public/imagesUpload', $filename);
                $this->tambahDataPostTrait($request, $filename);
                return redirect()->route('blog')->with('successBlog', 'blog ditambah');
            }
            else {
                return redirect()->route('blog')->with('salah', 'gagal di tambah');
            }
        
    }

    public function edit($id){
            
        $editBlog = $this->tampilDetailPostTrait($id);
        return redirect()->route('blog')->with('editBlog', $editBlog);
        
    }

    public function update(Request $request, $id){
        
            if($request->hasFile('editImage')) {
                $filename = $request->editImage->getClientOriginalName();
                $request->editImage->storeAs('public/imagesUpload', $filename);
            }
            else {
                $filename = $request->prevImage;
            }

        $this->UpdateDataPostTrait($request, $id, $filename);
        return redirect()->route('blog')->with('successUpdateBlog', 'blog diubah');
    }

    public function destroy($id){
            $this->hapusDataPostTrait($id);
            return redirect()->route('blog')->with('successDeleteBlog', 'blog dihapus');
        
    }

    
    public function konfirmasi($id){
        
        $hapusBlog = $this->tampilDetailPostTrait($id);
        return redirect()->route('blog')->with('hapusBlog', $hapusBlog);
       
    }

}
