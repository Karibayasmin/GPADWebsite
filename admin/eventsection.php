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

						<!-- Insert Event Section Start Here -->
		           
				<div id="colorlib-contact">
			<div class="container">
				<div class="row">
				
				<div class="col-md-10 col-md-offset-1 animate-box">
				<div align="right">
                <th align="Right"><a href="eventSectionView.php">See All</a></th>
			    </div>
                 <h4>Event Section Insert New One</h4>
				 
<form method="post" action="eventsection.php" enctype="multipart/form-data">

                            <div class="row form-group">
								<div class="col-md-6">
									 <label for="EventName">Event Name</label>
									<input type="text" name="EventName" id="EventName" class="form-control" placeholder="Enter Event Name...">
								</div>
								<div class="col-md-6">
									 <label for="OrganizedBy">Organized By</label>
									<input type="text" name="OrganizedBy" id="OrganizedBy" class="form-control"placeholder="Enter Organized By...">
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-6">
									 <label for="Day">Day</label>
									<input type="text" name="Day" id="Day" class="form-control" placeholder="Ex: 1st">
								</div>
								<div class="col-md-6">
									 <label for="Month">Month</label>
									<input type="text" name="Month" id="Month" class="form-control" placeholder="Ex: Jan">
								</div>
								<div class="col-md-12">
									 <label for="VanueName">Vanue Name</label>
									<input type="text" name="VanueName" id="VanueName" class="form-control" placeholder="Enter Vanue Name...">
								</div>
								<div class="col-md-12">
									 <label for="ShortDescription">Event Description</label>
									<textarea name="ShortDescription" id="ShortDescription" cols="30" rows="10" class="form-control" placeholder="Enter Event short Description..."></textarea>
								</div>
							</div>
							
							<div class="form-group" style="text-align: right">	
								<input type="submit"  name="eventInsertSubmit" value="Insert New Value" class="btn btn-primary">   
							</div>
							
<?php 
if(isset($_POST['eventInsertSubmit'])){
	
	include('database.php');
	$EventName = $_POST['EventName'];
	$OrganizedBy = $_POST['OrganizedBy'];
	$Day = $_POST['Day'];
	$Month = $_POST['Month'];
	$VanueName = $_POST['VanueName'];
	$ShortDescription = $_POST['ShortDescription'];
	      ?>
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
 </script>
                <?php
				

			$qry = "INSERT INTO `events`(`EventName`, `OrganizedBy`, `Day`, `Month`, `VanueName`, `ShortDescription`) VALUES ('$EventName','$OrganizedBy','$Day', '$Month', '$VanueName', '$ShortDescription')";
	
	        $run = mysqli_query($con,$qry);
			if($run==true){
                  ?>
				  <script>
		              alert('Updated Data Successfully');
					  window.open('eventsection.php','_self');
		           </script>
                   <script>
                     if ( window.history.replaceState ) {
                   window.history.replaceState( null, null, window.location.href );
                     }
                   </script>
                 <?php
			}
	}
?>
							
</form>
</div>
				</div>
			</div>
		</div>
		<!-- Insert Event Section End Here -->	
		

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