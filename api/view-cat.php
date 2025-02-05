<?php

    include_once "../config/con.php";

    $sel="SELECT * FROM category";
    $exe=mysqli_query($con,$sel);
    while($fetch=mysqli_fetch_assoc($exe)){
        $showData[]=$fetch;
    }
    echo json_encode($showData);
?>