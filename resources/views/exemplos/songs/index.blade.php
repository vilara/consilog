@extends('layout.app')

@section('title','ertr')


@section('body')

{{'Songssss are Everything'}}

@foreach ($songs as $song)
    <p>This is user {{ $song->title }}</p>
@endforeach

@endsection

