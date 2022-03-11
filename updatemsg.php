<?php  
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "website";
$conn = mysqli_connect($sname,$unmae, $password, $db_name);
if (isset($_POST['id']) && isset($_POST['msg'])) {
    $id = $_POST['id'];
    $msg = $_POST['msg'];
    $sql="UPDATE `messsages` SET `message`='$msg' WHERE `m_id`='$id'";
    $result = mysqli_query($conn, $sql);
}
header("Location: home.php");