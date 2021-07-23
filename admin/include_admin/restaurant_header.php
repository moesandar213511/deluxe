<div class="container">
	<div class="row">			
<!-- ======================== View All Image Gallery ============================= -->	
		<div class="col-md-6">
			<h3 class="text-center text-danger">View Restaurant header</h3>
			<hr style="width: 200px; border: 0.5px solid orange"><br>
			<table class="table table-hover table-bordered" >
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Image</th>
						<th>Content</th>
						<th>Edit</th>
					</tr>
					<?php 
						$query = "SELECT * FROM restaurant_header";
						$result = mysqli_query($connect,$query);
						while($row = mysqli_fetch_assoc($result)){
							$restaurant_header_id = $row['restaurant_header_id'];
							$restaurant_header_title = $row['restaurant_header_title'];
							$restaurant_header_image = $row['restaurant_header_image'];
							$restaurant_header_content = $row['restaurant_header_content'];
					?>
						<tr>
						<td><?php echo $restaurant_header_id ?></td>
						<td><?php echo $restaurant_header_title; ?></td>
						<td><img src="../images/<?php echo $restaurant_header_image ?>" alt="" width="150px"></td>
						<td>
							<?php
							 echo $restaurant_header_content = substr($restaurant_header_content,0,100);
							 ?>
								
						</td>
						<td><a href="restaurant.php?edit_restaurant_header=<?php echo $restaurant_header_id ?>">Edit</a></td>
						</tr>
					<?php
						}
					?>
					
			</table>
		</div>
<!-- ========================== Update Restaurant header================================= -->
		<div class="col-md-5">
			<?php 
				if(isset($_GET['edit_restaurant_header'])){
					$edit_restaurant_header_id = $_GET['edit_restaurant_header'];
					$query = "SELECT * FROM restaurant_header WHERE restaurant_header_id = $edit_restaurant_header_id";
					$result = mysqli_query($connect,$query);

					while($row = mysqli_fetch_assoc($result)){
						$restaurant_header_id = $row['restaurant_header_id'];
						$restaurant_header_title = $row['restaurant_header_title'];
						$restaurant_header_image = $row['restaurant_header_image'];
						$restaurant_header_content = $row['restaurant_header_content'];
					}
			?>

		<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">

		<?php 
			if(isset($_POST['edit_restaurant_header'])){
				$edit_restaurant_header = $_GET['edit_restaurant_header'];
				$restaurant_header_title = $_POST['restaurant_header_title'];
				$restaurant_header_content = $_POST['restaurant_header_content'];


				$restaurant_header_image = basename($_FILES['restaurant_header_image']['name']);
				$restaurant_header_image_tmp = $_FILES['restaurant_header_image']['tmp_name'];
				move_uploaded_file($restaurant_header_image_tmp,"../images/$restaurant_header_image");

				if(empty($restaurant_header_image)){
					$query = "SELECT * FROM restaurant_header WHERE restaurant_header_id = $edit_restaurant_header";
					$result = mysqli_query($connect,$query);
					while($row = mysqli_fetch_assoc($result)){
						$restaurant_header_image = $row['restaurant_header_image'];
					}
				}

				$query = "UPDATE restaurant_header SET restaurant_header_title='$restaurant_header_title', restaurant_header_image='$restaurant_header_image', restaurant_header_content ='$restaurant_header_content' WHERE restaurant_header_id
				 = $edit_restaurant_header";
				$result = mysqli_query($connect,$query);
				header('location:restaurant.php');
			}

		?>

			<h3 class="text-center text-danger">Update Restaurant header</h3>
			<hr style="width: 200px; border: 0.5px solid orange">
			<div class="form-group">
				<label for="" class="control-label col-md-3">Title</label>
				<div class="col-md-9">
					<input type="text" name="restaurant_header_title" class="form-control" value="<?php echo $restaurant_header_title; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="control-label col-md-3">Image</label>
				<div class="col-md-9">
					<input type="file" name="restaurant_header_image"><br>
					<img src="../images/<?php echo $restaurant_header_image; ?>" alt="" width="90px">
				</div>
			</div>

			<div class="form-group">
				<label for="" class="control-label col-md-3">Content</label>
				<div class="col-md-9">
					<textarea name="restaurant_header_content" id="" cols="30" rows="10" class="form-control"><?php echo $restaurant_header_content; ?></textarea>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-9 col-md-offset-3">
					<input type="submit" name="edit_restaurant_header" class="btn btn-danger" value="Update Restaurant Header">
				</div>
			</div>
		</form>

			<?php
					}
			?>

		</div>

	</div>
</div>
