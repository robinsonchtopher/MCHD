<?php include'header_adm.php';
?>
<?php
session_start();
$id=$_POST['name'];
echo $id;
$_SESSION['ID']=$_POST['name'];
echo $_SESSION['ID'];
// create a query based on the ID posted and make a form
$agency_query=$tes->query("SELECT AgencyName, Purpos, phoneNumber FROM Agency WHERE AID=$id");
?>

<h3>Update Agency </h3>
<form action ="update_agency.php" method="post">
Agency Purpose:<select name="old_purpose">



<?php

echo"<br/>";

while ($myagency=mysqli_fetch_array($agency_query)){
	// add the agency purpose to a drop down box
	echo "<option value=\"Purpos\">".$myagency["Purpos"]."</option>\n";
	echo"<br/>";}

?>
<br/>
<select/>
<br/>
New Agency Purpose:<br>
<textarea type="text" name="new_purpose" rows="10" cols="50">
</textarea>




<h3>Update Agency </h3>
<form action ="update_agency.php" method="post">
Agency Name:<select name="old_name">



<?php

echo"<br/>";
$agency_query=$tes->query("SELECT AgencyName, Purpos, phoneNumber FROM Agency WHERE AID=$id");
while ($myagency=mysqli_fetch_array($agency_query)){
	echo "<option value=\"AgencyName\">".$myagency["AgencyName"]."</option>\n";
	echo"<br/>";}
?>
<br/>
<select/>
<br/>
New Agency Name:<br>
<input type="text" name="new_name">
<h3>Update Agency </h3>
<form action ="update_agency.php" method="post">
Agency Phone number:<select name="old_number">
<?php

echo"<br/>";
$agency_query=$tes->query("SELECT AgencyName, Purpos, phoneNumber FROM Agency WHERE AID=$id");
while ($myagency=mysqli_fetch_array($agency_query)){

	echo "<option value=\"phoneNumber\">".$myagency["phoneNumber"]."</option>\n";
	echo"<br/>";}


?>
<br/>
<select/>
<br/>
New Agency Phone Number:<br>
<input type="text" name="new_number">
<input type = "submit"/>
</form>