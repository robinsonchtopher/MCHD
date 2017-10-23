<?php include'_header.php';
// display all the programs under a given category
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<h3>Select a program</h3>

<?php
$category=$_GET['name'];
// create a query and add the display the program names
$mycategory=$tes->query("SELECT Program.PID, Program.ProgramName FROM Program, Category, ProgramCategory
 WHERE Category.CID='$category'AND Category.CID=ProgramCategory.CID AND Program.PID=ProgramCategory.PID
	ORDER BY ProgramName ASC");

while ($skt=mysqli_fetch_array($mycategory)){

	echo '<li><a href ="program.php?name='.$skt['PID'].'">'.$skt['ProgramName'].'</a></li>';

 }
?>



<?php include'_footer.php';
?>