<?php
error_reporting(0);
	session_start();

	// setcookie('dark_chocklate','wscubetch',time()-60);
	include_once "admin/connection.php";

	if($_SESSION['LOGIN']==""){
		header("Location:index.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>couses</title>
	<link href="style.css" rel="stylesheet">
	<link href="footer/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">   
	<link rel="stylesheet" href="fonts/fonts.css">	
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>
<body class="body">
		<?php
			include "header.php";
			include_once "nav.php";
		?>
		<section id="service-section" class="service-section sec-ptb-100 clearfix">
			<div class="container">

				<!-- service-wrapper - start -->
				<div class="service-wrapper">

					<!-- service-item - start -->
					<div class="service-item clearfix">
						<div class="service-image float-left">
							<div class="big-image">
								<img src="assets/images/1.image.png" alt="Image_not_found">
							</div>
							<div class="small-image">
								<img src="assets/images/1.1.image.png" alt="Image_not_found">
							</div>
						</div>
						<div class="service-content float-right">
							<div class="service-title mb-30">
								<h2 class="title-text" id="bc">business <strong>conference</strong></h2>
								<span class="service-price">price start from RS 500</span>
							</div>
							<p class="service-description black-color mb-30">
								Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
							</p>
							<div class="service-type-list mb-50 clearfix">
								<ul>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										wedsite development
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										online store
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										office meeting
									</li>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										wedsite development
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										online store
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										office meeting
									</li>

								</ul>
							</div>
							<div class="text-left">
								<a href="#!" class="custom-btn">make an event</a>
								<a href="#!" class="conference-btn">conference event</a>
							</div>
						</div>
					</div>
					<!-- service-item - end -->

					<!-- service-item - start -->
					<div class="service-item clearfix">
						<div class="service-image float-right">
							<div class="big-image">
								<img src="assets/images/2.image.png" alt="Image_not_found">
							</div>
							<div class="small-image">
								<img src="assets/images/2.2.image.png" alt="Image_not_found">
							</div>
						</div>
						<div class="service-content float-left">
							<div class="service-title mb-30">
								<h2 class="title-text"id="mf">Festival <strong>Musical</strong></h2>
								<span class="service-price">price start from Rs 520</span>
							</div>
							<p class="service-description black-color mb-30">
								Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
							</p>
							<div class="service-type-list mb-50 clearfix">
								<ul>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										traditional musical
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										personal consert
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										modern musical
									</li>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										traditional musical
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										personal consert
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										modern musical
									</li>

								</ul>
							</div>
							<div class="text-left">
								<a href="#!" class="custom-btn">make an event</a>
								<a href="#!" class="conference-btn">musical event</a>
							</div>
						</div>
					</div>
					<!-- service-item - end -->

					<!-- service-item - start -->
					<div class="service-item clearfix">
						<div class="service-image float-left">
							<div class="big-image">
								<img src="assets/images/4.image.png" alt="Image_not_found">
							</div>
							<div class="small-image">
								<img src="assets/images/event-5.jpg" alt="Image_not_found">
							</div>
						</div>
						<div class="service-content float-right">
							<div class="service-title mb-30">
								<h2 class="title-text"id="ff">International <strong>Food Fest</strong></h2>
								<span class="service-price">price start from Rs 600</span>
							</div>
							<p class="service-description black-color mb-30">
								Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
							</p>
							<div class="service-type-list mb-50 clearfix">
								<ul>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										wedsite development
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										online store
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										office meeting
									</li>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										wedsite development
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										online store
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										office meeting
									</li>

								</ul>
							</div>
							<div class="text-left">
								<a href="#!" class="custom-btn">make an event</a>
								<a href="#!" class="conference-btn">Food Fest</a>
							</div>
						</div>
					</div>
					<!-- service-item - end -->

					<!-- service-item - start -->
					<div class="service-item clearfix">
						<div class="service-image float-right">
							<div class="big-image">
								<img src="assets/images/birthday.webp" alt="Image_not_found">
							</div>
							<div class="small-image">
								<img src="assets/images/4.3.image.jpg" alt="Image_not_found">
							</div>
						</div>
						<div class="service-content float-left">
							<div class="service-title mb-30">
								<h2 class="title-text"id="wb">Party <strong>Wedding &amp; Birtday</strong></h2>
								<span class="service-price">price start from Rs 5200</span>
							</div>
							<p class="service-description black-color mb-30">
								Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
							</p>
							<div class="service-type-list mb-50 clearfix">
								<ul>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										traditional musical
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										personal consert
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										modern musical
									</li>

									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										traditional musical
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										personal consert
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-arrow-circle-right"></i>
										</span>
										modern musical
									</li>

								</ul>
							</div>
							<div class="text-left">
								<a href="#!" class="custom-btn">make an event</a>
								<a href="#!" class="conference-btn">party event</a>
							</div>
						</div>
					</div>
					<!-- service-item - end -->

				</div>
				<!-- service-wrapper - end -->

			</div>
		</section>
<?php
	include "footer.php";
?>
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
</html>