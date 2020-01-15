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
$companyDescription = $_POST['companyDescription'];
$whyChooseUsLeftSide = $_POST['whyChooseUsLeftSide'];
$whyChooseUsRightSide = $_POST['whyChooseUsRightSide'];
$WhatWeDoFirstLine = $_POST['WhatWeDoFirstLine'];
$WhatWeDoPoints = $_POST['WhatWeDoPoints'];
$OfferServices = $_POST['OfferServices'];
$ProfessionalCoursesDescription = $_POST['ProfessionalCoursesDescription'];
$ExperiencedInstructorDescription = $_POST['ExperiencedInstructorDescription'];
$PracticalTrainingDescription = $_POST['PracticalTrainingDescription'];
$ValidateCertificateDescription = $_POST['ValidateCertificateDescription'];
$trainingNumber = $_POST['trainingNumber'];
$studentNumber = $_POST['studentNumber'];
$trainersNumber = $_POST['trainersNumber'];
$countryPriority = $_POST['countryPriority'];
$ourClassesDescription = $_POST['ourClassesDescription'];
$experiencedtrainerDescription = $_POST['experiencedtrainerDescription'];
$upcomingeventsDescription = $_POST['upcomingeventsDescription'];
$RecentNewsDescription = $_POST['RecentNewsDescription'];


?>
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
 </script>
                <?php
			$qry = "UPDATE `adminhome` SET `CompanyDescription` = '$companyDescription', `whyChooseUsLeftSide` = '$whyChooseUsLeftSide', 
			`whyChooseUsRightSide` = '$whyChooseUsRightSide', `WhatWeDoFirstLine` = '$WhatWeDoFirstLine', `WhatWeDoPoints` = '$WhatWeDoPoints', 
			`OfferServices` = '$OfferServices', `ProfessionalCoursesDescription` = '$ProfessionalCoursesDescription', 
			`ExperiencedInstructorDescription` = '$ExperiencedInstructorDescription', 
			`PracticalTrainingDescription` = '$PracticalTrainingDescription', 
			`ValidateCertificateDescription` = '$ValidateCertificateDescription', 
			`trainingNumber` = '$trainingNumber', `studentNumber` = '$studentNumber', `trainersNumber` = '$trainersNumber', 
			`countryPriority` = '$countryPriority', `ourClassesDescription` = '$ourClassesDescription', 
			`experiencedtrainerDescription` = '$experiencedtrainerDescription', `upcomingeventsDescription` = '$upcomingeventsDescription', 
			`RecentNewsDescription` = '$RecentNewsDescription' WHERE `id` = $id;";
	
	        $run = mysqli_query($con,$qry);
			if($run==true){
                  ?>
				   <script>
		              alert('Updated Data Successfully');
					  window.open('adminhome.php?sid=<?php echo $id; ?>','_self');
		           </script>
                   <script>
                     if ( window.history.replaceState ) {
                   window.history.replaceState( null, null, window.location.href );
                     }
                   </script>
                 <?php
			}
		  
?>