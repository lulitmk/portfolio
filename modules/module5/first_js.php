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
        <div class="box content">
        <h1>My First JavaScript</h1>

        <button type="button"
        onclick="document.getElementById('demo').innerHTML = Date()">
        Click me to display Date and Time.</button>

        <p id="demo"></p>
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