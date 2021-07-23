<?php
	if(isset($_GET['m_id'])){
		$m_id=$_GET['m_id'];
		$sql="SELECT * FROM menu WHERE menu_id=$m_id";
		$result=mysqli_query($connect,$sql);
		if(!$result){
			die('Connection Failed'.mysqli_error($connect));
		}
		while($row=mysqli_fetch_assoc($result)){
			$menu_id=$row['menu_id'];
			$menu_title=$row['menu_title'];
			$menu_image=$row['menu_image'];
			$menu_price=$row['menu_price'];
			$menu_description=$row['menu_description'];

			$menu_title = mysqli_real_escape_string($connect, $menu_title);
			$menu_image = mysqli_real_escape_string($connect, $menu_image);
			$menu_price = mysqli_real_escape_string($connect, $menu_price);
			$menu_description = mysqli_real_escape_string($connect, $menu_description);
		}
	}



  if(isset($_POST['edit_menu'])){
	$menu_title=$_POST['menu_title'];
	$menu_price=$_POST['menu_price'];
	$menu_description=$_POST['menu_description'];

  	$menu_image=basename($_FILES['menu_image']['name']);
  	$menu_image_tmp=$_FILES['menu_image']['tmp_name'];

	move_uploaded_file($menu_image_tmp,"../images/$menu_image");
	if(empty($post_image)){
		$sql="SELECT * FROM menu WHERE menu_id=$m_id";
		$result=mysqli_query($connect,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$post_image=$row['menu_image'];
		}
	}

  	$sql="UPDATE menu SET menu_title='$menu_title', menu_image='$menu_image', menu_price='$menu_price', menu_description='$menu_description' WHERE menu_id = $m_id";
  	$result=mysqli_query($connect,$sql);
	if(!$result){
			die('Connection Failed'.mysqli_error($connect));
		}	
		echo "<h4><i>Your menu is successfully updated</i></h4>";
	
  }
?>

<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<h3 class="text-center">Add Menu Here</h3>
	<hr style="border: 0.5px solid orange; width: 230px"><br>
	<div class="form-group">
		<label for="post_title" class="control-label col-md-2">Menu Title</label>
		<div class="col-md-10">
			<input type="text" class="form-control" name="menu_title" value="<?php echo $menu_title; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="post_image" class="control-label col-md-2">Menu Image</label>
		<div class="col-md-10">
			<input type="file"  name="menu_image"><br>
			<img src="../images/<?php echo $menu_image; ?>" width="100px">
		</div>
	</div>
	<div class="form-group">
		<label for="post_title" class="control-label col-md-2">Menu Price</label>
		<div class="col-md-10">
			<input type="text"  class="form-control" name="menu_price" value="<?php echo $menu_price; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="post_title" class="control-label col-md-2">Menu Description</label>
		<div class="col-md-10">
			<textarea name="menu_description" id="" cols="80" rows="10" class="form-control">
				<?php echo $menu_description; ?>
			</textarea>
		</div>
	</div>
	<div class="col-md-10 col-md-offset-2">
		<input type="submit" value="Update Menu" name="edit_menu" class="btn btn-primary">
	</div>
</form>

	