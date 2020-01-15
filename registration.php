<?php 
include('header.php');
?>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
				
<?php 

include('database.php');
 $sql = "SELECT * FROM `EveryPageFrontImage`";
 $run = mysqli_query($con,$sql);
 $data = mysqli_fetch_assoc($run);
 
?>

			   	<li style="background-image: url(admin/images/<?php echo $data['RegistrationImage']; ?>);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Registration</h1>
				   					<h2><span><a href="index.php">Home</a> | Registration</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
				<!--	<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Contact Information</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="contact-info-wrap-flex">
									<div class="con-info">
										<p><span><i class="icon-location-2"></i></span> 198 West 21th Street, <br> Suite 721 New York NY 10016</p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-globe"></i></span> <a href="#">yourwebsite.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>  -->
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Registration for Grab the Training Opportunity</h2>
						<form method="post" action="registration.php" enctype="multipart/form-data">
							<div class="row form-group">
								<div class="col-md-6">
									 <label for="FirstName">First Name <span class="required">*</label>
									<input type="text" name="FirstName" id="FirstName" class="form-control" placeholder="Type Your firstname">
								</div>
								<div class="col-md-6">
									 <label for="LastName">Last Name <span class="required">*</label>
									<input type="text" name="LastName" id="LastName" class="form-control" placeholder="Type Your lastname">
								</div>
							</div>
							

							<div class="row form-group">
							    <div class="col-md-6">
                                  <label for="Gender">Select your Gender <span class="required">*</label>
							        <select type="text" name="Gender" id="Gender" class="form-control">
									   
									    <option name="m"></option>
                                        <option name="male">Male</option>
                                        <option name="female">Female</option>
										<option name="others">Others</option>
										   
                                    </select> 
								</div>
								
								<div class="col-md-6">
                                  <label for="Designation">Present Designation <span class="required">*</label>
							        <select type="text" name="Designation" id="Designation" class="form-control">
									   
									    <option name="m"></option>
                                        <option name="m">Students</option>
                                        <option name="b">Service Holder</option>
										<option name="b">Others</option>
										   
                                    </select> 
								</div>
								
                            </div>
							
							<div class="row form-group">
								<div class="col-md-12">
									 <label for="InstitutionName">Share with us your institution name <span class="required">*</label>
									<input type="text" name="InstitutionName" id="InstitutionName" class="form-control" placeholder="Type your Institution name">
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-6">
									 <label for="EmailAddress">Email Address <span class="required">*</label>
									<input type="text" name="EmailAddress" id="EmailAddress" class="form-control" placeholder="Type your email address">
								</div>
								<div class="col-md-6">
									 <label for="email">Give your picture<span class="required">*</label>
									 <td><input type="file" name="file"><br><br></td>
								</div>
							</div>
							
							<div class="row form-group">
							    <div class="col-md-12">
                                  <label for="DesiredTraining">Select which desired training/ skill you want to gather <span class="required">*</label> 
							        <select type="text" name="DesiredTraining" id="DesiredTraining" class="form-control">
									   
									    <option name="m"></option>
                                        <option name="m">Training on GPS (Hand-held) Data Collection, Mapping and Presentation of GPS data in MapWindow GIS</option>
                                        <option name="b">Spatial Database Preparation and GIS Mapping</option>
										<option name="b">Training on Geographic Information System for Land Management</option>
										<option name="b">Training on Geographic Information System on City Management and Planning</option>
										<option name="b">Basic training on Geographic Information System (GIS) & Remote Sensing (RS)</option>
										<option name="b">Fundamentals of Geographic Information System (GIS)</option>
										<option name="b">Training on Geographic Information System for Land Management</option>
										   
                                    </select> 
								</div>
                            </div>
							
							<div class="row form-group">
							    <div class="col-md-12">
                                  <label for="TrainingNews">Select From Where you get this training news <span class="required">*</label>
							        <select type="text" name="TrainingNews" id="TrainingNews" class="form-control">
									   
									    <option name="m"></option>
                                        <option name="m">GPAD Facebook Page</option>
										<option name="m">GPAD Website Page</option>
                                        <option name="b">From Newspaper</option>
										<option name="b">Referenced by someone</option>
										   
                                    </select> 
								</div>
                            </div>
							
                            <div class="row form-group">
								<div class="col-md-12">
									<label for="transactionNumber">Bank or BKASH Transaction Number <span class="required">*</label>
									<input type="text" name="transactionNumber" id="transactionNumber" class="form-control" placeholder="Type here your Bank or BKASH Payment Transaction Number">
								</div>
							</div>							
							
							<div class="row form-group">
								<div class="col-md-12">
									<label for="RefenceName">Share with us who Refence you this traing <span class="required">*</label>
									<input type="text" name="RefenceName" id="RefenceName" class="form-control" placeholder="Type His/Her name">
								</div>
							</div>

							
						<!--	<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="subject">Subject</label> -->
								<!--	<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
								</div>
							</div> -->

							<div class="row form-group">
								<div class="col-md-12">
									 <label for="Feedback">Give us your valuable feedback <span class="required">*</label>
									<textarea name="Feedback" id="Feedback" cols="30" rows="10" class="form-control" placeholder="Say something about us..."></textarea>
								</div>
							</div>
							
							<p>
                              <span class="required">*</span>Required field
                            </p>
							
							<div class="form-group" style="text-align: right">
								<input type="submit" name="registrationInsertSubmit" value="Submit" class="btn btn-primary">
							</div>
							
