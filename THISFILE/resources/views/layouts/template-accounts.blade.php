<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href=" {{ asset('css/paper-kit.css') }}" />
	<!-- Fonts and icons -->
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link rel="stylesheet" href=" {{ asset('css/nucleo-icons.css') }}" />
    <!-- Title -->
    <title>{{ config('app.name', 'TaraNaSaPinas')}} @yield('title')</title>
</head>
<body>
    @include('inc.navbar-accounts')
    <div class="wrapper">
        <div class="page-header" style="background-image: url('{{ asset('img/welcome_page_1280.jpg') }}'); background-attachment: fixed;">
            <div class="filter"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 ml-auto mr-auto">
                            <div class="card card-register" style="background-color: #428bca;">
                                <center><img src="{{ asset('img/logo.png') }}" height="150" width="150"/></center>
                                <h3 class="title" style="color: white; font-weight: bold;">@yield('header')</h3>
                                @yield('content')
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Core JS Files -->
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui-1.12.1.custom.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tether.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!--  Paper Kit Initialization snd functons -->
<script src="{{ asset('js/paper-kit.js?v=2.0.1') }}"></script>
</html>