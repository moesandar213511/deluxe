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
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                            <?php
                            if(isset($_GET['source'])){
                                $source = $_GET['source'];
                                }else{
                                $source = '';
                            }

                            switch($source){
                                case 'admin':
                                include_once "include_admin/setting.php";
                                break;

                                case 'add_user':
                                include_once "include_admin/add_user.php";
                                break;
                                
                                case 'edit_user':
                                include_once "include_admin/edit_user.php";
                                break;
                                
                                default:
                                include_once "include_admin/view_all_user.php";
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
    