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
		<!-- Participant Section Start -->
		
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
				    
				<div class="col-md-10 col-md-offset-1 animate-box">
           <h2>Participant Section</h2>
 <form method="post" action="participantSectionView.php" enctype="multipart/form-data">
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
                            <div class="row form-group">
								<div class="col-md-6">
									 <label for="ParticipantName">Participant Name</label>
									<p><?php echo $data ['ParticipantName']; ?></p>
								</div>
								<div class="col-md-6">
								<!--	 <label for="VanueName">Image </label> -->
									 <td><img src="images/<?php echo $data['image']; ?>" width="200" height="200"/></td>
									 
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-6">
									<label for="Feedback">Feedback</label>
                                    <p><?php echo $data ['Feedback']; ?></p>
								</div>
							</div>
							
						<!--	<div class="form-group" style="text-align: right">	
								<input type="submit" value="Save Changes" class="btn btn-primary">   
							</div> -->
							
		<table align="center" width="20%" style="margin-top:10px;">
           <tr>
            <th><a href="participantSectionupdate.php?sid=<?php echo $data['id'];?>">Edit</a></th>
            <th><a href="participantSectiondelete.php?sid=<?php echo $data['id'];?>">Delete</a></th>
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