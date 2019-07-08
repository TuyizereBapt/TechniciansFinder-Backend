@extends('dashboard.main')
@section('title','Technicians')
@section('content')
    <div class="row">
        <div class="col-lg-4 ">
            <ul class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="javascript:void(0)">Dashboard</a></li>
                <li class="active">Technicians</li>
            </ul>
        </div>
    </div>
    <!-- main -->
    <div class="content">
        <div class="main-header">
            <h2>All Technicians</h2>
            <a href="{{route('dashboard.newTechnician')}}" class="btn btn-success">
                <i class="fa fa-plus-circle"></i> New Technician
            </a>
        </div>
        <div class="main-content">
            <div class="widget widget-hide-header">
                <div class="widget-header hide">
                    <h3>Main Dashboard Info</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <technicians></technicians>
                </div>
            </div>
        </div>
    </div>
    <!-- /main -->
@endsection