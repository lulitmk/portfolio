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
          <p> <img src="img/icon.jpg" style="border-radius: 100px;
          height: 100px; width: 100px;float: left; margin: 10px;">
            <h2>What is PHP ?</h2></p>
            <p style="text-align: justify;">PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open
                source general-purpose scripting language that is especially suited for web
                development and can be embedded into HTML.</p>
          <!-- <pre>
              <h3>PHP Code embeded in HTML Example:</h3>
              &lt;!DOCTYPE HTML&gt;
                &lt;html&gt;
                    &lt;head&gt;
                        &lt;title>Example&lt;/title&gt;
                    &lt;/head&gt;
                    &lt;body&gt;

                    &lt;?php
                         echo "Hi, I'm a PHP script!";
                    ?&gt;

                    &lt;/body&gt;
                  &lt;/html&gt;
          </pre> -->
          <p style="text-align: justify;">  What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server,
            generating HTML which is then sent to the client.
            The client would receive the results of running that script,
            but would not know what the underlying code was.
            You can even configure your web server to process all your HTML files with PHP,
            and then there's really no way that users can tell what you have up your sleeve.</p>

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

