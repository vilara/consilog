@extends('layout.app')

@section('title','Civis')
@section('body')

@foreach($civis as $civil)

{{$civil->id}}

@endforeach()
@endsection