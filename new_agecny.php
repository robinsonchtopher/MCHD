<?php include'header_adm.php';
// add a new agency to database
?>
<?php
$Agencyname=$_POST['AgencyName'];
$Agencypurpos=$_POST['Purpos'];
$Agencyphone=$_POST['phoneNumber'];
echo'<br/>';
$d=strtotime("now");
$update=date("Y-m-d h:i:sa", $d);
if (isset($_POST['AgencyName'])){
	// insert all the information of the agency
	$sql = "INSERT INTO Agency (AgencyName,Purpos,phoneNumber,Last_Update)
	VALUES ('$Agencyname', '$Agencypurpos ', '$Agencyphone', '$update')";
	if ($tes->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $tes->error;
}
	
}

?>


<?php include'_footer.php';
?>