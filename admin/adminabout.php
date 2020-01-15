<?php

session_start();
		
		if(isset($_SESSION['uid'])){
			
			echo "";
		}
		
		else{
			
			header('location:../admin.php');
		}
?>
<!--<html>

<header><title>Home|GPAD Training Center</title></header>

<body> -->

<?php 
include('header.php');
?>

		<!--First Highlighted News Section Start from here-->
		
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
				
				<div class="col-md-10 col-md-offset-1 animate-box">
                 <h2>About Section</h2>
<form method="post" action="aboutSectionUpdate.php" enctype="multipart/form-data">
<?php 

include('database.php');

 $sql = "SELECT * FROM `about`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);

?>                          
                            
		                    <div class="row form-group">
								<div class="col-md-6">
									<label for="FirstPara">First Para</label>
                                    <textarea name="FirstPara" id="FirstPara" cols="30" rows="10" class="form-control" placeholder="First Para Type Here.."><?php echo $data ['FirstPara']; ?></textarea>
								</div>
							
								<div class="col-md-6">
									<label for="SecondPara">2nd Para</label>
                                    <textarea name="SecondPara" id="SecondPara" cols="30" rows="10" class="form-control" placeholder="2nd Para Type here..."><?php echo $data ['SecondPara']; ?></textarea>
								</div>
								
								<div class="col-md-6">
									<label for="ThirdPara">3rd Para</label>
                                    <textarea name="ThirdPara" id="ThirdPara" cols="30" rows="10" class="form-control" placeholder="3rd Para Type here..."><?php echo $data ['ThirdPara']; ?></textarea>
								</div>
								<div class="col-md-6">
									<label for="FourthPara">4th Para</label>
                                    <textarea name="FourthPara" id="FourthPara" cols="30" rows="10" class="form-control" placeholder="4th Para Type here..."><?php echo $data ['FourthPara']; ?></textarea>
								</div>
							
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="FifthPara">5th Para</label>
                                    <textarea name="FifthPara" id="FifthPara" cols="30" rows="10" class="form-control" placeholder="5th Para Type here..."><?php echo $data ['FifthPara']; ?></textarea>
								</div>
								
							</div>
							
							
							
							
							<div class="form-group" style="text-align: right">	
							    <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
								<input type="submit" name="aboutSectionUpdate" value="Save Changes" class="btn btn-primary">   
							</div>
							
							</form>

</div>
				</div>
			</div>
		</div>
		
		
		
		<!--First Highlighted News Section End here -->



<div class="row">
						<div class="col-md-2">
							<!--<div id="colorlib-logo"><a href="adminhome.php"><img src="images/logo.png" width="100" height="50"></a></div> -->
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
							<!--	<li><a href="adminregistration.php">DashBoard</a></li> -->
							</ul>
						</div>
</div>

<!--</body>
</html>	-->

<!--<div class="row">
						<div class="col-md-2">
							<!--<div id="colorlib-logo"><a href="adminhome.php"><img src="images/logo.png" width="100" height="50"></a></div> -->
					<!--	</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
							<!--	<li><a href="adminregistration.php">DashBoard</a></li> -->
					<!--		</ul>
						</div>
</div> -->

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