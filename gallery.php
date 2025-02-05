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
	<title>gallery</title>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">   
	<link rel="stylesheet" href="fonts/fonts.css">	
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>
<body class="body">
	<div class="main">
		<?php
			include_once "nav.php";
		?>
		<div id="top">
        <div class="container-fluid background">
					
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							  
							  <div class="carousel-inner">
								<div class="carousel-item active">
								  <img class="d-block w-100" src="assets/images/slide-04.jpg" alt="First slide">
								  
								<div class="carousel-caption d-none d-md-block">
									<div class="container banner-content">
								
										<h2>We Create <br> <span>You Celebrate </span> </h2>
										<p>Planning a Wedding, Proposal, or Event in our busy city is not so easy, <br> and it takes skills (and time) to make it all look easy-going</p>
										<a class="contactbtn" href="#">Contact Us</a></li>
									</div>
								</div>
								</div>
								
								<div class="carousel-item">
								  <img class="d-block w-100" src="assets/images/slide-05.jpg" alt="Second slide">
								<div class="carousel-caption d-none d-md-block">
									<div class="container banner-content">
								
										<h2>We Create <br> <span>You Celebrate </span> </h2>
										<p>Planning a Wedding, Proposal, or Event in our busy city is not so easy, <br> and it takes skills (and time) to make it all look easy-going</p>
										<a class="contactbtn" href="#">Contact Us</a></li>
									</div>
								</div>
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="assets/images/slider-bg10.jpg" alt="Second slide">
								<div class="carousel-caption d-none d-md-block">
									<div class="container banner-content">
								
										<h2>We Create <br> <span>You Celebrate </span> </h2>
										<p>Planning a Wedding, Proposal, or Event in our busy city is not so easy, <br> and it takes skills (and time) to make it all look easy-going</p>
										<a class="contactbtn" href="#">Contact Us</a></li>
									</div>
								</div>
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="assets/images/slider-bg11.jpg" alt="Second slide">
								<div class="carousel-caption d-none d-md-block">
									<div class="container banner-content">
								
										<h2>We Create <br> <span>You Celebrate </span> </h2>
										<p>Planning a Wedding, Proposal, or Event in our busy city is not so easy, <br> and it takes skills (and time) to make it all look easy-going</p>
										<a class="contactbtn" href="#">Contact Us</a></li>
									</div>
								</div>
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="assets/images/slider-bg12.jpg" alt="Second slide">
								<div class="carousel-caption d-none d-md-block">
									<div class="container banner-content">
								
										<h2>We Create <br> <span>You Celebrate </span> </h2>
										<p>Planning a Wedding, Proposal, or Event in our busy city is not so easy, <br> and it takes skills (and time) to make it all look easy-going</p>
										<a class="contactbtn" href="#">Contact Us</a></li>
									</div>
								</div>
								</div>
								
								<div class="carousel-item">
								  <img class="d-block w-100" src="assets/images/slide-06.jpg" alt="Third slide">
								<div class="carousel-caption d-none d-md-block">
									<div class="container banner-content">
								
										<h2>We Create <br> <span>You Celebrate </span> </h2>
										<p>Planning a Wedding, Proposal, or Event in our busy city is not so easy, <br> and it takes skills (and time) to make it all look easy-going</p>
										<a class="contactbtn" href="#">Contact Us</a></li>
									</div>
								</div>
								</div>
								
							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							  <div class="prevbtn">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
								</div>
							  </a>
							  
							  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							  <div class="nextbtn">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
								</div>
							  </a>
						</div>
                
					
		</div>
    </div>
    
		<div class="container">
				<div class="gall-head">
					<h1>Gallery</h1>
				</div>
				<div class="gall-box">
					<?php
							$sel="SELECT * FROM gallery where gallery_status = '1'";
							$exe=mysqli_query($con,$sel);
							while($fetch=mysqli_fetch_assoc($exe)){
								// echo "<pre>";
								// print_r($fetch);
							
					?>
					<div class="gall-img ">
						<img src="assets/images/<?php echo $fetch['gallery_image'] ?>">
					</div>
					<?php } ?>
				</div>
		</div>
		<?php
			include_once "footer.php";
		?>
	</div>
<!-- jQuery -->
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