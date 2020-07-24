{{-- <div class="form-group">
    <label for="address_address">Address</label>
    <input type="text" id="address-input" name="address_address" class="form-control map-input">
    <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
    <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
</div>
<div id="address-map-container" style="width:100%;height:400px; ">
    <div style="width: 100%; height: 100%" id="address-map"></div>
</div> --}}

@extends('layouts.app')
  
@section('content')


<!--New Map-->
<div class="container">
    <div class="col-sm-12">
        <h1>Add Court Location</h1>
        <div class="form-group">
        <form method="POST" action="{{route('companies.store')}}">
            @csrf
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control input-sm" name="name">
            </div>
            <div class="form-group">
                <label for="address_address">Address</label>
                <input type="text" id="address-input" name="address_address" class="form-control map-input">
                <input type="hidden" id="address-latitude" name="address_latitude" value="0" />
                <input type="hidden" id="address-longitude" name="address_longitude" value="0" />
            </div>
            <div id="address-map-container" style="width:100%;height:400px; ">
                <div style="width: 100%; height: 100%" id="address-map"></div>
            </div>

            <button class="btn btn-sm btn-danger" type="submit">Save</button>
        </form>
        </div>
    </div>
</div>


@section('scripts')
    @parent
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9omYMisbvSIJqMBkeKo8NcE4ZhzLB6jw&libraries=places&callback=initialize" async defer ></script>
{{-- <script src="/js/courtsMap.js"></script> --}}
<script src="/js/mapInput.js"></script>

@stop

@yield('scripts')

@endsection