<?php
    include_once "connection.php";

    if($_SESSION['ADMIN']==""){
        header("Location:index.php");
    }
    if(isset($_POST['update'])){
        $ntitle=$_POST['aptitle'];
        $ntext=$_POST['edittext'];

        $upd="UPDATE aboutpage SET
                about_titile='$ntitle',
                about_des='$ntext'";

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
            ?>
            <div class="right-aside mgt-50">
                <form action="" method="post">
                <h2>About Us:</h2>
                <div class="cp-box">
                    <h5>Title :</h5>
                    <?php
                        $sel="SELECT * FROM aboutpage";
                        $exe=mysqli_query($con,$sel);
                        $fetch=mysqli_fetch_assoc($exe);
                    ?>
                    <input type="text" name="aptitle" value="<?php echo $fetch['about_titile']; ?>" placeholder="About" class="wdi">
                    <h5>Description :</h5>
                    <?php
                    include_once "textedi.php";
                    ?>
                    <input class="cu-btn" type="submit" name="update" value="Update">
                </form>    
    </aside>
</body>
</html>