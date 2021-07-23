<?php 
	if(isset($_POST['create_post'])){
		$post_title=$_POST['post_title'];
		$post_content=$_POST['post_content'];
		$post_image=basename($_FILES['post_image']['name']);
		$post_image_tmp=$_FILES['post_image']['tmp_name'];
	
		move_uploaded_file($post_image_tmp, "../images/$post_image");
		$sql="INSERT INTO posts(post_title, post_content,  post_image, post_date) VALUES ('$post_title','$post_content','$post_image',now())";
		$result=mysqli_query($connect,$sql);
		if(!$result){
			die('Connection Failed'.mysqli_error($connect));
		}
		echo "<p>Your post is successfully created! <a href='post.php'>View posts</a></p>";
	}
?>
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<h3 class="text-center">Create Posts Here</h3>
	<hr style="border: 0.5px solid orange; width: 230px"><br>
	<div class="form-group">
		<label for="post_title" class="control-label col-md-2">post Title</label>
		<div class="col-md-10">
			<input type="text"  class="form-control" name="post_title">
		</div>
	</div>
	<div class="form-group">
		<label for="post_content" class="control-label col-md-2">post Content</label>
		<div class="col-md-10">
			<textarea  cols="20" rows="10" class="form-control" name="post_content"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="post_image" class="control-label col-md-2">post Image</label>
		<div class="col-md-10">
			<input type="file"  name="post_image">
		</div>
	</div>
	<div class="col-md-10 col-md-offset-2">
		<input type="submit" value="Create Post" name="create_post" class="btn btn-primary">
	</div>
</form>