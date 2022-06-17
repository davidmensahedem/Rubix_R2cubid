<div class="vertical-menu">

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
        <span class="logo-lg">
            <img src="assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">Symox</span>
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-sm.svg" alt="" height="22">
        </span>
    </a>
</div>

<button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
    <i class="fa fa-fw fa-bars"></i>
</button>

<div data-simplebar class="sidebar-menu-scroll">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" data-key="t-menu">Menu</li>

                <?php if($_SESSION['admin_type'] == 'Administrator' ): ?>

                    <li>
                        <a href=".">
                            <i class="bx bx-tachometer icon nav-icon"></i>
                            <span class="menu-item" data-key="t-dashboards">Dashboard</span>
                            <!-- <span class="badge rounded-pill bg-success">5+</span> -->
                        </a>
                    </li>

                    <li class="menu-title" data-key="t-applications">Marketers</li>

                    <li>
                        <a href=".?action=create_marketer_page">
                            <i class="bx bx-calendar icon nav-icon"></i>
                            <span class="menu-item" data-key="t-calendar">Add Marketer</span>
                        </a>
                    </li>

                    <li>
                        <a href=".?action=update_marketer_page">
                            <i class="bx bx-calendar icon nav-icon"></i>
                            <span class="menu-item" data-key="t-calendar">Update Marketer</span>
                        </a>
                    </li>

                    <li>
                        <a href=".?action=delete_marketer_page">
                            <i class="bx bx-calendar icon nav-icon"></i>
                            <span class="menu-item" data-key="t-calendar">Delete Marketer</span>
                        </a>
                    </li>



                    <li class="menu-title" data-key="t-components">Retailers</li>





                    <li>
                        <a href=".?action=update_retailer_page">
                            <i class="bx bx-disc icon nav-icon"></i>
                            <span class="menu-item" data-key="t-extended">Update Retailer</span>
                        </a>
                        
                    </li>

                    <li>
                        <a href=".?action=delete_retailer_page">
                            <i class="bx bx-disc icon nav-icon"></i>
                            <span class="menu-item" data-key="t-extended">Delete Retailer</span>
                        </a>
                        
                    </li>




                <?php else: ?>

                    <li>
                        <a href=".?action=marketer_home_page">
                            <i class="bx bx-disc icon nav-icon"></i>
                            <span class="menu-item" data-key="t-extended">Dashboard</span>
                        </a>
                        
                    </li>
                    <li>
                        <a href=".?action=add_retailer_page">
                            <i class="bx bx-disc icon nav-icon"></i>
                            <span class="menu-item" data-key="t-extended">Add Retailer</span>
                        </a>
                        
                    </li>

                    <li>
                        <a href=".?action=add_order_page">
                            <i class="bx bx-disc icon nav-icon"></i>
                            <span class="menu-item" data-key="t-extended">Add Order</span>
                        </a>
                        
                    </li>

                <?php endif; ?>

        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>