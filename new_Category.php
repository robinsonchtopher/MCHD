<?php include'header_adm.php';
// add new cateogry to a database
?>
<?php
$CategoryName=$_POST['CategoryName'];
echo $CategoryName;
echo'<br/>';
if (isset($_POST['CategoryName'])){
	// insert all the information category
	$sql = "INSERT INTO Category (CategoryName)
	VALUES ('$CategoryName')";
	if ($tes->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $tes->error;
}
	
}

?>


<?php include'_footer.php';
?>