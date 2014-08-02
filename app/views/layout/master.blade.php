<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>YourAgent : {{ $title }}</title>

	{{HTML::style('assets/css/bootstrap.css')}}
	{{HTML::style('assets/css/bootstrap-theme.css')}}
	{{HTML::style('assets/css/main.css')}}
	
	
</head>
<body>

	@include('layout.header')
	
	@yield('content')

	{{HTML::script('assets/js/jquery-1.11.1.min.js')}}
	{{HTML::script('assets/js/bootstrap.js')}}

</body>