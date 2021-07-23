<?php include_once "include_admin/header_admin.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once "include_admin/setting_nav.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Ye Myint Soe</small>
                        </h1>
                    </div>
                    <!-- ================ Book Now ========================== -->
                    <div class="col-md-5">
                        <h3 class="text-center">Book Now</h3>
                        <?php 
                        if(isset($_POST['submit'])){
                            $room_type_id = $_POST['room_type_id'];
                            $start_date = $_POST['start_date'];
                            $end_date = $_POST['end_date'];
                            $availability = $_POST['availability'];

                            $query = "INSERT INTO booking(room_type_id, start_date, end_date, availability) VALUES ($room_type_id,'$start_date','$end_date','$availability')";
                            $result = mysqli_query($connect,$query);
                            if(!$result){
                                die('Query fail'.mysqli_error($connect));
                            }
                        }
                        ?>
                        <form action="" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Room Type Id</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="room_type_id">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Start Date</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" name="start_date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">End Date</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" name="end_date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Availability</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="availability">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" class="btn btn-success" value="Submit" name="submit">
                                </div>
                            </div>
                        </form>

                        <!-- ================= Update Booking ================= -->

                        <?php 
                        if(isset($_GET['edit_booking'])){
                            $edit_booking = $_GET['edit_booking'];

                            $query = "SELECT * FROM booking WHERE booking_id = $edit_booking";
                            $result = mysqli_query($connect,$query);
                            while($row=mysqli_fetch_assoc($result)){
                                $booking_id=$row['booking_id'];
                                $room_type_id=$row['room_type_id'];
                                $start_date=$row['start_date'];
                                $end_date=$row['end_date'];
                                $availability=$row['availability'];
                            }
                        ?>
<br><br><br>
<h3 class="text-center">Update Booking Engine</h3><br>
<?php 
if(isset($_POST['update'])){
$edit_booking = $_GET['edit_booking'];
$room_type_id = $_POST['room_type_'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$availability = $_POST['availability'];
$query = "UPDATE booking SET room_type_id=$room_type_id, start_date='$start_date', end_date='$end_date', availability=$availability WHERE booking_id=$edit_booking";
$result = mysqli_query($connect,$query);
if(!$result){
    die('Query fail'.mysqli_error($connect));
}
header('location:booking.php');
}
?>
 <form action="" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="" class="control-label col-md-3">Room Type Id</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="room_type_id" value="<?php echo $room_type_id; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="control-label col-md-3">Start Date</label>
        <div class="col-md-9">
            <input type="date" class="form-control" name="start_date" value="<?php echo $start_date; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="control-label col-md-3">End Date</label>
        <div class="col-md-9">
            <input type="date" class="form-control" name="end_date" value="<?php echo $end_date; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="control-label col-md-3">Availability</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="availability" value="<?php echo $availability; ?>">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            <input type="submit" class="btn btn-success" value="Update" name="update">
        </div>
    </div>
</form>

                        <?php
                        }
                        ?>
                    </div>

            <!-- ================== View All Booking =============== -->
                    <div class="col-md-7">
                        <h3 class="text-center">View All Booking</h3>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Room Type</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Availability</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php 
                            $query = "SELECT * FROM booking";
                            $result = mysqli_query($connect,$query);
                            if(!$result){
                                die('Query fail'.mysqli_error($connect));
                            }
                            while($row=mysqli_fetch_assoc($result)){
                                $booking_id=$row['booking_id'];
                                $room_type_id=$row['room_type'];
                                $start_date=$row['start_date'];
                                $end_date=$row['end_date'];
                                $availability=$row['availability'];
                            ?>

                            <tr>
                                <td><?php echo $booking_id; ?></td>
                                <td><?php echo $room_type_id; ?></td>
                                <td><?php echo $start_date; ?></td>
                                <td><?php echo $end_date; ?></td>
                                <td><?php echo $availability; ?></td>
                                <td><a href="booking.php?edit_booking=<?php echo $booking_id; ?>" >Edit</a></td>
                                <td><a href="booking.php?delete_booking=<?php echo $booking_id; ?>" >Delete</a></td>
                            </tr>

                            <?php
                            }
                            ?>
                        </table>
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

    <?php 
if(isset($_GET['delete_booking'])){
    $delete_booking = $_GET['delete_booking'];

    $query = "DELETE FROM booking WHERE booking_id = $delete_booking";
    $result = mysqli_query($connect,$query);
    header('location:booking.php');
}
    ?>
    