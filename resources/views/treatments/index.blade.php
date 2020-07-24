@extends('layouts.app')
 
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }

  #createButton{
    line-height: 12px;
     width: 18px;
     font-size: 8pt;
     font-family: tahoma;
     margin-top: 1px;
     margin-right: 2px;
     position:absolute;
     top:0;
     right:0;
  }
  
</style>


<!--Card your community-->
<div class="px-4">
  <div class="card text-white bg-info mb-3" style="">
    <div class="card-header">
      Patient Treatment 
      <div class="float-right">
      <a href="/treatments/create" class="btn btn-outline-light ml-20" role="button" aria-pressed="true" id="createButton">Booking Treatment</a>
      </div>
      
    </div>
    <div class="card-body">
      <h5 class="card-title">Booking Patient Treatment</h5>
      <p class="card-text">Booking treatment for a better health</p>
    </div>
    </div></div>

<br>

<!--Table for all community-->
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped">
    <thead>
        <tr>
          <td>Treatment ID</td>
          <td>Patient Name</td>
          <td>Treatment Name</td>
          <td>Description</td>
          <td>Treatment Date</td>
          <td>Action</td>
         
        </tr>
    </thead>
    <tbody>
        @foreach($treatments as $treatment)
        <tr>
            <td>{{$treatment->id}}</td>
            <td>{{$treatment->patient_name}}</td>
            <td>{{$treatment->treatment_name}}</td>
            <td>{{$treatment->description}}</td>
            <td>{{$treatment->treatment_date}}</td>
            
            <td>
              <a href="{{route('treatments.edit',$treatment->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
              <form action="{{ route('treatments.destroy', $treatment->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>
            
        </tr>
        @endforeach


       

    </tbody>
  </table>
<div>
@endsection

