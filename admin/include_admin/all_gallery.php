<div class="container">
	<div class="row">
<!-- ========================== Add Image Gallery ================================= -->	
		<div class="col-md-6">		
			<h3 class="text-center text-danger">Add Image Gallery</h3>
			<hr style="width: 200px; border: 0.5px solid orange"><br>
			<?php 
			if(isset($_POST['add_gallery'])){
				$gallery_status = $_POST['gallery_status'];

				$gallery_image = basename($_FILES['gallery_image']['name']);
				$gallery_image_tmp = $_FILES['gallery_image']['tmp_name'];
				move_uploaded_file($gallery_image_tmp,"../images/$gallery_image");

				$count_query = "SELECT * FROM gallery WHERE gallery_status='$gallery_status'";
				$count_result = mysqli_query($connect,$count_query);
				$total_count = mysqli_num_rows($count_result);

				if($total_count >= 5){
					echo "<script>alert('Image Gallery does not allow more than 5 images for each item')</script>";
				}else{
						$query = "INSERT INTO gallery(gallery_image, gallery_status) VALUES ('$gallery_image','$gallery_status')";
						$result = mysqli_query($connect,$query);
				}

			}

			?>
			<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
					<label for="" class="control-label col-md-3">Gallery Image</label>
					<div class="col-md-9">
						<input type="file" name="gallery_image">
					</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-3">Gallery Status</label>
					<div class="col-md-9">
						<select name="gallery_status" id="" class="form-control">
							<option value="home">Home</option>
							<option value="room">Room</option>
							<option value="restaurant">Restaurant</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-9 col-md-offset-3">
						<input type="submit" name="add_gallery" class="btn btn-danger" value="Add Image Gallery">
					</div>
				</div>
			</form>
			<br>

			<?php 


			?>
<!-- ========================== Update Image Gallery ================================= -->
<?php

if(isset($_GET['edit_gallery'])){
	$edit_gallery = $_GET['edit_gallery'];
	$query = "SELECT * FROM gallery WHERE gallery_id = $edit_gallery";
	$result = mysqli_query($connect,$query);

	while($row = mysqli_fetch_assoc($result)){
		$gallery_id = $row['gallery_id'];
		$gallery_image = $row['gallery_image'];
		$gallery_status = $row['gallery_status'];
	}
?>
		<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">

		<?php 
			if(isset($_POST['edit_gallery'])){
				$edit_gallery = $_GET['edit_gallery'];
				$gallery_status = $_POST['gallery_status'];

				$gallery_image = basename($_FILES['gallery_image']['name']);
				$gallery_image_tmp = $_FILES['gallery_image']['tmp_name'];
				move_uploaded_file($gallery_image_tmp,"../images/$gallery_image");

				if(empty($gallery_image)){
					$query = "SELECT * FROM gallery WHERE gallery_id = $edit_gallery";
					$result = mysqli_query($connect,$query);
					while($row = mysqli_fetch_assoc($result)){
						$gallery_image = $row['gallery_image'];
					}
				}

				$query = "UPDATE gallery SET gallery_image='$gallery_image', gallery_status = '$gallery_status' WHERE gallery_id = $edit_gallery";
				$result = mysqli_query($connect,$query);
			}

		?>

			<h3 class="text-center text-danger">Update Gallery</h3>
			<hr style="width: 200px; border: 0.5px solid orange"><br>
			<div class="form-group">
				<label for="" class="control-label col-md-3">Gallery Image</label>
				<div class="col-md-9">
					<input type="file" name="gallery_image"><br>
					<img src="../images/<?php echo $gallery_image; ?>" alt="" width="200px">
				</div>
			</div>

			<div class="form-group">
				<label for="" class="control-label col-md-3">Gallery Status</label>
				<div class="col-md-9">
					<select name="gallery_status" id="" class="form-control">
						<option value="<?php echo $gallery_status; ?>"><?php echo $gallery_status; ?></option>
						<?php 
						if($gallery_status == 'home'){
							echo "<option value='room'>Room</option>";
							echo "<option value='restaurant'>Restaurant</option>";
						}else if($gallery_status == 'room'){
							echo "<option value='home'>Home</option>";
							echo "<option value='restaurant'>Restaurant</option>";
						}else{
							echo "<option value='home'>Home</option>";
							echo "<option value='room'>Room</option>";
						}
						?>
						
					</select>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-9 col-md-offset-3">
					<input type="submit" name="edit_gallery" class="btn btn-danger" value="Update Image Gallery">
				</div>
			</div>
		</form>

<?php
}

?>
		</div>
			
<!-- ======================== View All Image Gallery ================================= -->	
		<div class="col-md-6">
			<h3 class="text-center text-danger">View All Image Galleery</h3>
			<hr style="width: 200px; border: 0.5px solid orange"><br>
			<table class="table table-hover" >
					<tr>
						<thead>
							<th>Id</th>
							<th>Image</th>
							<th>Status</th>
							<th>Edit</th>
							<th>Delete</th>
						</thead>
					</tr>
					
					<?php 
						$query = "SELECT * FROM gallery";
						$result = mysqli_query($connect,$query);
						while($row = mysqli_fetch_assoc($result)){
							$gallery_id = $row['gallery_id'];
							$gallery_image = $row['gallery_image'];
							$gallery_status = $row['gallery_status'];
					?>
					<tbody>
						<tr>
						<td><?php echo $gallery_id ?></td>
						<td><img src="../images/<?php echo $gallery_image ?>" alt="" width="150px"></td>
						<td><?php echo $gallery_status ?></td>
						<td><a href="gallery.php?edit_gallery=<?php echo $gallery_id ?>">Edit</a></td>
						<td><a href="gallery.php?delete_gallery=<?php echo $gallery_id ?>">Delete</a></td>
						</tr>
					</tbody>
					<?php
						}
					?>
					
			</table>
		</div>
	</div>
</div>
<?php 
if(isset($_GET['delete_gallery'])){
	$delete_gallery = $_GET['delete_gallery'];

	$query = "DELETE FROM gallery WHERE gallery_id = $delete_gallery";
	$result = mysqli_query($connect,$query);
	header('location:gallery.php');
}

?>