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
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item active"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <?php 
  $query = "SELECT * FROM header WHERE header_menu = 'blog'";
  $result = mysqli_query($connect,$query);
  $row = mysqli_fetch_assoc($result);
  $header_image = $row['header_image'];
?>

    <div class="hero-wrap" style="background-image: url('images/<?php echo $header_image; ?>'); height: 500px">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span class="mr-2"><a href="blog.php">Blog</a></span> <span>Blog Single</span></p>
	            <h1 class="mb-4 bread">Blog Single</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-8 ftco-animate order-md-last">
          <?php
              if(isset($_GET['post_id'])){
                  $post_id = $_GET['post_id'];
              
              $sql="SELECT * FROM posts WHERE post_id = $post_id ";
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
            }
        ?>
            <h2 class="mb-3"><?php echo $post_title; ?></h2>
            <p>
              <img src="images/<?php echo $post_image; ?>" alt="" class="img-fluid">
            </p>
            <p><?php echo $post_content; ?></p>
          <?php } ?>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link"><span class="icon-facebook"></span></a>
                <a href="#" class="tag-cloud-link"><span class="icon-instagram"></span></a>
                <a href="#" class="tag-cloud-link"><span class="icon-twitter"></span></a>
                <a href="#" class="tag-cloud-link"><span class="icon-linkedin"></span></a>
              </div>
            </div>
           </div> <!-- .col-md-8 -->

            
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <?php
              
              $sql="SELECT * FROM posts ORDER BY post_id DESC LIMIT 1,3";
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
              <div class="block-21 mb-4 d-flex">
                <a href="blog.php" class="blog-img mr-4" style="background-image: url(images/<?php echo $post_image; ?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">
                        <?php 
                          echo substr($post_content,0,50); 
                          echo strlen($post_content) > 50 ? '...' : '';                    
                       ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> <?php echo $post_date; ?></a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
                
              </div>
               <?php 
                  } 
                ?>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
    <?php include_once "footer.php"; ?>