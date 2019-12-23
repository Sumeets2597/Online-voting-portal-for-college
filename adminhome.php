<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>VESIT</title>
<?php
session_start();
?>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Discipline Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- header -->
		<div class="banner-top">
		 <div class="collapse navbar-collapse" id="navbar-collapse">
                    <?php
                    if(isset($_SESSION['username'])){
    echo "Welcome {$_SESSION['username']}";


                        ?>
                       
                        <ul class="nav navbar-nav navbar-right">

                            
                           <li><a href="index.php">Logout</a></li>
                           
                        </ul>
                    <?php    
                   }
                    else{
                    ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="Register.php">Log In</a></li>
                        </ul>
                    <?php
                    }
                    ?>
                </div>
		
			<div class="clearfix"></div>
		</div>
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html">Vesit</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="adminhome.html" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="about.html" class="menu__link">About</a></li>
							<li class="menu__item"><a href="gallery.html" class="menu__link">Council Members</a></li>
							<li class="menu__item"><a href="registermember.php" class="menu__link">Register Member</a></li>
							<li class="menu__item"><a href="contact.html" class="menu__link">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								
				
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								
									
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								
									
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
	</div>	
	<!-- //banner --> 
<!--//Header-->
<!-- //Modal1 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>DISCIPLINE</h4>
							<img src="images/1.jpg" alt=" " class="img-responsive">
							<h5>We know what you love</h5>
							<p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
					</div>
				</div>
		</div>
	</div>
<!-- //Modal1 -->
<!-- /about -->
 	<div class="about-wthree">
		<div class="container">
			<div class="ab-w3l-spa">
			<div class="w3layouts_head">
					<h3 class="tittle"> Welcome</h3>
						<div class="border"></div>
				</div>
               <p class="about-para-w3ls">Vivekanand Education Society's Institute of Technology also known as VESIT or V.E.S. Institute of Technology, established in 1984, is a premiere engineering college affiliated with the University of Mumbai.</p>
				<img src="images/about.jpg" class="img-responsive" alt="Hair Salon">
					<div class="w3l-slider-img">
						<img src="images/a1.jpg" class="img-responsive" alt="Hair Salon">
					</div>
                    
		    </div>
		   	<div class="clearfix"> </div>
		</div>
	</div>
<!-- //about -->

<!--welcome-->
				<div class="service-w3l">
					<div class="container">
					<div class="w3layouts_head">
						<h3 class="tittle"> Principal's Desk</h3>
						<br>
						<p align="center"><b>Dr.(Mrs) J. M. Nair</b></p>
						
					</div>
					<div align="center">
					<img src="images\principal.jpg">
					</div>

					<div>
					<br>
					<p>

The year 2017 will be remembered as a year when India’s space programme rocketed into record books by successfully deploying 104 satellites into the orbit – a feat not accomplished by any country so far.</p>

					</div>	
			
					</div>
					</div>
				</div>
				<!-- Counter -->

<!-- //Counter -->
<!-- news -->
	<div class="w3-news"> 
		<div class="container"> 
			<div class="w3layouts_head">
				<h3 class="tittle">Latest News</h3>
					<div class="border"></div>
				</div>
			<div class="news-info">
				<div class="col-md-6 event-grids">
					<div class="w3layouts-text">
						<h4>22<span>July</span></h4>
						<h6><a href="#" data-toggle="modal" data-target="#myModal">Collage Council Elections <br>
						<p align="center">(NOMINATION)</p></a></h6>
						<div class="clearfix"> </div>
					</div>
					<p>Class council students, those who wants to contest for any post in college council has to fill a nomination form (copy attached).
You are requested to instruct the class teachers to get the nomination form filled from students interested in contesting</p>
				</div>
				<div class="col-md-6 event-grids">
					<div class="w3layouts-text">
						<h4>27<span>July</span></h4>
						<h6><a href="#" data-toggle="modal" data-target="#myModal">Collage Council Elections<p align="center">(POOLING)</p></a></h6>
						<div class="clearfix"> </div>
					</div>
					<p>Class council students, those who wants to vote for any post in college council have to login and vote on 15-08-2017, 12:00PM Sharp</p>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div> 
	</div> 
	<!-- //news -->
  <!-- visitors -->
	<div class="w3l-visitors-agile" >
		<div class="container">
			<div class="w3layouts_head">
				<h3 class="tittle">Testimonials</h3>
					<div class="border"></div>
				</div>
			</div>
		<div class="w3layouts_work_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/3.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/teamb1.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								Vestibulum lacus blandit
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus. 
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, 
									at imperdiet urna. </p>
								<h5>Julia Rose</h5>
								<p>Tempus</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/2.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/teamb2.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus. 
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, 
									at imperdiet urna. </p>
								<h5>Jahnatan Smith</h5>
								<p>Tempus</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/1.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/teamb3.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus. 
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, 
									at imperdiet urna. </p>
								<h5>Rosalind Cloer</h5>
								<p>Tempus</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/2.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/teamb4.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus. 
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, 
									at imperdiet urna. </p>
								<h5>Amie Bublitz</h5>
								<p>Tempus</p>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
			</section>
		</div>	
	</div>
  <!-- visitors -->
  	

   <!-- Footer -->
	<div class="w3l-footer">
		<div class="container">
         <div class="footer-info-agile">
				<div class="col-md-2 footer-info-grid links">
					<h4>Quick links</h4>
					<ul>
						       <li><a href="index.html">Home</a></li> 
								<li><a href="about.html">About</a></li> 
								<li><a href="icons.html">Icons</a></li> 
								<li><a href="gallery.html">Gallery</a></li> 
								<li><a href="contact.html">Contact</a></li> 
					</ul>
				</div>
				<div class="col-md-3 footer-info-grid address">
					<h4>Address</h4>
					<address>
						<ul>
							<li>Mexico United States 3000</li>
							<li>40019 Honey Street</li>
							<li>BO,Mexico</li>
							<li>Telephone : +1 (734) 123-4567</li>
							<li>Email : <a class="mail" href="mailto:mail@example.com">info(at)example.com</a></li>
						</ul>
					</address>
				</div>
				<div class="col-md-3 footer-grid">
				   <h4>Instagram</h4>
					<div class="footer-grid-instagram">
					<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g1.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g2.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g3.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g4.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 footer-info-grid">
				<div class="connect-social">
					<h4>Connect with us</h4>
					<section class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
							
							
							<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</section>

				</div>
					

					
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="connect-agileits newsletter">
				<h4>Newsletter</h4>
					<p>Subscribe to our newsletter and we will inform you about newest projects and promotions.
					</p>
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email address..." required="">
						<input type="submit" class="submit" value="Subscribe">
					</form>
			</div>
	   </div>
     </div>
	<div class="copy">
		<p>© 2017 Discipline . All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
	</div>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
	
	<!-- js for Counter -->
		<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	<!-- /js for Counter -->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<div class="arr-w3ls">
		<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>