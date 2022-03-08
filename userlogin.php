<?php
session_start();
include("connection.php");
extract($_REQUEST);
  if(isset($login))
  {
	$sql=mysqli_query($con,"select * from registration where email='$Email' && password='$password' ");
	if(mysqli_num_rows($sql))
	{
	 $_SESSION['user']=$Email;
	header('location:donation.php');
	}else
	{
	$admin_login_error="Invalid Username or Password";	
	}
  }
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

<body class="banner">

<div class="col-md-4"></div>
<div class="col-md-4">
<div class="modal-content">
				<div class="modal-header">
        <a href="index.php"><button type="button" class="close" data-dismiss="modal">&times;</button></a>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						<p>
							Sign In now, Let's start your Grocery Shopping. Don't have an account?
							<a href="register.php">
								Sign Up Now</a>
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="email" placeholder="Email" name="Email" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<input type="submit" name="login" value="Sign In"><br>
            <span style="color:red;"><?php if(isset($admin_login_error)){ echo $admin_login_error;} ?></span>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
</div>
<div class="col-md-4"></div>
<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php
			// include("footer.php");
			?> -->
  </body>
	</html>