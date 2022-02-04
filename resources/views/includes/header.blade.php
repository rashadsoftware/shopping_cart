<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css" />
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('/')}}assets/plugin/fontawesome-free-5.15.2/css/all.css" />

		<title>Deirvlon Market | @yield('title')</title>
		<link rel="shortcut icon" type="image/jpg" href="{{asset('/')}}assets/img/favicon.png" />
	</head>
	<body>
		<header class="position-fixed w-100 bg-white" style="z-index:1; top:0">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container-fluid">
						<a class="navbar-brand" href="{{route('index')}}">Deirvlon Market</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link {{ Route::is('index') ? 'active' : '' }}" href="{{route('index')}}">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link {{ Route::is('integrations') ? 'active' : '' }}" href="{{route('integrations')}}">Integrations</a>
								</li>
								<li class="nav-item">
									<a class="nav-link {{ Route::is('card') || Route::is('checkout') ? 'active' : '' }}" href="{{route('card')}}">Cart ({{ session()->has('cart') ? count(session('cart')) : 0}})</a>
								</li>								
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<section class="mt-3" style="padding-top:60px">
			<div class="container">
				@if(Session::has('success'))
					<div class="alert alert-success alert-dismissible">
						{{ Session::get('success')}}
					</div>
				@endif
				@if(Session::has('error'))
					<div class="alert alert-danger alert-dismissible">
						{{ Session::get('error')}}
					</div>
				@endif