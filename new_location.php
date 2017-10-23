<?php include'header_adm.php';
// add new location to a database
?>
<?php
$LocationName=$_POST['LocationAddress'];

//echo $CategoryName;
echo'<br/>';
if (isset($_POST['LocationAddress'])){
	// insert all the infromation of the location
	$sql = "INSERT INTO Location (LocationAddress)
	VALUES ('$LocationName')";
	if ($tes->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $tes->error;
}
	
}

?>


<?php include'_footer.php';
?>