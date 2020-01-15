<?php 
include('header.php');
include('database.php');

 $sid = $_GET['sid'];

 $sql = "SELECT * FROM `adminhome` WHERE `id`= '$sid'";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>
<!-- Traning Section Start -->
		
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
				    
				<div class="col-md-10 col-md-offset-1 animate-box">
           
 <form method="post" action="ProfessionalCoursesDescription.php" enctype="multipart/form-data">
                            
					<div class="col-md-3 text-center animate-box" align="center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-books"></i>
							</span>
							<div class="desc">
								<h3>Professional Courses</h3>
							<!--	<p><a href="ProfessionalCoursesDescription.php" class="view-more">View More</a></p> -->
							</div>
						</div>
					</div>
							
							<div class="row form-group" align="center">
							   <div class="col-md-12">
								<!--	<label for="ShortDescription">Short Description</label> -->
                                    <p><?php echo $data ['ProfessionalCoursesDescription']; ?></p>
								</div>	
							</div>
						

</form>

</div>
				</div>
			</div>
		</div>
		
		<!-- Training Section End -->




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