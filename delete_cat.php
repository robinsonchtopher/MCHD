<?php include'header_adm.php';
// delete a relationship between program and category 
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<?php

$entity_1=$_POST['name'];
$entity_2=$_POST['Name'];
//check if the program is already related to a category
if (isset($_POST['name']) && isset($_POST['Name'])){//query for new relatioship;
	$check_category=$tes->query("SELECT * FROM ProgramCategory WHERE CID=$entity_2 AND PID=$entity_1");
	if ($check_category){
		// if related delete them
	$sql = "DELETE FROM ProgramCategory WHERE PID=$entity_1 AND CID=$entity_2";
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