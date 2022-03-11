<?php  
session_start();
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "website";
$conn = mysqli_connect($sname,$unmae, $password, $db_name);
$uname=$_SESSION['user_name'];
if( isset($_GET['mid']))  
{  
$id=$_GET['mid'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        li {
            display: inline;
        }
    </style>
</head>
<body>
    <div>
        <ul>
            <li>Home</li>
            <li><?php echo $uname; ?></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
<form action="updatemsg.php" method="post">
<input type="text" id="id" name="id" value="<?php echo $id; ?>" readonly><br>
<textarea id="msg" name="msg" rows="2" cols="50"></textarea>
<button type="submit">Update Message</button>
</form>
<?php
}

?>
