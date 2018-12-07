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
    <link rel="stylesheet" type="text/css" href="../me/css/resume.min.css">
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
        <h2>MYSQ and SQL FORM</h2>  
        <p><strong>In this section I will demonstrate a working model of data storage and retrival 
        using php mysql and or sql commands.</strong></p>
      
            <fieldset style="width:50%;margin:auto">
                <legend>Register Customer</legend>        
                <form method="post" action="" >
                    <div class="form-group">
                        <label class="control-label col-md-2">Name:</label>
                        <input class="form-control" type="text" name="customer_name" required>
                    </div><br>
                    <div class="form-group">
                        <label class="control-label col-md-2">ID Number:</label>
                        <input class="form-control" type="text" name="customer_id" required>
                    </div><br>
                    <div class="form-group">
                        <label class="control-label col-md-2">Email:</label>
                        <input class="form-control" type="email" name="customer_email" required>
                    </div><br>
                    <div class="form-group">
                        <label class="control-label col-md-2">Tel:</label>
                        <input class="form-control" type="text" name="customer_tel" required>
                    </div><br>
                    <div class="form-group">    
                        <input class="form-control" type="submit" name="register" value="Register">
                    </div>
                </form>
            </fieldset>
            <iframe src="fetch_customer.php"  style="width:60%; height:100%; margin:auto;" frameborder="0">
            </iframe>
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
<?php  
if (isset($_POST['register'])) {
   
    echo $name = test_input($_POST['customer_name']);
    echo $id = test_input($_POST['customer_id']);
    echo  $email = test_input($_POST['customer_email']);
    echo $tel = test_input($_POST['customer_tel']);

    // if (count($id)<8) {
    //    echo 'less id';    
    // }elseif(count($tel)<10){
    //     echo 'less tel';
    // }

    $sql = "INSERT INTO customer (name,id,email,tel) VALUES ('$name', '$id', '$email', '$tel')";

    if ($db->query($sql) === TRUE) {
        echo "<script> alert('Registration Successful');</script>";
    }else{
        echo "<script> alert('Somethin went wrong Please try again'.$db->error);</script>";
    }
    
}
?>