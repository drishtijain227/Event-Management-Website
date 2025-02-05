<?php
error_reporting(0);
    include_once "admin/connection.php";

    if($_SESSION['LOGIN']!=""){
        header("Location:home.php");
    }

    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        $sel="SELECT * FROM iipreg where reg_username = '$email' and reg_password = '$pass' ";
        $exe=mysqli_query($con,$sel);
        $check=mysqli_num_rows($exe);
        $fetch=mysqli_fetch_assoc($exe);

        if($check=='1'){
            $_SESSION['LOGIN']=$fetch['reg_id'];
            header("Location:home.php");
        }
        else{
            $errmsg="Invalid Id and Password....!!";
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
            body{
                background: linear-gradient(to bottom right, #ffbe30, #ff3e00);
            }
        </style>
    </head>
    <body>
        <div class="main-reg">
            <div class="main-box">
                <div class="box1">
                    <img src="assets/images/Event Organizer Logo2.png"  alt=""/>
                    <form method="post">
                        <div class="text-danger">
                            <?php echo $errmsg; ?>
                        </div>
                        <input class="box1inp1" type="email" placeholder="Username or Email" name="email" required>
                        <input class="box1inp2" type="password" placeholder="Password" name="pass" required>
                        <input type="submit" name="login" value="Log in" class="cu-btn">
                        <p>or</p>
                        <h5><a href="">Forget Password?</a></h5>
                    </form>
                </div>
                <div class="box2">
                    <p>Don't have an account? <a href="register.php">Sign up</a></p>
                </div>
            </div>
        </div>
    </body>
</html>