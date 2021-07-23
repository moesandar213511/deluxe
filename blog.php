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
  </head>
  <style type="text/css" media="screen">
    .pager li .active_link{
      background-color: #000 !important;
  }
  </style>
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
    <div class="hero-wrap" style="background-image: url('images/<?php echo $header_image; ?>'); height: 500px;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home</a></span> <span>Blog</span></p>
	            <h1 class="mb-4 bread">Blog</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
      <?php
        $per_page = 4;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = '';
        }
        

        if($page == '' || $page == 1){
          $page_one = 0;
        }else{
          $page_one = ($page*4)-4;
        }
        $post_count_query = "SELECT * FROM posts";
        $post_count = mysqli_query($connect,$post_count_query);
        $count = mysqli_num_rows($post_count);
        $count = ceil($count/4);

        $sql="SELECT * FROM posts ORDER BY post_id DESC LIMIT $page_one,$per_page";
        $result=mysqli_query($connect,$sql);
        if(!$result){
          die('Connection Failed'.mysqli_error($connect));
        }
        while($row=mysqli_fetch_assoc($result)){
          $post_id=$row['post_id'];
          $post_image=$row['post_image'];
          $post_content=$row['post_content'];
          $post_date=date('d-m-y');
                
      ?>
     <!--  <p><?php echo $count; ?></p> -->
          <div class="col-md-3 col-xl-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php?post_id=<?php echo $post_id; ?>" class="block-20" style="background-image: url('images/<?php echo $post_image; ?>');">
              </a>
              <div class="text mt-3 d-block">
                <h3 class="heading mt-3">
                    <a href="blog-single.php?post_id=<?php echo $post_id; ?>">
                      <?php 
                          echo substr($post_content,0,60); 
                          echo strlen($post_content) > 60 ? '...' : '';                    
                       ?>
                    </a>
                </h3>
                <div class="meta mb-3">
                  <div><a href="#"><?php echo $post_date; ?></a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>

        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul class="pager">
                <?php 
                  for ($i=1; $i <= $count ; $i++) { 
                      if($i == $page){
                          echo "<li class='active_link'><a href='blog.php?page=$i'>$i</a></li>";
                       }else{
                          echo "<li><a  href='blog.php?page=$i'>$i</a></li>"; 
                       }
                   
                  }
                 ?>
          
                <!-- <li><a href="#">&lt;</a></li>
                <li><a href="#">2</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php include_once "footer.php"; ?>