@extends('layout.app')
@section('heading')
<h1>Departments</h1>
@endsection
@section('content')
<div class="pagetitle" style="padding: 0px 0px 10px 1170px;">
    <div class="row">
           <a href="department"> <button type="button" class="btn btn-gray float-right">Add Department</button></a>
    </div>
</div>

<section class="section">
    @include('flash::message')
    <div class="clearfix"></div>
    <div class="row">
        @foreach ($department as $departments)
        <div class="col-md-4">
            <a href="departmentd/{{$departments->id}}">
                <div class="card unit-card p-3">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon">
                                <img src="http://igenerate.odhavtech.com/profile?text={{ $departments->department_name }}" alt="Profile" class="rounded-circle unit-profile">
                            </div>
                            <div class="ms-2 c-details">
                                <h6 class="mb-0">{{$departments->department_name}}</h6>
                                <span></span>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </a>
        </div>
        @endforeach
    </div>
</section>

@endsection