<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css"  href="../../styles/CIS.css">
    <link rel="stylesheet" type="text/css" href="../styles/mod_style.css">
</head>
<body>
<div class="container">
    <div class="top">
        <?php include '../includes/mod_nav.php'; ?>
    </div>

    <div class="banner" style="padding:0px; width: 90%;border-radius: 10px;margin-bottom:1%;">
        <h1>MODULE FIVE : JAVASCRIPT & JQUERY</h1>
    </div>
    <div class="big-box">
        <div class="box left-nav">
            <?php include 'left_nav.php';?>
        </div>
        <div class="box content" >
        <div style="margin:auto;width:60%">
        
        
        <h1>JavaScript Can Validate Input</h1>

        <p>Please input a number between 1 and 10:</p>

        <input id="numb">

        <button type="button" onclick="myFunction()">Submit</button>

        <p id="demo"></p>

        <script>
        function myFunction() {
            var x, text;

            // Get the value of the input field with id="numb"
            x = document.getElementById("numb").value;

            // If x is Not a Number or less than one or greater than 10
            if (isNaN(x) || x < 1 || x > 10) {
                text = "Input not valid";
            } else {
                text = "Input OK";
            }
            document.getElementById("demo").innerHTML = text;
        }
        </script>
</div>
        </div>
        <div class="box right-nav">
            <?php include 'right_nav.php';?>
        </div>
    </div><br><br>
    <div class="bottom">
        <?php include '../../includes/footer.php'; ?>
    </div>
</div>
</body>
</html>