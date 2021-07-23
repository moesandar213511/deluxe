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
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        <?php
                            if(isset($_GET['source'])) {
                                $source=$_GET['source'];
                            }else{
                                $source="";
                            }
                            switch ($source) {
                                case 'add_room':
                                    include_once 'include_admin/add_room.php';
                                    break;

                                case 'view_all_room':
                                    include_once 'include_admin/view_all_room.php';
                                    break;

                                case 'edit_room':
                                    include_once 'include_admin/edit_room.php';
                                    break;

                                case 'room_type':
                                    include_once 'include_admin/room_type.php';
                                    break;

                                case 'bedding_type':
                                    include_once 'include_admin/bedding_type.php';
                                    break;

                                case 'view_detail':
                                    include_once 'include_admin/view_detail.php';
                                    break;

                                case 'add_detail':
                                    include_once 'include_admin/add_detail.php';
                                    break;
                                
                                default:
                                    include_once 'include_admin/room_status.php';
                                    break;
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
    