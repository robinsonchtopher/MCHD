<?php include'_header.php';
// add Agency, Program, and Location in to a drop down box
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	  <div class="row"> 
	  <div class="col-sm-10"></div>
	  <div class="col-sm-2">
	  <form action="index_admin_user.php" method="post">
		<input type="submit" value="Administrator"</input></div>
	</form>
	</div>
	
	

</html>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<body>
<h3>Select an entity</h3>
<form action ="second.php" method="post">
View by:<select name="entity_name">
     <option value=Agency>Agency</option>
     <option value=Category>Category</option>
     <option value=Program>Program</option>

</select>
<input type = "submit" />
</form>
<element onclick="myScript">
</body>



<?php include'_footer.php';
?>
