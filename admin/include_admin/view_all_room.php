<div class="col-md-12">
		<form action="" method="post">
			<h3 class="text-center">Show All Rooms</h3><br>
			<table class="table table-hover table-bordered">
				<tr>
					<th>Id</th>
					<th>Room Type</th>
					<th>Bed Type</th>
					<th>Room Image</th>
					<th>1stDetail Image</th>
					<th>2ndDetail Image</th>
					<th>3rdDetail Image</th>
					<th>Price</th>
					<th>Description</th>
					<th>facility</th>
					<th>Room Status</th>
					<th>Default</th>
					<th>Home</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php 
				$query = "SELECT * FROM rooms";
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
				?>

				<tr>
					<td><?php echo $room_id; ?></td>
					<td><?php echo $room_type; ?></td>
					<td><?php echo $bedding_type; ?></td>
					<td><img src='../images/<?php echo $room_image; ?>' width='80px'></td>
					<td><img src='../images/<?php echo $fir_detail_image; ?>' width='80px'></td>
					<td><img src='../images/<?php echo $sec_detail_image; ?>' width='80px'></td>
					<td><img src='../images/<?php echo $thir_detail_image; ?>' width='80px'></td>
					<td><?php echo $room_price; ?></td>
					<td>
						<?php echo $description = substr($description,0,50); ?>
					</td>
					<td><?php echo $facility; ?></td>
					<td><?php echo $room_status; ?></td>
					<td><a href="setting.php?source=view_all_room&default=<?php echo $room_id; ?>">Default</a></td>
					<td><a href="setting.php?source=view_all_room&home=<?php echo $room_id ?>">Home</a></td>
					<td><a href="setting.php?source=edit_room&edit_room=<?php echo $room_id; ?>">Edit</a></td>
					<td><a href="setting.php?source=view_all_room&delete_room=<?php echo $room_id; ?>">Delete</a></td>
					<tr>

				<?php
					}
				?>
			</table>
		</form>
			
		</div>
	</div>
</div>
<?php 
if(isset($_GET['delete_room'])){
	$delete_room_id = $_GET['delete_room'];

	$query = "DELETE FROM rooms WHERE room_id = $delete_room_id";
	$result = mysqli_query($connect,$query);
	header('location:setting.php?source=view_all_room');
}

if(isset($_GET['default'])){
	$default = $_GET['default'];

	$query = "UPDATE rooms SET room_status='default' WHERE room_id = $default";
	$result = mysqli_query($connect,$query);
	header('location:setting.php?source=view_all_room');
}

if(isset($_GET['home'])){
	$home = $_GET['home'];

	$query = "UPDATE rooms SET room_status='home' WHERE room_id = $home";
	$result = mysqli_query($connect,$query);
	header('location:setting.php?source=view_all_room');
}

?>