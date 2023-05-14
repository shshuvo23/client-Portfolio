@extends('website.master')

@section('body')

<div class="container">



    <!-- Section Blog -->
    <div class="section blog-single align-left" id="blog-section">
        <div class="fw">
            <div class="row">
                <div class="col col-m-12 col-t-12 col-d-12">

                    <div class="post-box">
                        <h1>{{$category->name}}</h1>
                        <div class="blog-content">
                            <div class="post-lightbox row">
                                @foreach ($posts as $post)
                                <a href="{{asset($post->image)}}" class="col col-m-12 col-t-4 col-d-4 lightbox-image">
                                <img src="{{asset($post->image)}}" alt="">
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
