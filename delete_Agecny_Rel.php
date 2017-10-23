<?php include'header_adm.php';
// delete a relationship between program and agency
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<?php
$entity_1=$_POST['name'];
$entity_2=$_POST['Name'];
// check if the program and agency are already related
if (isset($_POST['name']) && isset($_POST['Name'])){//query for new relatioship;
	$check_agency=$tes->query("SELECT * FROM ProgramAgency WHERE AID=$entity_2 AND PID=$entity_1");
	if ($check_agency){
		// if related delete
	$sql = "DELETE FROM ProgramAgency WHERE PID=$entity_1 AND AID=$entity_2";
		if ($tes->query($sql) === TRUE) {
    echo "deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $tes->error;
}
	}
	else{
		echo"The program agency relation does not exist";
	}
}
?>