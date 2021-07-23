<h3 class="text-center">View All Posts</h3>
<hr style="border: 0.5px solid orange; width: 170px"><br>
<table class="table table-bordered">
	<tr>
		<th>Post Id</th>
		<th>Post Title</th>
		<th>Post Content</th>
		<th>Post Image</th>
		<th>Post Date</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php
		$sql="SELECT * FROM posts ORDER BY post_id DESC";
		$result=mysqli_query($connect,$sql);
		if(!$result){
			die('Connection Failed'.mysqli_error($connect));
		}
		while($row=mysqli_fetch_assoc($result)){
			$post_id=$row['post_id'];
			$post_title=$row['post_title'];
			$post_content=$row['post_content'];
			$post_image=$row['post_image'];
			$post_date=$row['post_date'];

			$post_title = mysqli_real_escape_string($connect, $post_title);
			$post_content = mysqli_real_escape_string($connect, $post_content);
			$post_image = mysqli_real_escape_string($connect, $post_image);
			$post_date = mysqli_real_escape_string($connect, $post_date);
		
	?>
	<tr>
		<td><?php echo $post_id; ?></td>
		<td><?php echo $post_title; ?></td>
		<td>
			<?php 
				echo substr($post_content,0,50);
				echo strlen($post_content) > 50 ? '.....' : '';
			?>
		</td> 
		<td><img src="../images/<?php echo $post_image; ?>" width="150px" height="100px" alt=""></td>
		</td> 
		<td><?php echo $post_date; ?></td>
		<td><a href="post.php?source=edit_post&p_id=<?php echo $post_id; ?>">Edit</a></td>
		<td><a onclick="javaScript: return confirm('Are u sure you want to delete.')" href="post.php?delete=<?php echo $post_id; ?>">Delete</a></td>
	</tr>
	<?php
		}
	?>
</table>
<?php
	if(isset($_GET['delete'])){
		$post_id = $_GET['delete'];
		$sql="DELETE FROM posts WHERE post_id=$post_id";
        $result=mysqli_query($connect,$sql);
        if(!$result){
             die('Connection Failed'.mysqli_error($result));
        }
        header('Location:post.php');
	}
?>