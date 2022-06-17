<header id="page-topbar" class="ishorizontal-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href=".?action=home" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">Symox</span>
                        </span>
                    </a>

                    <a href=".?action=home" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">Symox</span>
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div class="topnav">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <?php if($_SESSION['admin_type'] == 'Marketer' ): ?>

                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle arrow-none" href=".?action=marketer_home_page" id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-tachometer"></i>
                                            <span data-key="t-dashboards">Dashboard</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle arrow-none" href=".?action=add_retailer_page" id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-tachometer"></i>
                                            <span data-key="t-dashboards">Add Retailer</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle arrow-none" href=".?action=add_order_page" id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-tachometer"></i>
                                            <span data-key="t-dashboards">Add Order</span>
                                        </a>
                                    </li>
                                <?php else: ?>

                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle arrow-none" href=".?action=home" id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-tachometer"></i>
                                            <span data-key="t-dashboards">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle arrow-none" href=".?action=create_marketer_page" id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-tachometer"></i>
                                            <span data-key="t-dashboards">Add Marketer</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle arrow-none" href=".?action=update_marketer_page" id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-tachometer"></i>
                                            <span data-key="t-dashboards">Update Marketer</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle arrow-none" href=".?action=delete_marketer_page" id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-tachometer"></i>
                                            <span data-key="t-dashboards">Delete Marketer</span>
                                        </a>
                                    </li>
                                    <div class="dropdown-divider"></div>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle arrow-none" href=".?action=update_retailer_page" id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-tachometer"></i>
                                            <span data-key="t-dashboards">Update Retailer</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle arrow-none" href=".?action=delete_retailer_page" id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-tachometer"></i>
                                            <span data-key="t-dashboards">Delete Retailer</span>
                                        </a>
                                    </li>

                                <?php endif; ?>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="d-flex">
                <!-- ========== Footer ============= -->
                <?php include 'includes/notification.php'; ?>
                <!-- ========== End Footer ============= -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if( get_marketer($_SESSION['admin_id'] ) != false): ?>
                            <?php if(get_marketer($_SESSION['admin_id'])['image'] != null): ?>
                                <img src="<?php echo get_marketer($_SESSION['admin_id'])['image'];  ?>" alt="" class="avatar-md rounded-circle img-thumbnail">
                            <?php else: ?>
                                <img src="assets/images/users/picture.png" height="200" alt="" class="avatar-md rounded-circle img-thumbnail">
                            <?php endif;?>
                        
                        <?php else: ?>

                            <?php if( get_administrator($_SESSION['admin_id']) != false): ?>
                                <?php if(get_administrator($_SESSION['admin_id'])['image'] != null): ?>
                                <img src="<?php echo get_administrator($_SESSION['admin_id'])['image'];  ?>" alt="" class="avatar-md rounded-circle img-thumbnail">
                                <?php else: ?>
                                    <!-- <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-sm" alt=""> -->
                                    <img src="assets/images/users/picture.png" height="200" alt="" class="avatar-md rounded-circle img-thumbnail">
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>


                        

                    </button>
                    <div class="dropdown-menu dropdown-menu-end pt-0">
                        <a class="dropdown-item" href=".?action=profile_page"><i class="bx bx-user-circle text-muted font-size-18 align-middle me-1"></i> <span class="align-middle">My Profile</span></a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href=".?action=logout"><i class="bx bx-log-out text-muted font-size-18 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
                    </div>
                </div>

            </div>
        </div>
    </header>