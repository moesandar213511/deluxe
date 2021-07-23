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
    <!-- ============ share button ================== -->
   <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c9d645f9852eb0011ce9e2a&product='inline-share-buttons' async='async'></script>
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
	          <li class="nav-item active"><a href="rooms.php" class="nav-link">Rooms</a></li>
	          <li class="nav-item"><a href="restaurant.php" class="nav-link">Restaurant</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	<?php 
      $query = "SELECT * FROM header WHERE header_menu = 'room'";
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
	            <h1 class="mb-4 bread">Rooms</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    		
	        <div class="col-lg-12">
		    		<div class="row">
		    			 <?php
				$sql="SELECT * FROM rooms";
				$result=mysqli_query($connect,$sql);
				if(!$result){
					die('Connection Failed'.mysqli_error($connect));
				}
				while($row=mysqli_fetch_assoc($result)){
					$room_id=$row['room_id'];
					$room_image=$row['room_image'];
					$room_type=$row['room_type'];
          $bedding_type = $row['bedding_type'];
					$room_price=$row['room_price'];								
			?>	
		    			<div class="col-lg-4 ftco-animate" style="display: inline-block;" >
		    				<div class="room">
		    					<a href="room-detail.php?r_id=<?php echo $room_id ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/<?php echo $room_image; ?>); background-position: center; background-size: cover; ">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					
		    					<div class="text p-3 text-center">
		    						<h3 class="mb-3"><a href="room-detail.php?r_id=<?php echo $room_id ?>"><?php echo $room_type ?></a></h3>
                    <p class="mb-3" style="font-size: 15px;"><a href="room-detail.php?r_id=<?php echo $room_id ?>"><?php echo $bedding_type; ?></a></p>
		    						<!-- <p><span class="price mr-2" style="font-size: 15px"> <?php echo $room_price ?></span> <span class="per">per night</span></p> -->
		    						<hr>
		    						<!-- <p class="pt-1"><a href="room-single.php" class="btn-custom"> BOOK NOW <span class="icon-long-arrow-right"></span></a></p> -->
		    					</div>
		    				</div>
		    			</div>
		    		
		     <?php } ?>				
		    		</div>
		     </div>
		   </div> 
    	</div>
    </section>


    <section class="instagram pt-5">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Image Gallery</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <?php 
            $query = "SELECT * FROM gallery WHERE gallery_status = 'room'";
            $result = mysqli_query($connect,$query);
            while($row = mysqli_fetch_assoc($result)){
              $gallery_image = $row['gallery_image'];
              $gallery_status = $row['gallery_status'];
          ?>
          <div class="col-sm-12 col-md ftco-animate">
            <div class="insta-img" style="background-image: url(images/<?php echo $gallery_image; ?>);">
            </div>
          </div>
          <?php 
            }
          ?>
      </div>
    </section>
<?php include_once "footer.php"; ?>