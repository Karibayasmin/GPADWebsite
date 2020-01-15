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
	
	$id = $_REQUEST['sid']; 

	?>
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
 </script>
    <?php
	
	
			$qry = "DELETE FROM `trainings` WHERE `id` = '$id';";
	
	        $run = mysqli_query($con,$qry);
			if($run==true){
                  ?>
				   <script>
		              alert('Deleted Data Successfully');
					  window.open('trainingSectionView.php','_self');
		           </script>
                   <script>
                     if ( window.history.replaceState ) {
                   window.history.replaceState( null, null, window.location.href );
                     }
                   </script>
                 <?php
			}
		
?>