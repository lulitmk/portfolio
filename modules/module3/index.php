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
        <h1>MODULE THREE : MySQL & SQL</h1>
    </div>
    <div class="big-box">
        <div class="box left-nav">
            <?php include 'left_nav.php'; ?>
        </div>
        <div class="box content">
            <p><img src="img/icon.jpg" style="border-radius: 100px;
          height: 100px; width: 100px;float: left; margin: 10px;">
            <h2>What is MySQL ?</h2></p>

            <p>MySQL is an open-source relational database management system.
                Its name is a combination of "My",the name of co-founder Michael Widenius's daughter,
                and "SQL", the abbreviation for Structured Query Language.</p>

            <p><img src="img/sql.jpg" style="border-radius: 100px;
          height: 100px; width: 100px;float: left; margin: 10px;">
            <h2>What is SQL ?</h2></p>
            <p>
                SQL (pronounced "ess-que-el") stands for Structured Query Language.
                SQL is used to communicate with a database. According to ANSI (American National Standards Institute),
                it is the standard language for relational database management systems.
                SQL statements are used to perform tasks such as update data on a database, or retrieve data from a
                database.
            </p>
            <p>
                Some common relational database management systems that use SQL are: Oracle, Sybase, Microsoft SQL
                Server, Access, Ingres, etc.
            </p>
            <p>
                the standard SQL commands such as "Select", "Insert", "Update", "Delete", "Create", and "Drop" can be
                used to accomplish almost everything that one needs to do with a database.
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