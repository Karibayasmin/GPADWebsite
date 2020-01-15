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

		<!-- Insert Training Section Start Here -->
		           
				<div id="colorlib-contact">
			<div class="container">
				<div class="row">
				
				<div class="col-md-10 col-md-offset-1 animate-box">
				<div align="right">
                <th align="Right"><a href="trainingSectionView.php">See All</a></th>
			    </div>
                 <h4>Training Section Insert New One</h4>
				 
<form method="post" action="trainingsection.php" enctype="multipart/form-data">

                            <div class="row form-group">
								<div class="col-md-6">
									 <label for="TrainingName">Training Name</label>
								    <input type="text" name="TrainingName" id="TrainingName" class="form-control" placeholder="Enter Training Name...">
								</div>
								<div class="col-md-6">
									<label for="image">Image </label>
									 <td><input type="file" name="file"><br><br></td>	
								</div>
							</div>	
							 <div class="row form-group">
							    <div class="col-md-6">
									 <label for="amount">Amount</label>
									<input type="text" name="amount" id="amount" class="form-control" placeholder="Enter an amount... ">
							    </div>
							    <div class="col-md-6">
                                  <label for="registrationTime">Select Registration Condition<span class="required">*</label>
							        <select type="text" name="registrationTime" id="registrationTime" class="form-control">
									   
									    <option name="m"></option>
                                        <option name="male">Registration Time Over</option>
                                        <option name="female">Registration On Going</option>
										   
                                    </select> 
								</div>
							 </div>
								
							<div class="row form-group">
							
							    <div class="col-md-12">
									<label for="ShortDescription">Short Description</label>
                                    <textarea name="ShortDescription" id="ShortDescription" cols="30" rows="10" class="form-control" placeholder="Give Short Description about this training..."></textarea>
								</div>
							</div> 
							
							<div class="form-group" style="text-align: right">	
								<input type="submit"  name="trainingsubmit" value="Insert New Value" class="btn btn-primary">   
							</div>
							
<?php 
if(isset($_POST['trainingsubmit'])){
	
	include('database.php');
	$TrainingName = $_POST['TrainingName'];
	$amount = $_POST['amount'];
	$registrationTime = $_POST['registrationTime'];
	$ShortDescription = $_POST['ShortDescription'];
	$name = $_FILES["file"]["name"];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
	
	if (!empty($name)) {
        $location = 'images/';

        if  (move_uploaded_file($tmp_name, $location.$name)){
             ?>
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
 </script>
                <?php
			$qry = "INSERT INTO `trainings`(`TrainingName`, `image`, `amount`, `registrationTime`, `ShortDescription`) VALUES ('$TrainingName','$name','$amount','$registrationTime','$ShortDescription')";
	
	        $run = mysqli_query($con,$qry);
			if($run==true){
                  ?>
				  <script>
		             alert('Updated Data Successfully');
			         window.open('trainingsection.php','_self');
		           </script>
                   <script>
                     if ( window.history.replaceState ) {
                   window.history.replaceState( null, null, window.location.href );
                     }
                   </script>
                 <?php
			}
        }

    } else {
       // echo 'Please Fill up all the field';
	  
	   /* <script>
		  alert('One of the field is empty');
		</script> */
		?>
		<script>
		  alert('You have to Choose a picture to Update any of the data');
		 window.open('trainingsection.php','_self');
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
		<!-- Insert Training Section End Here -->
		




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