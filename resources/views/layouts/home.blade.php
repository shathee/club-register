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

  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('homepage/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('homepage/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('homepage/css/style.css') }}" rel="stylesheet">

</head>

<body>
  <!-- Page Content
    ================================================== -->
  <!-- Hero -->

  

  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.html"><img src="{{ asset('homepage/img/sustt.png')}}" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      </div>

      <nav id="nav-menu-container">
	    <ul class="nav-menu">
          <li><a href="#">About Us</a></li>
		  <li><a href="{{ url('hompage/docs/SUST-Club-Limited-Memorandum-of-Association.pdf')}}" download="Memorandum of Association.pdf">Memorandum of Association</a></li>
          <li><a href="{{ url('hompage/docs/SUST-Club-Limited-Articles-of-Association.pdf')}}" download="Articles of Association.pdf">Articles of Association</a></li>
          <li><a href="{{ url('hompage/docs/SUST-Club-Limited-The-Club-By-Laws.pdf')}}" download="By Lawsf">By Laws</a></li>
			
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->

      <nav class="nav social-nav pull-right d-none d-lg-inline">
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="https://www.facebook.com/sustclublimited" target="_blank"><i class="fa fa-facebook"></i></a> <a href="www.facebook.com/sustclublimited"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
      </nav>
    </div>
  </header>


 
    <div class="container-fluid">
      <div class="row">
		<div class="col-md-10 offset-md-1 text-center">
			<!-- Display the countdown timer in an element -->
			
			<!-- <p class="text-center text-danger" id="demo"></p>-->
			

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
			
			
		</div>
	  
		
		<div class="col-md-10 offset-md-1 text-justify">
			<p>Dear Primary Members(Registered Life & General Members Only),</p>
                        <p>You are cordially invited to attend the first Founder Members' meeting of 
                        SUST Club Limited on <strong>April 20, 2018, Friday 3:00 PM </strong> Onward at <strong>Uttara Ladies Club, Road 8, Block 8, Sector 1, Uttara, Dhaka</strong>. Your participation and valuable inputs for the formation of first Executive Committee and registration formalities of the club would be highly appreciated.</p>
                        <p>Kind regards,</p>
                        <p>SUST Club Limited</p>
                   
			<!--			
			<p>Dear SUSTians,</p>
			<p>Heartiest welcome to all of you. The Registration for Founder Members has been ended </p>
			
			
			<p>Heartiest welcome to all of you. As per the road map presented in the last general meeting call for The SUST Club membership (Primary Members i.e. Life Member and General Member) 
			is on set. Starting from today the application for the membership will end at <strong>April 15, 2018</strong>. 
			Please be informed that Any Sustian who becomes a primary member (Life Member / General Member) fulfilling the required criteria within this timeframe will be
			a founder member. The Memorandum of Association, The Articles of association and The By Laws are hereby attached in the following links.
			Please read the documents to have the detail insights about membership criteria. If you find yourself eligible according to the membership 
			criteria’s stated in the articles you can step forward towards becoming a primary member. 
			The membership application form will be found <a href="apply/membership/create">here</a>. The submission of the membership form will require proper document of payment. 
			So please pay the required amount in favor of the following account – </p>
				-->	
		</div>
		
	  </div>
	  <div class="row">
	
		<!--
		<div class="col-md-7 offset-md-1 text-justify ">
			<p class="">
					Fees for <strong>Life Membership</strong> is <strong>BDT 75000.00(Seventy Five Thousand Only)</strong> with no annual subscription fee.
					</p>
					<p>
					Fees for <strong>General Membership</strong> is <strong>BDT 10000.00(Ten Thousand Only)</strong>  with annual Subscription Fee.
					</p>
					<p class="lead">
						So please deposit the required amount in favor of the following account - 
						<ul class="list-unstyled b-acc info">
						  <li>Account Title: Md Muklasur Rahman, Rashed Rafiuddin & Kazi Gulam Kadar</li>
						  <li>Account Number: 2161510170000</li>
						  <li>Branch: Ashulia Branch</li>
						  <li>Bank: Dutch-Bangla Bank Ltd.</li>
						</ul>
					</p>
					<p> For Query <a href="mailto:#">membership@sustclubltd.com</a></p>
			<p>
			
			After Successful payment  please fill up the <a href="apply/membership/create">Membership Form</a> with payment information (Upload a scan copy of Deposit Slip). You will be given a notification after your membership is confirmed.
			Thank You
			
			</p>
		
		</div>
		-->
		
		<div class="col-md-10 offset-md-1">
			
			<p class="text-center">
				<a href="docs/SUST-Club-Limited-Memorandum-of-Association.pdf" download="Memorandum of Association.pdf">
				<button type="button" class="btn btn-primary">Memorandum of Association</button>
				</a>
			</p>
			<p class="text-center">
				
				<a href="docs/SUST-Club-Limited-Articles-of-Association.pdf" download="Articles of Association.pdf">
				<button type="button" class="btn btn-info">Articles of Association</button></a>
				
			</p>
			<p class="text-center">
				<a href="docs/SUST-Club-Limited-The-Club-By-Laws.pdf" download="By Lawsf">
				<button type="button" class="btn btn-info">By Laws</button></a>
			</p>
			
			<p class="text-center">
				<a href="{{ url('membership')}}">
				<button type="button" class="btn btn-warning">List of Submissions for Founder Member</button></a>
			</p>
		</div>
		
		

      </div>
	  

    </div>



  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>


  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/tether/js/tether.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/lockfixed/lockfixed.min.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

</body>
</html>
