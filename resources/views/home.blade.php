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


        @include('layouts.blog-temp')
    </div>
@endsection