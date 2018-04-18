<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>
        
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href=" {{ asset('paper-dashboard/css/bootstrap.min.css') }}" />

        <!-- Animation library for notifications -->
        <link rel="stylesheet" href=" {{ asset('paper-dashboard/css/animate.min.css') }}" />

        <!-- Paper Dashboard core CSS -->
        <link rel="stylesheet" href=" {{ asset('paper-dashboard/css/paper-dashboard.css') }}" />

        <!-- Fonts and icons -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" >
        <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Muli:400,300' type='text/css'>
        <link rel="stylesheet" href=" {{ asset('paper-dashboard/css/themify-icons.css') }}" >
        
        @yield('style')
        
        <!-- Title -->
        <title>{{ config('app.name', 'TaraNaSaPinas')}} @yield('title')</title>
    </head>
    <body>
        <div class="wrapper">
            @include('inc.sidebar-pages')

            <div class="main-panel">
                @include('inc.navbar-pages')

                <div class="content" style="background-image: url('{{ asset('img/background.jpg') }}'); background-repeat: round; background-attachment: fixed;">
                    <div class="container-fluid">
                        <div class="row">
                            @include('inc.messages')
                        </div>
                        @yield('content')
                    </div>
                </div>

                @include('inc.footer-pages')

            </div>
        </div>
    </body>
    <!-- Core JS Files -->
    <script type="text/javascript" src="{{ asset('paper-dashboard/js/jquery-1.10.2.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('paper-dashboard/js/bootstrap.min.js') }}" ></script>
    
    <!-- Checkbox, Radio & Switch Plugins -->
	<script src="{{ asset('paper-dashboard/js/bootstrap-checkbox-radio.js') }}"></script>

    <!-- Text Editor Plugin -->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

</html>