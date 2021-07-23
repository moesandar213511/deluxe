<?php include_once "include_admin/header_admin.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once "include_admin/navbar_admin.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            I am Header
                            <small>Subheading</small>
                        </h1>
                    </div>
                    <!-- ============= View All Header ============= -->
                    <div class="col-md-6">
                        <h3>View All Header</h3>
                        <table class="table table-hover table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Menu</th>
                                <th>Edit</th>
                            </tr>
                           <?php 
                            $query = "SELECT * FROM header";
                            $result = mysqli_query($connect,$query);
                            while($row = mysqli_fetch_assoc($result)){
                                $header_id = $row['header_id'];
                                $header_image = $row['header_image'];
                                $header_menu = $row['header_menu'];

                            echo "<tr>";
                                echo "<td>$header_id</td>";
                                echo "<td><img src='../images/$header_image' width='100px'></td>";
                                echo "<td>$header_menu</td>";
                                echo "<td><a href='header.php?edit_header=$header_id'>Edit</a></td>";
                            echo "<tr>";

                                }
                            ?>
                        </table>
                    </div>
                    <div class="col-md-6">
                      <?php 
                        if(isset($_GET['edit_header'])){
                            $edit_header_id = $_GET['edit_header'];
                            $query = "SELECT * FROM header WHERE header_id = $edit_header_id";
                            $result = mysqli_query($connect,$query);
                            while($row = mysqli_fetch_assoc($result)){
                                $header_image = $row['header_image'];
                                $header_menu = $row['header_menu'];
                            }
                    ?>
                    <h3 class="text-center">Edit Header</h3>
                    <?php 
                    if(isset($_POST['edit_header'])){
                        $edit_header_id = $_GET['edit_header'];
                        $header_menu = $_POST['header_menu'];
                        $header_image = $_FILES['header_image']['name'];
                        $header_image_tmp = $_FILES['header_image']['tmp_name'];
                        move_uploaded_file($header_image_tmp, "../images/$header_image");

                        $query = "UPDATE header SET header_image='$header_image',header_menu='$header_menu' WHERE header_id = $edit_header_id ";
                        $result = mysqli_query($connect,$query);
                    }

                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" name="header_image"><br>
                            <img src="../images/<?php echo $header_image; ?>" alt="" width="90px" style="border: 1px solid red;">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="header_menu" value="<?php echo $header_menu; ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-danger" name="edit_header">
                        </div>
                    </form>
                    <?php
                        }
                       ?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php include_once "include_admin/footer_admin.php"; ?>
    