<?php 
namespace App\Http\Traits;

use App\Models\Blog;


trait PostTrait {

  public function tampilDataPostTrait() {
    $blog = Blog::orderBy('id','desc')->get();
    return $blog;
  }

  public function tampilRecentPostTrait() {
    $blog = Blog::orderBy('id','desc')->first();
    return $blog;
  }

  public function tampilDetailPostTrait($id){
    $blog = Blog::find($id);
    return $blog;
  }

  public function tambahDataPostTrait($request, $filename) {
    $blog = new Blog;
    $blog->judul = $request->judul;
    $blog->image = $filename;
    $blog->isi = $request->isi;

    $blog->save();
  }

  public function updateDataPostTrait($request, $id, $filename) {
    $blog = Blog::find($id);
    $blog->judul = $request->judul;
    $blog->image = $filename;
    $blog->isi = $request->isi;
    
    $blog->save();
  }

  public function hapusDataPostTrait($id){
    $blog = Blog::find($id);
    $blog->delete();
  }

}
