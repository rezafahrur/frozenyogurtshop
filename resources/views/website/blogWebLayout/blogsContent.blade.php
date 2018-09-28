<div class="blog">
    <div class="featured">
        <ul>
            @foreach ($dataBlogs as $dataBlog)
            <li>
                <img src="{{ asset("storage/imagesUpload/$dataBlog->image")}}" alt="">
                <div>
                    <h1>{{ $dataBlog->judul }}</h1>
                    <span>By Admin on {{$dataBlog->created_at}} </span>
                    <p> {!! PotongString::potong($dataBlog->isi, 150) !!} </p>
                    <a href="/blog/{{$dataBlog->id}}" class="more">Read More</a>
                </div>
            </li>
            @endforeach
        </ul>
        <a href="blog.html" class="load">Load More</a>
    </div>
    <div class="sidebar">
        <h1>Recent Posts</h1>
        <img src="{{ asset("storage/imagesUpload/$recentPost->image") }}" alt="">
        <h2> {{$recentPost->judul}} </h2>
        <span>By Admin on {{$recentPost->created_at }} </span>
        <p>{!! PotongString::potong($recentPost->isi, 150) !!}</p>
        <a href="/blog/{{$recentPost->id}}" class="more">Read More</a>
    </div>
</div>