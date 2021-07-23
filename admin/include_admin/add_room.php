<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php 

			if(isset($_POST['add_room'])){
				$room_type = $_POST['room_type'];

				$room_image = $_FILES['room_image']['name'];
				$room_image_tmp = $_FILES['room_image']['tmp_name'];
			move_uploaded_file($room_image_tmp, "../images/$room_image");

				$bedding_type = $_POST['bedding_type'];
				$room_price = $_POST['room_price'];
				$room_status = $_POST['room_status'];

				$fir_detail_image = $_FILES['fir_detail_image']['name'];
				$fir_detail_image_tmp = $_FILES['fir_detail_image']['tmp_name'];
			move_uploaded_file($fir_detail_image_tmp, "../images/$fir_detail_image");

				$sec_detail_image = $_FILES['sec_detail_image']['name'];
				$sec_detail_image_tmp = $_FILES['sec_detail_image']['tmp_name'];
			move_uploaded_file($sec_detail_image_tmp, "../images/$sec_detail_image");

				$thir_detail_image = $_FILES['thir_detail_image']['name'];
				$thir_detail_image_tmp = $_FILES['thir_detail_image']['tmp_name'];
			move_uploaded_file($thir_detail_image_tmp, "../images/$thir_detail_image");

				$description = $_POST['description'];
				$facility = $_POST['facility'];

				$query = "INSERT INTO rooms(room_type, room_image, room_price, bedding_type, room_status, fir_detail_image, sec_detail_image, thir_detail_image, description, facility) VALUES ('$room_type','$room_image','$room_price','$bedding_type','$room_status','$fir_detail_image','$sec_detail_image','$thir_detail_image','$description','$facility')";
				$result = mysqli_query($connect,$query);
				if($result){
					echo "Adding room is successful";
				}
			}

			?>
			<form action="" method="post" class="form-horizontal col-md-10" enctype="multipart/form-data">
				<h3 class="text-center">Add New Room</h3>
				<div class="form-group">
					<label for="" class="control-label col-md-2">
					Room Type
					</label>
					<div class="col-md-10">
						<select name="room_type" id="" class="form-control">
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
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-2">
					Room Image
					</label>
					<div class="col-md-10">
						<input type="file" name="room_image">
					</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-2">
					Bedding Type
					</label>
					<div class="col-md-10">
						<select name="bedding_type" id="" class="form-control">
						<?php 
						$query = "SELECT * FROM bedding_type";
						$result = mysqli_query($connect,$query);
						while($row = mysqli_fetch_assoc($result)){
							$bedding_type_title = $row['bedding_type_title'];
							echo "<option value='$bedding_type_title'>$bedding_type_title</option>";
						}
						?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-2">Room Price</label>
					<div class="col-md-10">
						<input type="text" placeholder="Room Price" class="form-control" name="room_price">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-2">Room Status</label>
					<div class="col-md-10">
						<select name="room_status" id="" class="form-control">
							<option value="default">Default</option>
							<option value="home">Home</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-2">
					First Detail Image
					</label>
					<div class="col-md-10">
						<input type="file" name="fir_detail_image">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-2">
					Second Detail Image
					</label>
					<div class="col-md-10">
						<input type="file" name="sec_detail_image">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-2">
					Third Detail Image
					</label>
					<div class="col-md-10">
						<input type="file" name="thir_detail_image">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-2">
					Description
					</label>
					<div class="col-md-10">
						<textarea name="description" id="" cols="30" rows="5" class="form-control">
						</textarea>	
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-2">
					Facility
					</label>
					<div class="col-md-10">
						<textarea name="facility" rows="5" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-10 col-md-offset-2">
						<input type="submit" class="btn btn-danger" value="Add Room" name="add_room">
					</div>
				</div>
			</form>
		</div>
		<!-- ================================================= -->
