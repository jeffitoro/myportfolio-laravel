<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Portfolio Jefferson</title>
	<link rel="stylesheet" href="{{url('css/app.css')}}">
	<link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
	@include('messages.message')
	@include('partials.header') 
	@yield('content') 
	{{-- @include('partials.footer') --}} 
	@include('projets.projet')
	@include('forms.form')
	<script src="{{url('js/app.js')}}"></script>
</body>

</html>