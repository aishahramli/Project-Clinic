@extends('layouts.app')
 
@section('content')
<head>
    <style>
    
    .page-header h1{
        padding-left: 10em; 
    }
    
    .img{
        height:300px;
        width:100%;
    }
    
    </style>
</head>

<div class="container">
    <div class="page-header">
        <h1>Booking Treatment</h1>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/treatments" class="container" method="POST">
    {{csrf_field() }}

<!--Start table , row-->
<div class="row">
    <div class="col-md-7">
        <!--Patient Name-->
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-info fa-fw"></i></span>
            <input type="text" name="patient_name" value="{{ old('patient_name') }}" class="form-control" placeholder="Patient Name"
            style="text-transform: capitalize">
        </div>
        <br>

            <!--Treatment Name-->
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-info fa-fw"></i></span>
                <input type="text" name="treatment_name" value="{{ old('treatment_name') }}" class="form-control" placeholder="Treatment Name"
                style="text-transform: capitalize">
            </div>
            <br>

            <!--Description-->
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-info fa-fw"></i></span>
                <input type="text" name="description" value="{{ old('description') }}" class="form-control" placeholder="Description"
                style="text-transform: capitalize">
            </div>
            <br>

            <!--Treatment Date-->
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                <input type="date" name="treatment_date" value="{{ old('treatment_date') }}" class="form-control" placeholder="Treatment Date"
                style="text-transform: capitalize">
            </div>
            <br>

            <!--Submit and back button-->
            <div class="col-md-12 text-center clearfix" style="padding: 3em;">
                <button type="submit" class="btn btn-success">Submit</button>
                <a class="btn btn-danger" href="{{ route('treatments.index') }}">Back</a>
                {{-- <a class="btn btn-primary" href=""> Back</a> --}}
            </div>

    </div>
</div>   
</form>
@endsection