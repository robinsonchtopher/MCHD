<?php include'header_adm.php';
// a form to add program information
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<h2>Add Program name:</h2>
<form action = "new_program.php" method = "post">
State: <input type="text" name="ProgramName" />

<h3>Add  Program Description:</h3>
<form action = "new_agecny.php" method = "post">
State: <input type="text" name="ProgramDescription" />

<input type = "submit" />
</form>



<?php include'_footer.php';
?>