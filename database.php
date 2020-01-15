<?php
    
	$con = mysqli_connect('localhost', 'root', '', 'gpad');
	
	if($con == false){
		
		echo "Cannection failed";
	}
?>