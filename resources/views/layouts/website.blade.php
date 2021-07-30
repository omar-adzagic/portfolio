<!DOCTYPE html>
<html>

<head>
	<title>Omar Adžagić</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Custom Stilovi -->
	<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animacije.css') }}">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.8.1/css/all.css') }}" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
	<!-- Google Fontovi -->
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i') }}" rel="stylesheet">
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Chivo:300,300i,400,400i,700,700i,900,900i') }}" rel="stylesheet">
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Lato') }}" rel="stylesheet">
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i') }}" rel="stylesheet">
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:400,700') }}" rel="stylesheet">
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700') }}" rel="stylesheet">
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Raleway:400,500,700"') }} rel="stylesheet"> 
</head>
<body>
	<div id="app">
    <router-view></router-view>
  </div>
	
  <script src="{{ asset('js/app.js') }}"></script>
  {{-- <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('js/projects.js') }}"></script> --}}
	<script src="{{ asset('js/ease.js') }}"></script>
	<script src="{{ asset('js/pojavljivanje_elmenata.js') }}"></script>
</body>
</html>