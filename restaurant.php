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
    <!-- ============ share button ================ -->
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
	          <li class="nav-item"><a href="rooms.php" class="nav-link">Rooms</a></li>
	          <li class="nav-item active"><a href="restaurant.php" class="nav-link">Restaurant</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
<?php 
  $query = "SELECT * FROM header WHERE header_menu = 'restaurant'";
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
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home</a></span> <span>Restaurants</span></p>
	            <h1 class="mb-4 bread">Restaurants</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section ftc-no-pb ftc-no-pt">
<?php 
$query = "SELECT * FROM restaurant_header";
$result = mysqli_query($connect,$query);
while($row = mysqli_fetch_assoc($result)){
  $restaurant_header_title = $row['restaurant_header_title'];
  $restaurant_header_image = $row['restaurant_header_image'];
  $restaurant_header_content = $row['restaurant_header_content'];
}
?>
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/<?php echo $restaurant_header_image; ?>);">
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section heading-section-wo-line pt-md-4 mb-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4"><?php echo $restaurant_header_title; ?></h2>
	            </div>
	          </div>
	          <div class="pb-md-4">
							<p style="text-align: justify;"><?php echo $restaurant_header_content; ?></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Our Menu</h2>
          </div>
        </div>
				<div class="row">
            <?php 
              if(isset($_GET['pages'])){
                $pages = $_GET['pages'];
              }else{
                $pages = '';
              }

              if($pages == '' || $pages == 1){
                $change_page = 0;
              }else{
                $change_page = ($pages * 8)-8;
              }

              $post_count_query = "SELECT * FROM menu";
              $post_count_result = mysqli_query($connect,$post_count_query);
              $total_count = mysqli_num_rows($post_count_result);
              $total_count = ceil($total_count/8);


              $query = "SELECT * FROM menu ORDER BY menu_id DESC LIMIT $change_page,8";
              $result = mysqli_query($connect,$query);
              while($row = mysqli_fetch_assoc($result)){
                $menu_title=$row['menu_title'];
                $menu_image=$row['menu_image'];
                $menu_price=$row['menu_price'];
                $menu_description=$row['menu_description'];
              ?>
              <div class="col-md-6">
              <div class="pricing-entry d-flex ftco-animate">
              <div class="img" style="background-image: url(images/<?php echo $menu_image ?>);"></div>
              <div class="desc pl-3">
                <div class="d-flex text align-items-center">
                  <h3><span><?php echo $menu_title ; ?></span></h3>
                  <span class="price"><?php echo $menu_price; ?></span>
                </div>
                <div class="d-block">
                  <p>
                    <?php 
                    echo $menu_description = substr($menu_description,0,100); 
                    ?>
                  </p>
                </div>
              </div>
            </div>
          </div>

            <?php
              }

            ?>
	        		
        		</div>

            <div class="row mt-5">
              <div class="col text-center">
                <div class="block-27">
                  <ul class="pager">
                    <?php 
                      for($a = 1; $a <= $total_count; $a++){
                        if($a == $pages){
                          echo " <li id='active_paganition'><a href='restaurant.php?pages=$a'>$a</a></li>";
                        }else{
                          echo " <li><a href='restaurant.php?pages=$a'>$a</a></li>";
                        }  
                    }
                    ?>
                  </ul>
                </div>
              </div>
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
            $query = "SELECT * FROM gallery WHERE gallery_status = 'restaurant'";
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
      </div>
    </section>
    <?php include_once "footer.php"; ?>