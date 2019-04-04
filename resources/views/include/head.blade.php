<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Consilog @yield('title')</title>

<!-- Scripts -->

<script src="{!!URL('/js/jquery.js')!!}"></script>
<script src="{!!URL('/js/scripts.js')!!}"></script>
<script src="{!!URL('/js/bootstrap.min.js')!!}"></script>
<script src="{!!URL('/js/bootbox.js')!!}"></script>




<!-- Styles -->
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 	integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"	crossorigin="anonymous">

<link rel="stylesheet" href="{!!URL('/css/bootstrap.css')!!}">
</head>