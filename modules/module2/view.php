<?php
include '../../db/connection.php';
include '../../db/db_func.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css"  href="../../styles/CIS.css">
    <link rel="stylesheet" type="text/css" href="../styles/mod_style.css">
    <style>
        fieldset{
            margin: 3%;
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="top">
        <?php include '../includes/mod_nav.php';?>
    </div>

    <div class="banner" style="padding:0px; width: 90%;border-radius: 10px;margin-bottom:1%;">
        <h1>MODULE TWO : PHP</h1>
    </div>
    <div class="big-box">
        <div class="box left-nav">
            <?php include 'left_nav.php'; ?>
        </div>
        <div class="box content">
            <div style="text-align: center"><a href="form.php"><button>Back To Form</button></a></div>
            <fieldset>
                <legend style="text-align: center">Details Stored</legend>
                <?php
                $sql = "SELECT name, dob FROM details";
                $result = $db->query($sql);
                $today =date("Y-m-d");
                if ($result->num_rows > 0) {
                echo "<table  border=\"1\"  style=\"margin: auto;width:80%;text-align: center; \">
                    <tr><th>NAME</th><th>AGE</th></tr>";
                    // output data of each row
                    while($row = $result->fetch_assoc()) {

                    echo "<tr><td>".$row["name"]."</td>";
                    $d2=ceil((strtotime($row["dob"])-time())/60/60/24);
                        echo "<td>".floor(($d2/365*-1))."</td>";
                     echo"</tr>";
                        
                        
                    }
                    echo "</table>";
                } else {
                echo "0 results";
                }?>
            </fieldset>

        </div>
        <div class="box right-nav">
            <?php include 'right_nav.php' ?>
        </div>
    </div><br><br>
    <div class="bottom">
        <?php include '../../includes/footer.php';?>
    </div>
</div>
</body>
</html>