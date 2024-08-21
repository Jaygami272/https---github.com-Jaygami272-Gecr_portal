@extends('layouts.app')
@section('heading')
<h1>Deshboard</h1>
@endsection
@section('contant')
<div class="row">
    <div class="col-sm-3">
        <a href="{{ route('departments.index') }}">
            <div class="card bg-primary mb-3 dcard">
                <div class="card-body">
                    <h2>{{ $count['departments'] }}</h2>
                    <p>Departments</p>
                    <div class="card-icon">
                        <i class="bi bi-house-gear"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>    
</div>


@endsection