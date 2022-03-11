<?php 
session_start(); 
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "website";
$conn = mysqli_connect($sname,$unmae, $password, $db_name);
if (!$conn) {
    echo "Connection failed!";
}
$uname = $_SESSION['user_name'];
$msg = $_POST['msg'];
$sql = "INSERT INTO `messsages` (`uname`, `message`)VALUES ('$uname','$msg')";
$result = mysqli_query($conn, $sql);
echo '<script>alert("New Message Updated")</script>';
header("Location: home.php");