@extends('layout.app')

@section('title','Seções')
@section('body')

@foreach($secoes as $secao)

{{$secao->id}}

@endforeach()
@endsection