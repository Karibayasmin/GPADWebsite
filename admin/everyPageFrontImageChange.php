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

<div id="colorlib-contact">
			<div class="container">
				<div class="row">
				
				<div class="col-md-10 col-md-offset-1 animate-box">
                 <h2>Every Page Front Image Change</h2>
<form method="post" action="CoursePageFrontImageChange.php" enctype="multipart/form-data">

<?php 

include('database.php');

 $sql = "SELECT * FROM `EveryPageFrontImage`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>


                              <div class="row form-group">
								<div class="col-md-6">
									 <label for="RegistrationImage">Course Image</label> 
									<td><input type="file" name="file"><br><br></td>
							    </div>
								
								<div class="col-md-6">
									<!-- <label for="RegistrationImage">Registration Image</label> -->
									 <td><img src="images/<?php echo $data['CourseImage']; ?>" width="200" height="200"/></td>
									
							    </div>
								
								<div class="form-group" style="text-align: right">	
								<input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
								<input type="submit" name="CoursesImageChangeUpdate" value="Save Changes" class="btn btn-primary">   
							    </div>
							</div>
								
</form>
<form method="post" action="AboutPageFrontImageChange.php" enctype="multipart/form-data">

<?php 

include('database.php');

 $sql = "SELECT * FROM `EveryPageFrontImage`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>			
							   <div class="row form-group">
							    <div class="col-md-6">
									  <label for="AboutImage">About Image</label> 
									  <td><input type="file" name="file"><br><br></td>
							    </div>
								<div class="col-md-6">
									<!-- <label for="AboutImage">About Image</label> -->
									 <td><img src="images/<?php echo $data['AboutImage']; ?>" width="200" height="200"/></td>
							    </div>
								
								<div class="form-group" style="text-align: right">
                                <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />								
								<input type="submit" name="AboutFrontImageChange" value="Save Changes" class="btn btn-primary">   
							    </div>
								</div>
</form>								
<form method="post" action="EventPageFrontImageChange.php" enctype="multipart/form-data">

<?php 

include('database.php');

 $sql = "SELECT * FROM `EveryPageFrontImage`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>
								
								<div class="row form-group">
								<div class="col-md-6">
									 <label for="EventImage">Event Image</label> 
									 <td><input type="file" name="file"><br><br></td>
							    </div>
								<div class="col-md-6">
								<!--	 <label for="EventImage">Event Image</label> -->
									 <td><img src="images/<?php echo $data['EventImage']; ?>" width="200" height="200"/></td>
									
							    </div>
								
								<div class="form-group" style="text-align: right">	
								<input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
								<input type="submit" name="EventFrontImageChange" value="Save Changes" class="btn btn-primary">   
							    </div>
								</div>
</form>		
<form method="post" action="NewsPageFrontImageChange.php" enctype="multipart/form-data">

<?php 

include('database.php');

 $sql = "SELECT * FROM `EveryPageFrontImage`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>
								<div class="row form-group">
								<div class="col-md-6">
									 <label for="NewsImage">News Image </label> 
									 <td><input type="file" name="file"><br><br></td>
							    </div>
								<div class="col-md-6">
								<!--	 <label for="NewsImage">News Image </label> -->
									 <td><img src="images/<?php echo $data['NewsImage']; ?>" width="200" height="200"/></td>
									
							    </div>
								
								<div class="form-group" style="text-align: right">
                                <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />								
								<input type="submit" name="NewsFrontImageUpdate" value="Save Changes" class="btn btn-primary">   
							    </div>
								</div>
</form>
<form method="post" action="ContactPageFrontImageChange.php" enctype="multipart/form-data">

<?php 

include('database.php');

 $sql = "SELECT * FROM `EveryPageFrontImage`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>								
								<div class="row form-group">
								
								<div class="col-md-6">
									 <label for="ContactImage">Contact Image </label> 
									<td><input type="file" name="file"><br><br></td>
							    </div>
								
								<div class="col-md-6">
									<!-- <label for="ContactImage">Contact Image </label> -->
									 <td><img src="images/<?php echo $data['ContactImage']; ?>" width="200" height="200"/></td>
									
							    </div>
								
								<div class="form-group" style="text-align: right">	
								<input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
								<input type="submit" name="ContactImageUpdate" value="Save Changes" class="btn btn-primary">   
							    </div>
								</div>
</form>							
<form method="post" action="RegistrationPageFrontImageChange.php" enctype="multipart/form-data">

<?php 

include('database.php');

 $sql = "SELECT * FROM `EveryPageFrontImage`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>
								
								
								<div class="row form-group">
								<div class="col-md-6">
									 <label for="RegistrationImage">Registration Image</label> 
									<td><input type="file" name="file"><br><br></td>
							    </div>
								
								<div class="col-md-6">
									<!-- <label for="RegistrationImage">Registration Image</label> -->
									 <td><img src="images/<?php echo $data['RegistrationImage']; ?>" width="200" height="200"/></td>
									
							    </div>
								
								<div class="form-group" style="text-align: right">	
								<input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
								<input type="submit" name="registrationImageUpdate" value="Save Changes" class="btn btn-primary">   
							    </div>
							</div>
							

</form>

</div>
				</div>
			</div>
		</div>



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
