<!DOCTYPE html><html lang="{{ app()->getLocale() }}"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><!-- CSRF Token --><meta name="csrf-token" content="{{ csrf_token() }}"><base href="{{ url('/') }}"><!-- Styles --><!--<link type="text/css" media="all" href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet"><link type="text/css" media="all" href="{{ asset('public/css/app.css') }}" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
--><link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<style type="text/css" media="all">
@page {
   /*size: 7in 9.25in;
   margin: 27mm 16mm 27mm 16mm;*/
}
    .card{
        background-color: #fefefe;
    }
    .logo img{ width:220px; text-align: center; }
    .member-photo{
        width:180px;
    }
    .td_logo{
        text-align: center;
        /*background-image:url("{{ url('public/img/sust-pdf.png')}}");
        width: 180px;
        height: 220px;
        background-position: center bottom, center top;
        background-repeat: no-repeat, repeat;*/
    }
    th{
        text-align: left;
        padding: 3px;
        font-size: 12px;
        font-weight: bold;
    }

    td{
        text-align: left;
        padding: 3px;
        font-size: 12px;
    }
    table{
        margin: auto;
    }
    h1{
        font-size: 50px;
        text-align: center;
        font-family: 'Anton', sans-serif;
    }
</style>
</head><body>
    <div id="app print">
       
        
        <main class="">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body></html>