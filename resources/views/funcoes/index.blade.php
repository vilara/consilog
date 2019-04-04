@extends('layout.app')

@section('title','Funções')
@section('body')
@foreach ($funcoes as $funcoe)
{{$funcoe->id}}
@endforeach
@endsection