<?php
error_reporting(0);
    include_once "connection.php";
    if($_SESSION['ADMIN']==""){
        header("Location:index.php");
    }

    $nid=$_GET['nid'];


    if($nid!=""){
        $sel="SELECT * FROM eventi_info where event_id = '$nid' ";
        $exe=mysqli_query($con,$sel);
        $fetch=mysqli_fetch_array($exe);

        if(isset($_POST['add'])){
            $nname=$_POST['ename'];
            $ncity=$_POST['ecity'];
            $nstate=$_POST['estate'];
            $ncountry=$_POST['ecountry'];
            $ntime=$_POST['etime'];
            $ndate=$_POST['edate'];
            $nprice=$_POST['eprice'];
            $image=$_FILES['eimage'];
            $imgname=$image['name'];
            if($imgname!=""){

            $tmp=$image['tmp_name'];
            $path="../assets/images/.$imgname";
            move_uploaded_file($tmp,$path);

            $upd="UPDATE eventi_info SET
                    event_title='$nname',
                    event_city='$ncity',
                    event_state='$nstate',
                    event_country='$ncountry',
                    event_time='$ntime',
                    event_date='$ndate',
                    event_price='$nprice',
                    event_image='$imgname' where event_id = '$nid' ";
        mysqli_query($con,$upd);        

            }
            else{
                $upd="UPDATE eventi_info SET
                    event_title='$nname',
                    event_city='$ncity',
                    event_state='$nstate',
                    event_country='$ncountry',
                    event_time='$ntime',
                    event_date='$ndate',
                    event_price='$nprice',
                    event_image='$imgname' where event_id = '$nid' ";
            mysqli_query($con,$upd);         
        }

            header("Location:viewevent.php");
        }

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
                <h2>Update Events :</h2>
                <div class="contact-box">
                    <form action="" class="contact-box" method="post" enctype="multipart/form-data">
                    <h5>Event Name : </h5>
                    <input type="text" name="ename" value="<?php echo $fetch['event_title'] ?>" class="addc-inp">
                    <div class="cu-box">
                        <h5>City : </h5>
                        <input class="cu-inp" name="ecity" value="<?php echo $fetch['event_city']?>" type="text">
                    </div>    
                    <div class="cu-box">
                        <h5>State : </h5>
                        <input class="cu-inp" name="estate" value="<?php echo $fetch['event_state']?>" type="text">
                    </div>
                    <div class="cu-box">
                        <h5>Country : </h5>
                        <input class="cu-inp" name="ecountry" value="<?php echo $fetch['event_country']?>" type="text">
                    </div>
                    <div class="cu-box">
                        <h5>Date : </h5>
                        <input class="cu-inp" name="edate" value="<?php echo $fetch['event_date']?>" type="date">
                    </div>
                    <div class="cu-box">
                        <h5>Time : </h5>
                        <input class="cu-inp" name="etime" value="<?php echo $fetch['event_time']?>" type="time">
                    </div>
                    <div class="cu-box">
                        <h5>Price : </h5>
                        <input class="cu-inp" name="eprice" value="<?php echo $fetch['event_price']?>" type="text">
                    </div>
                    <h5 class="mgb-10 mgt-10">Event Image : </h5>
                    <div class="mb-3 wdi">
                        <div class="wdi">
                            <input class="form-control form-control-sm wdi" name="eimage" value="<?php echo $fetch['event_image']?>" id="formFileSm" type="file">
                        </div>
                        <?php
                            if($nid!=""){
                                ?>
                                <div class="img-box">
                                    <img src="../assets/images/<?php echo $fetch['event_image'] ?>"width="100%" height="200px" >
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                    <div>
                    <?php    
                        if($nid!=""){
                            ?> 
                            <input class="cu-btn" type="submit" name="add" value="Update">
                            <?php
                        }
                        else{
                            ?>
                            <input class="cu-btn" type="submit" name="add" value="Add">
                            <?php
                        }

                    ?>
                    </div>
                </div>
                </form>
            </div>    
        </div>
    </aside>
</body>
</html>