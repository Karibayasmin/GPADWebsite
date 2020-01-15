<?php

session_start();
		
		if(isset($_SESSION['uid'])){
			
			echo "";
		}
		
		else{
			
			header('location:../admin.php');
		}
?>

<?php 
include('header.php');
include('database.php');

 $sid = $_GET['sid'];

 $sql = "SELECT * FROM `contactmessage` WHERE `id`= '$sid'";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>

			  <div id="colorlib-contact">
			<div class="container">
				<div class="row">
				
				<div class="col-md-10 col-md-offset-1 animate-box">
<form method="post" action="admincontactUpdateData.php" enctype="multipart/form-data">		  
  
                           <div class="row form-group">
								<div class="col-md-6">
									 <label for="firstName">First Name </label>
									<input type="text" name="firstName" id="firstName" class="form-control" value = "<?php echo $data ['firstName']; ?>">
								</div>
								<div class="col-md-6">
									 <label for="lastName">Last Name </label>
									<input type="text" name="lastName" id="lastName" class="form-control" value = "<?php echo $data ['lastName']; ?>">
								</div>
							</div>
							

							<div class="row form-group">
							    <div class="col-md-6">
                                  <label for="email"> Email </label>
							      <input type="text" name="email" id="email" class="form-control" value = "<?php echo $data ['email']; ?>">
								</div>
								
								<div class="col-md-6">
                                  <label for="subject">Subject </label>
                                  <input type="text" name="subject" id="subject" class="form-control" value = "<?php echo $data ['subject']; ?>">								  
								</div>
								
                            </div>
							
							<div class="row form-group">
								<div class="col-md-12">
									 <label for="message">Message</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" ><?php echo $data ['message']; ?></textarea>
								</div>
							</div>
							
							
							
						<!--	<p>
                              <span class="required">*</span>Required field
                            </p> -->
							
							<div class="form-group" style="text-align: right">	
							    <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
								<input type="submit" value="Submit" class="btn btn-primary">   
							</div>
							
</form>
</div>
				</div>
			</div>
		</div>
			  


<!--</body>
</html>	-->

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
