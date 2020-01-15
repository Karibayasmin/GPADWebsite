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

 $sql = "SELECT * FROM `trainers` WHERE `id`= '$sid'";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>

				<!-- Trainer Section Start -->
		
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
				    
				<div class="col-md-10 col-md-offset-1 animate-box">
           <h2>Trainer Section</h2>
 <form method="post" action="trainerSectionUpdateData.php" enctype="multipart/form-data">

                            <div class="row form-group">
								<div class="col-md-6">
									 <label for="TrainerName">Trainer Name</label>
									<input type="text" name="TrainerName" id="TrainerName" class="form-control" placeholder="Type here Trainer Name..." value = "<?php echo $data ['TrainerName']; ?>">
								</div>
								<div class="col-md-6">
								    <label for="picture">Change your picture<span class="required">*</label>
									 <td><input type="file" name="file"><br><br></td>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="ShortDescription">Short Description</label>
                                    <textarea name="ShortDescription" id="ShortDescription" cols="30" rows="10" class="form-control" placeholder="Type here Short Description..."><?php echo $data ['ShortDescription']; ?></textarea>
								</div>
								<div class="col-md-6">
								<!--	 <label for="VanueName">Image </label> -->
									 <td><img src="images/<?php echo $data['image']; ?>" width="200" height="200"/></td>
									
								</div>
							</div>
							
							<div class="form-group" style="text-align: right">	
							
							    <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
								<input type="submit" value="Save Changes" class="btn btn-primary">   
							</div> 
							


</form>

</div>
				</div>
			</div>
		</div>
		
		<!-- Trainer Section End -->



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