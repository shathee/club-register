<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sust Club Ltd') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/print.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="startTime()">
    <div id="app print">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="glyphicon glyphicon-menu-hamburger"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                        <!-- Authentication Links -->
                        <!--
                        @if (Auth::guest())
                            <li><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif
                        -->
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a class="thumbnil logo" href="{{ url('/') }}">
                            <img src="{{ url('img/sust.png')}}" />
                        </a>
                    </div>
                    @if(!isset($membership))
                    <div class="col-md-8">
                        
                        <div class="alert alert-warning hidden-print" role="alert">
                            {{-- <h3>
                            <p>Dear Primary Members</p>
                            <p>List of Submissions for founder members has been published here.</p>
                            <p class="text-danger">Please note that the actual numbers of founding members will be confirmed after payment verification.</p>
                            </h3> --}}
                            
                            <p class="lead">You Must Deposit the Membership Fee Before Submiting this form.</p>
                            <p>
                            Fees for <strong>Life Membership</strong> is <strong>BDT 80000.00(Eighty Thousand Only)[75000 Membership Appplication fee + 5000 Annual Subscription fee]</strong> 
                            </p>
                            <p>
                            Fees for <strong>General Membership</strong> is <strong>BDT 15000.00(Fifteen Thousand Only)[10000 Membership Appplication fee + 5000 Annual Subscription fee]</strong>  
                            </p>
                            <p class="lead">
                                So please deposit the required amount in favor of the following account - 
                                <ul class="list-unstyled b-acc info">
                                  <li>Account Title: SUST Club Ltd.
                                  </li>
                                  <li>Account Number: 0940320000108</li>
                                  <li>Branch: Malibagh Chowdhurypara </li>
                                  <li>Bank: Mutual Trust Bank Ltd</li>
                                </ul>
                            </p>
                            <p> For Query <a href="mailto:membership@sustclubltd.com">membership@sustclubltd.com</a></p>
                             

                        </div>
                   
                    </div>
                    @endif
                   
                </div>
            </div>
        </nav>
        
        <main class="">
            <div class="col-md-12 text-center">
                    <!-- Display the countdown timer in an element -->
                    
                    <!-- <p class="text-center text-danger" id="demo"></p>-->
                    
                    <!--
                    <script>
                    // Set the date we're counting down to
                    var countDownDate = new Date("Apr 18, 2018 23:59:59").getTime();

                    // Update the count down every 1 second
                    var x = setInterval(function() {

                      // Get todays date and time
                      var now = new Date().getTime();

                      // Find the distance between now an the count down date
                      var distance = countDownDate - now;

                      // Time calculations for days, hours, minutes and seconds
                      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                      // Display the result in the element with id="demo"
                      document.getElementById("demo").innerHTML = "<h3>" + hours + "</b>&nbsp;Hours "
                      + "<b>" + minutes + "</b>&nbsp;Minutes " + "<b>" + seconds + "</b>&nbsp;Seconds </h3><h4>Remaining for Founder Member Registration</h4>";

                      // If the count down is finished, write some text 
                      if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "EXPIRED";
                      }
                    }, 1000);
                    </script>
                    -->
                    
                </div>
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        function myFunction() {
            window.print();
        }
    </script>
</body>
</html>
