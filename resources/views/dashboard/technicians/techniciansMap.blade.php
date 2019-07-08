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
    <div>
        <technicians-map/>
    </div>
@endsection