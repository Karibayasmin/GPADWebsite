<?php
include('header.php');
?>

<form method="post" action="trial.php" enctype="multipart/form-data">


							
							<div class="row form-group">
								<div class="col-md-6">
									<label for="titlename">Title Name</label>
                                    <textarea name="titlename" id="titlename" cols="30" rows="10" class="form-control" placeholder="Say something about us..."></textarea>
								</div>
							
								<div class="col-md-6">
									<label for="image">Image</label>
								</div>
							</div>
							
							<div class="form-group" style="text-align: right">	
								<input type="submit"  name="submit" value="Save Changes" class="btn btn-primary">   
							</div>
<?php 
if(isset($_POST['submit'])){
	
	
	
	include('database.php');
	$titlename = $_POST['titlename'];
	
	$qry = "INSERT INTO `HomePageSlider`(`titlename`) VALUES ('$titlename')";
	
	$run = mysqli_query($con,$qry);
	
	if($run==true){
		
		?>
		<script>
		  alert('Data inserted Successfully');
		</script>
		
		<?php
	}
}

?>
							
</form>
<?php
include('footer.php');
?>