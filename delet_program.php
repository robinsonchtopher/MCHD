<?php include'header_adm.php';
// delete the program from a database
// the program has to be deleted from all the tables
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<?php
$myProgram=$_POST['name'];
echo $myProgram;
// create a query to delete a program from ProgramAgency table
$mypr="DELETE FROM ProgramAgency WHERE ProgramAgency.PID=$myProgram";
if ($tes->query($mypr) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $tes->error;
}
echo"</br>";
// create a query to delete a program from ProgramCategory table
$pro="DELETE FROM ProgramCategory WHERE ProgramCategory.PID=$myProgram";
if ($tes->query($pro) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $tes->error;
}
echo"</br>";
// create a query to delete a program from ProgramLocation
$oldprogram="DELETE FROM ProgramLocation WHERE ProgramLocation.PID=$myProgram";
if ($tes->query($oldprogram) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $tes->error;
}
echo"</br>";
$sql = "DELETE FROM Program WHERE PID=$myProgram";
if ($tes->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $tes->error;
}
?>
<?php include'_footer.php';
?>