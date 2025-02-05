<?php
error_reporting(0);
    include_once "connection.php";

    if(isset($_POST['sendemail'])){
        
        $email=$_POST['email'];

        $sel="SELECT * FROM admin_panel where admin_email = '$email' ";
        $exe=mysqli_query($con,$sel);
        $check=mysqli_num_rows($exe);

        if($check==1){
            $to=$email;
            $subject="New Password generated for your admin panel";
            $rand=rand(11111,99999);
            $msg="Your New Password is $rand";
            $header="FROM:gangwanikeshav2005@gmail.com";

            // mail($to,$subject,$msg,$header);

            $upd="UPDATE admin_panel SET
                    admin_pass= '$rand' where admin_email = '$email' ";

            mysqli_query($con,$upd);
            
            $msg2="Your Password Has Been Changed Successfully!!!";
        }
        else{
            $msg1="Invalid Email Entered.......";
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
    <?php
        include_once "html.php";
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="main">
        <div class="mid-box">
            <form method="post">
                <div class="text-danger mgb-10">
                    <?php
                        echo  "<h5>".$msg1."</h5>";
                    ?>
                </div>
                <div class="text-success mgb-10">
                    <?php
                        echo  "<h6>".$msg2."</h6>";
                    ?>
                </div>
                <p class="mgb-0">Email Id <i class="fa-solid fa-user"></i></p>
                <input type="text" class="inp" name="email" placeholder="Please Enter Your Email Id">
                <p class="p mgb-0">We'll never share your email with anyone else.</p>
                <input type="submit"  class="inp3 mg-15" name="sendemail" value="Send">
            </form>
            </div>
        </div>
</body>
<link rel="stylesheet" href="1.css">
</html>