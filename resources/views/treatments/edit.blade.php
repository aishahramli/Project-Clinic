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
        <h1>Update Treatment</h1>
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

<form method="post" action="{{ route('treatments.update', $treatment->id) }}" class="container">
            @method('PATCH') 
            @csrf

	<!--Start table , row-->
<div class="row">
    <div class="col-md-7">
        <!--Patient Name-->
    <div class="input-group-prepend">
        <span class="input-group-text"><i class="fa fa-info fa-fw"></i></span>
        <input type="text" class="form-control" name="patient_name" value={{ $treatment->patient_name }} />
                </div>
        <br>

    <!--Treatment Name-->
    <div class="input-group-prepend">
	<span class="input-group-text"><i class="fa fa-info fa-fw"></i></span>
	<input type="text" class="form-control" name="treatment_name" value={{ $treatment->treatment_name }} />
            </div>
    <br>
    
<!--Description-->
    <div class="input-group-prepend">
	<span class="input-group-text"><i class="fa fa-info fa-fw"></i></span>
	<input type="text" class="form-control" name="description" value={{ $treatment->description }} />
            </div>
	<br>

	<!--Treatment Date-->
	<div class="input-group-prepend">
	<span class="input-group-text"><i class="fas fa-asterisk"></i></span>
	<input type="date" class="form-control" name="treatment_date" value={{ $treatment->treatment_date }} />
            </div>
	<br>

            <!--Submit and back button-->
            <div class="col-md-12 text-center clearfix" style="padding: 3em;">
                <button type="submit" class="btn btn-primary">Update</button>
                <a class="btn btn-danger" href="{{ route('treatments.index') }}">Back</a>
                {{-- <a class="btn btn-primary" href=""> Back</a> --}}
            </div>

    </div>
</div>   
</form>
@endsection
