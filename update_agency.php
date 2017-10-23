<?php include'header_adm.php';

session_start();


$id=$_SESSION['ID'];
echo $id."\n";
// Check to see if the user is here from clicking the submit button
if( isset($_POST["old_purpose"] ) ) {
	echo "old name is defined"."<br/>";
	$temp1=$_POST["old_purpose"];
	echo $temp1."\n";
	$temp2=$_POST["new_purpose"];
	echo $temp2."\n";
}
else {
	echo "old name is not defined"."<br/>";
}

// updating the purpose of the agency
$d=strtotime("now");
$update=date("Y-m-d h:i:sa", $d);
if (isset($_POST["old_purpose"])&&$_POST["new_purpose"]!=""){
	if( $_POST["new_purpose"] != "" ) {
	 echo" data is available"."<br/>";
	}
	else {
	 echo"data is not available"."<br/>";
	}
	$new_data = "UPDATE Agency SET $temp1='$temp2', Last_Update='$update' WHERE AID='$id'";

	//echo $new_data;
	
	if ($tes->query($new_data) ==TRUE){
		echo"data updated";}
	else{
		echo "not updated";}
}
?>

<?php
/*
if( isset($_POST["old_number"] ) ) {
	 echo "old name is defined"."<br/>";
	$phone1=$_POST["old_number"];
	echo $phone1."\n";
	$phone2=$_POST["new_number"];
	echo $phone2."\n";
	if( isset($phone1) && $phone2!="") {
		echo" data is available"."<br/>";
		$new_phone = "UPDATE Agency SET $phone1='$phone2', Last_Update='$update' WHERE AID='$id'";
	
		if ($tes->query($new_phone) ==TRUE){
			echo"data updated";}
		else{
			echo "not updated";
		}
	}
	else {
		echo "new number missing<br/>";
	}
}
else {
	echo"data is not available"."<br/>";
}*/
$phone1=$_POST["old_number"];
echo $phone1."\n";
$phone2=$_POST["new_number"];
echo $phone2."\n";
// Check to see if the user is here from clicking the submit button
if (isset($_POST["old_number"])&& $_POST["new_number"]){
	// updating the phone number
		$new_phone = "UPDATE Agency SET $phone1='$phone2', Last_Update='$update' WHERE AID='$id'";
	
		if ($tes->query($new_phone) ==TRUE){
			echo"data updated";}
		else{
			echo "not updated";
		}
	
}


?>
<?php
$temp1=$_POST["old_name"];
echo $temp1."\n";
$temp2=$_POST["new_name"];
echo $temp2."\n";

//$id=$_SESSION['ID'];
/*
if( isset($_POST["old_name"] ) ) {
 echo "old name is defined"."<br/>";
}
else {
 echo "old name is not defined"."<br/>";
}
$d=strtotime("now");
$update=date("Y-m-d h:i:sa", $d);
if( $_POST["new_name"] != "" ) {
 echo" data is available"."<br/>";
}
else {
 echo"data is not available"."<br/>";
}
*/
// Check to see if the user is here from clicking the submit button
if (isset($_POST["old_name"])&&$_POST["new_name"]!=""){
	//up dating the agency name
	$new_agency = "UPDATE Agency SET $temp1='$temp2', Last_Update='$update' WHERE AID='$id'";

	if ($tes->query($new_agency) ==TRUE){
		echo"data updated";}
	else
		echo "not updated";

	
}
$_SESSION["ID"]=Null;
?>



