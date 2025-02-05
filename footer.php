<?php
	include_once "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link href="assets/css/footer.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>
<body>
<footer id="footer-section" class="footer-section default-footer-section clearfix">
			<?php

				$sel="SELECT * FROM contact";
				$exe=mysqli_query($con,$sel);
				$fetch=mysqli_fetch_assoc($exe);

			?>
			<!-- footer-top - start -->
			<div class="footer-top sec-ptb-100 clearfix">
				<div class="container">
					<div class="row">

						<!-- basic-info - start -->
						<div class="col-lg-12 col-md-12 col-md-12">
							<div class="basic-info mb-50 clearfix">
								<div class="row">

									<!-- basic-info-item - start -->
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="basic-info-item">
											<span class="icon">
											<i class="fas fa-map-marker-alt"></i>
											</span>
											<div class="info-content">
												<h3><?php echo $fetch['cp_adddress'] ?></h3>
											</div>
										</div>
									</div>
									<!-- basic-info-item - end -->

									<!-- basic-info-item - start -->
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="basic-info-item">
											<span class="icon">
											<i class="fas fa-envelope"></i>
											</span>
											<div class="info-content">
												<p><a href="#!"><?php echo $fetch['cp_email'] ?></a></p>
												<h3><a href="#!"><?php echo $fetch['cp_web'] ?></a></h3>
											</div>
										</div>
									</div>
									<!-- basic-info-item - end -->

									<!-- basic-info-item - start -->
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="basic-info-item">
											<span class="icon">
											<i class="fa-solid fa-phone-flip"></i>
											</span>
											<div class="info-content">
												<p><a href="#!"><?php echo $fetch['cp_phone'] ?></a></p>
												<h3><a href="#!"><?php echo $fetch['cp_mobile'] ?></a></h3>
											</div>
										</div>
									</div>
									<!-- basic-info-item - end -->
									
								</div>
							</div>
						</div>
						<!-- basic-info - end -->

						<!-- about-wrapper - start -->
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="about-wrapper">

								<!-- site-logo-wrapper - start -->
								<div class="site-logo-wrapper mb-30">
									<a href="index-1.html" class="logo">
										<img src="assets/images/dm.png" alt="logo_not_found">
									</a>
								</div>
								<!-- site-logo-wrapper - end -->

								<!-- social-links - start -->
								<div class="social-links ul-li">
									<h3 class="social-title">network</h3>
									<ul>
										<li>
											<a href="#!"><i class="fab fa-facebook-f"></i></a>
										</li>
										<li>
											<a href="#!"><i class="fab fa-twitter"></i></a>
										</li>
										<li>
											<a href="#!"><i class="fab fa-twitch"></i></a>
										</li>
										<li>
											<a href="#!"><i class="fab fa-google-plus-g"></i></a>
										</li>
										<li>
											<a href="#!"><i class="fab fa-instagram"></i></a>
										</li>
									</ul>
								</div>
								<!-- social-links - end -->
								
							</div>
						</div>
						<!-- about-wrapper - end -->

						<!-- usefullinks-wrapper - start -->
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="usefullinks-wrapper ul-li-block">
								<h3 class="footer-item-title">
									<strong>Events</strong>
								</h3>
								<ul>
									<li><a href="events.php#wb">Birthday Party</a></li>
									<li><a href="events.php#bc">Business meeting</a></li>
									<li><a href="events.php#ff">Food Event</a></li>
									<li><a href="events.php#mf">Musical Event</a></li>
									<li><a href="events.php#wb">Wedding Party</a></li>
									<li><a href="events.php#bc">Conference</a></li>
								</ul>
								
							</div>
						</div>
						<!-- usefullinks-wrapper - end -->

						<!-- usefullinks-wrapper - start -->
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="usefullinks-wrapper ul-li-block">
								<h3 class="footer-item-title">
									<strong>Menu</strong>
								</h3>
								<ul>
									<li><a href="home.php">Home</a></li>
									<li><a href="aboutus.php">About</a></li>
									<li><a href="events.php">Contact us</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="book.php">Book Event</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
								
							</div>
						</div>
						<!-- usefullinks-wrapper - end -->

						<!-- instagram-wrapper - start -->
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="instagram-wrapper ul-li">
								<h3 class="footer-item-title">
									DM Events <strong>instagram</strong>
								</h3>
								<ul>
									<li class="image-wrapper">
										<img src="assets/images/img1.png" alt="Image_not_found">
										<a href="#!">
										<i class="fab fa-instagram"></i>
										</a>
									</li>
									<li class="image-wrapper">
										<img src="assets/images/img2.png" alt="Image_not_found">
										<a href="#!">
										<i class="fab fa-instagram"></i>
										</a>
									</li>
									<li class="image-wrapper">
										<img src="assets/images/img3.png" alt="Image_not_found">
										<a href="#!">
										<i class="fab fa-instagram"></i>
										</a>
									</li>
									<li class="image-wrapper">
										<img src="assets/images/img4.png" alt="Image_not_found">
										<a href="#!">
										<i class="fab fa-instagram"></i>
										</a>
									</li>
								</ul>
								<h4 class="followus-link">
									Follow Our Instagram <a href="#!">#DM</a>
								</h4>
							</div>
						</div>
						<!-- instagram-wrapper - end -->

					</div>
				</div>
			</div>
			<!-- footer-top - end -->

			<div class="footer-bottom">
				<div class="container">
					<div class="row">

						<!-- copyright-text - start -->
						<div class="col-lg-7 col-md-12 col-sm-12">
							<div class="copyright-text">
								<p class="m-0"> <a href="#!" class="site-link">DMEvents.com</a> /p>
							</div>
						</div>
						<!-- copyright-text - end -->

						<!-- footer-menu - start -->
						<div class="col-lg-5 col-md-12 col-sm-12">
							<div class="footer-menu">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="aboutus.php">About</a></li>
									<li><a href="courses.php">Events</a></li>
									<li><a href="gallery.php">Gallery</a></li>
								</ul>
							</div>
						</div>
						<!-- footer-menu - end -->

					</div>
				</div>
			</div>

		</footer>
</body>
</html>