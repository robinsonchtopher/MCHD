<?php include'header_adm.php';

?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<?php
$entity= $_POST['entity_name'];
$entity_re=$_POST['relationship'];
// check which entites are selected 
//display all of each in a drop down box
// pass them to a specific page
if (($entity=='Program' && $entity_re=='Category') || ($entity=='Category' && $entity_re=='Program')){
	$myprogram=$tes->query("SELECT PID, ProgramName FROM Program");
	$mycategory=$tes->query("SELECT CID, CategoryName FROM Category");
	echo"<h3>Select a program</h3>";
	echo "<form action =\"delete_cat.php\" method=\"post\">";
	echo"View by:<select name=\"name\">";
	while ($program=mysqli_fetch_array($myprogram)){
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
	echo "<form action =\"delete_Agecny_Rel.php\" method=\"post\">";
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
	echo "<form action =\"delete_Location_Rel.php\" method=\"post\">";
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

	echo"<input type = \"submit\" />";
	echo"</form>";
}
else{
	echo " they can not relate";
}
	echo "<form action=\"index_project.php\" method=\"post\"><input type=\"submit\"
	value=\"Logout\"/></form>";
?>