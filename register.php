<?php
session_start();
include("connection.php");
extract($_REQUEST);
if(isset($_SESSION['id']))
{
	header("location:index.php");
}
  if(isset($register))
  {
    $sql=mysqli_query($con,"select * from registration where email='$Email' ");
    if(mysqli_num_rows($sql))
	{
    $email_error="This Email Id is already registered with us";
	}
	else{
    $sql=mysqli_query($con,"insert into registration (username, mob, email, password, confirmpassword) 
    values ('$Name','$mob','$Email','$password','$confirmpassword')");
    if($sql){
      $_SESSION['user']=$email;
      header("location:index.php");
    }else
    {
    $admin_login_error="Invalid Username or Password";	
    }
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

<body class="banner-2">
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
						<h3 class="agileinfo_sign">Sign Up</h3>
						<p>
							Come join the Green Life! Let's set up your Account.
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name" id="Name" name="Name" required="">
							</div>
              <div class="styled-input">
								<input type="text" placeholder="Mobile No." id="mob" name="mob" required="">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail" id="Email" name="Email" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" id="password" name="password" id="password1" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword" id="password2" required="">
							</div>
						<input type="submit" name="register" value="Sign Up"><br>
            <span style="color:red;"><?php if(isset($email_error)){ echo $email_error;} ?></span>
						</form>
						<!-- <p>
							<a href="#">By clicking register, I agree to your terms</a>
						</p> -->
					</div>
				</div>
			</div>
  </div>
  <div class="col-md-4"></div>
  <!-- <br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br>
  <br><br>
  <?php
			// include("footer.php");
			?> -->
  </body>
  