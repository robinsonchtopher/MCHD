<?php include'header_adm.php';
// pass an agency ID to delet_agency.php to be deleted
?>
<?php
echo"<h3>Delete an Agency</h3>";
	echo "<form action =\"delet_agency.php\" method=\"post\">";
	echo"View by:<select name=\"name\">";

	$new=$tes->query("SELECT AID, AgencyName FROM Agency");
while ($me=mysqli_fetch_array($new)){
		echo"<option value='".$me['AID']."'>".$me['AgencyName']."</option>";
}

?>
</select>
<input type = "submit" />
</form>