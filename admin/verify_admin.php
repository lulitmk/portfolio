<?php

session_start();

include '../db/connection.php';
include '../db/db_func.php';
include '../errors/error.php';

//error object
$err = new errors();

if(isset($_POST['submit'])){

   echo $usr = test_input($_POST['userEmail']);

  echo  $pas = hash('sha256', test_input($_POST['password']));

    $sql = "SELECT * FROM admin WHERE email='$usr' AND password='$pas' LIMIT 1";

    $result = $db->query($sql);

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();

        $_SESSION['username'] = $row['name'];
        $_SESSION['logged'] = TRUE;

        header("Location: home.php"); // Modify to go to the page you would like
        exit;
    }else{
        $_SESSION['error'] = $err->danger('Opps something isnt right');
        header("Location: index.php");
        exit;
    }
}else{
    //If the form button wasn't submitted go to the index page, or login page
    header("Location: index.php");
    exit;
}

?>


<?php
session_start();
if(!$_SESSION['logged']){
    header("Location: login_page.php");
    exit;
}
echo 'Welcome, '.$_SESSION['username'];
?>