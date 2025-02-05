<?php
error_reporting(0);
    include_once "connection.php";

    if($_SESSION['ADMIN']!=""){
        header("Location:dashboard.php");
    }
    if(isset($_POST['login'])){
        $uname=$_POST['name'];
        $upass=$_POST['pass'];

        $sel="SELECT  * FROM admin_panel where admin_name = '$uname' and admin_pass = '$upass' ";
        $exe=mysqli_query($con,$sel);
        $check=mysqli_num_rows($exe);
        $fetch=mysqli_fetch_array($exe);

        if($check=='1'){
            if($_POST['rem']==1){
                setcookie('USERNAME',$uname,time()+60);
                setcookie('USERPASS',$upass,time()+60);
            }
            $_SESSION['ADMIN']=$fetch['admin_id'];
            header("Location:dashboard.php");
        }

        else{
            $invmsg="Invalid Username And Password....!!";
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
    <?php include "html.php" ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form method="post">
        <div class="main">
            <div class="mid-box">
                <?php
                    echo "<h4 style='color: red; margin-bottom: 8px;'>$invmsg</h4>";
                ?>
                <p class="mgb-0">UserName <i class="fa-solid fa-user"></i></p>
                <input type="text" class="inp" name="name" value="<?php echo $_COOKIE['USERNAME'] ?>"  placeholder="Please Enter Your User Name">
                <p class="mg-25 mgb-0">Password <i class="fa-solid fa-key"></i></i></p>
                <input type="password" class="inp" name="pass" value="<?php echo $_COOKIE['USERPASS'] ?>" placeholder="Please Enter Your User Password"><br>
                <p class="mg-15 mgb-0"><input type="checkbox" class="inp2" name="rem" value="1"> Remember Me</p>
                <h4 class="mg-0 mgb-0"><a href="fpass.php" class="fp">Forget Password ?</a></h4>
                <input type="submit"  class="inp3 mg-15" name="login" value="Login">
            </div>
        </div>
    </form>
</body>
<link rel="stylesheet" href="1.css">
<style>
    .inp3:hover{
        background: palevioletred;
    }

    .inp{
        color: black;
    }
    
</style>
</html>
