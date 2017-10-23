<?php include'header_adm.php';
?>
<?php
session_start();

// update program
?>
<?php
$id=$_POST['name'];
$_SESSION['ID']=$_POST['name'];
echo"<br/>";
//create a from to display program name
?>
<h3>Update Program </h3>
<form action ="update_program.php" method="post">
Program Name:<select name="old_name">
<?php
// create a query to display the program to be updated
$program_query=$tes->query("SELECT ProgramName, ProgramDescription FROM Program WHERE PID=$id");
while ($myprogram=mysqli_fetch_array($program_query)){
	// add the programname in to a drop down box
	//echo"input type=\"text\" name =\"ProgramName\" value=" .$myprogram["ProgramName"];
	echo "<option value=\"ProgramName\">".$myprogram["ProgramName"]."</option>\n";
	echo"<br/>";}
// create a form to input a new program
// create another form to display program description
?>
<br/>
<select/>
<br/>
New Program Name:<br>
<input type="text" name="new_program">

<h3>Update Program </h3>
<form action ="update_program.php" method="post">
Program Description:<select name="old_description">

<?php
// create a query to display a program to be updated
$program_query=$tes->query("SELECT ProgramName, ProgramDescription FROM Program WHERE PID=$id");
while ($myprogram=mysqli_fetch_array($program_query)){
	// add the program description in to a drop down box
	echo "<option value=\"ProgramDescription\">".$myprogram["ProgramDescription"]."</option>\n";
	echo"<br/>";}
	// create a form to input a new program description
?>
<br/>
<select/>
<br/>
New program description:<br>
<textarea type="text" name="new_description" rows="10" cols="50">
</textarea>

<input type = "submit"/>
</form>
