<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
     <form action="login.php" method="post">
        <div>
        <h2 align="center">Login/Sign In</h2>
        </div> 
        <div align="center" width="50%" top="25%">
        <table>
            <tr>
            <td><label padding="10px">User Name</label></td>
            <td><input type="text" name="uname" placeholder="User Name"></td>
            </tr>
            <tr>
            <td><label padding="10px">Password</label></td>
            <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td colspan='2' align="center"><button type="submit">Login</button></td>
            </tr>
        </table>    
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        </div>
     </form>
</body>
</html>