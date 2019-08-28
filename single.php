<?php

include("admin/dbconnect.php");
$id = $_GET['id'];

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
	<title>Read</title>
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
	<link href="css/single.css" rel="stylesheet" type='text/css' media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Mono:300,300i,400,400i,500,500i,700" rel="stylesheet">
</head>

<body>
	<!--Header-->
	<div class="header" id="home">
		<!--top-bar-->
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
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="services.php">Services</a></li>
									<li><a href="project.php">Gallery</a></li>
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
	</div>
	<!--//Header-->
	<!--/inner_banner-->
	
	<!--//inner_banner-->
	<!--/short-->
	
	<!--//short-->
	<!-- /inner_content -->
	<div class="banner_bottom">
		<div class="container">
			<div class="tittle_head">
				<h3 class="tittle">Read More ....</h3>
			</div>
			<div class="inner_sec_info_wthree_agile">
			
			
	
				<div class'col-md-12 blog_sectio'>
				
						<?php
	$sql = "select * from posttbl where postid = '$id'";
	$run = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_array($run))
	{
		$id=$row['postid'];
		$img=$row['post_img'];
		$ptitle=$row['post_title'];
		$pcon=$row['post_content'];
		echo"
					<div class'blog_img singl'>
					
					
			
						<div class='single-left1'>
							<img src='admin/post_image/$img' style='height:300px; width:100%; margin:auto;' alt=' ' class='img-responsive'>
							<h5>$ptitle</h5>
							<ul class='blog_list single'>
								<li><span class='fa fa-user' aria-hidden='true'></span><a href='#'>Admin</a><i>|</i></li>

							</ul>
							<p>$pcon</p>
						</div>
						
								
	
							
						";
	}
	
	?>
						
						
						
	
								
						<div class='comments'>
							<h3>Comments</h3>
							<div class='comments-grids'>
							
												
												<?php
	$sql = "select * from commenttbl where postid= '$id'";
	$run = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_array($run))
	{ 
        $cid=$row['comid'];
		$id=$row['postid'];
		$pname=$row['name'];
		$pdate=$row['date'];
		$pcomm=$row['comment'];
		echo"
								<div class='comments-grid'>
									<div class='comments-grid-right'>
										<h4><a href='#'>$pname</a></h4>
										<ul>
											<li>$pdate </li>																						
										</ul>
										<p>$pcomm</p>
									</div>
									<div class='clearfix'> </div>
								</div>
							
							
						";
	}
	
	?>
							</div>
						</div>
					<div class="contact-form left_bar">
							<h3>Leave a Comment</h3>
							<form method="post" action="#">
								<div class="right_form">
									<div>
										<span><label>Name</label></span>
										<span><input name="cname" type="text" class="textbox" required=""></span>
									</div>
								</div>
								<div class="right_form">
									<div>
										<span><label>Message</label></span>
										<span><textarea name="comm" required=""> </textarea></span>
									</div>
									<div>
										<span><input type="submit" name="post" value="Submit" class="myButton"></span>
									</div>
								</div>
								<div class="clearfix"></div>
							</form>
							
	
		    <?php
		  if(isset($_POST['post']))
		  {
			  
              $pname=$_POST['cname'];
	          $pcomm=$_POST['comm'];
			
			  
			  include("admin/dbconnect.php");
			  
             $qry = "INSERT INTO `commenttbl`(`comid`, `postid`, `name`, `date`, `comment`) VALUES ('','$id','$pname',CURRENT_TIMESTAMP,'$pcomm')";
			  
			$run = mysqli_query($conn,$qry);
			  if($run){
				  echo"<script>alert('comment sent')</script>";
			  }
			  else
			  {
				echo"<script>alert('Not successful')</script>"; 
              }	
			  
		  }

?>	  
	
		  
		  
							
						</div>
					</div>


				</div>

			
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

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