@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center justify-content-center header-section bg-light" style="background: url('./storage/posts/post1.jpg') no-repeat;background-size:cover; height:75vh;"> 
        <h1 class="text-light" style="font-size:6em;">My Blog</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="py-3 col-sm-12">
              <div class="text-center">
                <h2 class="">Blog</h2>
                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <hr>
              </div>
            </div>
        </div>

        <div class="row">

            @foreach ($posts as $post)
                
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                        <a href="blog-single.html"><img src="{{Voyager::image($post->image)}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                        <div class="card-category-box">
                            <div class="card-category">
                            <h6 class="category">Travel</h6>
                            </div>
                        </div>
                        <h3 class="card-title"><a href="blog-single.html">{{$post->title}}</a></h3>
                        <p class="card-description">
                            {!! $post->body !!}
                        </p>
                        </div>
                        <div class="card-footer">
                        <div class="post-author">
                            <a href="#">
                            <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                            <span class="author">{{ $post = App\Post::find(1)->title }}</span>
                            </a>
                        </div>
                        <div class="post-date">
                            <span class="ion-ios-clock-outline"></span> 10 min
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach

            
        </div>
    </div>
@endsection