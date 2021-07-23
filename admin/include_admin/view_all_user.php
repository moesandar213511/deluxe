<h3 class="text-center">View All Users</h3>
<hr style="border: 0.5px solid orange; width: 170px"><br>
<table class="table table-bordered">
	<tr>
		<th>Id</th>
		<th>User Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>User Role</th>
		<th>Admin</th>
		<th>Subscriber</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php
		$sql="SELECT * FROM users ORDER BY user_id DESC";
		$result=mysqli_query($connect,$sql);
		if(!$result){
			die('Connection Failed'.mysqli_error($connect));
		}
		while($row=mysqli_fetch_assoc($result)){
			$user_id = $row['user_id'];
			$user_name = $row['user_name'];
			$email = $row['email'];
			$password = $row['password'];
			$user_role = $row['user_role'];
	?>
	<tr>
		<td><?php echo $user_id; ?></td>
		<td><?php echo $user_name; ?></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $password; ?></td>
		<td><?php echo $user_role; ?></td>
		<td><a href="user.php?admin=<?php echo $user_id; ?>">Admin</a></td>
		<td><a href="user.php?subscriber=<?php echo $user_id; ?>">Subscriber</a></td>
		<td><a href="user.php?source=edit_user&edit_user=<?php echo $user_id; ?>">Edit</a></td>
		<td><a onclick="javaScript: return confirm('Are u sure you want to delete.')" href="user.php?delete_user=<?php echo $user_id; ?>">Delete</a></td>
	</tr>
	<?php
		}
	?>
</table>
<?php
	if(isset($_GET['delete_user'])){
		$user_id = $_GET['delete_user'];
		$query="DELETE FROM users WHERE user_id=$user_id";
        $result=mysqli_query($connect,$query);
        if(!$result){
             die('Connection Failed'.mysqli_error($connect));
        }
        header('Location:user.php');
	}

	if(isset($_GET['admin'])){
		$admin = $_GET['admin'];

		$query = "UPDATE users SET user_role='admin' WHERE user_id = $admin";
		mysqli_query($connect,$query);
		header('location:user.php');
	}
	

	if(isset($_GET['subscriber'])){
		$subscriber = $_GET['subscriber'];

		$query = "UPDATE users SET user_role='subscriber' WHERE user_id = $subscriber";
		mysqli_query($connect,$query);
		header('location:user.php');
	}
?>