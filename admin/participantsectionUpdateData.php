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
	$ParticipantName = $_POST['ParticipantName'];
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
			$qry = "UPDATE `participants` SET `ParticipantName` = '$ParticipantName', `Feedback` = '$Feedback', `image` = '$name' WHERE `id` = $id;";
	
	        $run = mysqli_query($con,$qry);
			if($run==true){
                  ?>
				   <script>
		              alert('Updated Data Successfully');
					  window.open('participantSectionupdate.php?sid=<?php echo $id; ?>','_self');
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
		 window.open('participantSectionupdate.php?sid=<?php echo $id; ?>','_self');
		</script> 
		
		 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
        </script>
		<?php
    }
		
		

    

?>