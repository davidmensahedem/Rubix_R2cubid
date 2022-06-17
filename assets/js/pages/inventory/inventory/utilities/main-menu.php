<div class="main-menu">
    <header class="header">
        <a href=".?action=home" class="logo"><i class="ico mdi mdi-cube-outline"></i>MyAdmin</a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
        <div class="user">
            <a href="#" class="avatar"><img src="assets/images/avatar-sm-5.jpg" alt=""><span
                    class="status online"></span></a>
            <h5 class="name"><a href="profile.html"><?php echo $_SESSION['admin_name']; ?></a></h5>
            <h5 class="position"><?php echo $_SESSION['admin_role']; ?></h5>
            <!-- /.name -->
            <div class="control-wrap js__drop_down">
                <i class="fa fa-caret-down js__drop_down_button"></i>
                <div class="control-list">
                    <!-- <div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profile</a></div>
                    <div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div> -->
                    <div class="control-item"><a href=".?action=logout"><i class="fa fa-sign-out"></i> Log out</a></div>
                </div>
                <!-- /.control-list -->
            </div>
            <!-- /.control-wrap -->
        </div>
        <!-- /.user -->
    </header>
    <!-- /.header -->
    <div class="content">

        <div class="navigation">
            <h5 class="title"></h5>
            <!-- /.title -->
            <ul class="menu js__accordion">

                <?php if( $_SESSION['admin_role'] == "Super Admin" ): ?>

                <li class="">
                    <a class="waves-effect" href=".?action=home"><i
                            class="menu-icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
                </li>
                <li class="">
                    <a class="waves-effect" href=".?action=create_admin_page"><i
                            class="menu-icon mdi mdi-account-plus"></i><span>Manage
                            Admin</span></a>
                </li>

                <li class="">
                    <a class="waves-effect" href=".?action=section_info_page"><i
                            class="menu-icon mdi mdi-information"></i><span>Sections Information</span></a>
                </li>
                <li class="">
                    <a class="waves-effect" href=".?action=section_view_page"><i
                            class="menu-icon mdi mdi-border-all"></i><span>Sections</span></a>
                </li>
                <li class="">
                    <a class="waves-effect" href=".?action=addsupplies"><i
                            class="menu-icon mdi mdi-border-inside"></i><span>Add
                            Supplies</span></a>
                </li>

                <?php else: ?>
                <li class="">
                    <a class="waves-effect" href=".?action=section_view_page"><i
                            class="menu-icon mdi mdi-border-all"></i><span>Sections</span></a>
                </li>
                <li class="">
                    <a class="waves-effect" href=".?action=submissions"><i
                            class="menu-icon mdi mdi-border-all"></i><span>Submissions</span></a>
                </li>


                <?php endif;  ?>

            </ul>
            <!-- /.menu js__accordion -->
            <h5 class="title"></h5>
            <!-- /.title -->

            <!-- /.menu js__accordion -->
        </div>
        <!-- /.navigation -->
    </div>
    <!-- /.content -->
</div>
<!-- /.main-menu -->