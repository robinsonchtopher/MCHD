<?php include'header_adm.php';
// to relate a program with an agency
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<?php
$entity_1=$_POST['name'];
$entity_2=$_POST['Name'];
//check if they are already related
if (isset($_POST['name']) && isset($_POST['Name'])){//query for new relatioship;
	 $check_Agency=$tes->query("SELECT * FROM ProgramAgency WHERE 
								ProgramAgency.AID='$entity_2' AND ProgramAgency.PID='$entity_1'");

	if ($sql=mysqli_fetch_array($check_Agency)){
	echo"The program has already an agency";
	}

	else{
		//if not relted create new relationship
	
		$me= "INSERT INTO ProgramAgency (AID,PID)
		VALUES ('$entity_2', '$entity_1 ')";
		if ($tes->query($me) === TRUE) {
			echo "New record created successfully";
		} 		
		else {
			echo "Error: " . $me . "<br>" . $tes->error;
		}
	}
}


?>