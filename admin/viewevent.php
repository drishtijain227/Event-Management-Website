<?php
error_reporting(0);
    include_once "connection.php";
    if($_SESSION['ADMIN']==""){
        header("Location:index.php");
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
                <h2>Update Event</h2>
                <div class="cp-box">
                <div class="table-responsive">
                <form method="post">
                <table class="table wdi">
                        <thead>
                            <tr>
                            <th scope="col">Title</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                            <th scope="col">Country</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
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
                            

                            $sel="SELECT * FROM eventi_info where 1=1 $where $order limit $offset,$limit";
                            $exe=mysqli_query($con,$sel);

                            while($fetch=mysqli_fetch_array($exe)){
                                
                        ?>
                            <tr>
                            <td><?php echo $fetch['event_title'] ?></td>
                            <td><?php echo $fetch['event_city'] ?></td>
                            <td><?php echo $fetch['event_state'] ?></td>
                            <td><?php echo $fetch['event_country']?></td>
                            <td><?php echo $fetch['event_date']?></td>
                            <td><?php echo $fetch['event_time']?></td>
                            <td><?php echo $fetch['event_price']?></td>
                            <td><img src="../assets/images/<?php echo $fetch['event_image']?>" alt="" width="60" height="60"></td>
                            <td>
                                <a href="updateevent.php?nid=<?php echo $fetch['event_id']?>">
                                <input type="button" class="wdi" value="Edit">
                                </a>
                            </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                     </table>
                     </form>
                </div>
                <nav aria-label="...">
                    <?php

                        $selll="SELECT * FROM eventi_info";
                        $exe=mysqli_query($con,$selll);
                        $totrow=mysqli_num_rows($exe);

                        if($totrow>0){
                            $totpages=ceil($totrow/$limit);
                        }
                        
                        echo '<ul class="pagination pagination-sm pagina">';
                        if($page > 1){
                            echo '<li class="page-item"><a class="page-link" href="viewcourse.php?page='.($page-1).'">Pre</a></li>';
                        }
                        for($i=1;$i<=$totpages;$i++){
                            echo '<li class="page-item"><a class="page-link" href="viewcourse.php?page='.$i.'">'.$i.'</a></li>';
                        }
                        if($page < $totpages){
                            echo '<li class="page-item"><a class="page-link" href="viewcourse.php?page='.($page+1).'">Next</a></li>';
                        }
                        echo '</ul>';

                    ?>
                    <!-- <ul class="pagination pagination-sm pagina">
                        <li class="page-item"><a class="page-link" href="#">Pre</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul> -->
                </nav>
</div>
            </div>

        </div>
    </aside>
</body>
<style>
    .cu-inp{
        width: 40%;
        height: 30px;
        margin-right: 40px;
        margin-bottom: 10px;
        margin-top: 10px;
    }    
</style>
</html>