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

			   	<li style="background-image: url(admin/images/<?php echo $data['NewsImage']; ?>);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>News</h1>
				   					<h2><span><a href="index.php">Home</a> | News</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		
		<div class="colorlib-blog colorlib-light-grey">
			<div class="container">
			
			<!--News Description start from here -->
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
					
<?php 

include('database.php');

 $sql = "SELECT * FROM `adminhome`";
 $run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>
						<h2>Read Our News</h2>
						<p><?php echo $data ['RecentNewsDescription']; ?></p>
					</div>
				</div>
				<!-- News Description End here -->
				<!-- News Section Start here -->
				<div class="row">
				
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

					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(admin/images/<?php echo $data['image']; ?>);">
								<p class="meta"><span class="day"><?php echo $data ['Day']; ?></span><span class="month"><?php echo $data ['Month']; ?></span></p>
							</a>
							<div class="desc">
								<h2><a href="blog.html"><?php echo $data ['NewsHeadline']; ?></a></h2>
							<!--	<p class="admin"><span>Posted by:</span> <span>James Smith</span></p> -->
								<!--<p>ShortDescription</p>-->
								<th><a href="newsLearnMore.php?sid=<?php echo $data['id'];?>">Learn More</a></th>
							</div>
						</article>
					</div>
				<!--	<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>Posted by:</span> <span>James Smith</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>Posted by:</span> <span>James Smith</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-4.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>Posted by:</span> <span>James Smith</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-5.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>Posted by:</span> <span>James Smith</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-6.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>Posted by:</span> <span>James Smith</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
							</div>
						</article>
					</div> -->
					
					<?php
	  }

  }
  
?>			
				</div>
				
				<!-- News Section End Here -->
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

