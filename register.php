<?php
error_reporting(0);
    include_once "connection.php";

    if(isset($_POST['register'])){
        $userid=$_POST['email'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $pass=$_POST['pass'];

        $sel="SELECT * FROM iipreg where reg_username = '$userid'";
        $exe=mysqli_query($con,$sel);
        $check=mysqli_num_rows($exe);

        if($check==1){
            $errmsg="This Email is already registered  !";
        }
        else{
            $ins="INSERT INTO iipreg SET
                    reg_username='$userid',
                    reg_fname='$fname',
                    reg_lname='$lname',
                    reg_password='$pass'";
                   
            mysqli_query($con,$ins);
            header("Location:index.php");       
        }
    }
?>
<!DOCTYPE html>     
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: linear-gradient(to bottom right, #ffbe30, #ff3e00);
        }
    </style>
</head>
<body>
    <div class="main-reg">
        <div class="main-box">
            <div class="box1">
                <img src="assets/images/Event Organizer Logo2.png"  alt="">
                <form method="post">
                    <h4 class="text-danger">
                        <?php echo $errmsg; ?>
                    </h4>
                    <input class="box1inp1" type="email" placeholder="Enter Your Email" name="email" required>
                    <input class="box1inp1" type="text" placeholder="Enter Your First Name" name="fname" required>
                    <input class="box1inp1" type="text" placeholder="Enter Your Last Name" name="lname" required>
                    <input class="box1inp1" type="password" placeholder="Enter Your Password" name="pass" required>
                
                    <input type="submit" name="register" value="Sign up" class="cu-btn">
                </form>
            </div>
            <div class="box2">
                <p>Have an account? <a href="index.php">Log in</a></p>
            </div>
        </div>
    </div>
</body>
</html>