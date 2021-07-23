<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">View All Detail</h3><hr style="width: 180px; border: solid orange 1px">
			<table class="table table-bordered table-hover">
				<tr> 
					<th>Id</th>
					<th>First Image</th>
					<th>Second Image</th>
					<th>Third Image</th>
					<th>Description</th>
					<th>Facility</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				$query = "SELECT * FROM room_detail";
				$result = mysqli_query($connect,$query);
				if(!$result){
					die('Query fail'.mysqli_error($connect));
				}
				while($row=mysqli_fetch_assoc($result)){
					$id = $row['id'];
					$first_image = $row['fir_image'];
					$second_image = $row['sec_image'];
					$third_image = $row['thir_image'];
					$description = $row['description'];
					$facility = $row['facility'];
				?>
				<tr>
					<td><?php echo $id; ?></td>
					<td><img src="../images/<?php echo $first_image; ?>" width="80px"></td>
					<td><img src="../images/<?php echo $second_image; ?>" width="80px"></td>
					<td><img src="../images/<?php echo $third_image; ?>" width="80px"></td>
					<td>
						<?php
						 echo $description = substr($description,0,30);
						?>
					</td>
					<td><?php echo $facility; ?></td>
					<td><a href="setting.php?source=edit_detail&edit_detail=<?php echo $id; ?>">Edit</a></td>
					<td><a href="setting.php?source=view_detail&delete_detail=<?php echo $id; ?>">Delete</a></td>
				</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>
</div>
<?php 
if(isset($_GET['delete_detail'])){
	$delete_detail = $_GET['delete_detail'];
	$query = "DELETE FROM room_detail WHERE id = $delete_detail";
	mysqli_query($connect,$query);
	header('location:setting.php?source=view_detail');
}
?>
