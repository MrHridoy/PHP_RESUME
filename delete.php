<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_cv";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$id=$_REQUEST['id'];
$sql = "DELETE FROM tbl_cv where id='".$id."'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  		$_SESSION['message'] = "Information Saved"; 
		header('location: table.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>