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
            <div class="col-md-6 col-lg-3">
                <div class="dashboard-stat color-success">
                    <div class="content">
                        <h4>523</h4> <span>Users</span>
                    </div>
                    <div class="icon"><i class="icon-people"></i></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="dashboard-stat color-warning">
                    <div class="content">
                        <h4>111</h4> <span>Projects</span>
                    </div>
                    <div class="icon"><i class="icon-layers"></i></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="dashboard-stat color-primary">
                    <div class="content">
                        <h4>$12K</h4> <span>Income</span>
                    </div>
                    <div class="icon"><i class="icon-docs"></i></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="dashboard-stat color-danger">
                    <div class="content">
                        <h4>$523</h4> <span>Expenses</span>
                    </div>
                    <div class="icon"><i class="icon-credit-card"></i></div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
