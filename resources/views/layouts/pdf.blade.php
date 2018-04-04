<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sust Club Ltd') }}</title>

    <!-- Styles -->
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app print">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                
            

                <div class="row">
                    <div class="col-md-4 text-center">
                        <a class="thumbnil logo" href="{{ url('/') }}">
                            <img src="{{ url('public/img/sust.png')}}" />
                        </a>
                    </div>
                    <div class="col-md-8 text-center">
                            <h1>Sust Club Limited</h1>
                        
                    </div>
                   
                </div>
            </div>
        </nav>
        
        <main class="">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