<?php 
if(isset($_POST['registrationInsertSubmit'])){
	
	include('database.php');
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Gender = $_POST['Gender'];
	$Designation = $_POST['Designation'];
	$InstitutionName = $_POST['InstitutionName'];
	$EmailAddress = $_POST['EmailAddress'];
	$DesiredTraining = $_POST['DesiredTraining'];
	$TrainingNews = $_POST['TrainingNews'];
	$transactionNumber = $_POST['transactionNumber'];
	$RefenceName = $_POST['RefenceName'];
	$Feedback = $_POST['Feedback'];
	$name = $_FILES["file"]["name"];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
	
	?>
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
 </script>
                <?php
	
	if (!empty($name) && !empty($FirstName) && !empty($LastName) && !empty($Gender)
		&& !empty($Designation) && !empty($InstitutionName) && !empty($EmailAddress) && !empty($DesiredTraining)
	&& !empty($TrainingNews) && !empty($transactionNumber) && !empty($RefenceName) && !empty($Feedback)) {
        $location = 'admin/images/';

        if  (move_uploaded_file($tmp_name, $location.$name)){
             ?>
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
 </script>
                <?php
			$qry = "INSERT INTO `registrationdetails`(`FirstName`, `LastName`, `Gender`, `Designation`, `InstitutionName`, `EmailAddress`, `DesiredTraining`, `TrainingNews`, `transactionNumber`, `RefenceName`, `Feedback`, `image`) VALUES ('$FirstName','$LastName','$Gender','$Designation','$InstitutionName','$EmailAddress','$DesiredTraining','$TrainingNews','$transactionNumber','$RefenceName','$Feedback','$name')";
	
	        $run = mysqli_query($con,$qry);
			if($run==true){
                  ?>
				   <script>
		              alert('Registration Completed Successfully');
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
	    ?>
	    <script>
		  alert('Please Fill up all the field');
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
	<!--	<div id="map" class="colorlib-map"></div> -->
	
	<!--	<div id="colorlib-subscribe" class="subs-img" style="background-image: url(admin/images/image_bg_gpad_5.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Subscribe Website</h2>
						<p>Subscribe our website and get latest update</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<div class="col-md-12">
							<form class="form-inline qbstp-header-subscribe">
								<div class="col-three-forth">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
									</div>
								</div>
								<div class="col-one-third">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Subscribe Now</button>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<?php
		
		include('footer.php');
		
		?>

