<?php
require_once("connect.php");


if(isset($_POST["full_update"])){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$location = $_POST["location"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$summary = $_POST["summary"];
	$title = $_POST["title"];
	$company = $_POST["company"];
	$texts = $_POST["texts"];
	$dates = $_POST["dates"];
	
	mysqli_query($connect, "UPDATE `tbl_cv` SET `name` = '$name', `location` = '$location', `phone` = '$phone', `email` = '$email', `summary` = '$summary', `title` = '$title', `company` = '$company', `texts` = '$texts', `dates` = '$dates' WHERE `id` = '$id'") or die(mysqli_error());
		header("location: index.php?id=$id");
}

?>