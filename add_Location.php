<?php include'header_adm.php';
// a form to add location information
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<h2>Location Address:</h2>
<form action = "new_location.php" method = "post">
State: <input type="text" name="LocationAddress" />

<input type = "submit" />
</form>



<?php include'_footer.php';
?>