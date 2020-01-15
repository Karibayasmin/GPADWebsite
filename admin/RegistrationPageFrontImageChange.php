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
			$qry = "UPDATE `everypagefrontimage` SET `RegistrationImage` = '$name' ";
	
	        $run = mysqli_query($con,$qry);
			if($run==true){
                  ?>
				   <script>
		              alert('Updated Data Successfully');
					  window.open('everyPageFrontImageChange.php','_self');
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
		  alert('You have to Choose a picture to Update the data');
		 window.open('everyPageFrontImageChange.php','_self');
		</script> 
		
		 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
        </script>
<?php
    }
		
?>