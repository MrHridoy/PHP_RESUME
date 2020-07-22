<?php
require_once("connect.php");


if(isset($_POST["update"])){
	$id=$_POST['id'];
	$title = $_POST["title"];
	$company = $_POST["company"];
	$texts = $_POST["texts"];
	$dates = $_POST["dates"];
	
	mysqli_query($connect, "UPDATE `tbl_cv` SET `title` = '$title', `company` = '$company', `texts` = '$texts', `dates` = '$dates' WHERE `id` = '$id'") or die(mysqli_error());
		
		header("location: index.php?id=$id");
}

?>