@extends('admin.master')
@section('body')
<div class="page-wrapper">
    <!-- Page Title -->
    <div class="page-title">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="page-title-text">Progress Bar</h2>
            </div>
            <div class="col-sm-6 text-right">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Progress Bar</a></li>
                        <li>Progress Bar info add</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Body -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <div class="panel">
                    <div class="panel-head">
                        <h5 class="panel-title">Progress Bar information add form</h5>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('progressBar.infoadd')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Name</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="example-text-input" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Progress Value</label>
                                <div class="col-10">
                                    <input type="number" class="form-control" id="example-text-input" name="percent_complete">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Add Data</button>
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


