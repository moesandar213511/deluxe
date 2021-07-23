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
                        Welcome To View Blog
                        <small>View All Blogs</small>
                    </h1>
                    <?php
                        if(isset($_GET['source'])) {
                            $source=$_GET['source'];
                        }else{
                            $source="";
                        }
                        switch ($source) {
                            case 'add_menu':
                                include_once 'include_admin/add_menu.php';
                                break;

                            case 'edit_menu':
                                include_once 'include_admin/edit_menu.php';
                                break;

                            default:
                                include_once 'include_admin/view_all_menu.php';
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