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
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Schedule</h1>
				   					<h2><span><a href="index.html">Home</a> | Schedule</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		
		<div id="colorlib-schedule" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Our Class Schedule</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<div class="row">
					<div class="schedule text-center animate-box">
						<div class="col-md-12">
							<ul class="week">
								<li class="active"><a href="#">Sunday</a></li>
								<li><a href="#">Monday</a></li>
								<li><a href="#">Tuesday</a></li>
								<li><a href="#">Wednesday</a></li>
								<li><a href="#">Thursday</a></li>
								<li><a href="#">Friday</a></li>
								<li><a href="#">Saturday</a></li>
							</ul>
						</div>
						<div class="schedule-flex">
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gym"></i></span></p>
								<p class="time"><span>06am - 8am</span></p>
								<h3>Cardio Program</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-exercise-2"></i></span></p>
								<p class="time"><span>06am - 8am</span></p>
								<h3>Loose Weight Program</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-meditation"></i></span></p>
								<p class="time"><span>06am - 8am</span></p>
								<h3>Yoga Classes</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gloves"></i></span></p>
								<p class="time"><span>06am - 8am</span></p>
								<h3>Boxing Program</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
						</div>
						<div class="schedule-flex">
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-martial-arts"></i></span></p>
								<p class="time"><span>06am - 8am</span></p>
								<h3>Karate Classes</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-weightlifting"></i></span></p>
								<p class="time"><span>06am - 8am</span></p>
								<h3>Body Building</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-swimmer"></i></span></p>
								<p class="time"><span>06am - 8am</span></p>
								<h3>Swimming Program</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-man"></i></span></p>
								<p class="time"><span>06am - 8am</span></p>
								<h3>Basic Exercise</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div id="colorlib-subscribe" class="subs-img" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Subscribe Newsletter</h2>
						<p>Subscribe our newsletter and get latest update</p>
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
		</div>
		<?php
		
		include('footer.php');
		
		?>

