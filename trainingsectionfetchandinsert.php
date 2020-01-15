<?php
include('header.php');
?>

						<!-- Insert Training Section Start Here -->
		           
				<div id="colorlib-contact">
			<div class="container">
				<div class="row">
				
				<div class="col-md-10 col-md-offset-1 animate-box">
                 <h4>Training Section Insert New One</h4>
				 
<form method="post" action="adminhome.php" enctype="multipart/form-data">

                            <div class="row form-group">
								<div class="col-md-6">
									 <label for="TrainingName">Training Name</label>
									<textarea name="TrainingName" id="TrainingName" cols="30" rows="10" class="form-control" placeholder="Give Training Name..."></textarea>
								</div>
								
								<div class="col-md-6">
									 <label for="amount">Amount</label>
									<input type="text" name="amount" id="amount" class="form-control" placeholder="Enter an amount..." ">
								</div>
								
							</div>
							
							<div class="row form-group">
							
							    <div class="col-md-6">
									<label for="ShortDescription">Short Description</label>
                                    <textarea name="ShortDescription" id="ShortDescription" cols="30" rows="10" class="form-control" placeholder="Give Short Description about this training..."></textarea>
								</div>
							    
								<div class="col-md-6">
									<label for="image">Image </label>
									 <td><input type="file" name="file"><br><br></td>
									 
									
								</div>
								
							</div>
							
							<div class="form-group" style="text-align: right">	
								<input type="submit"  name="trainingsubmit" value="Insert New Value" class="btn btn-primary">   
							</div>
							
<?php 
if(isset($_POST['trainingsubmit'])){
	
	include('database.php');
	$TrainingName = $_POST['TrainingName'];
	$amount = $_POST['amount'];
	$ShortDescription = $_POST['ShortDescription'];
	$name = $_FILES["file"]["name"];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
	
	if (!empty($name)) {
        $location = 'images/';

        if  (move_uploaded_file($tmp_name, $location.$name)){
             ?>
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
 </script>
                <?php
			$qry = "INSERT INTO `trainings`(`TrainingName`, `image`, `amount`, `ShortDescription`) VALUES ('$TrainingName','$name','$amount','$ShortDescription')";
	
	        $run = mysqli_query($con,$qry);
			if($run==true){
                  ?>
                   <script>
                     if ( window.history.replaceState ) {
                   window.history.replaceState( null, null, window.location.href );
                     }
                   </script>
                 <?php
			}
        }

    } else {
        echo 'Please Fill up all the field';
	  
	   /* <script>
		  alert('One of the field is empty');
		</script> */
		?>
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
		</div>
		<!-- Insert Training Section End Here -->
		
		
		
		
<?php
include('footer.php');
?>