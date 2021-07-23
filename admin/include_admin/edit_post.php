<?php
	if(isset($_GET['p_id'])){
		$post_id=$_GET['p_id'];
		$sql="SELECT * FROM posts WHERE post_id=$post_id";
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
		}
	}



  if(isset($_POST['update_post'])){
	$post_title=$_POST['post_title'];
	$post_content=$_POST['post_content'];
	$post_date=date('d-m-y');
  	$post_image=basename($_FILES['post_image']['name']);
  	$post_image_tmp=$_FILES['post_image']['tmp_name'];

	move_uploaded_file($post_image_tmp,"../images/$post_image");
	if(empty($post_image)){
		$sql="SELECT * FROM posts WHERE post_id=$post_id";
		$result=mysqli_query($connect,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$post_image=$row['post_image'];
		}
	}

  	$sql="UPDATE posts SET post_title='$post_title', post_content='$post_content', post_image='$post_image' WHERE post_id=$post_id";
  	$result=mysqli_query($connect,$sql);
	if(!$result){
			die('Connection Failed'.mysqli_error($connect));
		}
		echo "<h4><i>Your post is successfully updated <a href='post.php'>View All posts</a></i></h4>";
	
  }
?>
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<div class="form-group">
		<label for=" " class="control-label col-md-2">post Title</label>
		<div class="col-md-10">
			<input type="text" id="" class="form-control" name="post_title" value="<?php echo $post_title; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for=" " class="control-label col-md-2">post Content</label>
		<div class="col-md-10">
			<textarea cols="30" rows="10" class="form-control" name="post_content" id="editor"><?php echo $post_content; ?>
    		</textarea>
		</div>
	    <script>
	        ClassicEditor
	            .create( document.querySelector( '#editor' ) )
	            .catch( error => {
	                console.error( error );
	            } );
	    </script>
	</div>
	<div class="form-group">
		<label for=" " class="control-label col-md-2">Post Image</label>
		<div class="col-md-10">
			<input type="file" id=" " name="post_image"><br>
			<img src="../images/<?php echo $post_image ?>" width="150px" height="100px" alt="">
		</div>
	</div>
	<div class="col-md-10 col-md-offset-2">
		<input type="submit" value="Update Post" name="update_post" class="btn btn-primary">
	</div>
	</div>
</form>
	