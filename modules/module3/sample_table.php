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
    <h1>MODULE THREE : MySQL & SQL</h1>
    </div>
    <div class="big-box">
        <div class="box left-nav">
            <?php include 'left_nav.php'; ?>
        </div>
        <div class="box content" style="text-align:center">
        <h2>TABLE BASICS</h2>
          
      
        <div style="text-align:center">
<p>A relational database system contains one or more objects called tables.
 The data or information for the database are stored in these tables. 
 Tables are uniquely identified by their names and are comprised of columns and rows. 
 Columns contain the column name, data type, and any other attributes for the column.
  Rows contain the records or data for the columns. 
  Here is a sample table called "customer".</p>
 <img src="img/table.png" style="border-radius:10px">
        </div>
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