<div class="row">

    @foreach ($posts as $post)
        
        <div class="col-md-4">
            <div class="card card-blog mb-4">
                <div class="card-img">
                <a href="/blog/{{ $post->slug }}"><img src="{{Voyager::image($post->image)}}" alt="" class="img-fluid"></a>
                </div>
                <div class="card-body">
                <div class="card-category-box">
                    <div class="card-category">
                    <h6 class="category">Travel</h6>
                    </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">{{$post->title}}</a></h3>
                <p class="card-description">
                    {!! substr($post->body, 0, 50) !!}
                </p>
                </div>
                <div class="card-footer">
                <div class="post-author">
                    <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">{{ $post->user->name }}</span>
                    </a>
                </div>
                <div class="post-date">
                    <span class="ion-ios-clock-outline"></span> {{ $post->created_at->format('F, d, Y') }}
                </div>
                </div>
            </div>
        </div>
        @endforeach
            
</div>