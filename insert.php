<?php
require_once("connect.php");

	// initialize variables
	$name = "";
	$location = "";
	$phone = "";
	$email = "";
	$summary = "";
	$jobtitle = "";
	$company = "";
	$texts = "";
	$dates = "";
	
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$location = $_POST['location'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$summary = $_POST['summary'];
		$title = $_POST['title'];
		$company = $_POST['company'];
		$texts = $_POST['texts'];
		$dates = $_POST['dates'];

		mysqli_query($connect, "INSERT INTO tbl_cv (name, location,phone, email,summary,title, company,texts, dates) VALUES ('$name', '$location', '$phone', '$email', '$summary', '$title', '$company', '$texts', '$dates')"); 
		$_SESSION['message'] = "Information Saved"; 
		header('location: table.php');
	}


?>