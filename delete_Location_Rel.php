<?php include'header_adm.php';
// delete a relationship between program and location
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<?php
$entity_1=$_POST['name'];
$entity_2=$_POST['Name'];
//check if the program is already related to a location
if (isset($_POST['name']) && isset($_POST['Name'])){//query for new relatioship;
	$check_location=$tes->query("SELECT * FROM ProgramLocation WHERE PID=$entity_1 AND LID=$entity_2");
	//if related delete them
	if ($check_location){
	$sql = "DELETE FROM ProgramLocation WHERE PID=$entity_1 AND LID=$entity_2";
		if ($tes->query($sql) === TRUE) {
    echo "deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $tes->error;
}
	}
	else{
		echo"The program category relation does not exist";
	}
}
?>