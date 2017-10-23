<?php include'header_adm.php';
?>
<?php
session_start();
//make a form
?>
<h3>Update Category </h3>
<form action ="update_category.php" method="post">
Category Name:<select name="old_category">
<?php
$id=$_POST['name'];
$_SESSION['ID']=$_POST['name'];
echo $_SESSION['ID'];
echo"<br/>";
// create query for cateogry name
$category_query=$tes->query("SELECT CategoryName FROM Category WHERE CID=$id");
while ($mycategory=mysqli_fetch_array($category_query)){
	// add category name in to a drop down box
	echo "<option value=\"CategoryName\">".$mycategory["CategoryName"]."</option>\n";
	echo"<br/>";
}
?>
<br/>
<select/>
<br/>
New Category Name:<br>
<textarea type ="text" name="new_category" rows="2" cols="50" >
</textarea>
<input type = "submit"/>
</form>