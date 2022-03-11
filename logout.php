<?php 
session_start();
date_default_timezone_set('asia/kolkata');
$_SESSION["end_time"] = date("h:i:sa");
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "website";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$uname=$_SESSION['user_name'];
$start_time= $_SESSION['start_time'];
$end_time= $_SESSION['end_time'];
$sql = "INSERT INTO `session` VALUES ('$uname','$start_time','$end_time')";
$result = mysqli_query($conn, $sql);
session_unset();
session_destroy();
header("Location: index.php");