<!DOCTYPE html><html lang="{{ app()->getLocale() }}"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><!-- CSRF Token --><meta name="csrf-token" content="{{ csrf_token() }}"><base href="{{ url('/') }}"><!-- Styles --><!--<link type="text/css" media="all" href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet"><link type="text/css" media="all" href="{{ asset('public/css/app.css') }}" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
--><link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Playfair+Display|Righteous|Roboto+Condensed|Sacramento|Ubuntu" rel="stylesheet">
<style type="text/css" media="all">
/* vietnamese */



@page {
   /*size: 7in 9.25in;*/
   margin: 10px;
   background-color: #D9CFE6;
}
body{
    margin: none;
    font-family: 'garamond';
    border: 2px solid #c40000;
    background-color: #D9CFE6;
}
.container{
    /*background-color: #EAE5F1;*/
    margin: none;
}
    .card{
        /*background-color: #EAE5F1;*/
        margin: none;
    }
    .logo img{ width:180px; text-align: center; }
    
    .td_logo{
        text-align: center;
        /*background-image:url("{{ url('public/img/sust-pdf.png')}}");
        width: 180px;
        height: 220px;
        background-position: center bottom, center top;
        background-repeat: no-repeat, repeat;*/
    }
    .th{
        text-align: left;
        padding: 3px;
        font-size: 0.8em;
        font-weight: bold;
        font-family: 'Playfair Display', sans-serif;
        vertical-align: top;
    }

    .td{
        text-align: left;
        padding: 3px;
        font-size: 0.8em;
        line-height: 2;
        font-family: 'Playfair Display', sans-serif;
        vertical-align: top;   
    }
    .table{
        margin: 0 0 0 0; 
        padding-left: 30px;
        width: 100%;
    }
    .h1{
        font-size: 2.7em;
        text-align: center;
        font-family: 'Anton', sans-serif;
        margin: 0px 0px 0px 0px;
    }
    .sign{
        font-family: 'Sacramento', cursive;
    }
    .member-photo{
         border: 1px solid #AAA;
        border-radius: 4px;
        padding: 3px;
       width:150px;
        height: 150px;
        box-shadow: 1px 1px 2px rgba(0,0,0,0.05);
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