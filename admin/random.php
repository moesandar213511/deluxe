<?php include_once "include_admin/header_admin.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once "include_admin/navbar_admin.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        <!-- ================== Add Random ==================== -->
                        <div class="col-md-4">
                            <h3 class="text-center">Add Random</h3>
                            <?php 
                            if(isset($_POST['add_random'])){
                                $guest = $_POST['guest'];
                                $room = $_POST['room'];
                                $staff = $_POST['staff'];
                                $destination = $_POST['destination'];

                                $query = "INSERT INTO random(guest, room, staff, destination) VALUES ('$guest','$room','$staff','$destination')";
                                mysqli_query($connect,$query);
                            }
                            ?>
                            <form action="" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label for="" class="control-label col-md-3">Guest</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="guest">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label col-md-3">Room</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="room">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label col-md-3">Staff</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="staff">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label col-md-3">Destination</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="destination">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9 col-md-offset-3">
                                        <input type="submit" class="btn btn-info" value="Add Random" name="add_random">
                                    </div>
                                </div>
                            </form>


                            <?php 
                        if(isset($_GET['edit_random'])){
                            $edit_random = $_GET['edit_random'];
                            
                            $query = "SELECT * FROM random WHERE id = $edit_random";
                            $result = mysqli_query($connect,$query);
                            while($row=mysqli_fetch_assoc($result)){
                                $id = $row['id'];
                                $guest = $row['guest'];
                                $room = $row['room'];
                                $staff = $row['staff'];
                                $destination = $row['destination'];
                            }
                        ?>
                            <h3 class="text-center">Edit Random</h3>
                            <?php 
                            if(isset($_POST['edit_random'])){
                                $guest = $_POST['guest'];
                                $room = $_POST['room'];
                                $staff = $_POST['staff'];
                                $destination = $_POST['destination'];

                                $query = "UPDATE random SET guest='$guest', room='$room', staff='$staff', destination='$destination' WHERE id= $edit_random";
                                mysqli_query($connect,$query);
                            }
                            ?>
                            <form action="" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label for="" class="control-label col-md-3">Guest</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="guest"value="<?php echo $guest; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label col-md-3">Room</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="room" value="<?php echo $room; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label col-md-3">Staff</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="staff"value="<?php echo $staff; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label col-md-3">Destination</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="destination" value="<?php echo $destination; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9 col-md-offset-3">
                                        <input type="submit" class="btn btn-info" value="Add Random" name="edit_random">
                                    </div>
                                </div>
                            </form>

                        <?php
                        }
                        ?>
                        </div>

                        <!-- =============== View All Random =================== -->
                        <div class="col-md-8">
                            <h3 class="text-center">View All Random</h3>
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Guest</th>
                                    <th>Room</th>
                                    <th>Staff</th>
                                    <th>Destination</th>
                                    <th>Edit</th>
                                </tr>
                                
                                    <?php 
                                    $query = "SELECT * FROM random";
                                    $result = mysqli_query($connect,$query);
                                    while($row=mysqli_fetch_assoc($result)){
                                        $id = $row['id'];
                                        $guest = $row['guest'];
                                        $room = $row['room'];
                                        $staff = $row['staff'];
                                        $destination = $row['destination'];
                                    ?>
                                    <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $guest; ?></td>
                                    <td><?php echo $room; ?></td>
                                    <td><?php echo $staff; ?></td>
                                    <td><?php echo $destination; ?></td>
                                    <td><a href="random.php?edit_random=<?php echo $id; ?>">Edit</a></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                
                            </table>
                        </div>
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
    