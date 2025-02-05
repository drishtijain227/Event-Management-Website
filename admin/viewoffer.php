<?php
error_reporting(0); 
    include_once "connection.php";

    if($_SESSION['ADMIN']==""){
        header("Location:index.php");
    }
    $did=$_GET['did'];

    if($did!=""){
        $del="DELETE FROM news where news_id = '$did' ";
        mysqli_query($con,$del);
    }

    if(isset($_POST['delete'])){
        $arr=$_POST['chk'];
        $ides=implode(",",$arr);

        $del="DELETE FROM news where news_id in($ides)";
        mysqli_query($con,$del);
    }

    if(isset($_POST['search'])){
        $ntitle=$_POST['stitle'];
        $nopt=$_POST['option'];

        if($ntitle!=""){
            $where .="and news_title like '%$ntitle%' ";
        }
    }
    
    $sid=$_GET['sid'];
    $std=$_GET['std'];

    if($sid!="" && $std!=""){
        $updstd="UPDATE news SET 
                    news_status = '$std' where news_id = '$sid' ";
             
        mysqli_query($con,$updstd);     
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
                <h2>View News :</h2>
                <div class="contact-box">
                    <div class="news mgb-10">
                        <form method="post">
                            <input type="text" class="" name="stitle" placeholder="Enter The Title">
                            <input class="vn-btn" type="submit" name="search" value="Search">
                        </form>    
                    </div>
                    <div class="table-responsive wdi">
                    <form method="post">
                    <table class="table wdi">
                        <thead>
                            <tr>
                            <th scope="col"><input type="submit" name="delete" value="Delete"></th>
                            <th scope="col">Sr.No</th>
                            <th scope="col">Offer Title</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include_once "connection.php";

                                    $limit=3;
                                    $page=$_GET['page'];

                                    if($page!=""){
                                        $page=$_GET['page'];                                        
                                    }
                                    else{
                                        $page=1;
                                    }
                                    
                                    $offset=($page-1)*$limit;

                                    $sel="SELECT * FROM news where 1=1 $where limit $offset,$limit";
                                    $exe=mysqli_query($con,$sel);
                                        
                                        while($fetch=mysqli_fetch_array($exe)){

                            ?>
                            <tr>
                            <td><input type="checkbox" name="chk[]" value="<?php echo $fetch['news_id']?>"></td>
                            <td><?php echo $fetch['news_id'] ?></td>
                            <td><?php echo $fetch['news_title'] ?></td>
                            <td><?php echo $fetch['news_date'] ?></td>
                            <td>
                                <?php 
                                    if($fetch['news_status']==1){
                                        ?>
                                        <a href="viewoffer.php?sid=<?php echo $fetch['news_id']?>&std=0" class="std">
                                        <input type="button" value="Active" class="status-abtn">
                                        </a>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <a href="viewoffer.php?sid=<?php echo $fetch['news_id']?>&std=1" class="std">
                                        <input type="button" value="Deactive" class="status-dbtn">
                                        </a>
                                        <?php
                                    }
                                ?>
                            </td>
                            <td>
                                <a href="viewoffer.php?did=<?php echo $fetch['news_id']?>">
                                <input class="wdi mgb-10" type="button" value="Delete">
                                </a>
                                <a href="addoffer.php?nid=<?php echo $fetch['news_id']?>">
                                <input class="wdi" type="button" value="Edit">
                                </a>
                            </td>
                            </tr>
                            <?php }  ?> 
                        </tbody>
                    </table>
                    </form>
               
                <nav aria-label="...">
                    <?php
                    
                    $selpag="SELECT * FROM news";
                    $exe=mysqli_query($con,$selpag);
                    $totrows=mysqli_num_rows($exe);

                    if($totrows>0){
                        $totpage=ceil($totrows/$limit);
                    }

                    echo '<ul class="pagination pagination-sm pagina">';
                    if($page>1){
                        echo '<li class="page-item"><a class="page-link" href="viewoffer.php?page='.($page-1).'">Pre</a></li>';
                    }
                    for($i=1;$i<=$totpage;$i++){
                        echo '<li class="page-item"><a class="page-link" href="viewoffer.php?page='.$i.'">'.$i.'</a></li>';
                    }
                    if($page<$totpage){
                        echo '<li class="page-item"><a class="page-link" href="viewoffer.php?page='.($page+1).'">Next</a></li>';
                    }
                    echo '</ul>';
                    
                    ?>
                    <!-- <ul class="pagination pagination-sm pagina">
                        <li class="page-item"><a class="page-link" href="#">First</a></li>
                        <li class="page-item active" aria-current="page">
                        <span class="page-link">1</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul> -->
                </nav>
</div>
 </div>
                </div>
            </div>    
        </div>
    </aside>
</body>
</html>