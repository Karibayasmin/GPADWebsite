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
	$FirstPara = $_POST['FirstPara'];
	$SecondPara = $_POST['SecondPara'];
	$ThirdPara = $_POST['ThirdPara'];
	$FourthPara = $_POST['FourthPara'];
	$FifthPara = $_POST['FifthPara'];
	?>

 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
 </script>
                <?php
			$qry = "UPDATE `about` SET `FirstPara` = '$FirstPara', `SecondPara` = '$SecondPara', `ThirdPara` = '$ThirdPara', `FourthPara` = '$FourthPara', `FifthPara` = '$FifthPara' WHERE `id` = $id;";
	
	        $run = mysqli_query($con,$qry);
			if($run==true){
                  ?>
				   <script>
		              alert('Updated Data Successfully');
					  window.open('adminabout.php?sid=<?php echo $id; ?>','_self');
		           </script>
                   <script>
                     if ( window.history.replaceState ) {
                   window.history.replaceState( null, null, window.location.href );
                     }
                   </script>
                 <?php
			}
	
		
?>