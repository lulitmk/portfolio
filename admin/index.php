<?php
//start sessions
session_start();

// variable declaration
$userEmail = $submit = "";


?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN Panel</title>
    <link href="../styles/admin.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--        log in form for admin-->
<div class="adminLogin">
    <h4>ADMIN LOGIN</h4>
    <?php if (isset($_SESSION['error'])){echo $_SESSION['error']; }?>
    <form action="verify_admin.php" method="post">
        Admin Email:<br>
        <input type="text" name="userEmail" required><br><br>
        Password:<br>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</div>


</body>
</html>

<?php

session_unset();