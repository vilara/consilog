@extends('layout.app')

@section('title','Perfis')
@section('body')
@foreach ($perfils as $perfil)
{{ $perfil->cpf }}
@endforeach
@endsection