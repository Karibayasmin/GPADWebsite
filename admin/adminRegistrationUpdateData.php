<?php

session_start();
		
		if(isset($_SESSION['uid'])){
			
			echo "";
		}
		
		else{
			
			header('location:../admin.php');
		}
?>

<?php
	include('database.php');
	
	$id = $_POST['sid']; 
	$FirstName = $_POST['FirstName']; 
	$LastName = $_POST['LastName'];
	$Gender = $_POST['Gender'];
	$Designation = $_POST['Designation'];
	$InstitutionName = $_POST['InstitutionName'];
	$EmailAddress = $_POST['EmailAddress'];
	$DesiredTraining = $_POST['DesiredTraining'];
	$TrainingNews = $_POST['TrainingNews'];
	$RefenceName = $_POST['RefenceName'];
	$Feedback = $_POST['Feedback']; 
	$name = $_FILES["file"]["name"];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
	
	?>
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
 </script>
    <?php
	
	if(!empty($name) ) {
        $location = 'images/';

        if  (move_uploaded_file($tmp_name, $location.$name)){
			
	
			
             ?>
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
 </script>
                <?php
			$qry = "UPDATE `registrationdetails` SET `FirstName` = '$FirstName', `LastName` = '$LastName', `Gender` = '$Gender', `Designation` = '$Designation', `InstitutionName` = '$InstitutionName', `EmailAddress` = '$EmailAddress', `DesiredTraining` = '$DesiredTraining', `TrainingNews` = '$TrainingNews', `RefenceName` = '$RefenceName', `Feedback` = '$Feedback', `image` = '$name' WHERE `id` = $id;";
	
	        $run = mysqli_query($con,$qry);
			if($run==true){
                  ?>
				   <script>
		              alert('Updated Data Successfully');
					  window.open('adminregistrationupdate.php?sid=<?php echo $id; ?>','_self');
		           </script>
                   <script>
                     if ( window.history.replaceState ) {
                   window.history.replaceState( null, null, window.location.href );
                     }
                   </script>
                 <?php
			}
		  
        }
		} else {
       // echo 'Please Fill up all the field';
	    ?>
	    <script>
		  alert('You have to Choose a picture to Update any of the data');
		 window.open('adminregistrationupdate.php?sid=<?php echo $id; ?>','_self');
		</script> 
		
		 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
        </script>
		<?php
    }
		
		

    

?>