<?php
error_reporting(0);
    include_once "admin/connection.php";
	session_start();
	 
	if($_SESSION['LOGIN']==""){
		header("Location:index.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="style.css" rel="stylesheet">
    <link href="footer/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">   
	<link rel="stylesheet" href="fonts/fonts.css">	
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <style>
        .new{
            color:#fff;
        }
    </style>
</head>
<body class="body">
	<div class="main">
		<?php
            include_once "nav.php";
			include_once "header.php";
		?>
        <div class="row2"> 
            <h3>&nbsp;&nbsp;OFFERS</h3>
            <marquee onmouseover="stop()" onmouseleave="start()"  scrollamount="10">
                <h3>
                    <?php
                        $sel="SELECT * FROM news where news_status = '1' ";
                        $exe=mysqli_query($con,$sel);
                        while($fetch=mysqli_fetch_assoc($exe)){
                            ?>
                                <a class="new" href="#!" class="a"><span><?php echo $fetch['news_title']; ?></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php
                        }	
                    ?>
                </h3>
            </marquee>
        </div>
		<section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">                            
                            <h2>Discover Our Story</h2>
							<h6>About Us</h6>
                        </div>
						<div class="section-paragraph"> 
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						<br>
						<br>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.
						</p>
						
						</div>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="assets/images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    	</section>
        <section id="special-offer-section" class="special-offer-section clearfix" style="background-image: url(assets/images/special-offer-bg.png);">
			<div class="container">
				<div class="row">

					<!-- special-offer-content - start -->
					<div class="col-lg-9 col-md-12 col-sm-12">
						<div class="special-offer-content">
							<h2><strong>30%</strong> Off in Jan~Mar for <span>Birthday Events</span></h2>
							<p class="m-0">
								Contact us now and we will make your event unique &amp; unforgettable
							</p>
						</div>
					</div>
					<!-- special-offer-content - end -->

					<!-- event-makeing-btn - start -->
					<div class="col-lg-3 col-md-12 col-sm-12">
						<div class="event-makeing-btn">
							<a href="events.php">make an event now</a>
						</div>
					</div>
					<!-- event-makeing-btn - end -->

				</div>
			</div>
		</section>
        
        <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            
                            <div class='info'>
                              <h1 class='title'>Birthday Party</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="book.php">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            
                            <div class='info'>
                              <h1 class='title'>Confrence</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="book.php">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            
                            <div class='info'>
                              <h1 class='title'>Aniversary Party</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="book.php">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            
                            <div class='info'>
                              <h1 class='title'>Batch Party</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="book.php">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            
                            <div class='info'>
                              <h1 class='title'>Business conference</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="book.php">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            
                            <div class='info'>
                              <h1 class='title'>Wedding Ceremony</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="book.php">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
		<?php
				include "footer.php";
			?>

	</div>
<script src="assets/js/jquery.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/slick.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

	$(function() {
		var selectedClass = "";
		$("p").click(function(){
		selectedClass = $(this).attr("data-rel");
		$("#portfolio").fadeTo(50, 0.1);
			$("#portfolio div").not("."+selectedClass).fadeOut();
		setTimeout(function() {
		  $("."+selectedClass).fadeIn();
		  $("#portfolio").fadeTo(50, 1);
		}, 500);
			
		});
	});

</script>

</body>
</html>
