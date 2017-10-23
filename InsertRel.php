<?php include'header_adm.php';
// create a relationship between program and category
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<?php
$entity_1=$_POST['name'];
$entity_2=$_POST['Name'];
// check if they are related
if (isset($_POST['name']) && isset($_POST['Name'])){//query for new relatioship;
	$check_category=$tes->query("SELECT * FROM ProgramCategory WHERE CID='$entity_2' AND PID='$entity_1'");
	if (!$mycat=mysqli_fetch_array($check_category)){
		// if not related create a new relationship
		$sql = "INSERT INTO ProgramCategory (CID,PID)
		VALUES ('$entity_2', '$entity_1 ')";
			if ($tes->query($sql) === TRUE) {
				echo "New record created successfully";
			} 			
			else {
				echo "Error: " . $sql . "<br>" . $tes->error;
			}
	}
	else{
		echo"The program is already related with this category.";
	}
}
?>