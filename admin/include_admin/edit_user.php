<div class="container">
	<div class="row">
		<h3 class="text-center">Update User Here</h3>
		<div class="col-md-12">
<?php 
if(isset($_GET['edit_user']))
	$edit_user = $_GET['edit_user'];
	
	$query = "SELECT * FROM users WHERE user_id = $edit_user";
	$result = mysqli_query($connect,$query);
	while($row=mysqli_fetch_assoc($result)){
		$user_id = $row['user_id'];
		$user_name = $row['user_name'];
		$email = $row['email'];
		$password = $row['password'];
	}

	if(isset($_POST['edit_user'])){
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = "UPDATE users SET user_name='$user_name', email='$email', password='$password' WHERE user_id = $edit_user";
		$result = mysqli_query($connect,$query);
		if(!$result){
			die('Query fail'.mysqli_error($connect));
		}

		echo "Successfully Updated";
	}
?>
			<form action="" method="post" class="form-horizontal">
				<div class="form-group">
					<label for="" class="control-label col-md-2">User Name</label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="user_name" value="<?php echo $user_name; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-2">Email</label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-2">Password</label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-10 col-md-offset-2">
						<input type="submit" class="btn btn-warning" name="edit_user" value="Update">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>