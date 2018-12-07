<?php
include '../../db/connection.php';
include '../../db/db_func.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $name = test_input($_POST["userName"]);

    $dob = test_input($_POST["dob"]);

//send data to db
    $sql = "INSERT INTO details (name,dob) VALUES ('$name','$dob')";

    if($db->query($sql) === TRUE){
        $sms = "Details Set";
    }else{
        $sms = "Please Review Your Details";
    }

}
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
        .btn-success {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px;
            border-radius: 8px;
        }
        .sms{
            border:1px dashed blue;
            text-align: center;
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
            <div class="sms">
                <?php if(isset($sms)){echo $sms;}?>
            </div>
            <fieldset>
                <legend>
                    My Form
                </legend>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    Enter Name: <input type="text" name="userName" required autofocus> <br><br>
                    Date Of Birth : <input type="date" name="dob" max="2002-01-01" required><br>
                    <input type="submit" name="calculate" class="btn-success">
                </form>
            </fieldset>
            <br>

                <div style="text-align: center"><a href="view.php"><button>See Details</button></a></div>


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