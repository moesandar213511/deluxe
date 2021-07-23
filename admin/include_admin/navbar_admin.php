<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">DELUXE</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               <li>
                    <a href="../index.php"> Client Site</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['user_name'] ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="setting.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="include_admin/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="header.php"><i class="fa fa-fw fa-dashboard"></i>Header</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#restaurant"><i class="fa fa-fw fa-arrows-v"></i> Restaurant <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="restaurant" class="collapse">
                            <li>
                                <a href="restaurant.php">Restaurant Header</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#menu">
                                    Restaurant Menu <i class="fa fa-fw fa-caret-down"></i>
                                </a>
                                <ul id="menu" class="collapse">
                                    <li style="list-style-type: none;">
                                        <a href="menu.php" style="text-decoration: none;">View All Menu
                                        </a>
                                    </li>
                                    <li style="list-style-type: none;">
                                        <a href="menu.php?source=add_menu" style="text-decoration: none;">
                                        Add New Menu
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#post"><i class="fa fa-fw fa-arrows-v"></i> Post <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="post" class="collapse">
                            <li>
                                <a href="post.php">View All Posts</a>
                            </li>
                            <li>
                                <a href="post.php?source=add_post">Add New Post</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#gallery"><i class="fa fa-fw fa-arrows-v"></i> Gallery <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="gallery" class="collapse">
                            <li>
                                <a href="gallery.php">Home / Room / Restaurant</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-user"></i> User <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="user" class="collapse">
                            <li>
                                <a href="user.php">View All Users</a>
                            </li>
                            <li>
                                <a href="user.php?source=add_user">Add New User</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.php"><i class="fa fa-fw fa-user"></i> Contact</a>
                    </li>
                    <li>
                        <a href="random.php"><i class="fa fa-fw fa-table"></i> Random</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>