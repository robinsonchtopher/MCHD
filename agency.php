<?php include'_header.php';
// display all the programs under a given agency
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>

<h3>Select a program</h3>

<?php
$agency=$_GET['name'];
// create a query to display all the programs under a given agency
$myagency=$tes->query("SELECT Program.PID, ProgramName FROM Program,Agency, ProgramAgency

 WHERE Agency.AID='$agency' AND Program.PID=ProgramAgency.PID AND Agency.AID=ProgramAgency.AID
 
	ORDER BY ProgramName ASC");

while ($hello=mysqli_fetch_array($myagency)){	
	echo '<li><a href ="program.php?name='.$hello['PID'].'">'.$hello['ProgramName'].'</a></li>';
}
?>

<?php include'_footer.php';
?>
