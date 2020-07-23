<?php
require_once("connect.php");

$show=$_POST['search'];
if($show){
	$sql="SELECT * FROM tbl_cv WHERE location='$show'";
	$results=mysqli_query($connect,$sql);
	while ($rows=mysqli_fetch_array($results)) {
		//header("location:table.php");
		echo $rows['name'];
		echo $rows['location'];
		echo $rows['phone'];
		echo $rows['email'];
		echo $rows['company'];

	}

}
else{
	echo "No Data Found!";
}
?>