<html>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>

<body>
<h1>MCKY Resource Directory</h1>
<?php
//connect to database and create a form that headed to homepage.
$tes=mysqli_connect("localhost","mezgeboa","alganesh25","mezgeboa");
echo "<form action=\"index_project.php\" method=\"post\"><input type=\"submit\"
	value=\"Home\"/></form>";
?>

