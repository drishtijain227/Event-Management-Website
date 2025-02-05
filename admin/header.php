<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="white-box"></div>
    <div class="box">
        <div class="menu">
            <p>|</p>
            <p><a href="admin.php"><i class="fa-solid fa-user"></i> Profile</a></p>
            <p>|</p>
            <p><a href="dashboard.php"><i class="fa-solid fa-house"></i> Dashboard</a></p>
            <p>|</p>
            <p><a href="cp.php"><i class="fa-solid fa-unlock-keyhole"></i> Change Password</a></p>
            <p>|</p>
            <p><a href="logout.php"><i class="fa-solid fa-power-off"></i> Logout</a></p>
            <p>|</p>
            <p><a href="http://localhost/php5/"><i class="fa-solid fa-location-arrow"></i> Go to Website</a></p>
            <p>|</p>
        </div>
    </div>
</body>
<style>
    *{
        padding: 0px;
        margin: 0px;
        text-decoration: none;
        font-family: sans-serif;
    }
    html{
        scroll-behavior: smooth;
    }
    .white-box{
        width: 100%;
        height: 6vh;
        background: white;
        z-index: 1;
    }
    .box{
        width: 100%;
        height: 38px;
        background: white;
        box-shadow: 1px 1px grey;
        position: fixed;
        top: 0px;
        z-index: 2;

    }
    .menu{
        display: flex;
        justify-content: space-around;
        line-height: 38px;
    }
    .menu p{
        margin:0px;
    }
    .menu p a{
        color: black;
        transition: 0.5s;

    }

    .menu p a:hover{
        color: purple;
        font-size: 17px;
    }
</style>
</html>