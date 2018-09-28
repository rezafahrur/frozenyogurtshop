<div class="singlepost">
    <div class="featured">
        <img src="{{asset("storage/imagesUpload/$post->image")}}" alt="">
        <h1>{{$post->judul}}</h1>
        <span>By Admin on {{ $post->created_at }}</span>
        <p> {!! $post->isi !!} </p>
        <a href="/blog" class="load">back to blog</a>
    </div>
    <div class="sidebar">
        <img src="{{ asset("storage/imagesUpload/$recentPost->image") }}" alt="">
        <h2> {{$recentPost->judul}} </h2>
        <span>By Admin on {{$recentPost->created_at }} </span>
        <p>{!! PotongString::potong($recentPost->isi, 150) !!}</p>
        <a href="/blog/{{$recentPost->id}}" class="more">Read More</a>
    </div>
</div>