<?php include'header_adm.php';
// add new program to a database
?>
<?php
$ProgramName=$_POST['ProgramName'];
$ProgramDes=$_POST['ProgramDescription'];

echo'<br/>';
if (isset($_POST['ProgramName'])){
	//insert all the infromation of a program
	$sql = "INSERT INTO Program (ProgramName,ProgramDescription)
	VALUES ('$ProgramName','$ProgramDes')";
	if ($tes->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $tes->error;
}
	
}

?>


<?php include'_footer.php';
?>