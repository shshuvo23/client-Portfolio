@extends('admin.master')
@section('body')

<div class="page-wrapper">
    <!-- Page Title -->
    <div class="page-title">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="page-title-text">Howdy, {{ Auth::user()->name }}!</h2>
            </div>
            <div class="col-sm-6 text-right">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Body -->
    <div class="page-body">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="dashboard-stat color-success">
                    <div class="content">
                        <h4>{{ $userCount }}</h4> <span>Users</span>
                    </div>
                    <div class="icon"><i class="icon-people"></i></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="dashboard-stat color-warning">
                    <div class="content">
                        <h4>{{ $postCount }}</h4> <span>Posts</span>
                    </div>
                    <div class="icon"><i class="fa-solid fa-signs-post"></i></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="dashboard-stat color-primary">
                    <div class="content">
                        <h4>{{ $clientCount }}</h4> <span>Client</span>
                    </div>
                    <div class="icon"><i class="fa-solid fa-user-tie"></i></div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
