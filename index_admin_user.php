<?php include'_header.php';
// forms for user name and password
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>

<h2>Log in:</h2>
<form action = "admin_login.php" method = "post">
Login: <input type="input" name="yourName" />
<br/>
password:<input type="password" name="yourpassword" />
<input type = "submit"
value="Login"/>
</form>

<?php include'_footer.php';
?>