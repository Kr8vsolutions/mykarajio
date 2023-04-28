<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Garage Homepage - MyKaraj</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="https://app.mykaraj.comhome/images/homepage/simple-logo.png">
    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@500&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendors/multiSelect/styles.css')}}">
</head>
<body>
	<header>
		<div class="container">
			<div class="main-logo">
				<a href="/"><img src="https://app.mykaraj.com/home/images/homepage/logo.png"></a>
			</div>
			<div class="header-btns">
				<a href="https://app.mykaraj.com/garage/login" class="login-btn">Login</a>
				<a href="javascript:void(0)" class="request-for-demo-btn">Request For Demo</a>
			</div>
		</div>
	</header>