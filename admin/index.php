<?php session_start(); ?>
<?php include_once "include_admin/header_admin.php"; ?>

    <div id="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 ">
<?php 
if(isset($_POST['login'])){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $user_name = mysqli_real_escape_string($connect,$user_name);
    $password = mysqli_real_escape_string($connect,$password);

    $query = "SELECT * FROM users WHERE user_name = '$user_name'";
    $result = mysqli_query($connect,$query);
    if(!$result){
        die('Query fail'.mysqli_error($connect));
    }
    while($row=mysqli_fetch_assoc($result)){
        $db_user_name = $row['user_name'];
        $db_email = $row['email'];
        $db_password = $row['password'];
        $db_user_role = $row['user_role'];
    }

    if($user_name!==$db_user_name && $password!==$db_password){
        header('location:index.php');
    }else if($user_name===$db_user_name && $password===$db_password){
        $_SESSION['user_name'] = $db_user_name;
        $_SESSION['email'] = $db_email;
        $_SESSION['password'] = $db_password;
        $_SESSION['user_role'] = $db_user_role;
        header('location:dashboard.php');
    }else{
        header('location:index.php');
    }

}

?>
            <form action="" method="post" class="col-md-4 table-bordered" style="margin:200px 330px; padding: 20px; border-radius: 10px">
                <h3 class="text-center" style="color: white">Log in Here</h3>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="please enter your name" name="user_name">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="please enter your password" name="password">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-default btn-block" value="Login" name="login">
                </div>
            </form>
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

