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
//   if(isset($myModal1))
//   {
// 	$sql=mysqli_query($con,"select * from login where username='$Name' && password='$password' ");
//     if(mysqli_num_rows($sql))
// 	{
// 	 $_SESSION['id']=$Name;
// 	header('location:index.php');	
// 	}
// 	else
// 	{
// 	$admin_login_error="Invalid Username or Password";	
// 	}
//   }
   
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
						<a href="register.php">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Join Us </a>
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
	<!-- signin Model -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						<p>
							Sign In now, Let's start your Grocery Shopping. Don't have an account?
							<a href="register.php" data-toggle="modal">
								Sign Up Now</a>
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<input type="submit" value="Sign In">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up</h3>
						<p>
							Come join the Green Life! Let's set up your Account.
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name" name="Name" required="">
							</div>
              <div class="styled-input">
								<input type="text" placeholder="Mobile No." name="mob" required="">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="Email" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" id="password1" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
							</div>
							<input type="submit" value="Sign Up">
						</form>
						<p>
							<a href="#">By clicking register, I agree to your terms</a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->

	<!-- banner-text -->
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div class="w3layouts-banner-top banner">
						<div class="container">
							<div class="agileits-banner-info">
								<h3>Create Dense Forest</h3>
								<p>Save the trees
									<i class="fa fa-tree" aria-hidden="true"></i> they will save you</p>
								<div class="video-pop-wthree">
									<a href="#small-dialog1" class="view play-icon popup-with-zoom-anim ">
										<i class="fa fa-play-circle" aria-hidden="true"></i>Watch Our Video</a>
									<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
										<iframe src="https://player.vimeo.com/video/19251347"></iframe>
									</div>
								</div>
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-chevron-down"></i>
									</a>
								</div>

							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top banner-2">
						<div class="container">
							<div class="agileits-banner-info">
								<h3>Survival of Mankind</h3>
								<p>Save the trees
									<i class="fa fa-tree" aria-hidden="true"></i> they will save you</p>
								<div class="video-pop-wthree">
									<a href="#small-dialog2" class="view play-icon popup-with-zoom-anim ">
										<i class="fa fa-play-circle" aria-hidden="true"></i>Watch Our Video</a>
									<div id="small-dialog2" class="mfp-hide w3ls_small_dialog wthree_pop">
										<iframe src="https://player.vimeo.com/video/19251347"></iframe>
									</div>
								</div>
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-chevron-down"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top banner-3">
						<div class="container">
							<div class="agileits-banner-info">
								<h3>Restore The Satisfaction of Life</h3>
								<p>Save the trees
									<i class="fa fa-tree" aria-hidden="true"></i> they will save you</p>
								<div class="video-pop-wthree">
									<a href="#small-dialog3" class="view play-icon popup-with-zoom-anim ">
										<i class="fa fa-play-circle" aria-hidden="true"></i>Watch Our Video</a>
									<div id="small-dialog3" class="mfp-hide w3ls_small_dialog wthree_pop">
										<iframe src="https://player.vimeo.com/video/19251347"></iframe>
									</div>
								</div>
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-chevron-down"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<!-- //banner-text -->
	</div>
	<!-- //banner -->

	<!-- about -->
	<div class="banner-bottom-w3l" id="about">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>GO</span>-Paleo
				</h3>
				<div class="tittle-style">
				</div>
				<p><b>"Go-Paleo"</b><br>Go towards the nature is the prime need of mankind for survival. The Dense forest can restore the feeling of satisfaction of life.</p>
			</div>
			<div class="welcome-sub-wthree">
				<div class="col-md-7 banner_bottom_left">
					<h4>About
						<span>Go-Paleo</span>
					</h4>
					<p>The word of Greek origin means “Older or Ancient”, especially relating to the geographical past. </p><br>
					<p>Since the beginning of evolution, Nature has always been the fundamental consideration for all living beings. Mankind has transformed by aligning itself to Nature. Evolution and inventions go hand in hand. The transformation of mankind in the new edge has evolved with time through inventions making life easy to handle but this change was more selfish and ignorant of its brutal spree of so-called development that took away almost everything natural. Effects are equally brutal and distinctly visible.</p><br>
					<p><a>Read more here...</a></p>
					<h6 class="w3l-style">Go-paleo</h6>
				</div>
				<!-- Stats-->
				<div class="col-md-5 stats-info-agile">
					<div class="w3l-right-stats">
						<div class="stats-grid stat-border">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1472' data-delay='.5' data-increment="1">1472</div>
							<p>Trees planted</p>
						</div>
						<div class="stats-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='2' data-delay='.5' data-increment="1">2</div>
							<p>Acre</p>
						</div>
						<div class="stats-grid stat-border border-st2">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='118' data-delay='.5' data-increment="1">118</div>
							<p>Volunteers</p>
						</div>
					</div>
				</div>
				<!-- //Stats -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->

	<!-- video section -->
	<div class="video-w3l" data-vide-bg="video/3">
		<h5>Time to realize our mistake is, Now. The time to change is, Now.</h5>
		<a href="#small-dialog4" class="play-icon popup-with-zoom-anim ">
			<i class="fa fa-play-circle-o" aria-hidden="true"></i>
		</a>
		<div id="small-dialog4" class="mfp-hide w3ls_small_dialog wthree_pop">
			<iframe src="https://player.vimeo.com/video/19251347"></iframe>
		</div>
	</div>
	<!-- //video section -->

	<!-- services -->
	<div class="agileits-services" id="services">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>W</span>hat We Do
				</h3>
				<div class="tittle-style">
				</div>
			</div>
			<div class="agileits-services-row">
				<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
						<i class="fa fa-tint" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 wthree-heading">
						<h4>Green Hills Project </h4>
					</div>
					<div class="clearfix"></div>
					<p>Hills invite us most awaitingly. Worst affected by the inconsiderate behaviour of today’s developed mankind, hills themselves are feeling nakedly exposed to savage attitude, the so-called progressive exploiting community. The rescue is in afforestation. We proudly shoulder the responsibility.</p>
					<a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
				</div>
				<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
						<i class="fa fa-recycle" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 wthree-heading">
						<h4>Road Side Plantation </h4>
					</div>
					<div class="clearfix"></div>
					<p>As per the expectations and needs of the time, the government is on an unimaginable construction spree. Road construction is reported to the tune of 250 KMs per day. The obvious land acquisition and removal of seasoned trees is now a day-to-day affair. We have taken up the task of Road-side Plantation. </p>
					<a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
				</div>
				<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
						<i class="fa fa-tree" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 wthree-heading">
						<h4>Urban Plantation </h4>
					</div>
					<div class="clearfix"></div>
					<p>As per the norms and guidelines of town development, some areas are secured for vegetation and plantation. An extensive and intense plantation is required. We proudly step into the picture and take it as our action area. </p>
					<a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits-services-row-2">
				<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
						<i class="fa fa-envira" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 wthree-heading">
						<h4>Forest Development </h4>
					</div>
					<div class="clearfix"></div>
					<p>One of the ways the corporate world can contribute through their social responsibility is by taking care of the environment. Adopting or patronising non-fertile or barren lands through the government to develop flora and fauna is an ambitious project. Go Paleo is prepared to handle this effectively.</p>
					<a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
				</div>
				<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
						<i class="fa fa-globe" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 wthree-heading">
						<h4>Water Conservation </h4>
					</div>
					<div class="clearfix"></div>
					<p>Afforestation, Plantation, and Water conservation are three things so closely knit together. Go Paleo intends to discover traditional ways of water management and revitalise shrunk water resources. This is an equally important project taken up by us. </p>
					<a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
				</div>
				<div class="col-md-2 col-xs-3 agileits-services-grids">
					<!--<div class="col-xs-3 wthree-ser">
						<i class="fa fa-pagelines" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 wthree-heading">
						<h4>Plantation</h4>
					</div>
					<div class="clearfix"></div>
					<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
					<a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
				</div>-->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>M</span>eet Our Team
				</h3>
				<div class="tittle-style">
				</div>
			</div>
			<div class="agileits-team-grids">
				<div class="col-sm-3 col-xs-6 agileits-team-grid">
					<div class="team-info">
						<img src="images/t1.jpg" alt="">
						<div class="team-caption">
							<h4>Shyam Gharote</h4>
							<h4>Director</h4>
							<ul>
								<li>
									<a href="#">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-rss"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 agileits-team-grid">
					<div class="team-info">
						<img src="images/t2.jpg" alt="">
						<div class="team-caption">
							<h4>Dr.Archana Gharote</h4>
							<ul>
								<li>
									<a href="#">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-rss"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 agileits-team-grid">
					<div class="team-info">
						<img src="images/t3.jpg" alt="">
						<div class="team-caption">
							<h4>Nana Yaw Asiedu Kwakye</h4>
							<ul>
								<li>
									<a href="#">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-rss"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 agileits-team-grid">
					<div class="team-info">
						<img src="images/t4.jpg" alt="">
						<div class="team-caption">
							<h4>Rakesh Vedyas</h4>
							<ul>
								<li>
									<a href="#">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-rss"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->

	<!-- experts section -->
	<div class="what-w3ls">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>P</span>lant your tree with easy steps
				</h3>
				<div class="tittle-style">
				</div>
			</div>
			<div class="what-grids">
				<div class="col-md-6 what-grid">
					<img src="images/work.png" class="img-responsive" alt="" />
				</div>
				<div class="col-md-6 what-grid1">
					<div class="what-top">
						<div class="what-left">
							<i class="fa fa-check" aria-hidden="true"></i>
						</div>
						<div class="what-right">
							<h4>Select Plan</h4>
							<p>Select any of the plan or create customized plan for yourself</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="what-top1">
						<div class="what-left">
							<i class="fa fa-thumbs-up" aria-hidden="true"></i>
						</div>
						<div class="what-right">
							<h4>Make Payment</h4>
							<p>Make payment through easy steps and friendly UI.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="what-top1">
						<div class="what-left">
							<i class="fa fa-leaf" aria-hidden="true"></i>
						</div>
						<div class="what-right">
							<h4>Your Plant Will get Planted</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam
								consectetur adipisicing elit.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="what-top1">
						<div class="what-left">
							<i class="fa fa-leaf" aria-hidden="true"></i>
						</div>
						<div class="what-right">
							<h4>Track Your Trees</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam
								consectetur adipisicing elit.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //experts section -->

	<!-- projects -->
	<div class="gallery-agile" id="projects">
		<div class="title-div">
			<h3 class="tittle">
				<span>O</span>ur Projects
			</h3>
			<div class="tittle-style">
			</div>
		</div>
		<div class="gallery-agile-kmsrow">
			<div class="col-xs-3 gallery-agile-grids">
				<div class="portfolio-hover">
					<a href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
						<img src="images/g1.jpg" class="img-responsive zoom-img" alt="" />
					</a>
				</div>
			</div>
			<div class="col-xs-3 gallery-agile-grids">
				<div class="portfolio-hover">
					<a href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
						<img src="images/g2.jpg" class="img-responsive zoom-img" alt="" />
					</a>
				</div>
			</div>
			<div class="col-xs-3 gallery-agile-grids">
				<div class="portfolio-hover">
					<a href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
						<img src="images/g3.jpg" class="img-responsive zoom-img" alt="" />
					</a>
				</div>
			</div>
			<div class="col-xs-3 gallery-agile-grids">
				<div class="portfolio-hover">
					<a href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
						<img src="images/g4.jpg" class="img-responsive zoom-img" alt="" />
					</a>
				</div>
			</div>
			<div class="col-xs-3 gallery-agile-grids">
				<div class="portfolio-hover">
					<a href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
						<img src="images/g5.jpg" class="img-responsive zoom-img" alt="" />
					</a>
				</div>
			</div>
			<div class="col-xs-3 gallery-agile-grids">
				<div class="portfolio-hover">
					<a href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
						<img src="images/g6.jpg" class="img-responsive zoom-img" alt="" />
					</a>
				</div>
			</div>
			<div class="col-xs-3 gallery-agile-grids">
				<div class="portfolio-hover">
					<a href="images/g7.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
						<img src="images/g7.jpg" class="img-responsive zoom-img" alt="" />
					</a>
				</div>
			</div>
			<div class="col-xs-3 gallery-agile-grids">
				<div class="portfolio-hover">
					<a href="images/g8.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
						<img src="images/g8.jpg" class="img-responsive zoom-img" alt="" />
					</a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //projects -->

	<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>W</span>hat people says
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
										<h5>Elizabeth Leah</h5>
										<span>Sed ut perspiciatis</span>
										<p class="para-w3-agileits">Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="inner-testimonials-w3ls">
									<img src="images/tt2.jpg" alt=" " class="img-responsive" />
									<div class="testimonial-info-wthree">
										<h5>Theresa Zoe</h5>
										<span>Sed ut perspiciatis</span>
										<p class="para-w3-agileits">Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="inner-testimonials-w3ls">
									<img src="images/tt3.jpg" alt=" " class="img-responsive" />
									<div class="testimonial-info-wthree">
										<h5>Kevin Matt</h5>
										<span>Sed ut perspiciatis</span>
										<p class="para-w3-agileits">Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
	<!-- //testimonials -->

	<!-- contact -->
	<div class="contact" id="contact">
		<div class="title-div">
			<h3 class="tittle">
				<span>C</span>ontact Us
			</h3>
			<div class="tittle-style">
			</div>
		</div>
		<div class="col-md-6 map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.948805392833!2d-73.99619098458929!3d40.71914347933105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1479793484055"></iframe>
		</div>
		<div class="col-md-6 contact_grids_info">
			<h5 class="small-title">Visit Us</h5>
			<div class="col-xs-4 contact_grid">
				<div class="contact_grid_right">
					<h4> OFFICE 1</h4>
					<p>435 City hall,</p>
					<p>NewYork City SD092.</p>
				</div>
				<div class="address-row">
					<h5>Mail Us</h5>
					<p>
						<a href="mailto:info@example.com"> mail@example.com </a>
					</p>
				</div>
				<div class="address-row">
					<h5>Call Us</h5>
					<p>+01 222 333 4444</p>
				</div>
			</div>
			<div class="col-xs-4 contact_grid">
				<div class="contact_grid_right">
					<h4> OFFICE 2</h4>
					<p>088 Jasmine hall,</p>
					<p>NewYork City SD092.</p>
				</div>
				<div class="address-row">
					<h5>Mail Us</h5>
					<p>
						<a href="mailto:info@example.com"> mail@example.com </a>
					</p>
				</div>
				<div class="address-row">
					<h5>Call Us</h5>
					<p>+01 222 333 4444</p>
				</div>
			</div>
			<div class="col-xs-4 contact_grid">
				<div class="contact_grid_right">
					<h4>OFFICE 3</h4>
					<p>436 Honey hall,</p>
					<p>NewYork City SD092.</p>
				</div>
				<div class="address-row">
					<h5>Mail Us</h5>
					<p>
						<a href="mailto:info@example.com"> mail@example.com </a>
					</p>
				</div>
				<div class="address-row">
					<h5>Call Us</h5>
					<p>+01 222 333 4444</p>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="second-contact-agile">
		<div class="col-md-6 form-bg">
			<form action="#" method="post">
				<div class="contact-fields">
					<input type="text" name="Name" placeholder="Name" required="">
				</div>
				<div class="contact-fields">
					<input type="email" name="Email" placeholder="Email" required="">
				</div>
				<div class="contact-fields">
					<input type="text" name="Subject" placeholder="Subject" required="">
				</div>
				<div class="contact-fields">
					<textarea name="Message" placeholder="Message" required=""></textarea>
				</div>
				<input type="submit" value="Submit">
			</form>
		</div>
		<div class="col-md-6 address-left-second">
			<div class="address-grid">
				<h5 class="small-title">Contact Info</h5>
				<div class="address-grids">
					<span class="fa fa-volume-control-phone" aria-hidden="true"></span>
					<div class="contact-right">
						<p>Telephone </p>
						<span>+012-345-6789</span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="address-grids">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
					<div class="contact-right">
						<p>Mail </p>
						<a href="mailto:info@example.com">info@example.com</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="address-grids">
					<span class="fa fa-map-marker" aria-hidden="true"></span>
					<div class="contact-right">
						<p>Location</p>
						<span>3136 NE 130th St, Seattle, WA 98125, USA.</span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="address-grids">
					<span class="fa fa-calendar" aria-hidden="true"></span>
					<div class="contact-right">
						<p>Working Hours</p>
						<span>Mon - Sat : 8:00 am to 10:30 pm</span>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //contact -->

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