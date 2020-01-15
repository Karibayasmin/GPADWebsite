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

			   	<li style="background-image: url(admin/images/<?php echo $data['ContactImage']; ?>);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Contact Us</h1>
				   					<h2><span><a href="index.php">Home</a> | Contact</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Contact Information</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="contact-info-wrap-flex">
									<div class="con-info">
										<p><span><i class="icon-location-2"></i></span> House No. # 12 (Ground Floor) <br> Road No. # 4, Block # J <br> Banashree, Rampura, Dhaka 1219 <br> Near the Meradia Bazar</p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-phone3"></i></span> <a href="tel://01822270686">+ 8801822270686</a></p>
									</div>
							<!--		<div class="con-info">
										<p><span><i class="icon-paperplane"></i></span> <a href="info@gpadtrainingcenter.com">info@gpadtrainingcenter.com</a></p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-globe"></i></span> <a href="http://gpadtrainingcenter.com/">http://gpadtrainingcenter.com/</a></p>
									</div> -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Message Us</h2>
						<form method="post" action="contact.php" enctype="multipart/form-data">
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input type="text" id="firstName" name="firstName" class="form-control" placeholder="Your firstname">
								</div>
								<div class="col-md-6">
									<!-- <label for="lname">Last Name</label> -->
									<input type="text" id="lastName" name="lastName" class="form-control" placeholder="Your lastname">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="email">Email</label> -->
									<input type="text" id="email" name="email" class="form-control" placeholder="Your email address">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="subject">Subject</label> -->
									<input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="message">Message</label> -->
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Type here your Message.."></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" name="sendMessageInsertSubmit" value="Send Message" class="btn btn-primary">
							</div>
							
<?php 
if(isset($_POST['sendMessageInsertSubmit'])){
	
	include('database.php');
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($subject)
		&& !empty($message)) {
	
	      ?>
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
 </script>
         <?php
				

			$qry = "INSERT INTO `contactmessage`(`firstName`, `lastName`, `email`, `subject`, `message`) VALUES 
			('$firstName','$lastName','$email', '$subject', '$message')";
	
	        $run = mysqli_query($con,$qry);
			if($run==true){
                  ?>
				   <script>
		              alert('Your Message Sent Successfully');
		           </script>
                   <script>
                     if ( window.history.replaceState ) {
                   window.history.replaceState( null, null, window.location.href );
                     }
                   </script>
                 <?php
			}
			
			} else {
       // echo 'Please Fill up all the field';
	    ?>
	    <script>
		  alert('Please Fill up all the field');
		</script> 
		
		 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
        </script>
		<?php
    }
 }
?>

						</form>		
					</div>
				</div>
			</div>
		</div>
		<div id="map" class="colorlib-map"></div>
	
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

