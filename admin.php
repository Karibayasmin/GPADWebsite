<?php 
session_start();
if(isset($_SESSION['uid'])){
	
	header('location:admin/adminhome.php');
}
?>

<?php  

include ('database.php');

if (isset($_POST['submit'])){
	
	$username = $_POST['username'];
    $password = $_POST['password'];	
	$sql = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
	
	$run = mysqli_query($con,$sql);
	$row = mysqli_num_rows($run);
	
	if($row < 1){
		?>
		<script>
		alert('Username or Password not match!!');
		window.open('admin.php','_self');
		</script>
		<?php
	}else{
		
		$data = mysqli_fetch_assoc($run);
		$id = $data['id'];
		$_SESSION['uid'] = $id;	
		header('location:admin/adminhome.php');
	}
}

?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin|GPAD Training Center</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" /> 

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="upper-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<p>Welcome to GPAD Training Center</p>
						</div>
					</div>
				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="index.html"><img src="admin/images/logo.png" width="100" height="50"></a></div>
						</div>
					
					</div>
				</div>
			</div> 
		</nav>
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>GPAD Admin| Login</h2>
						<form method=post action="admin.php">
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="User Name">First Name</label> -->
								User Name:	<input type="text" name="username" value="" size="13" class="form-control" placeholder="Your UserName">
								</div>
								<div class="col-md-6">
									<!-- <label for="lname">Password</label> -->
								Password:	<input type="password" name="password" value="" size="13" class="form-control" placeholder="Your Password">
						
								</div>
							</div>
							
							<div class="form-group" style="text-align: right">
								<input type="submit" name = "submit" value="Login" class="btn btn-primary">
							</div>
						</form>		
					</div>
				</div>
			
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

