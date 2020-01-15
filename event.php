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

			   	<li style="background-image: url(admin/images/<?php echo $data['EventImage']; ?>);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Upcoming Events</h1>
				   					<h2><span><a href="index.php">Home</a> | Events</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		
		<div class="colorlib-event">
			<div class="container">
			
			<!-- Event Section Start from here -->
				<div class="row">
				
<?php 
  include('database.php');
  
  $sql = "SELECT * FROM `Events`";
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
						<div class="event-entry">
							<div class="desc">
								<p class="meta"><span class="day"><?php echo $data ['Day']; ?></span><span class="month"><?php echo $data ['Month']; ?></span></p>
								<p class="organizer"><span>Organized by:</span> <span><?php echo $data ['OrganizedBy']; ?></span></p>
								<h2><a href="event.html"><?php echo $data ['EventName']; ?></a></h2>
							</div>
							<div class="location">
								<span class="icon"><i class="icon-map"></i></span>
								<p><?php echo $data ['VanueName']; ?></p>
							</div>
						</div>
					</div>
				<!--	<div class="col-md-4 animate-box">
						<div class="event-entry">
							<div class="desc">
								<p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
								<p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
								<h2><a href="event.html">You're Invited 1st Anniversary of Eskwela</a></h2>
							</div>
							<div class="location">
								<span class="icon"><i class="icon-map"></i></span>
								<p>291 South 21th Street, Suite 721 New York NY 10016</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="event-entry">
							<div class="desc">
								<p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
								<p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
								<h2><a href="event.html">Practice Workshop 2018</a></h2>
							</div>
							<div class="location">
								<span class="icon"><i class="icon-map"></i></span>
								<p>291 South 21th Street, Suite 721 New York NY 10016</p>
							</div>
						</div>
					</div> -->
					
					<?php
	  }

  }
  
?>			
				</div>
				<!-- Event Section End here -->
				
				
			<!--	<div class="row">
					<div class="col-md-4 animate-box">
						<div class="event-entry">
							<div class="desc">
								<p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
								<p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
								<h2><a href="event.html">We Held Free Training for Basic Programming</a></h2>
							</div>
							<div class="location">
								<span class="icon"><i class="icon-map"></i></span>
								<p>291 South 21th Street, Suite 721 New York NY 10016</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="event-entry">
							<div class="desc">
								<p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
								<p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
								<h2><a href="event.html">You're Invited 1st Anniversary of Eskwela</a></h2>
							</div>
							<div class="location">
								<span class="icon"><i class="icon-map"></i></span>
								<p>291 South 21th Street, Suite 721 New York NY 10016</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="event-entry">
							<div class="desc">
								<p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
								<p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
								<h2><a href="event.html">Practice Workshop 2018</a></h2>
							</div>
							<div class="location">
								<span class="icon"><i class="icon-map"></i></span>
								<p>291 South 21th Street, Suite 721 New York NY 10016</p>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	
	<!--	<div id="colorlib-subscribe" class="subs-img" style="background-image: url(admin/images/image_bg_gpad_5.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Subscribe WEBSITE</h2>
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

