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

			   	<li style="background-image: url(admin/images/<?php echo $data['CourseImage']; ?>);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Courses</h1>
				   					<h2><span><a href="index.php">Home</a> | Courses</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		
		<div class="colorlib-classes">
			<div class="container">
				<div class="row">
				
				<!-- Our Classes Description Start Here -->
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
					
<?php 

include('database.php');

 $sql = "SELECT * FROM `adminhome`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>
						<h2>Our Classes</h2>
						<p><?php echo $data ['ourClassesDescription']; ?></p>
					</div>
				</div>
				
				<!-- Our Classes Description End Here -->
				
				<!-- Training Section Start Here -->
				<div class="row">
				
<?php 
  include('database.php');
  
  $sql = "SELECT * FROM `Trainings`";
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
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(admin/images/<?php echo $data['image']; ?>);">
								<span class="price text-center"><small><?php echo $data ['amount']; ?></small></span>
							</div>
							<div class="desc">
								<h3><a href="#"><?php echo $data ['TrainingName']; ?></a></h3>
							<!--	<p>ShortDescription</p> -->
							<p ><?php echo $data ['registrationTime']; ?></p>
							<!--	<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p> -->
							<th><a href="trainingLearnMore.php?sid=<?php echo $data['id'];?>">Learn More</a></th>
							</div>
						</div>
					</div>
				<!--	<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-2.jpg);">
								<span class="price text-center"><small>$450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Convert PSD to HTML</a></h3>
								<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-3.jpg);">
								<span class="price text-center"><small>$450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Convert HTML to WordPress</a></h3>
								<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-4.jpg);">
								<span class="price text-center"><small>$450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Developing Mobile Apps</a></h3>
								<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-5.jpg);">
								<span class="price text-center"><small>$450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Learned Smoke Effects</a></h3>
								<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-6.jpg);">
								<span class="price text-center"><small>$450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Convert HTML to WordPress</a></h3>
								<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div> -->
					
					<?php
	  }

  }
  
?>			
				</div>
				
				<!-- Training Section End Here -->
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

