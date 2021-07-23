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
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/custom_style.css">
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
	        <span class="oi oi-menu"></span>Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="rooms.php" class="nav-link">Rooms</a></li>
	          <li class="nav-item"><a href="restaurant.php" class="nav-link">Restaurant</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    
    <section class="home-slider owl-carousel">
      <?php  
      $query = "SELECT * FROM header WHERE header_menu = 'home'";
      $result = mysqli_query($connect,$query);
      $row = mysqli_fetch_assoc($result);
      $header_image = $row['header_image'];
      ?>
      <div class="slider-item" style="background-image:url(images/<?php echo $header_image; ?>);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
          	<div class="text mb-5 pb-3">
	            <h1 class="mb-3">Welcome To Hotel Juno</h1>
	            <h2>Hotel in Pakokku</h2>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    
    <!-- <div class="container-fluid" style="background: #F9A825; height: 120px">
      <div class="row">
        <div class="col-md-12">
          <form action="" method="post" class="form-inline" style="padding: 30px; padding-left: 172px; padding-right: 0px">
            <div class="form-group">
              <input type="text" class="form-control checkin_date" placeholder="Check in date" style="width: 200px">
            </div>

            <div class="form-group">
              <input type="text" class="form-control checkin_date" placeholder="Check out date" style="width: 200px">
            </div>

            <div class="form-group">
              <select name="" id="" class="form-control" style="width: 200px">
                <?php 
                $query = "SELECT * FROM room_type";
                $result = mysqli_query($connect,$query);
                while($row = mysqli_fetch_assoc($result)){
                  $room_type_title = $row['room_type_title'];
                  echo "<option value='$room_type_title'>$room_type_title</option>";
                }
                ?>
              
            </select>
            </div>

            <div class="form-group">
              <select name="" id="" class="form-control" style="width: 200px">
              <option value="">Adults</option>
              <option value="family room">0 Adults</option>
              <option value="single room">1 Adults</option>
              <option value="couple room">2 Adults</option>
              <option value="couple room">3 Adults</option>
              <option value="couple room">4 Adults</option>
              <option value="couple room">5 Adults</option>
            </select>
            </div>

            <div class="form-group">
              <select name="" id="" class="form-control" style="width: 200px">
              <option value="">Children</option>
              <option value="family room">0 children</option>
              <option value="single room">1 children</option>
              <option value="couple room">2 children</option>
              <option value="family room">3 children</option>
              <option value="single room">4 children</option>
              <option value="couple room">5 children</option>
            </select>
            </div>
          
            <div class="form-group">
              <input type="submit" class="btn btn-default form-control" style="border: gray solid 0.2px; width: 135px" value="Search">
            </div>
          </form>
        </div>
      </div>
    </div> -->

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
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/<?php echo $restaurant_header_image; ?>);">
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

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Accommodations</h2>
          </div>
        </div>    		
    		<div class="row">
<!-- ======================= ROOMS ======================= -->
          <?php 
            $query = "SELECT * FROM rooms WHERE room_status = 'home' LIMIT 3";
            $result = mysqli_query($connect,$query);
            if(!$result){
              die('Query fail'.mysqli_error($connect));
            }
            while($row = mysqli_fetch_assoc($result)){
              $room_id = $row['room_id'];
              $room_type = $row['room_type'];
              $room_image = $row['room_image'];
              $room_price = $row['room_price'];
              $bedding_type = $row['bedding_type'];
          ?>
            <div class="col-sm col-md-6 col-lg-4 ftco-animate">
            <div class="room">
              <a href="room-detail.php?r_id=<?php echo $room_id; ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/<?php echo $room_image; ?>);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3 text-center">
                <h3 class="mb-3"><a href="room-detail.php?r_id=<?php echo $room_id; ?>"><?php echo $room_type; ?></a></h3>
                <p class="mb-3" style="font-size: 15px;"><a href="room-detail.php?r_id=<?php echo $room_id; ?>"><?php echo $bedding_type; ?></a></p>
                <!-- <p><span class="price mr-2" style="font-size: 15px"><?php echo $room_price; ?></span> <span class="per">per night</span></p> -->
                <hr>
                <!-- <p class="pt-1"><a href="#" class="btn-custom"> BOOK NOW <span class="icon-long-arrow-right"></span></a></p> -->
              </div>
            </div>
          </div>

          <?php
            }
          ?>
    		
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <?php
              
              $sql="SELECT * FROM posts ORDER BY post_id DESC LIMIT 1,4";
              $result=mysqli_query($connect,$sql);
              if(!$result){
                die('Connection Failed'.mysqli_error($connect));
              }
              while($row=mysqli_fetch_assoc($result)){
                $post_id=$row['post_id'];
                $post_title=$row['post_title'];
                $post_content=$row['post_content'];
                $post_image=$row['post_image'];
                $post_date=$row['post_date'];

                $post_title = mysqli_real_escape_string($connect, $post_title);
                $post_content = mysqli_real_escape_string($connect, $post_content);
                $post_image = mysqli_real_escape_string($connect, $post_image);
                $post_date = mysqli_real_escape_string($connect, $post_date);           
            ?>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php?post_id=<?php echo $post_id; ?>" class="block-20" style="background-image: url('images/<?php echo $post_image; ?>');">
              </a>
              <div class="text mt-3 d-block">
                <h3 class="heading mt-3"><a href="blog-single.php?post_id=<?php echo $post_id; ?>">
                  <?php echo $post_content=substr($post_content,0,50); ?>
                </a></h3>
                <div class="meta mb-3">
                  <div><a href="blog-single.php?post_id=<?php echo $post_id; ?>"><?php echo $post_date; ?></a></div><br>
                  <div><a href="blog-single.php?post_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
          <!-- <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Image Gallery</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <?php 
            $query = "SELECT * FROM gallery WHERE gallery_status = 'home'";
            $result = mysqli_query($connect,$query);
            while($row = mysqli_fetch_assoc($result)){
              $gallery_image = $row['gallery_image'];
              $gallery_status = $row['gallery_status'];
          ?>
            <div class="col-sm-12 col-md ftco-animate">
            <div href="" class="insta-img" style="background-image: url(images/<?php echo $gallery_image; ?>); background-repeat: no-repeat;">
            </div>
          </div>

          <?php
            }
          ?>
      </div>
    </section>
    <?php include_once "footer.php"; ?>