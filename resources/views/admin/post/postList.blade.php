@extends('admin.master')
@section('body')
<div class="page-wrapper">
    <!-- Page Title -->
    <div class="page-title">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="page-title-text">Post List</h2>
            </div>
            <div class="col-sm-6 text-right">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Post</a></li>
                        <li>Post List</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Body -->
    <div class="page-body">
        <div class="row">
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-head">
                            <h5 class="panel-title">Post List</h5>
                        </div>
                        <div class="panel-body">
                            <table class="table table-head-bg table-head-danger table-bordered-danger">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Progress Percent</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->category->name}}</td>
                                        <td>
                                            <img src="{{asset($post->image)}}" alt="" height="250" width="70%">
                                        </td>

                                        <td>
                                            <a href="{{route('post.delete', ['id' => $post->id])}}"><i class="fa-solid fa-trash fa-beat fa-xl"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


