<?php include'header_adm.php';
// updating category
?>
<?php
session_start()
?>
<?php
$temp1=$_POST["old_category"];
echo $temp1."\n";
echo"<br/>";
$temp2=$_POST["new_category"];
echo $temp2."\n";
echo"<br/>";
$id=$_SESSION['ID'];

if( isset($_POST["old_category"] ) ) {
 echo "old name is defined"."<br/>";
}
else {
 echo "old name is not defined"."<br/>";
}
echo"<br/>";

if( $_POST["new_category"] != "" ) {
 echo" data is available"."<br/>";
}
else {
 echo"data is not available"."<br/>";
}
echo"<br/>";
// Check to see if the user is here from clicking the submit button
if (Isset($_POST["old_category"])&&$_POST["new_category"]!=""){
	// update category name
	$new_data = "UPDATE Category SET $temp1='$temp2' WHERE CID='$id'";
	
}
if (!$new_data){
	echo"you do not have any thing";
}
else{
	echo"you have something";
}
echo"<br/>";
if ($tes->query($new_data) ==TRUE){
	echo"data updated";}
else{
	echo "not updated";}

?>