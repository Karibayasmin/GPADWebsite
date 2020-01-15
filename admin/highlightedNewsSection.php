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
                 <h2>First Highlighted NEWS Section</h2>
<form method="post" action="highlightedNewsSectionUpdate.php" enctype="multipart/form-data">
<?php 

include('database.php');

 $sql = "SELECT * FROM `FirstHighlightedNews`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);

?>                          
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
									<label for="newsHeadline">News Headline</label>
                                    <textarea name="newsHeadline" id="newsHeadline" cols="30" rows="10" class="form-control" placeholder="News Headline Type Here.."><?php echo $data ['newsHeadline']; ?></textarea>
								</div>
							
								<div class="col-md-6">
									<label for="Day">News Day</label>
                                    <textarea name="Day" id="Day" cols="30" rows="10" class="form-control" placeholder="News Day Type here..."><?php echo $data ['Day']; ?></textarea>
								</div>
								
								<div class="col-md-6">
									<label for="Month">News Month</label>
                                    <textarea name="Month" id="Month" cols="30" rows="10" class="form-control" placeholder="News Month Type here..."><?php echo $data ['Month']; ?></textarea>
								</div>
								<div class="col-md-6">
									<label for="postedby">Posted By</label>
                                    <textarea name="postedby" id="postedby" cols="30" rows="10" class="form-control" placeholder="Posted By Type here..."><?php echo $data ['postedby']; ?></textarea>
								</div>
								
							</div>
							
							<div class="row form-group">
								<div class="col-md-12">
									<label for="shortDescription">News Short Description</label>
                                    <textarea name="shortDescription" id="shortDescription" cols="30" rows="10" class="form-control" placeholder="Short Description Type here..."><?php echo $data ['shortDescription']; ?></textarea>
								</div>
								
							</div>
							
							
							<div class="form-group" style="text-align: right">	
							    <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
								<input type="submit" name="highlightedNewsSectionUpdate" value="Save Changes" class="btn btn-primary">   
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