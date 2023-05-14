@extends('admin.master')
@section('body')
<div class="page-wrapper">
    <!-- Page Title -->
    <div class="page-title">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="page-title-text">Category</h2>
            </div>
            <div class="col-sm-6 text-right">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Add Category</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Body -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel">
                    <div class="panel-head">
                        <h5 class="panel-title">Add Category</h5>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('category.add')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Category Name</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="example-text-input"  name="name" value="" placeholder="Enter Text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Image</label>
                                <div class="col-10">
                                    <input type="file" class="form-control" id="example-image-input" name="image" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Add new Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


