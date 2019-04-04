@extends('layout.app')

@section('title','LatLongs')
@section('body')

@foreach($latlongs as $latlong)

{{$latlong->id}}

@endforeach()
@endsection