<?php include'header_adm.php';

?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<?php
$entity= $_POST['entity_name'];
$entity_re=$_POST['relationship'];
// checkes which entities are selected to relate.
if (($entity=='Program' && $entity_re=='Category') || ($entity=='Category' && $entity_re=='Program')){
	// create query for program and category
	$myprogram=$tes->query("SELECT PID, ProgramName FROM Program");
	$mycategory=$tes->query("SELECT CID, CategoryName FROM Category");
	// create a form and pass it to InsertRel.php
	echo"<h3>Select a program</h3>";
	echo "<form action =\"InsertRel.php\" method=\"post\">";
	echo"View by:<select name=\"name\">";
	while ($program=mysqli_fetch_array($myprogram)){
		//add all the programs in to a drop down box
		echo"<option value='".$program['PID']."'>".$program['ProgramName']."</option>";
	}
	echo"</select>";
	echo"<h3>Select a category</h3>";
	echo"View by:<select name=\"Name\">";
	while ($category=mysqli_fetch_array($mycategory)){
		echo"<option value='".$category['CID']."'>".$category['CategoryName']."</option>";
	}
	echo"</select>";
	echo"<input type = \"submit\" />";
	echo"</form>";
}
else if (($entity=='Program' && $entity_re=='Agency') || ($entity=='Agency' && $entity_re=='Program')){
	$myprogram=$tes->query("SELECT PID, ProgramName FROM Program");
	$myagency=$tes->query("SELECT AID, AgencyName FROM Agency");
	echo"<h3>Select a program</h3>";
	echo "<form action =\"Insert_Agecny_Rel.php\" method=\"post\">";
	echo"View by:<select name=\"name\">";
	while ($program=mysqli_fetch_array($myprogram)){
		echo"<option value='".$program['PID']."'>".$program['ProgramName']."</option>";
	}
	echo"</select>";
	echo"<h3>Select an Agency</h3>";
	echo"View by:<select name=\"Name\">";
	while ($agency=mysqli_fetch_array($myagency)){
		echo"<option value='".$agency['AID']."'>".$agency['AgencyName']."</option>";
	}
	echo"</select>";
	echo"<input type = \"submit\" />";
	echo"</form>";
}
else if (($entity=='Program' && $entity_re=='Location') || ($entity=='Location' && $entity_re=='Program')){
		$myprogram=$tes->query("SELECT PID, ProgramName FROM Program");
		$mylocation=$tes->query("SELECT LID, LocationAddress FROM Location");
	echo"<h3>Select a program</h3>";
	echo "<form action =\"Insert_Location_Rel.php\" method=\"post\">";
	echo"View by:<select name=\"name\">";
	while ($program=mysqli_fetch_array($myprogram)){
		echo"<option value='".$program['PID']."'>".$program['ProgramName']."</option>";
	}
	echo"</select>";
	echo"<h3>Select a Location</h3>";
	echo"View by:<select name=\"Name\">";
	while ($location=mysqli_fetch_array($mylocation)){
		echo"<option value='".$location['LID']."'>".$location['LocationAddress']."</option>";
	}
	echo"</select>";

	
	echo"<h2>Add pnone number:</h2>";
	echo"Phone number: <input type=\"text\" name=\"PhoneNumber\" />";
	echo"</select>";
	echo"<h2>Add email address:</h2>";
	echo"email: <input type=\"text\" name=\"email\" />";
	echo"</select>";
	echo"<input type = \"submit\" />";
	echo"</form>";
}
else{
	// display if the ebntities are not related
	echo $entity. " can not be related to ".$entity_re. "!";
}
	echo "<form action=\"index_project.php\" method=\"post\"><input type=\"submit\"
	value=\"Logout\"/></form>";
?>