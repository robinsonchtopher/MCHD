<?php include'header_adm.php';
// a form to add category information
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<h2>Add Category name:</h2>
<form action = "new_Category.php" method = "post">
State: <input type="text" name="CategoryName" />

<input type = "submit" />
</form>



<?php include'_footer.php';
?>