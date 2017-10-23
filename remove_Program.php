<?php include'header_adm.php';
// pass an program ID to delet_program.php to be deleted
?>
<?php
echo"<h3>Delete Program</h3>";
	echo "<form action =\"delet_program.php\" method=\"post\">";
	echo"View by:<select name=\"name\">";

	$new=$tes->query("SELECT PID, ProgramName FROM Program");
while ($me=mysqli_fetch_array($new)){
		echo"<option value='".$me['PID']."'>".$me['ProgramName']."</option>";
}

?>
</select>
<input type = "submit" />
</form>