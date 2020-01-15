<?php 
include('header.php');
?>



<!-- Slider Section Start here -->
<!--    <form method="post" action="index.php" enctype="multipart/form-data"> -->

		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<?php 
  include('database.php');
  
  $sql = "SELECT * FROM `homepageslider`";
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
					
			  <li style="background-image: url(admin/images/<?php echo $data['image']; ?>);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<td><h1><?php echo $data['titlename']; ?><h1></td>
				   					<p><a href="registration.php" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			<!--   	<li style="background-image: url(images/image_bg_gpad_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Best Training Center of RS in Bangladesh</h1>
				   					<p><a href="registration.php" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/image_bg_gpad_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Best Training Center of GIS in Bangladesh</h1>
				   					<p><a href="registration.php" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/image_bg_gpad_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Best Training Center of RS in Bangladesh</h1>
				   					<p><a href=""registration.php" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	-->
				<?php
	  }

  }
  
?>			
			  	</ul>
		  	</div>
		</aside>
		
<!--	</form> -->
<!-- Slider Section end here -->	
		<div id="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-4 intro-wrap">
						<div class="intro-flex">
							<div class="one-third color-1 animate-box">
								<span class="icon"><i class="flaticon-market"></i></span>
								<div class="desc">
									<h3>Take Trainings for Being More Skilled</h3>
									<p><a href="courses.php" class="view-more">View More</a></p>
								</div> 
							</div> 
							<div class="one-third color-2 animate-box">
								<span class="icon"><i class="flaticon-open-book"></i></span>
								<div class="desc">
									<h3>Make Yourself More Efficient</h3>
									<p><a href="participantsFeedback.php" class="view-more">View More</a></p>
								</div>
							</div>
						<!--	<div class="one-third color-3 animate-box">
								<div class="desc2">
									<h3>Discount Offer in all selected Trainings</h3>
									<p><a href="DiscountTrainingOffer.php" class="view-more">View More</a></p>
								</div>
							</div> -->
						</div>
					</div>
					
<!-- Company Descrption, Why Choose us, What We do, Offer Services Start from here -->
					<div class="col-md-8">
					
<?php 

include('database.php');

 $sql = "SELECT * FROM `adminhome`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>
					
						<div class="about-desc animate-box">
						
							<h2>Welcome to GPAD</h2>  
			  <p align="justify"><?php echo $data['CompanyDescription'];  ?> </p>
			 		  
							<div class="fancy-collapse-panel">
	                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	                     <div class="panel panel-default">
	                         <div class="panel-heading" role="tab" id="headingOne">
	                             <h4 class="panel-title">
	                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why choose us?
	                                 </a>
	                             </h4>
	                         </div>
	                         <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	                             <div class="panel-body">
	                                 <div class="row">
									      		<div class="col-md-6">
									      			<p align="justify"><?php echo $data ['whyChooseUsLeftSide']; ?></p>
									      		</div>
									      		<div class="col-md-6">
									      			<p align="justify"><?php echo $data ['whyChooseUsRightSide']; ?></p>
									      		</div>
									      	</div>
	                             </div>
	                         </div>
	                     </div>
	                     <div class="panel panel-default">
	                         <div class="panel-heading" role="tab" id="headingTwo">
	                             <h4 class="panel-title">
	                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What we do?
	                                 </a>
	                             </h4>
	                         </div>
	                         <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	                             <div class="panel-body">
	                                 <p><strong>GPAD</strong>, <?php echo $data ['WhatWeDoFirstLine']; ?></p>
												<ul>
													<?php echo $data ['WhatWeDoPoints']; ?>
													<!--<li>Content is not ready 😞</li>-->
												</ul>
	                             </div>
	                         </div>
	                     </div>
	                     <div class="panel panel-default">
	                         <div class="panel-heading" role="tab" id="headingThree">
	                             <h4 class="panel-title">
	                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Offer Services
	                                 </a>
	                             </h4>
	                         </div>
	                         <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
	                             <div class="panel-body">
	                                 <p><?php echo $data ['OfferServices']; ?></p>	
	                             </div>
	                         </div>
	                     </div>
	                  </div>
						</div>
					</div>
				</div>
				
