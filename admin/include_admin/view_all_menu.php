<h3 class="text-center">View All Menu</h3>
<hr style="border: 0.5px solid orange; width: 170px"><br>
<table class="table table-bordered">
	<tr>
		<th>Menu Id</th>
		<th>Menu Title</th>
		<th>Menu Image</th>
		<th>Menu Price</th>
		<th>Menu Description</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php
		$sql="SELECT * FROM menu ORDER BY menu_id DESC";
		$result=mysqli_query($connect,$sql);
		if(!$result){
			die('Connection Failed'.mysqli_error($connect));
		}

		while($row=mysqli_fetch_assoc($result)){
			$menu_id=$row['menu_id'];
			$menu_title=$row['menu_title'];
			$menu_image=$row['menu_image'];
			$menu_price=$row['menu_price'];
			$menu_description=$row['menu_description'];

			$menu_title = mysqli_real_escape_string($connect, $menu_title);
			$menu_image = mysqli_real_escape_string($connect, $menu_image);
			$menu_price = mysqli_real_escape_string($connect, $menu_price);
			$menu_description = mysqli_real_escape_string($connect, $menu_description);
		
	?>
	<tr>
		<td><?php echo $menu_id; ?></td>
		<td><?php echo $menu_title; ?></td>
		<td><img src="../images/<?php echo $menu_image; ?>" width="150px" height="100px"></td>
		</td> 
		<td><?php echo $menu_price; ?></td>
		<td>
			<?php 
				echo substr($menu_description,0,50);
				echo strlen($menu_description) > 50 ? '.....' : '';
			?>
		</td>
		<td><a href="menu.php?source=edit_menu&m_id=<?php echo $menu_id; ?>">Edit</a></td>

		<td><a href="menu.php?delete_menu=<?php echo $menu_id; ?>">Delete</a></td>
	</tr>
	<?php
		}
	?>
</table>

<?php
	if(isset($_GET['delete_menu'])){
		$menu_id = $_GET['delete_menu'];
		$sql="DELETE FROM menu WHERE menu_id=$menu_id";
        $result=mysqli_query($connect,$sql);
        if(!$result){
             die('Connection Failed'.mysqli_error($result));
        }
        header('location:menu.php');
	}
?>