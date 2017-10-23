<?php include'header_adm.php';
// delete category from a database
?>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<?php
$myCategory=$_POST['name'];
// create a query to filter a category to be deleted
$cat="DELETE FROM ProgramCategory WHERE ProgramCategory.CID=$myCategory";
if ($tes->query($cat) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $tes->error;
}
echo"</br>";
$sql = "DELETE FROM Category WHERE CID=$myCategory";
if ($tes->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $tes->error;
}
?>
<?php include'_footer.php';
?>