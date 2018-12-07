<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="../../styles/CIS.css">
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
            <?php include 'left_nav.php'; ?>
        </div>
        <div class="box content">
            <p><img src="img/javascript.png" style="border-radius: 100px;
          height: 100px; width: 100px;float: left; margin: 10px;">
            <h2>What is Javascript ?</h2></p>
            <p style="text-align: justify;line-height: 1.8;word-spacing: 10px;">
                often abbreviated as JS, is a high-level, interpreted programming language.
                It is a language which is also characterized as dynamic, weakly typed,
                prototype-based and multi-paradigm.
                Alongside HTML and CSS, JavaScript is one of the three core
                technologies of the World Wide Web.
                JavaScript enables interactive web pages and thus is an essential part of web
                applications. The vast majority of websites use it,and all major web browsers
                have a dedicated JavaScript engine to execute it.</p>
            <p><img src="img/jquery.png" style="border-radius: 100px;
          height: 100px; width: 100px;float: left; margin: 10px;">
            <h2>What is Jquery ?</h2></p>
            <p style="text-align: justify;">
                is a JavaScript library designed to simplify HTML DOM tree traversal
                and manipulation,as well as event handling, animation, and Ajax.
                It is free, open-source software using the permissive MIT License.
                Web analysis indicates that it is the most widely deployed JavaScript library by a large margin.
            </p>
        </div>
        <div class="box right-nav">
            <?php include 'right_nav.php'; ?>
        </div>
    </div>
    <br><br>
    <div class="bottom">
        <?php include '../../includes/footer.php'; ?>
    </div>
</div>
</body>
</html>