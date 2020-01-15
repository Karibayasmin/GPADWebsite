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
	$newsHeadline = $_POST['newsHeadline'];
	$Day = $_POST['Day'];
	$Month = $_POST['Month'];
	$postedby = $_POST['postedby'];
	$shortDescription = $_POST['shortDescription'];
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
			$qry = "UPDATE `firsthighlightednews` SET `newsHeadline` = '$newsHeadline', `postedby` = '$postedby', `shortDescription` = '$shortDescription', `Day` = '$Day', `Month` = '$Month', `image` = '$name' WHERE `id` = $id;";
	
	        $run = mysqli_query($con,$qry);
			if($run==true){
                  ?>
				   <script>
		              alert('Updated Data Successfully');
					  window.open('highlightedNewsSection.php?sid=<?php echo $id; ?>','_self');
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
		 window.open('highlightedNewsSection.php?sid=<?php echo $id; ?>','_self');
		</script> 
		
		 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
        </script>
		<?php
    }
		
?>