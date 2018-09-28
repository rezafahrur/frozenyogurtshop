<div class="blog">
    <div class="featured">
        <ul>
            @foreach ($dataBlogs as $dataBlog)
            <li>
                <img src="{{ asset("storage/imagesUpload/$dataBlog->image")}}" alt="">
                <div>
                    <h1>{{ $dataBlog->judul }}</h1>
                    <span>
                       By Admin on 
                       <!-- call helper format bulan -->
                       {{ FormatBulan::format($dataBlog->created_at->format('m')) }}
                       {{$dataBlog->created_at->format('d')}}, 
                       {{$dataBlog->created_at->format('Y')}}  
                    </span>
                    <!-- call helper potong string -->
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
        <span>By Admin on 
            <!-- call helper format bulan -->
            {{ FormatBulan::format($recentPost->created_at->format('m')) }}
            {{$recentPost->created_at->format('d')}}, 
            {{$recentPost->created_at->format('Y')}} 
        </span>
        <!-- call helper potong string -->
        <p>{!! PotongString::potong($recentPost->isi, 150) !!}</p>
        <a href="/blog/{{$recentPost->id}}" class="more">Read More</a>
    </div>
</div>