<?php ob_start(); ?>
<form action="" method="post">
<div class="col-md-3">
	<div class="form-group">
		<select class="form-control" name="bulk_option" >
			<option value="">--Select Option</option>
			<option value="clone">Clone</option>
			<!-- <option value="">Delete</option> -->
		</select>
	</div>
</div> 
<input type="submit" value="Apply" class="btn btn-primary" name="">
<br><br>
<table class="table table-bordered">
	<tr>
		<th><input type="checkbox" class="checkAllBox" ></th>
		<th>Blog Id</th>
		<th>Blog Title</th>
		<th>Blog Content</th>
		<th>Blog Image</th>
		<th>Blog Date</th>
	</tr>
	<?php
		$sql="SELECT * FROM blog ORDER BY post_id DESC ";
		$result=mysqli_query($con,$sql);
		confirm_query($result);
		while($row=mysqli_fetch_assoc($result)){
			$blog_id=escape($row['blog_id']);
			$blog_title=escape($row['blog_title']);
			$blog_content=escape($row['post_content']);
			$blog_image=basename($row['blog_image']);
			$blog_date=escape($row['blog_date']);
			$sql="INSERT INTO blog(blog_title, blog_content, blog_image, blog_date) VALUES ('$blog_title', 'blog_content', '$post_image', now())";
			$result=mysqli_query($con, $sql);
			confirm_query($result);
	?>
	<tr>
		<td><input type="checkbox" class="checkBoxes" name="checkBoxArray[]" value="<?php echo $post_id; ?>"></td>
		<td><?php echo $blog_id;  ?></td>
		<td><?php echo $blog_title;  ?></td>
		<td><?php echo $blog_content;  ?></td>
		<td><img src="../images/<?php echo $blog_image;  ?>" width="150px" height="100px"></td>
		<td><?php echo $post_date;  ?></td>

		<td><?php echo $post_tag; ?></td>
		<td><a href="post.php?source=edit_post&p_id=<?php echo $post_id; ?>">Edit</a></td>
		<td><a class="delete_post" href="post.php?delete=<?php echo $post_id; ?>">Delete</a></td>
	</tr>
	<?php
		}
	?>
	
</table>
</form>
<?php
	if(isset($_GET['delete'])){
		$post_id=$_GET['delete'];
		$sql="DELETE FROM posts WHERE post_id=$post_id";
		$result=mysqli_query($con,$sql);
		header('Location:post.php');
	}
?>