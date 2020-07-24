@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="col-md-12 text-center clearfix" style="padding: 3em;">
                    <a class="btn btn-primary" href="{{ route('treatments.index') }}">Patient Treatment</a>
                    <a class="btn btn-primary" href="{{ route('companies.create') }}"> Treatment</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
