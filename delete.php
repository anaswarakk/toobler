<?php  
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "website";
$conn = mysqli_connect($sname,$unmae, $password, $db_name);
if( isset($_GET['mid']) )  
{  
$id=$_GET['mid']; 
$sql= "DELETE FROM `messsages` WHERE m_id='$id'";  
$result = mysqli_query($conn, $sql);
}
header("Location: home.php");
