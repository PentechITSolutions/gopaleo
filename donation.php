<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include("connection.php");
extract($_REQUEST);
$email=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Green Life an Agriculture Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Green Life web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script> 
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

		function addToCart()
			{
			
				
				var x=confirm("You want to delete this record? All Product Items Of that Customer Will Also Be Deleted");
				if(x== true)
				{
				<?php	
					$pid=0;
		$pcount=0;
		$pprice=0;
		$sql1=mysqli_query($con,"select * from registration where email='$email' ");
		$regRow=mysqli_fetch_array($sql1);
		$cid=$regRow['cid'];
		$cname=$regRow['username'];
			$sql=mysqli_query($con,"insert into cart (cid, pid, cname, cemail, pcount, pprice) 
			values ('$cid','$pid','$cname','$email','$pcount','$pprice')");
			?>
				}
				else
				{
					$admin_login_error="Invalid Username or Password";	
				}
				
			}

			function delRecord(id)
			{
				//alert(id);
				cid=id;
				console.log(id);
				var x=confirm("You want to delete this record? All Product Items Of that Customer Will Also Be Deleted");
				if(x== true)
				{
					<?php
					$sql1=mysqli_query($con,"delete from cart where cid='$cid' ");
		?>
				}
				else
				{
					window.location.href='#';
				}
				
			}
	</script>
	<!--// Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-css -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Font-Awesome-Icons-css -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Popup css (for Video Popup) -->
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="all">
	<!-- Lightbox css (for Projects) -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<!-- Flexslider css (for Testimonials) -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Economica:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Rasa:300,400,500,600,700" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div class="main-agile">
		<!-- banner -->
		<div class="agile-top">
			<div class="col-xs-4 logo">
				<h1>
					<a href="index.php">
						<span>G</span>reen
						<span>L</span>ife</a>
				</h1>
			</div>
			<div class="col-xs-6 header-w3l">
				<ul>
					<li>
						<a href="userlogin.php">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Plant Now </a>
					</li>
					<li>
					<a href="#" data-toggle="modal" data-target="#cart">
							<span class="fa fa-shopping-cart" aria-hidden="true"></span> Cart </a>
					</li>
				</ul>
			</div>
			<!-- navigation -->
			<div class="col-xs-2 menu">
				<a href="" id="menuToggle">
					<span class="navClosed"></span>
				</a>
				<nav>
					<a href="index.html">Home</a>
					<a href="#about" class="scroll">About Us</a>
					<a href="#services" class="scroll">Services</a>
					<a href="#team" class="scroll">Team</a>
					<a href="#projects" class="scroll">Projects</a>
					<a href="#contact" class="scroll">Contact Us</a>
				</nav>
			</div>
			<!-- //navigation -->
		</div>
	</div>

	<div class="modal fade" id="cart" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<!-- <div class="main-mailposi">
						<span class="fa fa-shopping-cart" aria-hidden="true"></span>
					</div> -->
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Your Cart</h3>
						<!-- <p>
							Come join the Green Life! Let's set up your Account.
						</p> -->
						<table class="table">
                 <thead>
                    <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Count</th>
                            <th>Amount</th>
                            <th>Remove</th>
                     </tr>
                 </thead>
				 <tbody>
	<?php
	$query=mysqli_query($con,"select  * from cart");
while($row=mysqli_fetch_array($query))	
	{
	?>
						
                
                    <tr>
						<td>	<?php
						 echo $row['cname'];?></td>
						<td><?php 
						echo $row['cemail'];?></td>
						<td><?php 
						echo $row['pcount'];?></td>
						<td><?php 
						echo $row['pprice'];?></td>
						<!-- <form method="post"> -->
                        <td><a href="#" style="text-decoration:none; color:white;" onclick="delRecord(<?php echo $row['$cid']; ?>)"><button type="button" class="btn btn-danger">Remove</a></td>
                        <!-- </form> -->
                   </tr>
		<?php
		}
		?>		   
                </tbody>
           </table>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>

	<!-- team -->

	<div class="team">
		<div class="container">
		<br><br><br><br><br>
			<div class="title-div">
				<h3 class="tittle">
				<span>D</span>onate&nbsp;<span>N</span>ow
				</h3>
				<div class="tittle-style">
				</div>
			</div>
			<div class="col-md-6 testimonials-main">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="inner-testimonials-w3ls">
									<img src="images/tt1.jpg" alt=" " class="img-responsive" />
									<div class="testimonial-info-wthree">
										<h5>25 Plants<br>&#8377;1000</h5>
										<a href="#" data-toggle="modal" style="margin-top: 0px" data-target="#myModal1" class="w3-buttons" onclick="addToCart(<?php echo $row['']; ?>)">Add To Cart</a>
										<p class="para-w3-agileits" style="color: white">Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="inner-testimonials-w3ls">
									<img src="images/tt2.jpg" alt=" " class="img-responsive" />
									<div class="testimonial-info-wthree">
										<h5>50 Plants<br>&#8377;2000</h5>
										<a href="#" data-toggle="modal" style="margin-top: 0px" data-target="#myModal1" class="w3-buttons" onclick="addToCart(<?php echo $row['']; ?>)">Add To Cart</a>
										<p class="para-w3-agileits" style="color: white">Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="inner-testimonials-w3ls">
									<img src="images/tt3.jpg" alt=" " class="img-responsive" />
									<div class="testimonial-info-wthree">
										<h5>100 Plants<br>&#8377;3999</h5>
										<a href="#" data-toggle="modal" style="margin-top: 0px" data-target="#myModal1" class="w3-buttons" onclick="addToCart(<?php echo $row['']; ?>)">Add To Cart</a>
										<p class="para-w3-agileits" style="color: white">Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="inner-testimonials-w3ls">
									<img src="images/tt3.jpg" alt=" " class="img-responsive" />
									<div class="testimonial-info-wthree">
										<h5>500 Plants<br>&#8377;6999</h5>
										<a href="#" data-toggle="modal" style="margin-top: 0px" data-target="#myModal1" class="w3-buttons" onclick="addToCart(<?php echo $row['']; ?>)">Add To Cart</a>
										<p class="para-w3-agileits" style="color: white">Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<!-- <div class="team" id="team">
		<div class="container">
    <br><br><br><br>
			<div class="title-div">
				<h3 class="tittle">
					<span>D</span>onate&nbsp;<span>N</span>ow
				</h3>
				<div class="tittle-style">
				</div>
			</div>
			<div class="agileits-team-grids">
				<div class="col-sm-3 col-xs-6 ">
					<div class="team-info">
						<img src="images/t1.jpg" alt="">
						<div class="team-caption">
							<h4>Shyam Gharote</h4>
							<ul>
								<li>
                <a href="userlogin.php">
							<span class="fa fa-unlock-alt" style="color: white" aria-hidden="true"></span><span style="color: white"> Plant Now </span> </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 ">
					<div class="team-info">
						<img src="images/t2.jpg" alt="">
						<div class="team-caption">
							<h4>Dr.Archana Gharote</h4>
							<ul>
								<li>
                <a href="userlogin.php">
							<span class="fa fa-unlock-alt" style="color: white" aria-hidden="true"></span><span style="color: white"> Plant Now </span> </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 ">
					<div class="team-info">
						<img src="images/t3.jpg" alt="">
						<div class="team-caption">
							<h4>Nana Yaw Asiedu Kwakye</h4>
							<ul>
								<li>
                <a href="userlogin.php">
							<span class="fa fa-unlock-alt" style="color: white" aria-hidden="true"></span><span style="color: white"> Plant Now </span> </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 ">
					<div class="team-info">
						<img src="images/t4.jpg" alt="">
						<div class="team-caption">
							<h4>Rakesh Vedyas</h4>
							<ul>
								<li>
                <a href="userlogin.php">
							<span class="fa fa-unlock-alt" style="color: white" aria-hidden="true"></span><span style="color: white"> Plant Now </span> </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> -->


	<!-- footer -->
	<div class="footer-bot">
		<div class="w3layouts-newsletter">
			<div class="w3ls-social-icons-2">
				<h3>Connect With Us On Social</h3>
				<a class="facebook" href="#">
					<i class="fa fa-facebook"></i>
				</a>
				<a class="twitter" href="#">
					<i class="fa fa-twitter"></i>
				</a>
				<a class="pinterest" href="#">
					<i class="fa fa-google-plus"></i>
				</a>
				<a class="linkedin" href="#">
					<i class="fa fa-linkedin"></i>
				</a>
			</div>
			<div class="col-md-7 agileinfo-newsletter">
				<h3>
					<i class="fa fa-envelope" aria-hidden="true"></i>Join our Newsletter</h3>
				<form action="#" method="post">
					<input type="email" placeholder="Enter Your Email" name="email" required="">
					<input type="submit" value="Subscribe">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="container">
			<div class="col-xs-3 logo2">
				<h2>
					<a href="index.html">
						<span>G</span>reen
						<span>L</span>ife</a>
				</h2>
			</div>
			<div class="col-xs-9 ftr-menu">
				<ul>
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a class="scroll" href="#about">About</a>
					</li>
					<li>
						<a class="scroll" href="#services">Services</a>
					</li>
					<li>
						<a class="scroll" href="#team">Team</a>
					</li>
					<li>
						<a class="scroll" href="#projects">Projects</a>
					</li>
					<li>
						<a class="scroll" href="#contact">Contact Us</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<div class="copy-right">
				<p> &copy; 2018 Green Life. All Rights Reserved | Design by
										<a href="#">Pentech IT Solutions</a>

				</p>
			</div>
		</div>
	</div>
	<!-- //footer -->


	<!-- js-scripts -->

	<!-- jquery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!--  light box js -->
	<script src="js/lightbox-plus-jquery.min.js"></script>
	<!-- //light box js-->
	
	<!-- stats numscroller-js-file -->
	<script src="js/numscroller-1.0.js"></script>
	<!-- //stats numscroller-js-file -->
	
	<!-- Baneer-js -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
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
	<!-- //Baneer-js -->

	<!-- navigation -->
	<script>
		(function ($) {
			// Menu Functions
			$(document).ready(function () {
				$('#menuToggle').click(function (e) {
					var $parent = $(this).parent('.menu');
					$parent.toggleClass("open");
					var navState = $parent.hasClass('open') ? "hide" : "show";
					$(this).attr("title", navState + " navigation");
					// Set the timeout to the animation length in the CSS.
					setTimeout(function () {
						console.log("timeout set");
						$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
					}, 200);
					e.preventDefault();
				});
			});
		})(jQuery);
	</script>
	<!-- //navigation -->

	<!-- pop-up(for video popup)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //pop-up-box (syllabus section video)-->
	
	<!-- video js (background) -->
	<script src="js/jquery.vide.min.js"></script>
	<!-- //video js (background) -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth scrolling-bottom-to-top -->
	<script>
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
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- //smooth scrolling-bottom-to-top -->

	<!-- flexSlider (for testimonials) -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->

	<!-- //js-scripts -->

</body>

</html>