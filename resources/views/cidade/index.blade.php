@extends('layout.app')

@section('title','Cidades')
@section('body')

@foreach($cidades as $cidade)

{{$cidade->id}}

@endforeach()
@endsection