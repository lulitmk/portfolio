<?php

session_start();

if(!$_SESSION['logged']){
    header("Location: index.php");
    exit;
}
/** @var TYPE_NAME $_SESSION */
echo $_SESSION['username'];