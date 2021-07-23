<?php require_once "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hotel Juno</title>
    <link rel="shortcut icon" href="images/bg_2.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- ================= font awesome ===================== -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ============ share button ================== -->
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c8ccb7dd07e6e0011f18453&product=inline-share-buttons' async='async'></script>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">HOTEL JUNO</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="rooms.php" class="nav-link">Rooms</a></li>
	          <li class="nav-item"><a href="restaurant.php" class="nav-link">Restaurant</a></li>
	          <li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
<?php 
  $query = "SELECT * FROM header WHERE header_menu = 'about'";
  $result = mysqli_query($connect,$query);
  $row = mysqli_fetch_assoc($result);
  $header_image = $row['header_image'];
?>
    <div class="hero-wrap" style="background-image: url('images/<?php echo $header_image; ?>'); height: 500px;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home</a></span> <span>About</span></p>
	            <h1 class="mb-4 bread">About Us</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_2.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
              <?php 
              $query = "SELECT * FROM random";
              $result = mysqli_query($connect,$query);
              while($row=mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $guest = $row['guest'];
                $room = $row['room'];
                $staff = $row['staff'];
                $destination = $row['destination'];
              }
              ?>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $guest; ?>">0</strong>
		                <span>Happy Guests</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $room; ?>">0</strong>
		                <span>Rooms</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $staff; ?>">0</strong>
		                <span>Staffs</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $destination; ?>">0</strong>
		                <span>Destination</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftc-no-pb ftc-no-pt">
			<div class="container">
				<div class="row">
          <?php 
              $query = "SELECT * FROM restaurant_header";
              $result = mysqli_query($connect,$query);
              while($row = mysqli_fetch_assoc($result)){
                $restaurant_header_title = $row['restaurant_header_title'];
                $restaurant_header_image = $row['restaurant_header_image'];
                $restaurant_header_content = $row['restaurant_header_content'];
              }
          ?>
					<div class="col-md-5 p-md-5 img img-2 img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/<?php echo $restaurant_header_image; ?>);">
						<a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4"><?php echo $restaurant_header_title; ?></h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p style="text-align: justify;"><?php echo $restaurant_header_content; ?></p>

            <div class="sharethis-inline-share-buttons"></div>
            
            
							<!-- <ul class="ftco-social d-flex">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-reception-bell"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">24/7 Front Desk</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-serving-dish"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Restaurant Bar</h3>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <i class="fas fa-swimming-pool h1" style="color: #8D6E63"></i>
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Swimming Pool</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-car"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Transfer Services</h3>
              </div>
            </div>      
          </div>
          
        </div>
      </div>
    </section>
    <?php include_once "footer.php"; ?>