<!DOCTYPE html><html lang="{{ app()->getLocale() }}"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><!-- CSRF Token --><meta name="csrf-token" content="{{ csrf_token() }}"><base href="{{ url('/') }}"><!-- Styles --><!--<link type="text/css" media="all" href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet"><link type="text/css" media="all" href="{{ asset('public/css/app.css') }}" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
--><link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Playfair+Display|Righteous|Roboto+Condensed|Sacramento|Ubuntu" rel="stylesheet">
<style type="text/css" media="all">
/* vietnamese */



@page{
   size: 8.27in 11.69in;
/*size: A4 portrait;*/
         
}
body{
    margin: none;
    font-family: 'garamond';
    border: 1px solid #c40000;
    background-color: #fefefe;
    font-size: 10px;
        
}
.container{
    /*background-color: #EAE5F1;*/
    page:container;
    margin: none;
    
}
    .card{
        /*background-color: #EAE5F1;*/
        margin: none;
    }
    .logo img{ width:100px;height:100px; text-align: center; }
    
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
        padding-left: 10px;
        width: 100%;
        border: 1px dashed #cecece; 
    }
    .h1{
        font-size: 2.8em;
        text-align: center;
        font-family: 'Anton', sans-serif;
        margin: 0px 0px 0px 0px;
    }
    .h4{
        font-size: 1.8em;
        text-align: center;
        
        margin: 0px 0px 0px 0px;
    }
    .sign{
        font-family: 'Sacramento', cursive;
    }
    .member-photo{
         border: 1px solid #AAA;
        border-radius: 4px;
        padding: 3px;
       width:100px;
        height: 100px;
        box-shadow: 1px 1px 2px rgba(0,0,0,0.05);
         text-align: center;
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