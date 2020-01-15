<?php 
include('header.php');
?>
	
		<!-- Participant Section Start -->
		
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
				    
				<div class="col-md-10 col-md-offset-1 animate-box">
           <h2>Participant Feedback After Completed Their Training..... </h2>
 <form method="post" action="participantsFeedback.php" enctype="multipart/form-data">
<?php 
  include('database.php');
  
  $sql = "SELECT * FROM `Participants`";
  $run = mysqli_query($con,$sql);

  if(mysqli_num_rows($run)<1)
  {
	echo 'No Records found';
  }
  else{
	  $count = 0;
	 
	  while($data=mysqli_fetch_assoc($run))
	  {
		  
		  
		  $count++;
		  
		  
?>
                            
							
							
					<div class="col-md-4 animate-box" align="center">
						<div class="classes">
							<div class="classes-img" style="background-image: url(admin/images/<?php echo $data['image']; ?>);">
							</div>
							<div class="desc">
							    <label for="ShortDescription">Participant Name</label>
								<h3><?php echo $data ['ParticipantName']; ?></h3>
							<!--	<p >short description</p> -->
							</div>
						</div>
					</div>
							
							<div class="row form-group" align="center">
							   <div class="col-md-12">
								<!--	<label for="ShortDescription">Short Description</label> -->
                                    <p><?php echo $data ['Feedback']; ?></p>
								</div>	
							</div>
							
						<!--	<div class="form-group" style="text-align: right">	
								<input type="submit" value="Save Changes" class="btn btn-primary">   
							</div> -->
							
		
		  <hr>
							
				<?php
	  }

  }
  
?>			

</form>

</div>
				</div>
			</div>
		</div>
		
		<!-- Participant Section End -->


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