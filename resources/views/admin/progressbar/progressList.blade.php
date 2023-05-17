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
                        <li>Progress List</li>
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
                            <h5 class="panel-title">Progress Bar information</h5>
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
                                    @foreach ($progress as $progre)
                                    <tr>
                                        <td>{{$progre->id}}</td>
                                        <td>{{$progre->name}}</td>
                                        <td>{{$progre->percent_complete}}%</td>
                                        <td>
                                            <a href="{{route('progressBar.delete', ['id' => $progre->id])}}"><i class="fa-solid fa-trash fa-beat fa-xl"></i></a>
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


