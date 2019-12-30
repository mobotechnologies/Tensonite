<!DOCTYPE html>
<html lang="en">
  <head>
   <link rel="icon" type="image/ico" sizes="16x16" href="images/tent.png">
    <title>Tensonite</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<style>
	.ftco-navbar-light .navbar-nav > .nav-item.active > a {
    background: darkblue !important;
    color: #f8f9fa !important;
   }
	</style>
    <?php
	   $con = mysqli_connect("localhost","root","","tensonite");
	   if(isset($_POST["submit"]))
	   {
		   $date=date("Y-m-d");
		   $sql = "INSERT INTO  contact(name,email,subject,message,date)VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["subject"]."','".$_POST["message"]."','$date')";
        
			if (mysqli_query($con, $sql)) 
			{
				?>
				<div class="alert alert-success" role="alert">
				     Message sent
				</div>
				<?php
			}
			else
		    {
				?>
				<div class="alert alert-success" role="alert">
				    Error ! try again
				</div>
				<?php
			}

	   }
	  
	?>
  </head>
  <body>
   
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><img src="images/tent.png"  style="width: 130px;"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="project.html" class="nav-link">Project</a></li>
	        	<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	        	<li class="nav-item"><a href="blog.html" class="nav-link">Products</a></li>
	          <li class="nav-item active"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4 contactheader">For tensile fabric architectural enquirers please contact</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 cont" >
            <div class="address"> Address<span class="pad1">:</span></div> 
			<div class="addressfont" style="padding-left: 9px;">NO : 33 , 7TH CROSS , PIPDIC ESTATE SEDARAPET PUDUCHERRY 605 111,INDIA </div>
          </div>
          <div class="col-md-2 cont" > 
            <p>Tel<span class="pad2">:</span> <a href="tel://1234567920" class="telink">+91-413 2677769</a></p>
          </div>
		  <div class="col-md-2 cont" >
            <div class="phones">Ph<span class="pad3">:</span></div> 
			<div style="padding-left: 9px;"><a href="mailto:info@yoursite.com" class="phoneslink">+91-99449 17575</br>+91-97860 17575</a></p></div>
          </div>
          <div class="col-md-2 cont" >
            <div class="eml">Email<span class="pad4">:</span></div>
			<div class="emlink" style="padding-left: 9px;"><a href="mailto:info@yoursite.com">info@tensonite.com</br>tensonite@gmail.com</a></div>
          </div>
   
          </div>
        </div>
      </div>
    </section>
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container-wrap">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-5 order-md-last">
						<form action="contact.php" method="post">
              <div class="form-group">
                <input type="text" class="form-control"   name="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit"  name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
					
						<div id="map"></div>
					</div>
				</div>
			</div>
		</div>
    
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><img src="images/tent.png"  style="width: 130px;"></h2>
              <p>The tension Structure Tensonite Pvt .Ltd provides elegant solutions for architects,designers, general contractors and anyone who is looking to spice up the ambiance of their environment.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.html"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="about.html"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <li><a href="project.html"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
				<li><a href="services.html"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
				<li><a href="blog.html"><span class="icon-long-arrow-right mr-2"></span>Products</a></li>
                <li><a href="contact.php"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="blog.html"><span class="icon-long-arrow-right mr-2"></span>DOUBLE CONE</a></li>
                <li><a href="awningshades.html"><span class="icon-long-arrow-right mr-2"></span>AWNINGS & SHADES</a></li>
                <li><a href="pneumatics.html"><span class="icon-long-arrow-right mr-2"></span>PNEUMATICS</a></li>
                <li><a href="marquees.html"><span class="icon-long-arrow-right mr-2"></span>MARQUEES</a></li>
                <li><a href="tenthouse.html"><span class="icon-long-arrow-right mr-2"></span>TENT HOUSES</a></li>
				<li><a href="tentint.html"><span class="icon-long-arrow-right mr-2"></span>TENT HOUSES INTERIOR</a></li>
				<li><a href="arabian.html"><span class="icon-long-arrow-right mr-2"></span>ARABIAN TENT [PAGODA]</a></li>
				<li><a href="shapetent"><span class="icon-long-arrow-right mr-2"></span>A SHAPE TENTS</a></li>
				<li><a href="pyramid.html"><span class="icon-long-arrow-right mr-2"></span>PYRAMID</a></li>
				<li><a href="tentint.html"><span class="icon-long-arrow-right mr-2"></span>TENT INTERIORS</a></li>
              </ul>
            </div>
          </div>
                 <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2" style="color:blue">TENSONITE PVT LTD</h2>
            	<p>NO : 33 , 7TH CROSS , PIPDIC ESTATE SEDARAPET PUDUCHERRY 605 111,INDIA </p>
                <table>
				    <tr>
				       <td style="color: orange;font-color: yellow;">E-mail</td>
					   <td style="padding-left: 9px;">:</td>
					   <td style="color: white;padding-top: 27px;padding-left: 10px;">tensonite@gmail.com</br>info@tensonite.com</td>
					</tr>
					<tr>
					   <td style="color:orange">Tel</td>
					   <td></td>
					   <td style="color:white">+91-413 2677769</td>
					</tr>
					<tr>
					   <td style="color:orange">Ph</td>
					   <td></td>
					   <td style="color:white">+91-99449 17575</br>+91-97860 17575
					   </td>
					</tr>
				</table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed by  <a href="https://binary2quantumsolutions.com" target="_blank">Binary2Quantum Techbase</a>
</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="blue"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d9c13d8db28311764d7c6e1/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
   <script type="text/javascript" >
	function myMap() {
	  var myCenter = new google.maps.LatLng(12.001139,79.752567);
	  var mapCanvas = document.getElementById("map");
	  var mapOptions = {center: myCenter, zoom: 10};
	  var map = new google.maps.Map(mapCanvas, mapOptions);
	  var marker = new google.maps.Marker({position:myCenter});
	  marker.setMap(map);
	}
	</script>
    <script  type="text/javascript" src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBjPzMCvReUhc-EqTkLHcui5BUOH-G0UZQ&callback=myMap'></script>
  <script src="js/main.js"></script>
  <script>
     $(document).ready(function()
	 {
	    $('img').mousedown(function (e) {
		  if(e.button == 2) { // right click
			return false; // do nothing!
		  }
		});
	 });
  </script>
   
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
  </body>
</html>