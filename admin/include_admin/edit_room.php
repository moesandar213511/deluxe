<?php 
if(isset($_GET['edit_room'])){
	$edit_room_id = $_GET['edit_room'];

	$query = "SELECT * FROM rooms WHERE room_id = $edit_room_id";
	$result = mysqli_query($connect,$query);
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

if(isset($_POST['edit_room'])){
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

	if(empty($room_image)){
		$query = "SELECT * FROM rooms WHERE room_id = $edit_room_id";
		$result = mysqli_query($connect,$query);
		while($row = mysqli_fetch_assoc($result)){
			$room_image = $row['room_image'];
		}
	}

	if(empty($fir_detail_image)){
		$query = "SELECT * FROM rooms WHERE room_id = $edit_room_id";
		$result = mysqli_query($connect,$query);
		while($row = mysqli_fetch_assoc($result)){
			$fir_detail_image = $row['fir_detail_image'];
		}
	}

	if(empty($sec_detail_image)){
		$query = "SELECT * FROM rooms WHERE room_id = $edit_room_id";
		$result = mysqli_query($connect,$query);
		while($row = mysqli_fetch_assoc($result)){
			$sec_detail_image = $row['sec_detail_image'];
		}
	}

	if(empty($thir_detail_image)){
		$query = "SELECT * FROM rooms WHERE room_id = $edit_room_id";
		$result = mysqli_query($connect,$query);
		while($row = mysqli_fetch_assoc($result)){
			$thir_detail_image = $row['thir_detail_image'];
		}
	}


		$query = "UPDATE rooms SET room_type='$room_type', room_image='$room_image', room_price='$room_price', bedding_type='$bedding_type', room_status='$room_status', fir_detail_image='$fir_detail_image', sec_detail_image ='$sec_detail_image', thir_detail_image='$thir_detail_image', description='$description', facility='$facility' WHERE room_id = $edit_room_id";
		$result = mysqli_query($connect,$query);
		if($result){
			echo "Editing room is successful";
		}
	}

?>
<form action="" method="post" class="form-horizontal col-md-6" enctype="multipart/form-data" style="margin-left: 200px">
	<h3 class="text-center">Edit Room</h3>
	<div class="form-group">
		<label for="" class="control-label col-md-3">
		Room Type
		</label>
		<div class="col-md-9">
			<select name="room_type" id="" class="form-control">
			<?php 
			$query = "SELECT * FROM room_type";
			$result = mysqli_query($connect,$query);
			while($row=mysqli_fetch_assoc($result)){
				$room_type_title = $row['room_type_title'];
			?>
			<option value="<?php echo $room_type_title; ?>"><?php echo $room_type_title; ?></option>
			<?php
			}
			?>
		</select>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-md-3">
		Room Image
		</label>
		<div class="col-md-9">
			<input type="file" name="room_image"><br>
			<img src="../images/<?php echo $room_image; ?> " alt="" width="100px">
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-md-3">
		Bedding Type
		</label>
		<div class="col-md-9">
			<select name="bedding_type" id="" class="form-control">
			<?php 
			$query = "SELECT * FROM bedding_type";
			$result = mysqli_query($connect,$query);
			while($row=mysqli_fetch_assoc($result)){
				$bedding_type_title = $row['bedding_type_title'];
			?>
			<option value="<?php echo $bedding_type_title; ?>"><?php echo $bedding_type_title; ?></option>
			<?php
			}
			?>
			
			<?php 
			// if($bedding_type == 'Two Single Bed'){
			// 	echo "<option value='One King Size'>One King Size</option>";
			// 	echo "<option value='One Queen Size'>One Queen Size</option>";
			// 	echo "<option value='One Double Plus One Single'>One Double Plus One Single</option>";
			// }else if($bedding_type == 'One King Size'){
			// 	echo "<option value='Two Single Bed'>Two Single Bed</option>";
			// 	echo "<option value='One Queen Size'>One Queen Size</option>";
			// 	echo "<option value='One Double Plus One Single'>One Double Plus One Single</option>";
			// }else if($bedding_type == 'One Queen Size'){
			// 	echo "<option value='Two Single Bed'>Two Single Bed</option>";
			// 	echo "<option value='One King Size'>One King Size</option>";
			// 	echo "<option value='One Double Plus One Single'>One Double Plus One Single</option>";
			// }else{
			// 	echo "<option value='Two Single Bed'>Two Single Bed</option>";
			// 	echo "<option value='One King Size'>One King Size</option>";
			// 	echo "<option value='One Queen Size'>One Queen Size</option>";
			// }
			?>
		</select>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-md-3">Romm Price</label>
		<div class="col-md-9">
			<input type="text" placeholder="Room Price" class="form-control" name="room_price" value="<?php echo $room_price; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-md-3">
		First Detail Image
		</label>
		<div class="col-md-9">
			<input type="file" name="fir_detail_image">
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-md-3">
		Second Detail Image
		</label>
		<div class="col-md-9">
			<input type="file" name="sec_detail_image">
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-md-3">
		Third Detail Image
		</label>
		<div class="col-md-9">
			<input type="file" name="thir_detail_image">
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-md-3">
		Description
		</label>
		<div class="col-md-9">
			<textarea name="description" id="" cols="30" rows="5" class="form-control"> <?php echo $description; ?>
			</textarea>	
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-md-3">
		Facility
		</label>
		<div class="col-md-9">
			<textarea name="facility" rows="5" class="form-control">
				<?php echo $facility; ?>
			</textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-md-3">Romm Status</label>
		<div class="col-md-9">
			<select name="room_status" id="" class="form-control">
				<option value="<?php echo $room_status; ?>"><?php echo $room_status; ?></option>
				<?php 
					if($room_status == 'default'){
						echo "<option value='home'>Home</option>";
					}else{
						echo "<option value='default'>Default</option>";
					}
				?>				
			</select>
		</div>
	</div>
	<div class="col-md-9 col-md-offset-3">
		<button class="btn btn-danger" name="edit_room">Edit Room</button>
	</div>
</form>
