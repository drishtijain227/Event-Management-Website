<?php
error_reporting(0);
	include_once "admin/connection.php";

	session_start();

	if($_SESSION['LOGIN']==""){
		header("Location:index.php");
	}

?>
<?php
	$sel="SELECT * FROM eventi_info";
	$exe=mysqli_query($con,$sel);
	$fetch=mysqli_fetch_assoc($exe);
	$time=$fetch['event_time'];
	
?>
<section id="event-advertisement-section" class="event-advertisement-section clearfix" style="background-image: url(assets/images/special-offer-bg.png);">
	<div class="container">
		<div class="row">

			<!-- event-item - start -->
			<div class="col-lg-7 col-md-12 col-sm-12">
				<div class="event-item">

					<div class="event-image">
						<img src="assets/images/<?php echo $fetch['event_image'] ?> " alt="Image_not_found">
						<a href="#!"></a>
					</div>

					<div class="event-content">
						<div class="event-title">
							<span class="tag">
								<i class="fas fa-bookmark"></i>
								Featured Event
							</span>
							<h3 class="title-text"><?php echo $fetch['event_country']; ?><br><strong><?php echo $fetch['event_title']; ?> </strong></h3>
							<small class="ticket-price">Tickets start from Rs <?php echo $fetch['event_price'] ?></small>
						</div>
						<div class="event-info ul-li-block">
							<ul>

								<li>
									<span class="icon">
										<i class="far fa-clock"></i>
									</span>
									Date  <?php echo $fetch['event_date'];?>

								</li>
								<li>
									<span class="icon">
										<i class="fas fa-map-marker-alt"></i>
									</span>
									<?php echo $fetch['event_city']; ?> , <?php echo $fetch['event_state']; ?>
								</li>
								
							</ul>
						</div>
					</div>

				</div>
			</div>
			<!-- event-item - end -->

			<!-- right-content-wrapper - start -->
			<div class="col-lg-5 col-md-12 col-sm-12">
				<div class="right-content-wrapper">

					<div class="countdown-timer mb-30" >
						<ul class="countdown-list">
							<li id="days"></li>
							<li id="hours"></li>
							<li id="mins"></li>
							<li id="seco"></li>
						</ul>
					</div>

					<div class="text-right">
						<a href="book.php" class="booking-btn">booking ticket</a>
						<a href="events.php" class="details-btn">tickets &amp; details</a>
					</div>
					
				</div>
			</div>
			<!-- right-content-wrapper - end -->
			
		</div>
	</div>
</section>
<script>

	var end = new Date('<?php echo $fetch['event_date']; ?> ');

var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour * 24;
var timer;

function showRemaining() {
	var now = new Date();
	var distance = end - now;
	if (distance < 0) {

		clearInterval(timer);
		document.getElementById('days').innerHTML = 'EXPIRED!';

		return;
	}
	var days = Math.floor(distance / _day);
	var hours = Math.floor((distance % _day) / _hour);
	var minutes = Math.floor((distance % _hour) / _minute);
	var seconds = Math.floor((distance % _minute) / _second);

	document.getElementById('days').innerHTML = "<strong>"+ days+"</strong>" + '<small>days</small>';
	document.getElementById('hours').innerHTML = "<strong>"+hours+"</strong>" + '<small>hrs</small>';
	document.getElementById('mins').innerHTML = "<strong>"+minutes+"</strong>" + '<small>mins</small> ';
	document.getElementById('seco').innerHTML = "<strong>"+seconds+"</strong>" + '<small>secs</small>';
}

timer = setInterval(showRemaining, 1000);
</script>