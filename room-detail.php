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
    <style>
      #changingImages img:hover{
        border: 1px solid red;
        transform: scale(1.2);
      }
    </style>
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
      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
          	<div class="text mb-5 pb-3">
	            <h1 class="mb-3">Welcome To Deluxe</h1>
	            <h2>Hotels &amp; Resorts</h2>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>


<!-- =================== Room Detail ====================== -->
    <div class="container">
      <div class="row">
        <?php 
        if(isset($_GET['r_id'])){
          $r_id = $_GET['r_id'];

          $query = "SELECT * FROM rooms WHERE room_id=$r_id";
          $result = mysqli_query($connect,$query);
          if(!$result){
            die('Query fail'.mysqli_error($connect));
          }
          while($row = mysqli_fetch_assoc($result)){
            $room_id = $row['room_id'];
            $room_type = $row['room_type'];
            $bedding_type = $row['bedding_type'];
            $room_price = $row['room_price'];
            $room_image = $row['room_image'];
            $room_status = $row['room_status'];
            $fir_detail_image = $row['fir_detail_image'];
            $sec_detail_image = $row['sec_detail_image'];
            $thir_detail_image = $row['thir_detail_image'];
            $description = $row['description'];
            $facility = $row['facility'];
          }
         }
        ?>
        <div class="col-md-6" style="margin-top: 100px">
          <h3><?php echo $room_type; ?> / <?php echo $bedding_type; ?></h3>
          <!-- <h5><?php echo $room_price; ?></h5> -->
        </div>
        <div class="col-md-6" style="margin-top: 100px">
        </div>
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-9">
              <img src="images/<?php echo $room_image; ?>" alt="" class="img-responsive" width="600px" height="330px" id="mainImage">
            </div>
            <div class="col-md-3">
              <div id="changingImages" style="height: 330px; width: 100px; border: 1px solid silver; padding: 10px 10px;">
                <img src="images/<?php echo $room_image; ?>" alt="" width="100px" class="img-thumbnail" onclick="changeImage1()"><br><br>
                <img src="images/<?php echo $fir_detail_image; ?>" alt="" width="100px" class="img-thumbnail" onclick="changeImage2()"><br><br>
                <img src="images/<?php echo $sec_detail_image; ?>" alt="" width="100px" class="img-thumbnail" onclick="changeImage3()"><br><br>
                <img src="images/<?php echo $thir_detail_image; ?>" alt="" width="100px" class="img-thumbnail" onclick="changeImage4()">
              </div>
            </div>

            <script>
              var mainImage = document.getElementById("mainImage");
              function changeImage1(){
                mainImage.setAttribute('src', 'images/<?php echo $room_image; ?>');
              }
              function changeImage2(){
                mainImage.setAttribute('src', 'images/<?php echo $fir_detail_image; ?>');
              }
              function changeImage3(){
                mainImage.setAttribute('src', 'images/<?php echo $sec_detail_image; ?>');
              }
              function changeImage4(){
                mainImage.setAttribute('src', 'images/<?php echo $thir_detail_image; ?>');
              }
            </script>

          </div>
        </div>
        <div class="col-md-3">
          <div style="width: 270px; height: 330px; background: silver;">
            <h3 class="text-center">Need Help</h3>
            <p style="padding: 15px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi dolores doloremque saepe rerum quas perspiciatis omnis ipsam nihil vitae impedit cum ea laboriosam dolorum, quasi enim totam minima placeat iste! <br>
            09 403 438 913 <br>
            09 260 322 451
            </p>
          </div>
        </div>

        <div class="col-md-9" style="margin-bottom: 100px">
          <br>
          <hr>
          <h3>Description</h3>
          <p class="text-justify"><?php echo $description; ?></p>
          <div style="background: silver; height: 215px">
            <h3 style="padding-left: 15px">Room Facility</h3><br>
            <div class="row">
              <div class="col-md-5">
              <ul type="square">
              <?php echo "<li>$facility;</li>"; ?>
              </ul>
            </div>
            </div>
          </div>
        </div>

        <?php 
           $query = "SELECT * FROM booking";
            $result = mysqli_query($connect,$query);
            if(!$result){
                die('Query fail'.mysqli_error($connect));
            }
            $row=mysqli_fetch_assoc($result);
                $room_type=$row['room_type'];
            
            if(isset($_GET['r_id'])){
              $r_id = $_GET['r_id'];

          $query = "SELECT * FROM rooms WHERE room_id=$r_id";
          $result = mysqli_query($connect,$query);
          if(!$result){
            die('Query fail'.mysqli_error($connect));
          }
          while($row = mysqli_fetch_assoc($result)){
            $room_type = $row['room_type'];
            $bedding_type = $row['bedding_type'];
          }
         }
          if($room_type == $room_type){


        ?>
        <div class="col-md-3" style="margin-bottom: 100px">
          <br><br><br>
            <a href="#">
              <div style=" background:orange; width: 270px; height: 80px; padding:30px 85px; color: white;">BOOK NOW</div>
            </a>
        </div>
        <?php }else{
                  echo "Full Room";
        } ?>

      </div>
    </div>
<?php include_once "footer.php"; ?>