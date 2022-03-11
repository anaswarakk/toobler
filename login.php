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
if (isset($_POST['uname']) && isset($_POST['password'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['password'];
    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM login WHERE uname='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user_name'] = $row['uname'];
            echo $_SESSION['user_name'];
            header("Location: home.php");
            exit();
        }else{
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }
    }
}else{
    header("Location: index.php");
    exit();
}