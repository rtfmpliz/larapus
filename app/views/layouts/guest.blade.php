<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Perpustakaan online</title>
	<link rel="stylesheet" href="{{asset('packages/uikit/css/uikit.almost-flat.min.css')}}">
	<script src="{{asset('components/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('packages/uikit/js/uikit.min.js')}}"></script>
</head>
<body>
	<div class="uk-container uk-container-center uk-margin-top">
		<nav class="uk-navbar">
			<a href="#" class="uk-navbar-brand uk-hidden-small">Larapus</a>
			<div class="uk-navbar-flip uk-navbar-content">
			<a class="uk-button-success" href="{{URL::to('login')}}">Login</a> | 
			<a class="uk-button-success" href="">Daftar</a>
			</div>
			<div class="uk-navbar-brand uk-navbar-center uk-visible-small">Larapus</div>
		</nav>
		<div class="uk-container-center uk-margin-top">
		@include('layouts.partials.alert')
			@yield('content')
		</div>
	</div>
</body>
</html>