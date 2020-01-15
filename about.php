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
			   	<li style="background-image: url(admin/images/<?php echo $data['AboutImage']; ?>);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>About Us</h1>
				   					<h2><span><a href="index.php">Home</a> | About</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		
		<div id="colorlib-about" class="colorlib-light-grey">
			<div class="container">
			<!-- About Description Start From Here -->
				        <div class="row row-pb-md">	
<?php 

include('database.php');

 $sql = "SELECT * FROM `about`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);

?>   						
						
						<div class="col-md-8 col-md-offset-2 row-pb-md animate-box">
						
						<div class="video colorlib-video" style="background-image: url(admin/images/image_bg_gpad_4.jpg);">
							<a href="videos/GPAD Training Center.mp4" type="video/mp4" class="popup-vimeo"><i class="icon-play3"></i></a>
							<div class="overlay"></div>
						</div>
						
						</div>
						
						
					<div class="col-md-10 col-md-offset-1 text-center animate-box">
						<div class="about-wrap">
							<div class="heading-2">
								<h2>Geo Planning for Advance Development Site</h2>
							</div>
							<p><?php echo $data ['FirstPara']; ?></p>
							<p><?php echo $data ['SecondPara']; ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<p><?php echo $data ['ThirdPara']; ?></p>
					</div>
					<div class="col-md-4 animate-box">
						<p><?php echo $data ['FourthPara']; ?></p>
					</div>
					<div class="col-md-4 animate-box">
						<p><?php echo $data ['FifthPara']; ?></p>
					</div>
				</div>
			</div>
			<!-- About Description End Here -->
		</div>

		<div class="colorlib-trainers">
			<div class="container">
		<!-- Experienced Trainer Description Start from here -->	

				<div class="row">
				
<?php 

include('database.php');

 $sql = "SELECT * FROM `adminhome`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>

					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Our Experienced Trainer</h2>
						<p><?php echo $data ['experiencedtrainerDescription']; ?></p>
					</div>
				</div>
		<!-- Experienced Trainer Description End here -->		
				
		<!-- Trainer Section start from here -->
           		<div class="row">
				
<?php 
  include('database.php');
  
  $sql = "SELECT * FROM `Trainers`";
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
					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(admin/images/<?php echo $data['image']; ?>);"></div>
							<div class="desc">
								<h3><?php echo $data ['TrainerName']; ?></h3>
								<span>Trainer</span>
							</div>
							<th><a href="trainerLearnMore.php?sid=<?php echo $data['id'];?>">Learn More</a></th>
						<!--	<p>Content is not ready yet</p>
							<p class="social"><a href="#">Twitter</a> <a href="#">Facebook</a> <a href="#">Email</a></p> -->
					     </div> 
					</div>

				<!--	<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(images/rezaVai.jpg)"></div>
							<div class="desc">
								<h3>Rejaur Rahman</h3>
								<span>Trainer</span>
							</div>
							<p>Content is not ready yet</p>
							<p class="social"><a href="#">Twitter</a> <a href="#">Facebook</a> <a href="#">Email</a></p>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(images/raihanulVai.jpg)"></div>
							<div class="desc">
								<h3>Raihanul Islam</h3>
								<span>Trainer</span>
							</div>
							<p>Content is not ready yet</p>
							<p class="social"><a href="#">Twitter</a> <a href="#">Facebook</a> <a href="#">Email</a></p>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(images/rezaVai.jpg)"></div>
							<div class="desc">
								<h3>Rejaur Rahman</h3>
								<span>Trainer</span>
							</div>
							<p>Content is not ready yet</p>
							<p class="social"><a href="#">Twitter</a> <a href="#">Facebook</a> <a href="#">Email</a></p>
						</div>
					</div> -->
					
			<?php
	  }

  }
  
?>
					
				</div>
				<!-- Trainer Section end here -->
				
				
			</div>
		</div>
	
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

