<div class="container">
	<div class="row">
		<div class="col-md-4">
			<!-- =============== Add Bedding Type ===================== -->
			<h3>Add Room Type</h3>
			<?php 
				if(isset($_POST['add_room_type'])){
					$room_type_title = $_POST['room_type_title'];

					$query = "INSERT INTO room_type(room_type_title) VALUES ('$room_type_title')";
					$result = mysqli_query($connect,$query);
				}

			?>
			<form action="" method="post">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Room Type" name="room_type_title">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-info" value="Add Room Type" name="add_room_type">
				</div>
			</form>

			<!-- =================== Edit BEdding Type =============== -->
			<?php 
				if(isset($_GET['edit_room_type'])){
					$edit_room_type_id = $_GET['edit_room_type'];
					$query = "SELECT * FROM room_type WHERE room_type_id = $edit_room_type_id";
					$result = mysqli_query($connect,$query);
					while($row = mysqli_fetch_assoc($result)){
						$room_type_title = $row['room_type_title'];
					}
			?>
			<br><br><br><h3>Update Bedding Type</h3>
			<form action="" method="post">
				<?php 
				if(isset($_POST['edit_room_type'])){
					$edit_room_type_id = $_GET['edit_room_type'];
					$room_type_title = $_POST['room_type_title'];
					$query = "UPDATE room_type SET room_type_title=
					'$room_type_title' WHERE room_type_id=$edit_room_type_id";
					$result = mysqli_query($connect,$query);
					if(!$result){
						die('Query fail'.mysqli_error($connect));
					}else{
						echo "<script>alert('You have successfully Updated')</script>";
					}
				}

				?>
				<div class="form-group">
					<input type="text" class="form-control" name="room_type_title" value="<?php echo $room_type_title; ?>">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" value="Update Bedding Type" name="edit_room_type">
				</div>
			</form>

			<?php
				}
			?>
		</div>

		<div class="col-md-8">
			<!-- =============== Show All Bedding Type ===================== -->
			<h3>Show All Bedding Type</h3>
			<?php 
			
			?>
			<table class="table">
				<tr>
					<th>ID</th>
					<th>Room Type Title</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				$query = "SELECT * FROM room_type";
				$result = mysqli_query($connect,$query);
				while ($row = mysqli_fetch_assoc($result)) {
					$room_type_id =  $row['room_type_id'];
					$room_type_title = $row['room_type_title'];
		echo "<tr>";
			echo "<td>$room_type_id</td>";
			echo "<td>$room_type_title</td>";
			echo "<td><a href='setting.php?source=room_type&edit_room_type=$room_type_id'>Edit</a></td>";
			echo "<td><a href='setting.php?source=room_type&delete_room_type=$room_type_id'>Delete</a></td>";
		echo "</tr>";
				}
				?>
			</table>
		</div>
	</div>
</div>
<?php 
if(isset($_GET['delete_room_type'])){
	$delete_room_type_id = $_GET['delete_room_type'];

	$query = "DELETE FROM room_type WHERE room_type_id = $delete_room_type_id";
	$result = mysqli_query($connect,$query);
	if(!$result){
		die('Query fail'.mysqli_error($connect));
	}
	header('location:setting.php?source=room_type');
}

?>