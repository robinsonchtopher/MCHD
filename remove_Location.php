<?php include'header_adm.php';
// pass an lication ID to delet_location.php to be deleted
?>
<?php
echo"<h3>Delete an Location</h3>";
	echo "<form action =\"delet_location.php\" method=\"post\">";
	echo"View by:<select name=\"name\">";

	$new=$tes->query("SELECT LID, LocationAddress FROM Location");
while ($me=mysqli_fetch_array($new)){
		echo"<option value='".$me['LID']."'>".$me['LocationAddress']."</option>";
}

?>
</select>
<input type = "submit" />
</form>