<!-- Company Descrption, Why Choose us, What We do, Offer Services End here -->

			</div>
		</div>
     </div>
<!--Professional Courses,Experienced Instructor, Practical Training, Validated Certificate start from here -->
		<div id="colorlib-services">
		
<?php 

include('database.php');

 $sql = "SELECT * FROM `adminhome`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-books"></i>
							</span>
							<div class="desc">
								<h3>Professional Courses</h3>
								<th><a href="ProfessionalCoursesDescription.php?sid=<?php echo $data['id'];?>">Learn More</a></th>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-professor"></i>
							</span>
							<div class="desc">
								<h3>Experienced Trainer</h3>
								<th><a href="ExperiencedInstructorDescription.php?sid=<?php echo $data['id'];?>">Learn More</a></th>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-book"></i>
							</span>
							<div class="desc">
								<h3>Practical Training</h3>
								<th><a href="PracticalTrainingDescription.php?sid=<?php echo $data['id'];?>">Learn More</a></th>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-diploma"></i>
							</span>
							<div class="desc">
								<h3>Validated Certificate</h3>
								<th><a href="ValidateCertificateDescription.php?sid=<?php echo $data['id'];?>">Learn More</a></th>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--Professional Courses,Experienced Instructor, Practical Training, Validated Certificate End here -->

<!-- Trainings, Students, Trainers, Country priority start from here -->
		<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(admin/images/image_bg_gpad_5.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="counter-entry">
									<span class="icon"><i class="flaticon-book"></i></span>
									<div class="desc">
										<span class="colorlib-counter js-counter" data-from="0" data-to=<?php echo $data ['trainingNumber']; ?> data-speed="5000" data-refresh-interval="50"></span>
										<span class="colorlib-counter-label">Trainings</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="counter-entry">
									<span class="icon"><i class="flaticon-student"></i></span>
									<div class="desc">
										<span class="colorlib-counter js-counter" data-from="0" data-to=<?php echo $data ['studentNumber']; ?> data-speed="5000" data-refresh-interval="50"></span>
										<span class="colorlib-counter-label">Students</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="counter-entry">
									<span class="icon"><i class="flaticon-professor"></i></span>
									<div class="desc">
										<span class="colorlib-counter js-counter" data-from="0" data-to=<?php echo $data ['trainersNumber']; ?> data-speed="5000" data-refresh-interval="50"></span>
										<span class="colorlib-counter-label">Trainers</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="counter-entry">
									<span class="icon"><i class="flaticon-earth-globe"></i></span>
									<div class="desc">
										<span class="colorlib-counter js-counter" data-from="0" data-to="<?php echo $data ['countryPriority']; ?>" data-speed="5000" data-refresh-interval="50"></span>
										<span class="colorlib-counter-label">Country Priority</span>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Trainings, Students, Trainers, Country priority End here -->
			
		<div class="colorlib-classes colorlib-light-grey">
			<div class="container">
			
			<!-- Our Classes Description start from here -->
				<div class="row">
				
<?php 

include('database.php');

 $sql = "SELECT * FROM `adminhome`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>
				
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Our Classes</h2>
						<p><?php echo $data ['ourClassesDescription']; ?></p>
					</div>
				</div>
<!-- Our Classes Description end here -->
              <!--  <div align="left|right|center|justify"> -->
			  <div align="right">
                <th align="Right"><a href="courses.php">See All</a></th>
			  </div>
				<!-- Training Section start from here -->
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
								<h3><a href="news.php"><?php echo $data ['TrainingName']; ?></a></h3>
								<p ><?php echo $data ['registrationTime']; ?></p> 
								<th><a href="trainingLearnMore.php?sid=<?php echo $data['id'];?>">Learn More</a></th>
							</div>
						</div>
					</div>
					
					
					
			<!--		<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/training2.jpg);">
								<span class="price text-center"><small>1500/=</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Application of geographical Information System</a></h3>
								<p>Content is not ready 😞</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/training3.jpg);">
								<span class="price text-center"><small>1500/=</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Application of geographical Information System</a></h3>
								<p>Content is not ready 😞</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div> -->
					
					
					
					
					
					
					
					<!-- <div class="col-md-4 animate-box">
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
					
					if($count == 3){
						break;
					}
	  }

  }
  
