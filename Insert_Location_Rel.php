<?php include'header_adm.php';
// relate location with a program
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<?php
$entity_1=$_POST['name'];
$entity_2=$_POST['Name'];
$phone_number=$_POST['PhoneNumber'];
$email=$_POST['email'];
//check if related
if (isset($_POST['name']) && isset($_POST['Name'])){//query for new relatioship;
	$check_location=$tes->query("SELECT * FROM ProgramLocation WHERE LID==$entity_2 AND PID==$entity_1");
	if (!$check_location){
		// if not related create a relationship
	$sql = "INSERT INTO ProgramLocation (PID,LID,PhoneNumber,email)
	VALUES ('$entity_1', '$entity_2 ','$phone_number','$email')";
		if ($tes->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $tes->error;
}
	}
	else{
		echo"The program has already located";
	}
}
?>