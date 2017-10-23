<?php include'_header.php';
// select a program and display it on the screen.
?>

<?php
//$program=$_POST['name'];
$program=$_GET['name'];
/*$program=$_GET['ProgramName'];*/

$myprogram=$tes->query("SELECT ProgramName, ProgramDescription,PhoneNumber, LocationAddress, email FROM Program,Location, ProgramLocation 
WHERE Program.PID='$program' AND Program.PID=ProgramLocation.PID AND Location.LID=ProgramLocation.LID");
while ($shu=mysqli_fetch_array($myprogram)){
	echo "Program Name ----  ".$shu["ProgramName"]."<br/>";
	echo"<br/>";
	echo "Description------  " .$shu["ProgramDescription"]."<br/>";
	echo "Address------".$shu["LocationAddress"]."<br/>";
	echo "Phone Number-----".$shu["PhoneNumber"]."<br/>";
	echo "email Address------".$shu["email"]."<br/>";
	echo"<br/>";

}
?>
<?php include'_footer.php';
?>
