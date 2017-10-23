<?php include'header_adm.php';
?>
<?php
session_start()
?>
<?php
$temp1=$_POST["old_name"];
echo $temp1."\n";
echo"<br/>";
$temp2=$_POST["new_program"];
echo $temp2."\n";
echo"<br/>";

$id=$_SESSION['ID'];
echo $id;
echo"<br/>";

if( isset($_POST["old_name"] ) ) {
 echo "old name is defined"."<br/>";
}
else {
 echo "old name is not defined"."<br/>";
}
$d=strtotime("now");
$update=date("Y-m-d h:i:sa", $d);
echo"<br/>";
if( $_POST["new_program"] != "" ) {
 echo" data is available"."<br/>";
}
else {
 echo"data is not available"."<br/>";
}
// Check to see if the user is here from clicking the submit button
if (Isset($_POST["old_name"])&&$_POST["new_program"]!=""){
	// updating program name
	$new_name = "UPDATE Program SET $temp1='$temp2' WHERE PID='$id'";
	
}
if (!$new_name){
	echo"you do not have any thing";
}
else{
	echo"you have something";
}
echo"<br/>";
if ($tes->query($new_name) ==TRUE){
	echo"data updated";}
else{
	echo "not updated";}
echo"<br/>";
?>
<?php
$program1=$_POST["old_description"];
echo $program1."\n";
echo"<br/>";
$program2=$_POST["new_description"];
echo $program2."\n";
echo"<br/>";

$id=$_SESSION['ID'];
echo $id;
echo"<br/>";

if( isset($_POST["old_description"] ) ) {
 echo "old name is defined"."<br/>";
}
else {
 echo "old name is not defined"."<br/>";
}
$d=strtotime("now");
$update=date("Y-m-d h:i:sa", $d);
echo"<br/>";
if( $_POST["new_description"] != "" ) {
 echo" data is available"."<br/>";
}
else {
 echo"data is not available"."<br/>";
}
// Check to see if the user is here from clicking the submit button
if (Isset($_POST["old_description"])&&$_POST["new_description"]!=""){
	// update program description
	$new_data = "UPDATE Program SET $program1='$program2' WHERE PID='$id'";
	
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
<?php include'_footer.php';
?>