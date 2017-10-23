<?php include'header_adm.php';
// a form to add agency information
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<h2>Add Agency name:</h2>
<form action = "new_agecny.php" method = "post">
Agency Name: <input type="text" name="AgencyName" />

<h3>Add Agency purpose:</h3>
<form action = "new_agecny.php" method = "post">
Agency Purpose: <input type="text" name="Purpos" />

<h3>Add Agency phone number:</h3>
<form action = "new_agecny.php" method = "post">
Phone Number: <input type="text" name="phoneNumber" />
<input type = "submit" />
</form>



<?php include'_footer.php';
?>