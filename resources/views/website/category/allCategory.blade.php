@extends('website.master')

@section('body')
<div class="container">

    <!-- Section Started -->
    <!-- Blog -->
    <div class="section blog align-left" id="blog-section">
        <div class="fw">
            <div class="titles">
                <div class="title">All Category</div>
            </div>
            <div class="row blog-items">
                @foreach ($categories as $category)
                <div class="col col-m-12 col-t-4 col-d-4">
                    <div class="blog-item">
                        <div class="image">
                            <a href="{{route('post.category', ['id' => $category->id])}}"><img src="{{asset($category->image)}}" alt="" height="200" width="90%" /></a>
                        </div>
                        <a href="{{route('post.category', ['id' => $category->id])}}" class="name">{{$category->name}}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection
