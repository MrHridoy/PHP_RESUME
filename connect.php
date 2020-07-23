<?php

$host = "localhost";
$user_name = "root";
$password = "";
$database_name = "db_cv";

$connect =mysqli_connect($host,$user_name,$password,$database_name);

if($connect==false){
	echo "<h1>Error database connection,Failed!</h1>";
}
?>