?>			
				</div>
				<!-- Training section end here -->
			</div>	
		</div>

		<div id="colorlib-testimony" class="testimony-img" style="background-image: url(admin/images/image_bg_gpad_5.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>What Are The Students Says</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="row animate-box">
						
						<!-- Participant Section Start Here -->
							<div class="owl-carousel1">
							
<?php 
  include('database.php');
  
  $sql = "SELECT * FROM `participants`";
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
							
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span><?php echo $data ['ParticipantName']; ?></span>
												<p><?php echo $data ['Feedback']; ?></p>
											</blockquote>
											<div class="figure-img" style="background-image: url(admin/images/<?php echo $data['image']; ?>);"></div>
										</div>
									</div>
									
								</div>
							<!--	<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span>Unknown Participant</span>
												<p>Content is not ready 😞</p>
											</blockquote> 
											<div class="figure-img" style="background-image: url(images/participant2.jpg);"></div>
										</div>
									</div>
								</div>  -->
							<!--	<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span>Unknown Participant</span>
												<p>Content is not ready 😞</p>
											</blockquote>
											<div class="figure-img" style="background-image: url(images/participant1.jpg);"></div>
										</div>
									</div>
								</div> -->
								
			<?php
	  }

  }
  
?>			
								
							</div> 
							<!-- Participant Section End Here -->
						</div>
					</div>
				</div>
			</div>
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
			<div align="right">
                <th align="Right"><a href="about.php">See All</a></th>
			  </div>
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
						</div>
					</div>

				<!--	<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(images/rezaVai.jpg)"></div>
							<div class="desc">
								<h3>Rejaur Rahman</h3>
								<span>Trainer</span>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(images/raihanulVai.jpg)"></div>
							<div class="desc">
								<h3>Raihanul Islam</h3>
								<span>Trainer</span>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(images/rezaVai.jpg)"></div>
							<div class="desc">
								<h3>Rejaur Rahman</h3>
								<span>Trainer</span>
							</div>
						</div>
					</div> -->

<?php

       if($count == 4){
		   break;
	   }
	  }

  }
  
?>								
				</div>
				
		<!-- Trainer Section end here -->
				
			</div>
		</div>

		<div class="colorlib-event">
			<div class="container">
				<div class="row">
				
				<!--Upcomming Events Description Start from here -->
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
<?php 

include('database.php');

 $sql = "SELECT * FROM `adminhome`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>
						<h2>Upcoming Events</h2>
						<p><?php echo $data ['upcomingeventsDescription']; ?></p>
					</div>
				<!--Upcomming Events Description end here -->
				</div>
				
				<div align="right">
                <th align="Right"><a href="event.php">See All</a></th>
			    </div>
			  
			  
				    <div class="event-flex row-pb-sm">
					<div class="half event-img animate-box" style="background-image: url(admin/images/eventgpad.jpg);">
					</div>
					<div class="half">
					
					<!-- Event Section Start here -->
					
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
							<div class="col-md-12 animate-box">
								<div class="event-entry">
									<div class="desc">
										<p class="meta"><span class="day"><?php echo $data ['Day']; ?></span><span class="month"><?php echo $data ['Month']; ?></span></p>
										<p class="organizer"><span>Organized by:</span> <span><?php echo $data ['OrganizedBy']; ?></span></p>
										<h2><a href="event.html">Event Name: <?php echo $data ['EventName']; ?></a></h2>
									</div>
									<div class="location">
										<span class="icon"><i class="icon-map"></i></span>
										<p>Event Venue: <?php echo $data ['VanueName']; ?></p>
									</div>
									
									<th><a href="eventsLearnMore.php?sid=<?php echo $data['id'];?>">Learn More</a></th>
								</div>
								
								
							</div>
					<!--		<div class="col-md-12 animate-box">
								<div class="event-entry">
									<div class="desc">
										<p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
										<p class="organizer"><span>Organized by:</span> <span>GPAD</span></p>
										<h2><a href="event.html">Event Name</a></h2>
									</div>
									<div class="location">
										<span class="icon"><i class="icon-map"></i></span>
										<p>Event venue</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 animate-box">
								<div class="event-entry">
									<div class="desc">
										<p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
										<p class="organizer"><span>Organized by:</span> <span>GPAD</span></p>
										<h2><a href="event.html">Event name</a></h2>
									</div>
									<div class="location">
										<span class="icon"><i class="icon-map"></i></span>
										<p>Event venue</p>
									</div>
								</div>
							</div> -->
							
							<?php
							
							if($count == 3){
								
								break;
							}
	  }

  }
  
