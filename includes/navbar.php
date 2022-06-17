<header id="page-topbar" class="isvertical-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">Symox</span>
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">Symox</span>
                        </span>
                    </a>
        
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

    
            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if( get_marketer($_SESSION['admin_id'] ) != false): ?>
                            <?php if(get_marketer($_SESSION['admin_id'])['image'] != null): ?>
                                <img src="<?php echo get_marketer($_SESSION['admin_id'])['image'];  ?>" alt="" class="header-profile-user rounded-circle">
                            <?php else: ?>
                                <img src="assets/images/users/picture.png" height="200" alt="" class="header-profile-user rounded-circle">
                            <?php endif;?>
                        
                        <?php else: ?>

                            <?php if( get_administrator($_SESSION['admin_id']) != false): ?>
                                <?php if(get_administrator($_SESSION['admin_id'])['image'] != null): ?>
                                <img src="<?php echo get_administrator($_SESSION['admin_id'])['image'];  ?>" alt="" class="header-profile-user rounded-circle">
                                <?php else: ?>
                                    <!-- <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-sm" alt=""> -->
                                    <img src="assets/images/users/picture.png" height="200" alt="" class="header-profile-user rounded-circle">
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
                <!-- ========== Footer ============= -->
                <?php include 'includes/notification.php'; ?>
                <!-- ========== End Footer ============= -->
                
            </div>
        </div>
    </header>