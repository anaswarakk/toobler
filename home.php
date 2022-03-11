<?php 
session_name();
session_start();
date_default_timezone_set('asia/kolkata');
$_SESSION["start_time"] = date("h:i:sa");
$uname=$_SESSION['user_name'];
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
<form action="addmsg.php" method="post">
<textarea id="msg" name="msg" rows="2" cols="50"></textarea>
<button type="submit">Post New Message</button>
</form>
<?php
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "website";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$sql="SELECT * FROM `messsages` where uname='$uname'";
$result = mysqli_query($conn, $sql);
$numrows=mysqli_num_rows($result);
if($numrows>0){
?>
<table  align="left"  border="1" >
    <thead>
        <tr><th>No</th><th>Message</th></tr>
    </thead>
    <tbody>
    <?php  while($row=mysqli_fetch_array($result)){ ?>
 <tr>
  <td><?php  echo $row['m_id'];?></td>
  <td><input type="text" name="msg" value="<?php  echo $row['message'];?>"></td>
  <td><a href="update.php?mid=<?php echo $row['m_id']; ?>">Update</a></td>
  <td><a href="delete.php?mid=<?php echo $row['m_id']; ?>">Delete</a></td>
 </tr>
<?php
}
?>
    </tbody>
</table>   
</body>
</html>
<?php 
}
else{
    echo "No Latest Message Available to Dislay";
}
?>