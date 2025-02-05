<?php
error_reporting(0);
    include_once "connection.php";
    if($_SESSION['ADMIN']==""){
        header("Location:index.php");
    }

    if(isset($_POST['update'])){
        $nphone=$_POST['cpphone'];
        $nemail=$_POST['cpemail'];
        $naddress=$_POST['cpaddress'];
        $nmobile=$_POST['cpmobile'];
        $nwebsite=$_POST['cpwebsite'];
        $nstatus=$_POST['status'];

        $upd = "UPDATE contact SET
                    cp_phone='$nphone',
                    cp_email='$nemail',
                    cp_adddress='$naddress',
                    cp_mobile='$nmobile',
                    cp_web='$nwebsite'"; 
                   
        mysqli_query($con,$upd);           
    }
?>


<?php
include_once "html.php";
?>
<body>
    <header>
        <?php
          include_once "header.php";
        ?>
    </header>
    <aside>
        <div class="all-main">
            <?php
                include_once "la.php";

                $sel="SELECT * FROM contact";
                $exe=mysqli_query($con,$sel);
                $fetch=mysqli_fetch_assoc($exe);
            ?>
            <div class="right-aside mgt-50">
                <form action="" method="post">
                <h2>Contact Us:</h2>
                <div class="contact-box">
                    <div class="cu-box">
                        <h5>Phone : </h5>
                        <input class="cu-inp" name="cpphone" value="<?php echo $fetch['cp_phone'] ?>" type="text">
                        <h5>Email : </h5>
                        <input class="cu-inp" name="cpemail" value="<?php echo $fetch['cp_email'] ?>" type="text">
                        <h5>Address : </h5>
                        <textarea class="cu-inp2" name="cpaddress" id="" cols="30" rows="10"><?php echo $fetch['cp_adddress'] ?></textarea>
                    </div>    
                    <div class="cu-box">
                        <h5>Mobile : </h5>
                        <input class="cu-inp" name="cpmobile" value="<?php echo $fetch['cp_mobile'] ?>" type="text">
                        <h5>Website : </h5>
                        <input class="cu-inp" name="cpwebsite" value="<?php echo $fetch['cp_web'] ?>" type="text">
                    </div>
                    <div class="wdi">
                    <input type="radio"  name="status" value="1">&nbsp; Active &nbsp;&nbsp;<input type="radio"  name="status" value="0">&nbsp; Deactive
                    </div>
                    <input class="cu-btn" type="submit" name="update" value="Update">
                </div>
                </form>
            </div>    
        </div>
    </aside>
</body>

</html>