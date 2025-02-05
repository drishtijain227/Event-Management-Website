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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>aboutus</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">   
	<link rel="stylesheet" href="fonts/fonts.css">	
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>
</head>
<body class="body">
	<div class="main">
		<?php
			include "header.php";
			include_once "nav.php";
			
		?>
		<div class="container">
			<div class="row3about">
			
				<?php
					$sel="SELECT * FROM aboutpage";
					$exe=mysqli_query($con,$sel);
					$fetch=mysqli_fetch_assoc($exe);
				?>	
				<br><h1><?php echo $fetch['about_titile']; ?></h1><br>
				<?php 
					// session_start();
					// echo $_SESSION['NAME1'];
					// echo $_COOKIE['dark_chocklate'];
				?>
				<?php echo $fetch['about_des'] ?>
			</div>
	    </div>
        <section id="service-section" class="service-section sec-ptb-100 bg-gray-light clearfix">
			<div class="container">

				<div class="row">
					<div class="col-lg-6">
						<div class="section-title mb-50 sr-fade1">
							<span class="line-style"></span>
							<small class="sub-title">why choose us</small>
							<h2 class="big-title">DM Events <strong>Advantages</strong></h2>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="team-btn text-right sr-fade2">
							<a href="#team" class="custom-btn">meet the team</a>
						</div>
					</div>
				</div>

				<div class="service-wrapper sr-fade1">
					<ul>

						<li>
							<a href="#!">
								<span class="icon">
                                <i class="fa-solid fa-handshake"></i>
								</span>
								<strong class="service-title">friendly team</strong>
								<small class="service-sub-title">More than 200 teams</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
                                <i class="fa-solid fa-champagne-glasses"></i>
								</span>
								<strong class="service-title">Unique Scenario</strong>
								<small class="service-sub-title">we thinking out of the box</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
                                <i class="fa-solid fa-golf-ball-tee"></i>
								</span>
								<strong class="service-title">perfect venues</strong>
								<small class="service-sub-title">perfect venues</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
                                    <i class="fa-solid fa-comments"></i>
								</span>
								<strong class="service-title">24/7 hours support</strong>
								<small class="service-sub-title">anitime anywhere</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
                                <i class="fa-solid fa-cake-candles"></i>
								</span>
								<strong class="service-title">Unforgetable Times</strong>
								<small class="service-sub-title">More than 200 teams</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
                                <i class="fa-solid fa-face-smile-beam"></i>
								</span>
								<strong class="service-title">Briliant Idea</strong>
								<small class="service-sub-title">We thinking out of the box</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
                                    <i class="fa-solid fa-calendar-days"></i>
								</span>
								<strong class="service-title">Unique Scenario</strong>
								<small class="service-sub-title">perfact venues</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
                                <i class="fa-solid fa-people-group"></i>
								</span>
								<strong class="service-title">Best Management</strong>
								<small class="service-sub-title">anytime anywhere</small>
							</a>
						</li>

					</ul>
				</div>

			</div>
		</section>
		<section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6 id="team">Our Team</h6>
                        <h2>We offer the best for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-square-instagram"></i></a></li>
                            </ul>
                            <img src="assets/images/chefs-01.png" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>Randy Walker</h4>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <img src="assets/images/chefs-02.png" alt="Chef #2">
                        </div>
                        <div class="down-content">
                            <h4>David Martin</h4>
                            <span>President</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
                            </ul>
                            <img src="assets/images/chefs-03.png" alt="Chef #3">
                        </div>
                        <div class="down-content">
                            <h4>Peter Perkson</h4>
                            <span>Marketing</span>
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
<script src="assets/js/custom.js"></script> 
</body>
<style>
	.row3rightabout p{
		margin-right: 30px;
		margin-bottom: 10px;
	}
</style>
</html>