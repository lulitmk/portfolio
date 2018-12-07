<?php

$dbHost = "localhost";        //Location Of Database usually its localhost
$dbUser = "root";            //Database User Name
$dbPass = "";            //Database Password
$dbDatabase = "project";    //Database Name

$db = new mysqli($dbHost,$dbUser,$dbPass,$dbDatabase);
//Connect to the databasse and select database

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
