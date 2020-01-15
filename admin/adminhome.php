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

<?php 

include('database.php');

 $sql = "SELECT * FROM `adminhome`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>
<div id="colorlib-contact">
			<div class="container">
				<div class="row">
				
				<div class="col-md-10 col-md-offset-1 animate-box">

<form method="post" action="adminhomeupdate.php" enctype="multipart/form-data">

                            <div class="row form-group">
								<div class="col-md-12">
									<label for="companyDescription">Company Description</label>
								<!--	<input  type="text" id="companyDescription" class="form-control"   > -->
                                    <textarea name="companyDescription" id="companyDescription" cols="30" rows="10" class="form-control" placeholder="Company Description Type here..."><?php echo $data ['CompanyDescription']; ?></textarea>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-6">
									<label for="whyChooseUsLeftSide">Why Choose Us LeftSide</label>
                                    <textarea name="whyChooseUsLeftSide" id="whyChooseUsLeftSide" cols="30" rows="10" class="form-control" placeholder="Why Choose Us Left Side Portion Type here..."><?php echo $data ['whyChooseUsLeftSide']; ?></textarea>
								</div>
							
								<div class="col-md-6">
									<label for="whyChooseUsRightSide">Why Choose Us RightSide</label>
                                    <textarea name="whyChooseUsRightSide" id="whyChooseUsRightSide" cols="30" rows="10" class="form-control" placeholder="Why Choose Us Right Side Portion Type here..."><?php echo $data ['whyChooseUsRightSide']; ?></textarea>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-6">
									<label for="WhatWeDoFirstLine">What We Do First Line</label>
                                    <textarea name="WhatWeDoFirstLine" id="WhatWeDoFirstLine" cols="30" rows="10" class="form-control" placeholder="What We Do First Line Type here..."><?php echo $data ['WhatWeDoFirstLine']; ?></textarea>
								</div>
							
								<div class="col-md-6">
									<label for="WhatWeDoPoints">What We Do Points</label>
                                    <textarea name="WhatWeDoPoints" id="WhatWeDoPoints" cols="30" rows="10" class="form-control" placeholder="What We Do Points Type here.."><?php echo $data ['WhatWeDoPoints']; ?></textarea>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-12">
									<label for="OfferServices">Offer Services Short Description </label>
                                    <textarea name="OfferServices" id="OfferServices" cols="30" rows="10" class="form-control" placeholder="Offer Services Short Description Type here..."><?php echo $data ['OfferServices']; ?></textarea>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-6">
									<label for="ProfessionalCoursesDescription">Professional Courses Short Description</label>
                                    <textarea name="ProfessionalCoursesDescription" id="ProfessionalCoursesDescription" cols="30" rows="10" class="form-control" placeholder="Professional Courses Short Description Type here..."><?php echo $data ['ProfessionalCoursesDescription']; ?></textarea>
								</div>
								
								<div class="col-md-6">
									<label for="ExperiencedInstructorDescription">Experienced Instructor Short Description</label>
                                    <textarea name="ExperiencedInstructorDescription" id="ExperiencedInstructorDescription" cols="30" rows="10" class="form-control" placeholder="Experienced Instructor Short Description Type here..."><?php echo $data ['ExperiencedInstructorDescription']; ?></textarea>
								</div>
								
								<div class="col-md-6">
									<label for="PracticalTrainingDescription">Practical Training Short Description</label>
                                    <textarea name="PracticalTrainingDescription" id="PracticalTrainingDescription" cols="30" rows="10" class="form-control" placeholder="Practical Training Short Description Type here..."><?php echo $data ['PracticalTrainingDescription']; ?></textarea>
								</div>
							
								<div class="col-md-6">
									<label for="ValidateCertificateDescription">Validate Certificate Short Description</label>
                                    <textarea name="ValidateCertificateDescription" id="ValidateCertificateDescription" cols="30" rows="10" class="form-control" placeholder="Validate Certificate Short Description Type here..."><?php echo $data ['ValidateCertificateDescription']; ?></textarea>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-6">
									<label for="trainingNumber">Training Number</label>
                                    <textarea name="trainingNumber" id="trainingNumber" cols="30" rows="10" class="form-control" placeholder="Training Number Type here.."><?php echo $data ['trainingNumber']; ?></textarea>
								</div>
								
								<div class="col-md-6">
									<label for="studentNumber">Student Number</label>
                                    <textarea name="studentNumber" id="studentNumber" cols="30" rows="10" class="form-control" placeholder="Student Number Type here...."><?php echo $data ['studentNumber']; ?></textarea>
								</div>
								
								<div class="col-md-6">
									<label for="trainersNumber">Trainers Number</label>
                                    <textarea name="trainersNumber" id="trainersNumber" cols="30" rows="10" class="form-control" placeholder="Trainers Number Type here..."><?php echo $data ['trainersNumber']; ?></textarea>
								</div>
							
								<div class="col-md-6">
									<label for="countryPriority">Country Priority</label>
                                    <textarea name="countryPriority" id="countryPriority" cols="30" rows="10" class="form-control" placeholder="Country Priority Type here..."><?php echo $data ['countryPriority']; ?></textarea>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-12">
									<label for="ourClassesDescription">Our Classes Short Description</label>
                                    <textarea name="ourClassesDescription" id="ourClassesDescription" cols="30" rows="10" class="form-control" placeholder="Our Classes Short Description Type here..."><?php echo $data ['ourClassesDescription']; ?></textarea>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-12">
									<label for="experiencedtrainerDescription">Experienced Trainer Short Description</label>
                                    <textarea name="experiencedtrainerDescription" id="experiencedtrainerDescription" cols="30" rows="10" class="form-control" placeholder="Experienced Trainer Short Description Type here..."><?php echo $data ['experiencedtrainerDescription']; ?></textarea>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-12">
									<label for="upcomingeventsDescription">Upcoming Events Short Description</label>
                                    <textarea name="upcomingeventsDescription" id="upcomingeventsDescription" cols="30" rows="10" class="form-control" placeholder="Upcoming Events Short Description Type here..."><?php echo $data ['upcomingeventsDescription']; ?></textarea>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-12">
									<label for="RecentNewsDescription">Recent News Short Description</label>
                                    <textarea name="RecentNewsDescription" id="RecentNewsDescription" cols="30" rows="10" class="form-control" placeholder="Recent News Short Description Type here..."><?php echo $data ['RecentNewsDescription']; ?></textarea>
								</div>
							</div>
							
							<div class="form-group" style="text-align: right">
							
                                <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />							
								<input type="submit" name="adminHomeUpdate" value="Save Changes" class="btn btn-primary">   
								
							</div> 
							
	<!--	<table align="center" width="20%" style="margin-top:10px;">
           <tr>
            <th><a href="adminhomeupdate.php?sid=<?php echo $data['id'];?>">Edit</a></th>
           </tr>
        </table> -->
							
							

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
