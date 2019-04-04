@extends('layout.app')

@section('title','Estados')
@section('body')

@foreach($estados as $estado)

{{$estado->id}}

@endforeach()
@endsection