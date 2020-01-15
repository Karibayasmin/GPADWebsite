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

 $sql = "SELECT * FROM `news` WHERE `id`= '$sid'";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>

		<!---All the News Section Start -->
		

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
				
				<div class="col-md-10 col-md-offset-1 animate-box">
                 <h2>NEWS Section</h2>
<form method="post" action="newsSectionUpdateData.php" enctype="multipart/form-data">

							<div class="row form-group">
								<div class="col-md-6">
								<!--	 <label for="VanueName">Image </label> -->
									 <td><img src="images/<?php echo $data['image']; ?>" width="200" height="200"/></td>
									
							    </div>
							
								<div class="col-md-6">
								<label for="picture">Change your picture<span class="required">*</label>
									 <td><input type="file" name="file"><br><br></td>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="NewsHeadline">News Headline</label>
                                    <textarea name="NewsHeadline" id="NewsHeadline" cols="30" rows="10" class="form-control" placeholder="News Headline Type here..."><?php echo $data ['NewsHeadline']; ?></textarea>
								</div>
							
								<div class="col-md-6">
									<label for="Date">News Date</label>
                                    <textarea name="Date" id="Date" cols="30" rows="10" class="form-control" placeholder="Ex: 1st Jan 2020"><?php echo $data ['Date']; ?></textarea>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-6">
									 <label for="Day">Day</label>
									<input type="text" name="Day" id="Day" class="form-control" placeholder="Ex: 1st" value = "<?php echo $data ['Day']; ?>">
								</div>
								<div class="col-md-6">
									 <label for="Month">Month</label>
									<input type="text" name="Month" id="Month" class="form-control" placeholder="Ex: Jan" value = "<?php echo $data ['Month']; ?>">
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-12">
									<label for="ShortDescription">News Short Description</label>
                                    <textarea name="ShortDescription" id="ShortDescription" cols="30" rows="10" class="form-control" placeholder="Short Description Type here..."><?php echo $data ['ShortDescription']; ?></textarea>
								</div>
								
							</div>
							
							
							<div class="form-group" style="text-align: right">
							    <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
								<input type="submit" name="newsSectionUpdate" value="Save Changes" class="btn btn-primary">   
							</div>
	

</form>

</div>
				</div>
			</div>
		</div>
		
		<!---All News Section End -->
		




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