<?php
error_reporting(0);
include_once "connection.php";
if($_SESSION['ADMIN']==""){
    header("Location:index.php");
}

$nid=$_GET['nid'];

if($nid==""){
if(isset($_POST['add'])){
    $ntitle=$_POST['newstitle'];
    $ndate=$_POST['newsdate'];
    $nstatus=$_POST['status'];


    $ins="INSERT INTO news SET
            news_title='$ntitle',
            news_date='$ndate',
            news_status='$nstatus'";

    mysqli_query($con,$ins);        
}
}

else{
    $sel="SELECT * FROM news where news_id =  '$nid' ";
    $exe=mysqli_query($con,$sel);
    $fetch=mysqli_fetch_array($exe);
    if(isset($_POST['add'])){
        $ntitle=$_POST['newstitle'];
        $ndate=$_POST['newsdate'];
        $nstatus=$_POST['status'];
    
    
        $upd="UPDATE news SET
                news_title='$ntitle',
                news_date='$ndate',
                news_status='$nstatus' where news_id = '$nid' ";
    
        mysqli_query($con,$upd);
        header("Location:viewnews.php");        
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
                <h2>Add News</h2>
                <div class="contact-box">
                    <form method="post" class="wdi">
                        <h5>Offer Title : </h5>
                        <input type="text" name="newstitle" class="addc-inp" value=" <?php echo $fetch['news_title'] ?> " >
                        <h5>Offer Date : </h5>
                        <input type="Date" name="newsdate" value="<?php echo $fetch['news_date']?>" class="wdi mgb-10">
                        <div class="wdi">
                        <input type="radio" name="status" value="1" <?php if($fetch['news_status']==1) echo 'checked' ?>>&nbsp; Active &nbsp;&nbsp;
                        <input type="radio" name="status" value="0" <?php if($fetch['news_status']==0 && $fetch['news_status']!="") echo 'checked' ?>>&nbsp; Deactive
                        </div>
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
                    </form>
                </div>
            </div>    
        </div>
    </aside>
</body>

</html>