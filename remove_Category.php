<?php include'header_adm.php';
// pass a category ID to delet_category.php to be deleted
?>
<?php
echo"<h3>Delete an Category</h3>";
	echo "<form action =\"delet_category.php\" method=\"post\">";
	echo"View by:<select name=\"name\">";

	$new=$tes->query("SELECT CID, CategoryName FROM Category");
while ($me=mysqli_fetch_array($new)){
		echo"<option value='".$me['CID']."'>".$me['CategoryName']."</option>";
}

?>
</select>
<input type = "submit" />
</form>