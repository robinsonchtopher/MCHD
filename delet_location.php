<?php include'header_adm.php';
// delete location from a database
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<?php
$myLocation=$_POST['name'];
// create a query filter a cateogry to be delete 
$mylocation="DELETE FROM ProgramLocation WHERE ProgramLocation.LID=$myLocation";
if ($tes->query($mylocation) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $tes->error;
}
echo"</br>";
$sql = "DELETE FROM Location WHERE Location.LID=$myLocation";
if ($tes->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $tes->error;
}
?>
<?php include'_footer.php';
?>