<?php include'header_adm.php';
// delete an angecy from a database
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<?php
$myAgency=$_POST['name'];
// create a query to filter the agency to be deleted
$myagency="DELETE FROM ProgramAgency WHERE ProgramAgency.AID=$myAgency";
if ($tes->query($myagency) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $tes->error;
}
echo"</br>";
$sql = "DELETE FROM Agency WHERE Agency.AID=$myAgency";
if ($tes->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $tes->error;
}
?>
<?php include'_footer.php';
?>