?>			
						</div>
						
						<!-- Event Section End here -->
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-blog colorlib-light-grey">
			<div class="container">
			
			<!-- Recent News Description Start from here -->
				<div class="row">
				
<?php 

include('database.php');

 $sql = "SELECT * FROM `adminhome`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Recent News</h2>
						<p><?php echo $data ['RecentNewsDescription']; ?></p>
					</div>
				</div>
			<!-- Recent News Description End here -->
			<div align="right">
                <th align="Right"><a href="news.php">See All</a></th>
			</div>
				<div class="row">
				
				<!-- First Highlighted News Start Here -->
				
				
					<div class="col-md-6 animate-box">
					
<?php 

include('database.php');

 $sql = "SELECT * FROM `FirstHighlightedNews`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(admin/images/<?php echo $data['image']; ?>);">
								<p class="meta"><span class="day"><?php echo $data ['Day']; ?></span><span class="month"><?php echo $data ['Month']; ?></span></p>
							</a>
							<div class="desc">
								<h2><a href="blog.html"><?php echo $data ['newsHeadline']; ?></a></h2>
								<p class="admin"><span>Posted by:</span> <span><?php echo $data ['postedby']; ?></span></p>
							<!--	<p>short Description</p> -->
								<th><a href="highlightednewsLearnMore.php?sid=<?php echo $data['id'];?>">Learn More</a></th>
							</div>
						</article>
					</div>
			<!-- First Highlighted News End Here-->
					
    <!-- News Section Start from here -->
					<div class="col-md-6">
					
					<?php 
  include('database.php');
  
  $sql = "SELECT * FROM `News`";
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
		  
		  
?>                      <div class="f-blog animate-box">
							<a href="#" class="blog-img" style="background-image: url(admin/images/<?php echo $data['image']; ?>);">
							</a>
							<div class="desc">
								<h2><?php echo $data ['NewsHeadline']; ?></h2>
								<p class="admin"><span><?php echo $data ['Date']; ?></span></p>
								<!--<p>Content is not ready yet</p> -->
								<th><a href="newsLearnMore.php?sid=<?php echo $data['id'];?>">Learn More</a></th>
							</div>
					    </div>
                    
						 
					<!--<div class="f-blog animate-box">
							<a href="blog.html" class="blog-img" style="background-image: url(images/image_bg_gpad_4.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">News Headline</a></h2>
								<p class="admin"><span>04 March 2018</span></p>
								<p>Short Description</p>
							</div>
						</div>
						<div class="f-blog animate-box">
							<a href="blog.html" class="blog-img" style="background-image: url(images/image_bg_gpad_4.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">News Headline</a></h2>
								<p class="admin"><span>04 March 2018</span></p>
								<p>Short Description</p>
							</div>
						</div> -->
						<?php
						
				if($count == 3){
					break;
				}
	  }

  }
  
?>	
						
					</div>							
	<!-- News Section End here -->
	
				</div>
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

