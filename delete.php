<?php
require_once("connect.php");
// sql to delete a record
$id=$_REQUEST['id'];
$sql = "DELETE FROM tbl_cv where id='".$id."'";

if (mysqli_query($connect, $sql)) {
  echo "Record deleted successfully";
  		$_SESSION['message'] = "Information Saved"; 
		header('location: table.php');
} else {
  echo "Error deleting record: " . mysqli_error($connect);
}

mysqli_close($connect);
?>