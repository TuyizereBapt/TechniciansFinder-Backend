@extends('dashboard.main')
@section('title','')
@section('content')
    <!-- end top general alert -->
    <div class="row">
        <div class="col-lg-4 ">
            <ul class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="active">Profile</li>
            </ul>
        </div>
    </div>
    <!-- main -->
    <div class="content">
        <div class="main-header">
            <h2>Profile</h2>
            <em>user profile page</em>
        </div>
      <technician-profile/>
    </div>
    <!-- /main -->
@endsection