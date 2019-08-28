
<?php

include("admin/dbconnect.php");

?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Projects</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Megacorp a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/blog.css" rel="stylesheet" type='text/css' media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Mono:300,300i,400,400i,500,500i,700" rel="stylesheet">
</head>

<body>
	<!--Header-->
	<div class="header" id="home">
		<!--top-bar-w3-agile-->
		<div class="top-bar_w3agileits">
			<div class="top-logo_info_w3layouts">
				<div class="col-md-3 logo">
					<a class="navbar-brand" href="index.php"><img src="images/ace111.png" style="width:100%;height:75px" alt=" "></a>
				</div>
				<div class="col-md-9 adrress_top">
					<div class="adrees_info">
						<div class="col-md-4 visit">
							<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
								<span class="fa fa-home" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
								<h4>Visit us</h4>
								<p>101 ijede road,Ikorodu, lagos.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4 mail-us">
							<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
								<span class="fa fa-phone" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
								<h4>Call us</h4>
								<p><a href="mailto:info@example.com">08037570245 08185917710 </a></p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4 mail-us">
							<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
								<span class="fa fa-envelope" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
								<h4>Mail us</h4>
								<p><a href="mailto:info@example.com">aceweldingandfab@yahoo.com aceweldings@gmail.com </a></p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					 <p><h5>BN 2468485</h5></p>
					 <iframe src="http://free.timeanddate.com/clock/i6cglp73/n125/tlng/ftb/pt2/pb2" frameborder="0" width="58" height="21"></iframe>
					<ul class="top-right-info_w3ls">
						
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header-nav">
				<div class="inner-nav_wthree_agileits">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav>
								<ul class="nav navbar-nav">
									<li><a href="index.php" >Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="services.php">Services</a></li>
									<li><a class="active" href="project.php">Gallery</a></li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="mail.php">Mail Us</a></li>
								</ul>
							</nav>

						</div>
					</nav>
					<div class="search">
						<div class="cd-main-header">
							<ul class="cd-header-buttons">
								
							</ul>
							<!-- cd-header-buttons -->
						</div>
						
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--//top-bar-w3-agile-->
		<!-- banner-text -->

		<!--//Slider-->
	</div>
	<!--/inner_banner-->
	
	<!--//inner_banner-->
	<!--/short-->
	
	<!--//short-->
	<!-- /inner_content -->

	<!-- /projects -->

	<!-- //projects -->
	


	
	
<div class='banner_bottom'>

<h3 class="tittle">Photo Gallery</h3>

		<div class='container'>
			<div class='inner_sec_info_wthree_agile'>

				<div class='col-md-12 blog_section'>
				
				<?php


					$qry = "SELECT * FROM projecttbl order by projectid desc  ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){
				$img  = $row['post_img'];
			echo"
					
					<div class='col-md-6 blog_img'>
						<div class='blog_con1'>
							<a href='single.html'><img src='admin/post_image/$img' alt=' ' class='img-responsive' style='height:100%' ></a>
							
						</div>
					</div>
		
					
			
							";
			
				
			}
			?>	
					
					
					
					
				 <div class='clearfix'> </div>
				
				<!----pagination----->	
				<!----//pagination----->
				</div>
				
				<div class='clearfix'> </div>
			</div>
		</div>
		
		
		
	</div>	
	
			
	
	<!-- /stats -->

	<!-- //stats -->
	<!--footer -->
		<div class="footer">
		<div class="container">
			<div class="footer-top_wthree_agileits">
				<div class="col-md-6  footer-grid_w3ls_agile">
					<div class="footer-title">
						<h2>Our Vision</h2>
					</div>
					<div class="footer-text">
						<p>To be the No1 provider of steel fabrication and welding services through quality and put.</p>
					</div>
				</div>
				<div class="col-md-6  footer-grid_w3ls_agile">
					<div class="footer-title">
						<h3>Office Hour</h3>
					</div>
					<div class="footer-office-hour">
					<div class="col-md-6  footer-grid_w3ls_agile">
						<ul>
							<li class="hd">Opening Days :</li>
							<li>Monday – Friday : 8am to 5pm</li>
							<li>Saturday : 9am to 3pm</li>
						</ul>
						</div>
						<div class="col-md-6  footer-grid_w3ls_agile">
						<ul>
							<li class="hd">Vacations :</li>
							<li>All Sundays</li>
							<li>All Official Holidays</li>
						</ul>
						</div>
					</div>
				</div>
				
				
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="copyrighttop">
				<ul>
					<li>
						<h4>Follow us on:</h4>
					</li>
					<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a class="facebook" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="copyrightbottom">
				<p>© 2018 Ace. All Rights Reserved | Design By <a href="#">1607concept</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //copyright -->


	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>

	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->


	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
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
	<!-- script for responsive tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--// script for responsive tabs -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>

</html>