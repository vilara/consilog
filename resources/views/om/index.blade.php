@extends('layout.app')

@section('title','OM')
@section('body')
@foreach ($name as $names)
{{ $names->nomeOm }}
@endforeach
@endsection