<?php

session_start();
		
		if(isset($_SESSION['uid'])){
			
			echo "";
		}else{
			
			header('location:../admin.php');
		}
?>

<?php 
include('header.php');
?>

			  <div id="colorlib-contact">
			<div class="container">
				<div class="row">
				
				<div class="col-md-10 col-md-offset-1 animate-box">
<form method="post" action="admincontact.php" enctype="multipart/form-data">

<?php 
  include('database.php');
  
  $sql = "SELECT * FROM `contactmessage`";
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
  
                           <div class="row form-group">
								<div class="col-md-6">
									 <label for="firstName">First Name </label>
									<p><?php echo $data ['firstName']; ?></p>
								</div>
								<div class="col-md-6">
									 <label for="lastName">Last Name </label>
									<p><?php echo $data ['lastName']; ?></p>
								</div>
							</div>
							

							<div class="row form-group">
							    <div class="col-md-6">
                                  <label for="email"> Email </label>
							      <p><?php echo $data ['email']; ?></p>
								</div>
								
								<div class="col-md-6">
                                  <label for="subject">Subject </label>
                                  <p><?php echo $data ['subject']; ?></p>								  
								</div>
								
                            </div>
							
							<div class="row form-group">
								<div class="col-md-12">
									 <label for="message">Message</label>
									<p><?php echo $data ['message']; ?></p>
								</div>
							</div>
							
							
							
						<!--	<p>
                              <span class="required">*</span>Required field
                            </p> -->
							
						<!--	<div class="form-group" style="text-align: right">	
								<input type="submit" value="Submit" class="btn btn-primary">   
							</div> -->
							
		<table align="center" width="20%" style="margin-top:10px;">
           <tr>
            <th><a href="adminContactUpdate.php?sid=<?php echo $data['id'];?>">Edit</a></th>
            <th><a href="adminContactdelete.php?sid=<?php echo $data['id'];?>">Delete</a></th>
           </tr>
        </table>
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
