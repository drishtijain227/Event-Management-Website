    <?php
      include_once "connection.php";
      if($_SESSION['ADMIN']==""){
        header("Location:index.php");
    }
    ?>
    <div class="main">
        <div class="left-aside">
            <div class="menu2">
            <div class="dropdown-center mg-30">
            <h5><a href="enquiry.php" class="enq-link">Reservations</a></h5>
            </div>
            <div class="dropdown-center mg-30">
                <button class="btn btn-secondary dropdown-toggle btn-color" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pages
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="aboutpage.php">About Page</a></li>
                  <li><a class="dropdown-item" href="contact.php">Contact Page</a></li>
                </ul>
              </div>
              <div class="dropdown-center  mg-30">
                <button class="btn btn-secondary dropdown-toggle btn-color" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Events
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="viewevent.php">View Event</a></li>
                </ul>
              </div><div class="dropdown-center mg-30">
                <button class="btn btn-secondary dropdown-toggle btn-color" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Gallery
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="addgallery.php">Add Gallery</a></li>
                  <li><a class="dropdown-item" href="viewgallery.php">View Gallery</a></li>
                </ul>
              </div>
              <div class="dropdown-center mg-30">
                <button class="btn btn-secondary dropdown-toggle btn-color" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Offer
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="addoffer.php">Add Offer</a></li>
                  <li><a class="dropdown-item" href="viewoffer.php">View Offer</a></li>
                </ul>
              </div>
            </div>
            <div class="head">
                    <p>Menu</p>
            </div>
        </div>
  </div>    