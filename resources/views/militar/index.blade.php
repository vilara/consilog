@extends('layout.app')

@section('title','Militares')
@section('body')

@foreach($militares as $militar)

{{$militar->id}}

@endforeach()
@endsection