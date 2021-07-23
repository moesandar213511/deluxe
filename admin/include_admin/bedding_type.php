<div class="container">
	<div class="row">
		<div class="col-md-4">
			<!-- =============== Add Bedding Type ===================== -->
			<h3>Add Bedding Type</h3>
			<?php 
				if(isset($_POST['add_bedding_type'])){
					$bedding_type_title = $_POST['bedding_type_title'];

					$query = "INSERT INTO bedding_type(bedding_type_title) VALUES ('$bedding_type_title')";
					$result = mysqli_query($connect,$query);
				}

			?>
			<form action="" method="post">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Bedding Type" name="bedding_type_title">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-info" value="Add Bedding Type" name="add_bedding_type">
				</div>
			</form>

			<!-- =================== Edit BEdding Type =============== -->
			<?php 
				if(isset($_GET['edit_bedding_type'])){
					$edit_bedding_type_id = $_GET['edit_bedding_type'];
					$query = "SELECT * FROM bedding_type WHERE bedding_type_id = $edit_bedding_type_id";
					$result = mysqli_query($connect,$query);
					while($row = mysqli_fetch_assoc($result)){
						$bedding_type_title = $row['bedding_type_title'];
					}
			?>
			<br><br><br><h3>Update Bedding Type</h3>
			<form action="" method="post">
				<?php 
				if(isset($_POST['edit_bedding_type'])){
					$edit_bedding_type_id = $_GET['edit_bedding_type'];
					$bedding_type_title = $_POST['bedding_type_title'];
					$query = "UPDATE bedding_type SET bedding_type_title=
					'$bedding_type_title' WHERE bedding_type_id=$edit_bedding_type_id";
					$result = mysqli_query($connect,$query);
					if(!$result){
						die('Query fail'.mysqli_error($connect));
					}else{
						echo "<script>alert('You have successfully Updated')</script>";
					}
				}

				?>
				<div class="form-group">
					<input type="text" class="form-control" name="bedding_type_title" value="<?php echo $bedding_type_title; ?>">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" value="Update Bedding Type" name="edit_bedding_type">
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
					<th>Bedding Type Title</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				$query = "SELECT * FROM bedding_type";
				$result = mysqli_query($connect,$query);
				while ($row = mysqli_fetch_assoc($result)) {
					$bedding_type_id =  $row['bedding_type_id'];
					$bedding_type_title = $row['bedding_type_title'];
		echo "<tr>";
			echo "<td>$bedding_type_id</td>";
			echo "<td>$bedding_type_title</td>";
			echo "<td><a href='setting.php?source=bedding_type&edit_bedding_type=$bedding_type_id'>Edit</a></td>";
			echo "<td><a href='setting.php?source=bedding_type&delete_bedding_type=$bedding_type_id'>Delete</a></td>";
		echo "</tr>";
				}
				?>
			</table>
		</div>
	</div>
</div>
<?php 
if(isset($_GET['delete_bedding_type'])){
	$delete_bedding_type_id = $_GET['delete_bedding_type'];

	$query = "DELETE FROM bedding_type WHERE bedding_type_id = $delete_bedding_type_id";
	$result = mysqli_query($connect,$query);
	if(!$result){
		die('Query fail'.mysqli_error($connect));
	}
	header('location:setting.php?source=bedding_type');
}

?>