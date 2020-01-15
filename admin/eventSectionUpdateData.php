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
	$EventName = $_POST['EventName'];
	$OrganizedBy = $_POST['OrganizedBy'];
	$Day = $_POST['Day'];
	$Month = $_POST['Month'];
	$VanueName = $_POST['VanueName'];
	$ShortDescription = $_POST['ShortDescription'];
	
	?>

 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
 </script>
                <?php
			$qry = "UPDATE `events` SET `EventName` = '$EventName', `OrganizedBy` = '$OrganizedBy', `Day` = '$Day', `Month` = '$Month', `VanueName` = '$VanueName', `ShortDescription`= '$ShortDescription' WHERE `id` = $id;";
	
	        $run = mysqli_query($con,$qry);
			if($run==true){
                  ?>
				   <script>
		              alert('Updated Data Successfully');
					  window.open('eventSectionupdate.php?sid=<?php echo $id; ?>','_self');
		           </script>
                   <script>
                     if ( window.history.replaceState ) {
                   window.history.replaceState( null, null, window.location.href );
                     }
                   </script>
                 <?php
			}
		  
        ?>
		