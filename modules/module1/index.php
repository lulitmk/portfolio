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
        <h1>MODULE ONE : HTML & CSS</h1>
    </div>
<div class="big-box">
    <div class="box left-nav">
    <?php include 'left_nav.php'; ?>
    </div>
    <div class="box content">
        <p> <img src="img/icon.png" style="border-radius: 100px;
          height: 100px; width: 100px;float: left; margin: 20px;">
        <h2> What is HTML ?</h2></p>
        <p>HTML is a markup language for describing web documents (web pages).</p>
        <ul>
            <li>HTML stands for Hyper Text Markup Language</li>
            <li>A markup language is a set of markup tags</li>
            <li>HTML documents are described by HTML tags</li>
            <li>Each HTML tag describes different document content</li>
        </ul>
       <p> <img src="img/icon2.png" style="border-radius: 80px;
          height: 100px; width: 100px;float: left; margin: 20px;">
        <h2> What is CSS ?</h2></p>
        <p>CSS is a language that describes the style of an HTML document.
            <br> CSS describes how HTML elements should be displayed.<br>
            This tutorial will teach you CSS from basic to advanced.Example below: </p>
        <!-- <pre>
            <div style="text-align: center"></div>
                body {
                    background-color: #d0e4fe;
                }
                h1 {
                    color: orange;
                    text-align: center;
                }
                p {
                    font-family: "Times New Roman";
                    font-size: 20px;
                }
        </pre> -->
    </div>
    <div class="box right-nav">
    <?php include 'right_nav.php' ?>
    </div>
</div><br><br>
    <div class="bottom">
        <?php include '../../includes/footer.php'; ?>
    </div>
</div>
</body>
</html>