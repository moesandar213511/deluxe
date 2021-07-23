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
                            Welcome to Admin
                            <small>Contact Information</small>
                        </h1>
                    </div>

                    <div class="col-md-12">
                        <h3 class="text-center text-uppercase">Contact Information</h3><br>
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Website</th>
                                <th>Edit</th>
                            </tr>
                            <?php 
                            $query = "SELECT * FROM contact";
                            $result = mysqli_query($connect,$query);
                            if(!$result){
                                die('Query fail'.mysqli_error($connect));
                            }
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['id'];
                                $address = $row['address'];
                                $phone = $row['phone'];
                                $email = $row['email'];
                                $website = $row['website'];
                            }
                                echo "<tr>";
                                    echo "<td>$id</td>";
                                    echo "<td>$address</td>";
                                    echo "<td>$phone</td>";
                                    echo "<td>$email</td>";
                                    echo "<td>$website</td>";
                                    echo "<td><a href='contact.php?edit_contact=$id'>Edit</a></td>";

                                echo "</tr>";
                            ?>
                        </table>
                    <!-- ============= Update Contact =========== -->
                        
    <?php 
    if(isset($_GET['edit_contact'])){
        $edit_contact = $_GET['edit_contact'];
    ?>
    <br><br><br>
    <h3 class="text-center">Update Contact Information </h3><br>
    <?php 
    if(isset($_POST['update_contact'])){
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $website = $_POST['website'];

        $query = "UPDATE contact SET address='$address', phone='$phone', email='$email', website='$website' WHERE id = $edit_contact";
        $result = mysqli_query($connect,$query);
        header('location:contact.php');
    }

    ?>
    <form action="" method="post" class="form-horizontal col-md-10">
        <div class="form-group">
            <label for="" class="control-label col-md-2">Address</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-md-2">Phone</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-md-2">Email</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-md-2">Website</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="website" value="<?php echo $website; ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <input type="submit" class="btn btn-success" name="update_contact" value="Update">
            </div>
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
    