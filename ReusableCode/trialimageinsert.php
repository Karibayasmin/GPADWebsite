<?php
include('header.php');
?>
<?php

if (isset($_FILES["file"]["name"])) {
    include('database.php');
    $name = $_FILES["file"]["name"];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];

    if (!empty($name)) {
        $location = 'images/';

        if  (move_uploaded_file($tmp_name, $location.$name)){
            echo 'Uploaded';
			$qry = "INSERT INTO `HomePageSlider`(`image`) VALUES ('$name')";
	
	        $run = mysqli_query($con,$qry);
			if($run==true){
 ?>
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
 </script>
 <?php
			}
        }

    } else {
        echo 'please choose a file';
    }
}
?>

<form action="trialimageinsert.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
include('footer.php');
?>