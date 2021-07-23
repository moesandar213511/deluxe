<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">ADD ROOM DETAIL</h3>
			<hr style="width: 220px; border: 1px solid orange">
			<br>
			<?php 
			if(isset($_POST['add_detail'])){
				$first_image = $_FILES['first_image']['name'];
				$first_image_tmp = $_FILES['first_image']['tmp_name'];
				move_uploaded_file($first_image_tmp,"../images/$first_image");

				$second_image = $_FILES['second_image']['name'];
				$second_image_tmp = $_FILES['second_image']['tmp_name'];
				move_uploaded_file($second_image_tmp,"../images/$second_image");

				$third_image = $_FILES['third_image']['name'];
				$third_image_tmp = $_FILES['third_image']['tmp_name'];
				move_uploaded_file($third_image_tmp,"../images/$third_image");

				$description = $_POST['description'];
				$facility = $_POST['facility'];

				$query = "INSERT INTO room_detail(fir_image, sec_image, thir_image, description, facility) VALUES ('$first_image','$second_image','$third_image','$description','$facility')";
				$result = mysqli_query($connect,$query);
				if(!$result){
					die('Query fail'.mysqli_error($connect));
				}
			}

			?>
			<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
					<label for="" class="control-label col-md-2">
					First Image
					</label>
					<div class="col-md-10">
						<input type="file" name="first_image">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-2">
					Second Image
					</label>
					<div class="col-md-10">
						<input type="file" name="second_image">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-2">
					Third Image
					</label>
					<div class="col-md-10">
						<input type="file" name="third_image">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-2">
					Description
					</label>
					<div class="col-md-10">
						<textarea name="description" id="" rows="7" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-2">
					Facility
					</label>
					<div class="col-md-10">
						<input type="text" name="facility" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-10 col-md-offset-2">
						<input type="submit" name="add_detail" class="btn btn-info" value="Add Room Detail">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>