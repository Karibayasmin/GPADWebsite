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
	
	
			$qry = "DELETE FROM `homepageslider` WHERE `id` = '$id';";
	
	        $run = mysqli_query($con,$qry);
			if($run==true){
                  ?>
				   <script>
		              alert('Deleted Data Successfully');
					  window.open('sliderSectionView.php','_self');
		           </script>
                   <script>
                     if ( window.history.replaceState ) {
                   window.history.replaceState( null, null, window.location.href );
                     }
                   </script>
                 <?php
			}
		
?>