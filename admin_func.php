<?php include'header_adm.php';
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>

<?php
$my_table=$_POST['entity_name'];
echo $my_table;


if ($my_table=='Program'){
	
	
	echo"<h3>Select a program</h3>";
	echo "<form action =\"admin_program.php\" method=\"post\">";
	echo"View by:<select name=\"name\">";
	// create a query to display all the programs
	$new=$tes->query("SELECT PID,ProgramName FROM $my_table");
	while ($me=mysqli_fetch_array($new)){
		// add all the programs to a drop down box
		echo"<option value='".$me['PID']."'>".$me['ProgramName']."</option>";	
	}
}
else if ($my_table=='Agency'){
	echo"<h3>Select an Agency</h3>";
	echo "<form action =\"admin_agency.php\" method=\"post\">";
	echo"View by:<select name=\"name\">";
	// create a query to display all the agencies
	$new=$tes->query("SELECT AID, AgencyName FROM $my_table");
	while ($me=mysqli_fetch_array($new)){
		// add all the agencies in to a drop down box
		echo"<option value='".$me['AID']."'>".$me['AgencyName']."</option>";

	}
	
}

else if ($my_table=='Category'){
	echo"<h3>Select a category</h3>";
	echo "<form action =\"admin_category.php\" method=\"post\">";
	echo"View by:<select name=\"name\">";
	// create a query to display the categories
	$new=$tes->query("SELECT CID, CategoryName FROM $my_table");
	echo" category";
	while ($me=mysqli_fetch_array($new)){
		// add all the cateogries in to a drop down box
		echo"<option value='".$me['CID']."'>".$me['CategoryName']."</option>";

	}
}
else if ($my_table=='Location'){
	echo"<h3>Select an Agency</h3>";
	echo "<form action =\"admin_location.php\" method=\"post\">";
	echo"View by:<select name=\"name\">";
	// creat a query to display all location addresses
	$new=$tes->query("SELECT LID, LocationAddress FROM $my_table");
	while ($me=mysqli_fetch_array($new)){
		// add all locations addresses in to a drop down box

		echo"<option value='".$me['LID']."'>".$me['LocationAddress']."</option>";

	}
	
}
echo"</select>";
echo"<input type = \"submit\" 
value=\"Update $my_table\"/>";
echo"</form>";
// a submit form to add a new  entity
echo "<form action =\"add_$my_table.php\" method=\"post\">";
echo"<input type = \"submit\"";
echo"value=\"Add $my_table\"/>";
echo"</form>";
// a form to remove an entity
echo "<form action =\"remove_$my_table.php\" method=\"post\">";
echo"<input type = \"submit\"";
echo"value=\"Delete $my_table\"/>";
echo"</form>";

?>
<?php	
// logout box heading to a home page
echo "<form action=\"index_project.php\" method=\"post\"><input type=\"submit\"
	value=\"Logout\"/></form>";
	?>



<?php include'_footer.php';
?>