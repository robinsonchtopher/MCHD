<?php include'_header.php';
// administrator log in confirmation
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<?php
session_start()
?>
<?php
// set the user name and pass word
$_SESSION['user_id'] = $_POST["yourName"];
$_SESSION['password'] = $_POST["yourpassword"];

?>
<?php
if( isset( $_SESSION['user_id'] )) {
 echo "The user name is ".$_SESSION['user_id']."<br />";
 echo "The password is ".$_SESSION['password']."<br />";
}
else {
 echo "The state name variable has not been set in this session.<br />";
}
?>
<?php
if (!isset($_SESSION['user_id'])){
	header('location:http://tango.berea.edu/mezgeboa/index_user.php');
}


?>
<?php
if (!isset($_SESSION['password'])){
	header('location:http://tango.berea.edu/mezgeboa/index_admin_user.php');
}

?>
<?php
$rawUsername=$_POST["yourName"];
$rawUserpassword=$_POST["yourpassword"];
$secureUsername=mysql_real_escape_string($_POST["yourName"]);
// check if the user name and password are in the database
$myquery=$tes->query("SELECT UserID, UserName,UserPassword FROM User WHERE UserName='$rawUsername' AND UserPassword='$rawUserpassword'");

if ( $use=mysqli_fetch_array($myquery)){	
	header('location:http://tango.berea.edu/mezgeboa/admin_user.php');

	echo "<h1> Welcome, ". $_SESSION['user_id'].". A successful login!</h1>";
	echo "<form action=\"index_user.php\" method=\"post\"><input type=\"submit\"
	value=\"Logout\"/></form>";


	//echo"good job";
}
else{
	echo"<h1> The user name or password is wrong, please try again";
	header('location:http://tango.berea.edu/mezgeboa/index_admin_user.php');
}


?>
<?php
$_SESSION["yourID"]=$use['UserID'];
$_SESSION["yourName"]=$use['UserName'];
?>


<?php include'_footer.php';
?>