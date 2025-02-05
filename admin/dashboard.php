<?php

    include_once "connection.php";
    
    
    
    if($_SESSION['ADMIN']==""){
        // header("Location:index.php");
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
            <div class="right-aside">
                <h1>Welcome To IIP Dashboard</h1>
                <div class="dash">
                    <div class="dash-items">
                        <h4>Registered Users : <?php
                        $a=0;
                        $sel="SELECT * FROM iipreg";
                        $exe=mysqli_query($con,$sel);
                        while($fetch=mysqli_fetch_assoc($exe)){
                             $a++; 
                        }	
                        echo $a;
                    ?> </h4>
                    </div>
                    <div class="dash-items">
                        <h4>Total reservation : <?php
                        $a=0;
                        $sel="SELECT * FROM reservation";
                        $exe=mysqli_query($con,$sel);
                        while($fetch=mysqli_fetch_assoc($exe)){
                             $a++; 
                        }	
                        echo $a;
                    ?></h4>
                    </div>
                    <div class="dash-items">
                        <h4>Total Events : 4</h4>
                    </div>
                    <div class="dash-items">
                        <h4>Total Active Offer : <?php
                        $a=0;
                        $sel="SELECT * FROM news where news_status = '1' ";
                        $exe=mysqli_query($con,$sel);
                        while($fetch=mysqli_fetch_assoc($exe)){
                             $a++; 
                        }	
                        echo $a;
                    ?></h4>
                    </div>
                    <div class="dash-items">
                        <h4>Total Active Images : <?php
                        $a=0;
                        $sel="SELECT * FROM gallery where gallery_status = '1' ";
                        $exe=mysqli_query($con,$sel);
                        while($fetch=mysqli_fetch_assoc($exe)){
                             $a++; 
                        }	
                        echo $a;
                    ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</body>
</html>