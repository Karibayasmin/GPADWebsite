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

 $sql = "SELECT * FROM `registrationdetails` WHERE `id`= '$sid'";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?> 

<div id="colorlib-contact">
			<div class="container">
				<div class="row">
				
				<div class="col-md-10 col-md-offset-1 animate-box">
<form method="post" action="adminRegistrationUpdateData.php" enctype="multipart/form-data">
  
                           <div class="row form-group">
								<div class="col-md-6">
									 <label for="FirstName">First Name</label>
									<input type="text" name="FirstName" id="FirstName" class="form-control" value = "<?php echo $data ['FirstName']; ?>">
								</div>
								<div class="col-md-6">
									 <label for="LastName">Last Name</label>
									<input type="text" name="LastName" id="LastName" class="form-control" value = "<?php echo $data ['LastName']; ?>">
								</div>
							</div>
							

							<div class="row form-group">
							    <div class="col-md-6">
                                  <label for="Gender"> Gender</label>
							      <input type="text" name="Gender" id="Gender" class="form-control" value = "<?php echo $data ['Gender']; ?>">
								</div>
								
								<div class="col-md-6">
                                  <label for="Designation">Present Designation</label>
                                  <input type="text" name="Designation" id="Designation" class="form-control" value = "<?php echo $data ['Designation']; ?>">								  
								</div>
								
                            </div>
							
							<div class="row form-group">
								<div class="col-md-12">
									 <label for="InstitutionName">Share with us your institution name</label>
									<input type="text" name="InstitutionName" id="InstitutionName" class="form-control" value = "<?php echo $data ['InstitutionName']; ?>">
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-6">
									 <label for="EmailAddress">Email Address</label>
									<input type="text" name="EmailAddress" id="EmailAddress" class="form-control" value = "<?php echo $data ['EmailAddress']; ?>">
								</div>
								<div class="col-md-6">
									 <label for="picture">Change your picture<span class="required">*</label>
									 <td><input type="file" name="file"><br><br></td>
								</div>
								
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									 
								</div>
								<div class="col-md-6">
									 <td><img src="images/<?php echo $data['image']; ?>" width="200" height="200"/></td>
								</div>
								
							</div>
							
							<div class="row form-group">
							    <div class="col-md-12">
                                  <label for="DesiredTraining">Selected Training</label> 
							     <input type="text" name="DesiredTraining" id="DesiredTraining" class="form-control" value = "<?php echo $data ['DesiredTraining']; ?>">
								</div>
                            </div>
							
							<div class="row form-group">
							    <div class="col-md-12">
                                  <label for="TrainingNews">Selected source From Where he/she get this training news</label>
							      <input type="text" name="TrainingNews" id="TrainingNews" class="form-control" value = "<?php echo $data ['TrainingNews']; ?>">
								</div>
                            </div>   
							
							<div class="row form-group">
								<div class="col-md-12">
									<label for="RefenceName">Share with us who Refence you this traing</label>
									<input type="text" name="RefenceName" id="RefenceName" class="form-control" value = "<?php echo $data ['RefenceName']; ?>">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="Feedback">Feedback</label>
							<!--		<input  type="text" id="feedback" class="form-control"   > --> 
                                    <textarea name="Feedback" id="Feedback" cols="30" rows="10" class="form-control" placeholder="Say something about us..."><?php echo $data ['Feedback']; ?></textarea>
								</div>
							</div>
							
						<!--	<p>
                              <span class="required">*</span>Required field
                            </p> -->
							
							<div class="form-group" style="text-align: right">	
							
							    <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
								<input type="submit" name="UpdateRegistrationDetailsSubmit" value="Save Changes" class="btn btn-primary"> 
								
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
