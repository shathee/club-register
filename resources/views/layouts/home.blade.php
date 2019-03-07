<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SUST CLUB</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  

  

  <!-- Bootstrap CSS File -->
 <!--
  <link href="{{ asset('homepage/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">

  <!-- Libraries CSS Files -->
  {{-- <link href="{{ asset('homepage/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"> --}}
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('homepage/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
  <!-- Page Content
    ================================================== -->
  <!-- Hero -->

  

  <header id="header">
  		
  		<!-- The social media icon bar -->
		<div class="icon-bar">
		  <a href="https://www.facebook.com/sustclublimited" class="facebook"><i class="fab fa-facebook"></i></a> 
		  <a href="#" class="twitter"><i class="fab fa-twitter"></i></a> 
		  <a href="#" class="google"><i class="fab fa-google"></i></a> 
		  <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
		  <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>

		</div>
  		
             			
    <div class="container">

		<nav class="navbar navbar-expand-sm navbar-light bg-faded">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Brand -->
		<a id="logo" href="{{ url('/')}}"><img src="{{ asset('homepage/img/sustt.png')}}" alt="" title="" /></img></a>

		<a href="#" id="logo-text" class="scrollto">&nbsp;SUST<span>&nbsp;Club Limited</span>
		</a>

		<!-- Links -->
		<div class="collapse navbar-collapse" id="nav-content">   
			<ul class="navbar-nav">
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" id="About-DropDown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					About Us
					</a>
					<div class="dropdown-menu" aria-labelledby="About-DropDown">
						<a class="dropdown-item" href="#">About SUST Club</a>
						<!--
		             	<a class="dropdown-item" href="#">Executive Commitee</a>
		             	<a class="dropdown-item" href="#">Awareness Team</a>
		             	<a class="dropdown-item" href="#"></a>
		             	-->
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Documents-DropDown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					Documents
					</a>
					<div class="dropdown-menu" aria-labelledby="Documents-DropDown">
						<a class="dropdown-item" href="{{ url('docs/SUST-Club-Limited-Memorandum-of-Association.pdf')}}" download="Memorandum of Association.pdf">Memorandum of Association</a>
				        <a class="dropdown-item" href="{{ url('docs/SUST-Club-Limited-Articles-of-Association.pdf')}}" download="Articles of Association.pdf">Articles of Association</a>
				        <a class="dropdown-item" href="{{ url('docs/SUST-Club-Limited-The-Club-By-Laws.pdf')}}" download="By Lawsf">By Laws</a>
				        <a class="dropdown-item" href="{{ url('#')}}" download="By Lawsf">Forms</a>
         
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Membership-DropDown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					Membership
					</a>
					<div class="dropdown-menu" aria-labelledby="Membership-DropDown">
						<a class="dropdown-item" href="{{ action('MemberListController@index') }}">Founder Members</a>
			            <a class="dropdown-item" href="{{ action('MemberListController@index') }}">Life Members</a>
			            <a class="dropdown-item" href="{{ action('MemberListController@index') }}">General Members</a>
			            <a class="dropdown-item" href="#">Membership Criteria</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('contact')}}">Contact Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">FAQ</a>
				</li>
				
			</ul>
		</div>
		



	<!--
      <div id="logo" class="pull-left">
        <a href="{{ url('/')}}"><img src="{{ asset('homepage/img/sustt.png')}}" alt="" title="" /></img></a>-->
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      <!--</div>-->
      <!--
      <nav id="nav-menu-container">
      	

	    <ul class="nav-menu ">

          <li><a href="#">About Us</a></li>
		  <li><a href="{{ url('docs/SUST-Club-Limited-Memorandum-of-Association.pdf')}}" download="Memorandum of Association.pdf">Memorandum of Association</a></li>
          <li><a href="{{ url('docs/SUST-Club-Limited-Articles-of-Association.pdf')}}" download="Articles of Association.pdf">Articles of Association</a></li>
          <li><a href="{{ url('docs/SUST-Club-Limited-The-Club-By-Laws.pdf')}}" download="By Lawsf">By Laws</a></li>
			
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
      -->
      <!-- #nav-menu-container -->
<!-- 
      <nav class="nav social-nav pull-right d-none d-lg-inline">
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="https://www.facebook.com/sustclublimited" target="_blank"><i class="fa fa-facebook"></i></a> <a href="www.facebook.com/sustclublimited"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
      </nav>
      -->
    </div>
  </header>


 
    <div class="container-fluid">
      <div class="row">
		<div class="col-md-10 offset-md-1 ">
		@yield('content')	
		
			
			
		</div>
	  </div>
	  	@yield('bottom-content')
	  
	  <!--
	  <div class="row">
		<div class="holder col-md-4 offset-md-1">
		  <ul id="ticker01">
						
				<li>
					<span>20/04/2018</span>
					<a href="#">First Meeting of Founder Members held in Ladies Club Uttara</a>
				</li>
				<li>
					<span>16/03/2018</span>
		
				</li>
				<li>
					<span>06/01/2018</span>
					<a href="#">Formation of Awareness Team for SUST CLUB Campaign and Drafting of Memorandum and Articles</a>
				</li>
				<li>
					<span>20/04/2018</span>
					<a href="#">First Meeting of Founder Members held in Ladies Club Uttara</a>
				</li>
				<li>
					<span>16/03/2018</span>
					<a href="#">Meetign for discussion about SUST Club Formation & Declaration of Road Map</a>
				</li>
			</ul>
		</div>
      </div>
  -->
    </div>

  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>


  <!-- Required JavaScript Libraries -->
  <script src="{{ asset('homepage/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('homepage/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('homepage/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{ asset('homepage/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{ asset('homepage/lib/tether/js/tether.min.js')}}"></script>
  <script src="{{ asset('homepage/lib/stellar/stellar.min.js')}}"></script>
  <script src="{{ asset('homepage/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('homepage/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('homepage/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ asset('homepage/lib/easing/easing.js')}}"></script>
  <script src="{{ asset('homepage/lib/stickyjs/sticky.js')}}"></script>
  <script src="{{ asset('homepage/lib/parallax/parallax.js')}}"></script>
  <script src="{{ asset('homepage/lib/lockfixed/lockfixed.min.js')}}"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

  <script type="text/javascript">
  	/**
  	jQuery.fn.liScroll = function(settings) {
		settings = jQuery.extend({
			travelocity: 0.03
			}, settings);		
			return this.each(function(){
					var $strip = jQuery(this);
					$strip.addClass("newsticker")
					var stripHeight = 1;
					$strip.find("li").each(function(i){
						stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
					});
					var $mask = $strip.wrap("<div class='mask'></div>");
					var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
					var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width 	
					$strip.height(stripHeight);			
					var totalTravel = stripHeight;
					var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye		
					function scrollnews(spazio, tempo){
					$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
					}
					scrollnews(totalTravel, defTiming);				
					$strip.hover(function(){
					jQuery(this).stop();
					},
					function(){
					var offset = jQuery(this).offset();
					var residualSpace = offset.top + stripHeight;
					var residualTime = residualSpace/settings.travelocity;
					scrollnews(residualSpace, residualTime);
					});			
			});	
	};

	$(function(){
	    $("ul#ticker01").liScroll();
	});
	**/
  </script>
  	<script src="siema.min.js"></script>
	<script>
	  new Siema();
	</script>

</body>
</html>
