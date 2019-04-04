@extends('layout.app')

@section('title','Postos e Graduações')
@section('body')

@foreach($postograds as $postograd)

{{$postograd->id}}

@endforeach()
@endsection