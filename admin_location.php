<?php include'header_adm.php';
// this page will update a location information
?>
<?php
session_start();
?>
<h3>Update Location </h3>
<form action ="update_location.php" method="post">
Location Address:<select name="old_location">
<?php
$id=$_POST['name'];
$_SESSION['ID']=$_POST['name'];

echo"<br/>";
// create a query to display the previouse location to be updated
$location_query=$tes->query("SELECT LocationAddress FROM Location WHERE LID=$id");
while ($mylocation=mysqli_fetch_array($location_query)){
	// add the location address in to a drop down box
	echo "<option value=\"LocationAddress\">".$mylocation["LocationAddress"]."</option>\n";


}
?>
<br/>
<select/>
<br/>
New Location:<br>
<textarea type="text" name ="new_location" rows="5" cols="50">
</textarea>

<input type = "submit"/>
</form>