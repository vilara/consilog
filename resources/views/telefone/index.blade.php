@extends('layout.app')

@section('title','Telefones')
@section('body')

@foreach ($telefone as $tel)
{{ $tel->numero }}
@endforeach

@endsection