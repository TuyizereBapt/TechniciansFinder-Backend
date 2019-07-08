@extends('dashboard.main')
@section('title','Technicians')
@section('content')
    <div class="row">
        <div class="col-lg-4 ">
            <ul class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="javascript:void(0)">Dashboard</a></li>
                <li class="active">Work</li>
            </ul>
        </div>
    </div>
    <!-- main -->
    <div class="content">
        <div class="main-header">
            <h2>Post New Work</h2>
            <a href="{{route('dashboard.newTechnician')}}" class="btn btn-success">
                <i class="fa fa-chevron-circle-right"></i> All Posted Work
            </a>
        </div>
        <div class="main-content">
            <div class="row">
                <div class="col-md-12">
                    <post-work/>
                </div>
            </div>
        </div>
    </div>
    <!-- /main -->
@endsection