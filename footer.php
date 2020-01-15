<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4><a href="about.php">About GPAD</a></h4>
						<!--<p>Conten is not ready</p> -->
						<p>
							<ul class="colorlib-social-icons">
							<!--	<li><a href="#"><i class="icon-twitter"></i></a></li> -->
								<li><a href="https://www.facebook.com/GPAD-Training-Center-357107001120829/"><i class="icon-facebook"></i></a></li>
								<li><a href="https://www.linkedin.com/company/gpad-training-center/"><i class="icon-linkedin"></i></a></li>
							<!--	<li><a href="#"><i class="icon-dribbble"></i></a></li> -->
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="about.php"><i class="icon-check"></i> About Us</a></li>
							<!--	<li><a href="#"><i class="icon-check"></i> Testimonials</a></li> -->
								<li><a href="courses.php"><i class="icon-check"></i> Trainings</a></li>
								<li><a href="event.php"><i class="icon-check"></i> Event</a></li>
								<li><a href="news.php"><i class="icon-check"></i> News</a></li>
								<li><a href="contact.php"><i class="icon-check"></i> Contact</a></li>
							</ul>
						</p>
					</div>
 <!-- News Section Start from here -->
					<div class="col-md-3 colorlib-widget">
					
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
		  
		  
?>
						<h4>Recent Post</h4>
						<div class="f-blog">
							<a href="#" class="blog-img" style="background-image: url(admin/images/<?php echo $data['image']; ?>);">
							</a>
							<div class="desc">
								<h2><a href="#"><?php echo $data ['NewsHeadline']; ?></a></h2>
								<p class="admin"><span><?php echo $data ['Date']; ?></span></p>
								<th><a href="newsLearnMore.php?sid=<?php echo $data['id'];?>">Learn More</a></th>
							</div>
						</div>
						<!--<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(images/image_bg_gpad_1.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">GIS Development System</a></h2>
								<p class="admin"><span>18 April 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(images/image_bg_gpad_1.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">GIS Development System</a></h2>
								<p class="admin"><span>18 April 2018</span></p>
							</div>
						</div> -->
						
						<?php
						
				if($count == 2){
					break;
				}
	  }

  }
  
?>
					</div>
 <!-- News Section End here -->
					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>House No. # 12 (Ground Floor) <br> Road No. # 4, Block # J <br> Banashree, Rampura, Dhaka 1219 <br> Near the Meradia Bazar </li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i> +8801822270686</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@gpadtrainingcenter.com</a></li>
							<li><a href="http://gpadtrainingcenter.com/"><i class="icon-location4"></i> http://gpadtrainingcenter.com/</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<small class="block">&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <!--| This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</small><br> 
							<!--	<small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a></small> -->
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
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