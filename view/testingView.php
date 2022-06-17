
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/symox-php/layouts/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 May 2022 16:19:33 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Symox - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-layout="vertical" data-layout-mode="dark" data-topbar="dark" data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">
            
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

                        <!-- Search -->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search"></span>
                            </div>
                        </form>
            
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block d-lg-none">
                            <button type="button" class="btn header-item"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-sm" data-feather="search"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                                <form class="p-2">
                                    <div class="search-box">
                                        <div class="position-relative">
                                            <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                            <i class="mdi mdi-magnify search-icon"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block language-switch">
                            <button type="button" class="btn header-item"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-sm" data-feather="bell"></i>
                            <span class="noti-dot bg-danger rounded-pill">3</span>
                        </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-15"> Notifications </h5>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> Mark all as read</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 250px;">
                                    <h6 class="dropdown-header bg-light">New</h6>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-3.jpg"
                                                class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Justin Verduzco</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Your task changed an issue from "In Progress" to <span class="badge badge-soft-success">Review</span></p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-3">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="bx bx-shopping-bag"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">New order has been placed</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Open the order confirmation or shipment confirmation.</p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 5 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <h6 class="dropdown-header bg-light">Earlier</h6>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-3">
                                                    <span class="avatar-title bg-soft-success text-success rounded-circle font-size-16">
                                                        <i class="bx bx-cart"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Here is somthing that you might light like to know.</p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-4.jpg"
                                                    class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Yay ! Everything worked!</p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 3 days ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                        <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item light-dark" id="mode-setting-btn">
                                <i data-feather="moon" class="icon-sm layout-mode-dark"></i>
                                <i data-feather="sun" class="icon-sm layout-mode-light"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <a class="dropdown-item" href="contacts-profile.html"><i class='bx bx-user-circle text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">My Account</span></a>
                                <a class="dropdown-item" href="apps-chat.html"><i class='bx bx-chat text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">Chat</span></a>
                                <a class="dropdown-item" href="pages-faqs.html"><i class='bx bx-buoy text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">Support</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item d-flex align-items-center" href="#"><i class='bx bx-cog text-muted font-size-18 align-middle me-1'></i> <span class="align-middle me-3">Settings</span><span class="badge badge-soft-success ms-auto">New</span></a>
                                <a class="dropdown-item" href="auth-lock-screen.html"><i class='bx bx-lock text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">Lock screen</span></a>
                                <a class="dropdown-item" href="auth-logout.html"><i class='bx bx-log-out text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
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

                            <li>
                                <a href="index.html">
                                    <i class="bx bx-tachometer icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-dashboards">Dashboard</span>
                                    <span class="badge rounded-pill bg-success">5+</span>
                                </a>
                            </li>

                            <li class="menu-title" data-key="t-applications">Applications</li>

                            <li>
                                <a href="apps-calendar.html">
                                    <i class="bx bx-calendar icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-calendar">Calendar</span>
                                </a>
                            </li>

                            <li>
                                <a href="apps-chat.html">
                                    <i class="bx bx-chat icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-chat">Chat</span>
                                    <span class="badge rounded-pill bg-danger" data-key="t-hot">Hot</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-envelope icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-email">Email</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html" data-key="t-inbox">Inbox</a></li>
                                    <li><a href="email-read.html" data-key="t-read-email">Read Email</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-store icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-ecommerce">Ecommerce</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ecommerce-products.html" data-key="t-products">Products</a></li>
                                    <li><a href="ecommerce-product-detail.html" data-key="t-product-detail">Product Detail</a></li>
                                    <li><a href="ecommerce-orders.html" data-key="t-orders">Orders</a></li>
                                    <li><a href="ecommerce-customers.html" data-key="t-customers">Customers</a></li>
                                    <li><a href="ecommerce-cart.html" data-key="t-cart">Cart</a></li>
                                    <li><a href="ecommerce-checkout.html" data-key="t-checkout">Checkout</a></li>
                                    <li><a href="ecommerce-shops.html" data-key="t-shops">Shops</a></li>
                                    <li><a href="ecommerce-add-product.html" data-key="t-add-product">Add Product</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-receipt icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-invoices">Invoices</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="invoices-list.html" data-key="t-invoice-list">Invoice List</a></li>
                                    <li><a href="invoices-detail.html" data-key="t-invoice-detail">Invoice Detail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bxs-user-detail icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-contacts">Contacts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="contacts-grid.html" data-key="t-user-grid">User Grid</a></li>
                                    <li><a href="contacts-list.html" data-key="t-user-list">User List</a></li>
                                    <li><a href="contacts-profile.html" data-key="t-user-settings">User Settings</a></li>
                                </ul>
                            </li>

                            <li class="menu-title" data-key="t-pages">Pages</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-user-circle icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-authentication">Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="auth-login.html" data-key="t-login">Login</a></li>
                                    <li><a href="auth-register.html" data-key="t-register">Register</a></li>
                                    <li><a href="auth-recoverpw.html" data-key="t-recover-password">Recover Password</a></li>
                                    <li><a href="auth-lock-screen.html" data-key="t-lock-screen">Lock Screen</a></li>
                                    <li><a href="auth-logout.html" data-key="t-logout">Log Out</a></li>
                                    <li><a href="auth-confirm-mail.html" data-key="t-confirm-mail">Confirm Mail</a></li>
                                    <li><a href="auth-email-verification.html" data-key="t-email-verification">Email Verification</a></li>
                                    <li><a href="auth-two-step-verification.html" data-key="t-two-step-verification">Two Step Verification</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-file icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-utility">Utility</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
                                    <li><a href="pages-maintenance.html" data-key="t-maintenance">Maintenance</a></li>
                                    <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Coming Soon</a></li>
                                    <li><a href="pages-timeline.html" data-key="t-timeline">Timeline</a></li>
                                    <li><a href="pages-faqs.html" data-key="t-faqs">FAQs</a></li>
                                    <li><a href="pages-pricing.html" data-key="t-pricing">Pricing</a></li>
                                    <li><a href="pages-404.html" data-key="t-error-404">Error 404</a></li>
                                    <li><a href="pages-500.html" data-key="t-error-500">Error 500</a></li>
                                </ul>
                            </li>
                
                            <li>
                                <a href="layouts-vertical.html">
                                    <i class="bx bx-layout icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-vertical">Vertical</span>
                                </a>
                            </li>

                            <li class="menu-title" data-key="t-components">Components</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bxl-bootstrap icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-bootstrap">Bootstrap</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html" data-key="t-alerts">Alerts</a></li>
                                    <li><a href="ui-buttons.html" data-key="t-buttons">Buttons</a></li>
                                    <li><a href="ui-cards.html" data-key="t-cards">Cards</a></li>
                                    <li><a href="ui-carousel.html" data-key="t-carousel">Carousel</a></li>
                                    <li><a href="ui-dropdowns.html" data-key="t-dropdowns">Dropdowns</a></li>
                                    <li><a href="ui-grid.html" data-key="t-grid">Grid</a></li>
                                    <li><a href="ui-images.html" data-key="t-images">Images</a></li>
                                    <li><a href="ui-modals.html" data-key="t-modals">Modals</a></li>
                                    <li><a href="ui-offcanvas.html" data-key="t-offcanvas">Offcanvas</a></li>
                                    <li><a href="ui-placeholders.html" data-key="t-placeholders">Placeholders</a></li>
                                    <li><a href="ui-progressbars.html" data-key="t-progress-bars">Progress Bars</a></li>
                                    <li><a href="ui-tabs-accordions.html" data-key="t-tabs-accordions">Tabs &amp; Accordions</a></li>
                                    <li><a href="ui-typography.html" data-key="t-typography">Typography</a></li>
                                    <li><a href="ui-video.html" data-key="t-video">Video</a></li>
                                    <li><a href="ui-general.html" data-key="t-general">General</a></li>
                                    <li><a href="ui-colors.html" data-key="t-colors">Colors</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-disc icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-extended">Extended</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="extended-lightbox.html" data-key="t-lightbox">Lightbox</a></li>
                                    <li><a href="extended-rangeslider.html" data-key="t-range-slider">Range Slider</a></li>
                                    <li><a href="extended-sweet-alert.html" data-key="t-sweet-alert">SweetAlert 2</a></li>
                                    <li><a href="extended-rating.html" data-key="t-rating">Rating</a></li>
                                    <li><a href="extended-notifications.html" data-key="t-notifications">Notifications</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bxs-eraser icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-forms">Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="form-elements.html" data-key="t-basic-elements">Basic Elements</a></li>
                                    <li><a href="form-validation.html"data-key="t-validation">Validation</a></li>
                                    <li><a href="form-advanced.html"data-key="t-advanced-plugins">Advanced Plugins</a></li>
                                    <li><a href="form-editors.html"data-key="t-editors">Editors</a></li>
                                    <li><a href="form-uploads.html"data-key="t-file-upload">File Upload</a></li>
                                    <li><a href="form-wizard.html"data-key="t-wizard">Wizard</a></li>
                                    <li><a href="form-mask.html" data-key="t-mask">Mask</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-list-ul icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-tables">Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tables-basic.html" data-key="t-bootstrap-basic">Bootstrap Basic</a></li>
                                    <li><a href="tables-advanced.html" data-key="t-advanced-tables">Advance Tables</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bxs-bar-chart-alt-2 icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-charts">Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="charts-apex.html" data-key="t-apex-charts">Apex</a></li>
                                    <li><a href="charts-chartjs.html" data-key="t-chartjs-charts">Chartjs</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-aperture icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-icons">Icons</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="icons-feather.html" data-key="t-feather">Feather</a></li>
                                    <li><a href="icons-boxicons.html" data-key="t-boxicons">Boxicons</a></li>
                                    <li><a href="icons-materialdesign.html" data-key="t-material-design">Material Design</a></li>
                                    <li><a href="icons-dripicons.html" data-key="t-dripicons">Dripicons</a></li>
                                    <li><a href="icons-fontawesome.html" data-key="t-font-awesome">Font awesome</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-map icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-maps">Maps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="maps-google.html" data-key="t-google">Google</a></li>
                                    <li><a href="maps-vector.html" data-key="t-vector">Vector</a></li>
                                    <li><a href="maps-leaflet.html" data-key="t-leaflet">Leaflet</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-share-alt icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-multi-level">Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);" data-key="t-level-1.1">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow" data-key="t-level-1.2">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);" data-key="t-level-2.1">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);" data-key="t-level-2.2">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            <header id="page-topbar" class="ishorizontal-topbar">
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

                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <div class="topnav">
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
        
                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-toggle arrow-none" href="index.html" id="topnav-dashboard" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-tachometer'></i>
                                                <span data-key="t-dashboards">Dashboard</span>
                                            </a>
                                        </li>
        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                                <i class='bx bx-grid-alt'></i>
                                                <span data-key="t-apps">Apps</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-pages">
    
                                                <a href="apps-calendar.html" class="dropdown-item" data-key="t-calendar">Calendar</a>
                                                <a href="apps-chat.html" class="dropdown-item" data-key="t-chat">Chat</a>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                                        role="button">
                                                        <span data-key="t-email">Email</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                        <a href="email-inbox.html" class="dropdown-item" data-key="t-inbox">Inbox</a>
                                                        <a href="email-read.html" class="dropdown-item" data-key="t-read-email">Read Email</a>
                                                    </div>
                                                </div>

                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                                        role="button">
                                                        Ecommerce <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                                        <a href="ecommerce-products.html" class="dropdown-item" data-key="t-products">Products</a>
                                                        <a href="ecommerce-product-detail.html" class="dropdown-item" data-key="t-product-detail">Product Detail</a>
                                                        <a href="ecommerce-orders.html" class="dropdown-item" data-key="t-orders">Orders</a>
                                                        <a href="ecommerce-customers.html" class="dropdown-item" data-key="t-customers">Customers</a>
                                                        <a href="ecommerce-cart.html" class="dropdown-item" data-key="t-cart">Cart</a>
                                                        <a href="ecommerce-checkout.html" class="dropdown-item" data-key="t-checkout">Checkout</a>
                                                        <a href="ecommerce-shops.html" class="dropdown-item" data-key="t-shops">Shops</a>
                                                        <a href="ecommerce-add-product.html" class="dropdown-item" data-key="t-add-product">Add Product</a>
                                                    </div>
                                                </div>

                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoice"
                                                        role="button"><span data-key="t-invoices">Invoices</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-invoice">
                                                        <a href="invoices-list.html" class="dropdown-item" data-key="t-invoice-list">Invoice List</a>
                                                        <a href="invoices-detail.html" class="dropdown-item" data-key="t-invoice-detail">Invoice Detail</a>
                                                    </div>
                                                </div>
    
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                                        role="button">
                                                       <span data-key="t-contacts">Contacts</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                                        <a href="contacts-grid.html" class="dropdown-item" data-key="t-user-grid">User Grid</a>
                                                        <a href="contacts-list.html" class="dropdown-item" data-key="t-user-list">User List</a>
                                                        <a href="contacts-profile.html" class="dropdown-item" data-key="t-user-settings">User Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bxl-bootstrap'></i>
                                               <span data-key="t-bootstrap">Bootstrap</span> <div class="arrow-down"></div>
                                            </a>
    
                                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl" aria-labelledby="topnav-uielement">
                                                <div class="ps-2 p-lg-0">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div>
                                                                <div class="menu-title">Components</div>
                                                                <div class="row g-0">
                                                                    <div class="col-lg-4">
                                                                        <div>
                                                                            <a href="ui-alerts.html" class="dropdown-item" data-key="t-alerts">Alerts</a>
                                                                            <a href="ui-buttons.html" class="dropdown-item" data-key="t-buttons">Buttons</a>
                                                                            <a href="ui-cards.html" class="dropdown-item" data-key="t-cards">Cards</a>
                                                                            <a href="ui-carousel.html" class="dropdown-item" data-key="t-carousel">Carousel</a>
                                                                            <a href="ui-dropdowns.html" class="dropdown-item" data-key="t-dropdowns">Dropdowns</a>
                                                                            <a href="ui-grid.html" class="dropdown-item" data-key="t-grid">Grid</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div>
                                                                            <a href="ui-images.html" class="dropdown-item" data-key="t-images">Images</a>
                                                                            <a href="ui-modals.html" class="dropdown-item" data-key="t-modals">Modals</a>
                                                                            <a href="ui-offcanvas.html" class="dropdown-item" data-key="t-offcanvas">Offcanvas</a>
                                                                            <a href="ui-placeholders.html" class="dropdown-item" data-key="t-placeholders">Placeholders</a>
                                                                            <a href="ui-progressbars.html" class="dropdown-item" data-key="t-progress-bars">Progress Bars</a>
                                                                            <a href="ui-tabs-accordions.html" class="dropdown-item" data-key="t-tabs-accordions">Tabs & Accordions</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <a href="ui-typography.html" class="dropdown-item" data-key="t-typography">Typography</a>
                                                                        <a href="ui-video.html" class="dropdown-item" data-key="t-video">Video</a>
                                                                        <a href="ui-general.html" class="dropdown-item" data-key="t-general">General</a>
                                                                        <a href="ui-colors.html" class="dropdown-item" data-key="t-colors">Colors</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                                            >
                                                <i class='bx bx-layer' ></i>
                                                <span data-key="t-components">Components</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-components">
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-extended"
                                                        role="button">
                                                        <span data-key="t-extendeds">Extended</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-form">
                                                        <a href="extended-lightbox.html" class="dropdown-item" data-key="t-lightbox">Lightbox</a>
                                                        <a href="extended-rangeslider.html" class="dropdown-item" data-key="t-range-slider">Range Slider</a>
                                                        <a href="extended-sweet-alert.html" class="dropdown-item" data-key="t-sweet-alert">SweetAlert 2</a>
                                                        <a href="extended-rating.html" class="dropdown-item" data-key="t-rating">Rating</a>
                                                        <a href="extended-notifications.html" class="dropdown-item" data-key="t-notifications">Notifications</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                                        role="button">
                                                        <span data-key="t-forms">Forms</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-form">
                                                        <a href="form-elements.html" class="dropdown-item"  data-key="t-basic-elements">Basic Elements</a>
                                                        <a href="form-validation.html" class="dropdown-item" data-key="t-validation">Validation</a>
                                                        <a href="form-advanced.html" class="dropdown-item" data-key="t-advanced-plugins">Advanced Plugins</a>
                                                        <a href="form-editors.html" class="dropdown-item" data-key="t-editors">Editors</a>
                                                        <a href="form-uploads.html" class="dropdown-item" data-key="t-file-upload">File Upload</a>
                                                        <a href="form-wizard.html" class="dropdown-item" data-key="t-wizard">Wizard</a>
                                                        <a href="form-mask.html" class="dropdown-item"  data-key="t-mask">Mask</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                                        role="button">
                                                        <span data-key="t-tables">Tables</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-table">
                                                        <a href="tables-basic.html" class="dropdown-item" data-key="t-bootstrap-basic">Bootstrap Basic</a>
                                                        <a href="tables-advanced.html" class="dropdown-item" data-key="t-advanced-tables">Advance Tables</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                                        role="button">
                                                        <span data-key="t-charts">Charts</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                                        <a href="charts-apex.html" class="dropdown-item" data-key="t-apex-charts">Apex Charts</a>
                                                        <a href="charts-chartjs.html" class="dropdown-item" data-key="t-chartjs-charts">Chartjs</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                                        role="button">
                                                        <span data-key="t-icons">Icons</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                                        <a href="icons-feather.html" class="dropdown-item" data-key="t-feather">Feather</a>
                                                        <a href="icons-boxicons.html" class="dropdown-item" data-key="t-boxicons">Boxicons</a>
                                                        <a href="icons-materialdesign.html" class="dropdown-item" data-key="t-material-design">Material Design</a>
                                                        <a href="icons-dripicons.html" class="dropdown-item" data-key="t-dripicons">Dripicons</a>
                                                        <a href="icons-fontawesome.html" class="dropdown-item" data-key="t-font-awesome">Font awesome</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                                        role="button">
                                                        <span data-key="t-maps">Maps</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-map">
                                                        <a href="maps-google.html" class="dropdown-item" data-key="t-google">Google</a>
                                                        <a href="maps-vector.html" class="dropdown-item" data-key="t-vector">Vector</a>
                                                        <a href="maps-leaflet.html" class="dropdown-item" data-key="t-leaflet">Leaflet</a>
                                                    </div>
                                                </div>
                                            </div>
                               
                                        </li>
        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                                            <i class='bx bx-file'></i>
                                                <span data-key="t-pages">Pages</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-more">
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                                        role="button">
                                                        <span data-key="t-authentication">Authentication</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                                        <a href="auth-login.html" class="dropdown-item" data-key="t-login">Login</a>
                                                        <a href="auth-register.html" class="dropdown-item" data-key="t-register">Register</a>
                                                        <a href="auth-recoverpw.html" class="dropdown-item" data-key="t-recover-password">Recover Password</a>
                                                        <a href="auth-lock-screen.html" class="dropdown-item" data-key="t-lock-screen">Lock Screen</a>
                                                        <a href="auth-logout.html" class="dropdown-item" data-key="t-logout">Log Out</a>
                                                        <a href="auth-confirm-mail.html" class="dropdown-item" data-key="t-confirm-mail">Confirm Mail</a>
                                                        <a href="auth-email-verification.html" class="dropdown-item" data-key="t-email-verification">Email Verification</a>
                                                        <a href="auth-two-step-verification.html" class="dropdown-item" data-key="t-two-step-verification">Two Step Verification</a>
                                                    </div>
                                                </div>

                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                                        role="button">
                                                        <span data-key="t-utility">Utility</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                                        <a href="pages-starter.html" class="dropdown-item" data-key="t-starter-page">Starter Page</a>
                                                        <a href="pages-maintenance.html" class="dropdown-item" data-key="t-maintenance">Maintenance</a>
                                                        <a href="pages-comingsoon.html" class="dropdown-item" data-key="t-coming-soon">Coming Soon</a>
                                                        <a href="pages-timeline.html" class="dropdown-item" data-key="t-timeline">Timeline</a>
                                                        <a href="pages-faqs.html" class="dropdown-item" data-key="t-faqs">FAQs</a>
                                                        <a href="pages-pricing.html" class="dropdown-item" data-key="t-pricing">Pricing</a>
                                                        <a href="pages-404.html" class="dropdown-item" data-key="t-error-404">Error 404</a>
                                                        <a href="pages-500.html" class="dropdown-item" data-key="t-error-500">Error 500</a>
                                                    </div>
                                                </div>

                                                <a href="layouts-vertical.html" class="dropdown-item" data-key="t-vertical">Vertical</a>
                                            </div>
                                        </li>
        
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-sm" data-feather="search"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                                <form class="p-3">
                                    <div class="search-box">
                                        <div class="position-relative">
                                            <input type="text" class="form-control rounded" placeholder="Search here...">
                                            <i class="mdi mdi-magnify search-icon"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="dropdown d-inline-block language-switch">
                            <button type="button" class="btn header-item"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>
            
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-sm" data-feather="bell"></i>
                                <span class="noti-dot bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-15"> Notifications </h5>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0);" class="small"> Mark all as read</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 250px;">
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start bg-light">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-3.jpg"
                                                class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Justin Verduzco</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Your task changed an issue from "In Progress" to <span class="badge badge-soft-success">Review</span></p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-3">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="bx bx-shopping-bag"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">New order has been placed</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Open the order confirmation or shipment confirmation.</p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 5 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-3">
                                                    <span class="avatar-title bg-soft-success text-success rounded-circle font-size-16">
                                                        <i class="bx bx-cart"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Here is somthing that you might light like to know.</p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-4.jpg"
                                                    class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Yay ! Everything worked!</p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 3 days ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-decoration-underline fw-bold text-center" href="javascript:void(0)">
                                        <span>View All <i class='bx bx-right-arrow-alt'></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item light-dark" id="mode-setting-btn">
                                <i data-feather="moon" class="icon-sm layout-mode-dark "></i>
                                <i data-feather="sun" class="icon-sm layout-mode-light"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <a class="dropdown-item" href="contacts-profile.html"><i class='bx bx-user-circle text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">My Account</span></a>
                                <a class="dropdown-item" href="apps-chat.html"><i class='bx bx-chat text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">Chat</span></a>
                                <a class="dropdown-item" href="pages-faqs.html"><i class='bx bx-buoy text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">Support</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item d-flex align-items-center" href="#"><i class='bx bx-cog text-muted font-size-18 align-middle me-1'></i> <span class="align-middle me-3">Settings</span><span class="badge badge-soft-success ms-auto">New</span></a>
                                <a class="dropdown-item" href="auth-lock-screen.html"><i class='bx bx-lock text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">Lock screen</span></a>
                                <a class="dropdown-item" href="auth-logout.html"><i class='bx bx-log-out text-muted font-size-18 align-middle me-1'></i> <span class="align-middle">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
    


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Welcome !</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Symox</a></li>
                                            <li class="breadcrumb-item active">Welcome !</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <div class="text-center py-3">
                                            <ul class="bg-bubbles ps-0">
                                                <li><i class="bx bx-grid-alt font-size-24"></i></li>
                                                <li><i class="bx bx-tachometer font-size-24"></i></li>
                                                <li><i class="bx bx-store font-size-24"></i></li>
                                                <li><i class="bx bx-cube font-size-24"></i></li>
                                                <li><i class="bx bx-cylinder font-size-24"></i></li>
                                                <li><i class="bx bx-command font-size-24"></i></li>
                                                <li><i class="bx bx-hourglass font-size-24"></i></li>
                                                <li><i class="bx bx-pie-chart-alt font-size-24"></i></li>
                                                <li><i class="bx bx-coffee font-size-24"></i></li>
                                                <li><i class="bx bx-polygon font-size-24"></i></li>
                                            </ul>
                                           <div class="main-wid position-relative">
                                                <h3 class="text-white">Symox Dashboard</h3>

                                                <h3 class="text-white mb-0"> Welcome Back, Peter Kelsey!</h3>

                                                <p class="text-white-50 px-4 mt-4">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien libero tincidunt.</p>
                                                
                                                <div class="mt-4 pt-2 mb-2">
                                                    <a href="#" class="btn btn-success">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="avatar">
                                                    <span class="avatar-title bg-soft-primary rounded">
                                                        <i class="mdi mdi-shopping-outline text-primary font-size-24"></i>
                                                    </span>
                                                </div>
                                                <p class="text-muted mt-4 mb-0">Today Orders</p>
                                                <h4 class="mt-1 mb-0">3,89,658 <sup class="text-success fw-medium font-size-14"><i class="mdi mdi-arrow-down"></i> 10%</sup></h4>
                                                <div>
                                                    <div class="py-3 my-1">
                                                        <div id="mini-1" data-colors='["#3980c0"]'></div>
                                                    </div>
                                                    <ul class="list-inline d-flex justify-content-between justify-content-center mb-0">
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Day</a></li>
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Week</a></li>
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Month</a></li>
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Year</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="avatar">
                                                    <span class="avatar-title bg-soft-success rounded">
                                                        <i class="mdi mdi-eye-outline text-success font-size-24"></i>
                                                    </span>
                                                </div>
                                                <p class="text-muted mt-4 mb-0">Today Visitor</p>
                                                <h4 class="mt-1 mb-0">1,648,29 <sup class="text-danger fw-medium font-size-14"><i class="mdi mdi-arrow-down"></i> 19%</sup></h4>
                                                <div>
                                                    <div class="py-3 my-1">
                                                        <div id="mini-2" data-colors='["#33a186"]'></div>
                                                    </div>
                                                    <ul class="list-inline d-flex justify-content-between justify-content-center mb-0">
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Day</a></li>
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Week</a></li>
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Month</a></li>
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Year</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="avatar">
                                                    <span class="avatar-title bg-soft-primary rounded">
                                                        <i class="mdi mdi-rocket-outline text-primary font-size-24"></i>
                                                    </span>
                                                </div>
                                                <p class="text-muted mt-4 mb-0">Total Expense</p>
                                                <h4 class="mt-1 mb-0">6,48,249 <sup class="text-success fw-medium font-size-14"><i class="mdi mdi-arrow-down"></i> 22%</sup></h4>
                                                <div>
                                                    <div class="py-3 my-1">
                                                        <div id="mini-3" data-colors='["#3980c0"]'></div>
                                                    </div>
                                                    <ul class="list-inline d-flex justify-content-between justify-content-center mb-0">
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Day</a></li>
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Week</a></li>
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Month</a></li>
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Year</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="avatar">
                                                    <span class="avatar-title bg-soft-success rounded">
                                                        <i class="mdi mdi-account-multiple-outline text-success font-size-24"></i>
                                                    </span>
                                                </div>
                                                <p class="text-muted mt-4 mb-0">New Users</p>
                                                <h4 class="mt-1 mb-0">$5,265,3 <sup class="text-danger fw-medium font-size-14"><i class="mdi mdi-arrow-down"></i> 18%</sup></h4>
                                                <div>
                                                    <div class="py-3 my-1">
                                                        <div id="mini-4" data-colors='["#33a186"]'></div>
                                                    </div>
                                                    <ul class="list-inline d-flex justify-content-between justify-content-center mb-0">
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Day</a></li>
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Week</a></li>
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Month</a></li>
                                                        <li class="list-inline-item"><a href="#" class="text-muted">Year</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-3">
                                            <h5 class="card-title mb-0">Sales Statistics</h5>
                                            <div class="ms-auto">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">Weekly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                       <div class="row align-items-center">
                                        <div class="col-xl-8">
                                            <div>
                                                 <div id="sales-statistics" data-colors='["#eff1f3","#eff1f3","#eff1f3","#eff1f3","#33a186","#3980c0","#eff1f3","#eff1f3","#eff1f3", "#eff1f3"]' class="apex-chart"></div>
                                            </div>
                                          </div>
                                           <div class="col-xl-4">
                                               <div class="">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex">
                                                                <i class="mdi mdi-circle font-size-10 mt-1 text-primary"></i>
                                                                <div class="flex-1 ms-2">
                                                                    <p class="mb-0">Product Order</p>
                                                                    <h5 class="mt-1 mb-0 font-size-16">43,541.58</h5>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge badge-soft-primary">25.4%<i class="mdi mdi-arrow-down ms-2"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-3 border-top pt-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex">
                                                                <i class="mdi mdi-circle font-size-10 mt-1 text-primary"></i>
                                                                <div class="flex-1 ms-2">
                                                                    <p class="mb-0">Product Pending</p>
                                                                    <h5 class="mt-1 mb-0 font-size-16">17,351.12</h5>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge badge-soft-primary">17.4%<i class="mdi mdi-arrow-down ms-2"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-3 border-top pt-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex">
                                                                <i class="mdi mdi-circle font-size-10 mt-1 text-success"></i>
                                                                <div class="flex-1 ms-2">
                                                                    <p class="mb-0">Product Cancelled</p>
                                                                    <h5 class="mt-1 mb-0 font-size-16">32,569.74</h5>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge badge-soft-success">16.3%<i class="mdi mdi-arrow-up ms-1"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-3 border-top pt-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex">
                                                                <i class="mdi mdi-circle font-size-10 mt-1 text-primary"></i>
                                                                <div class="flex-1 ms-2">
                                                                    <p class="mb-0">Product Delivered</p>
                                                                    <h5 class="mt-1 mb-0 font-size-16">67,356.24</h5>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge badge-soft-primary">65.7%<i class="mdi mdi-arrow-up ms-1"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                               </div>
                                           </div>
                                           
                                       </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <h5 class="card-title mb-0">Sales By Category</h5>
                                            <div class="ms-auto">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">Weekly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center mt-4">
                                            <canvas class="mx-auto" id="sales-category" height="281" data-colors='["#3980c0","#51af98", "#4bafe1", "#B4B4B5", "#f1f3f4"]'></canvas>
                                        </div>
                                        
                                        <div class="row mt-4">
                                            <div class="col">
                                                <div class="px-2">
                                                    <div class="d-flex justify-content-between align-items-center mt-sm-0 mt-2">
                                                        <div class="d-flex">
                                                            <i class="mdi mdi-circle font-size-10 mt-1 text-primary"></i>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 text-truncate">Watch OS 8</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="fw-bold">35.0%</span>
                                                        </div>
                                                    </div>
    
                                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                                        <div class="d-flex">
                                                            <i class="mdi mdi-circle font-size-10 mt-1 text-success"></i>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 text-truncate">Iphone 12</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="fw-bold">15.0%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                               <div class="px-2">
                                                    <div class="d-flex justify-content-between align-items-center mt-sm-0 mt-2">
                                                        <div class="d-flex">
                                                            <i class="mdi mdi-circle font-size-10 mt-1 text-info"></i>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 text-truncate">Horror Book</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="fw-bold">8.0%</span>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                                        <div class="d-flex">
                                                            <i class="mdi mdi-circle font-size-10 mt-1 text-secondary"></i>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 text-truncate">Smart 4k TV</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="fw-bold">7.0%</span>
                                                        </div>
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                           <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-lg-5">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="d-flex flex-wrap align-items-center">
                                                            <h5 class="card-title mb-0">Order Activity</h5>
                                                            <div class="ms-auto">
                                                                <div class="dropdown">
                                                                    <a class="font-size-16 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body px-0">
                                                        <ol class="activity-feed mb-0 px-4" data-simplebar style="max-height: 377px;">
                                                            <li class="feed-item">
                                                                <div class="d-flex justify-content-between feed-item-list">
                                                                    <div>
                                                                        <h5 class="font-size-15 mb-1">Your Manager Posted</h5>
                                                                        <p class="text-muted mt-0 mb-0">James Raphael</p>
                                                                    </div>
                                                                    <div>
                                                                        <p class="text-muted mb-0">1 hour ago</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="feed-item">
                                                                <div class="d-flex justify-content-between feed-item-list">
                                                                    <div>
                                                                        <h5 class="font-size-15 mb-1">You have 5 pending order.</h5>
                                                                        <p class="text-muted mt-0 mb-0">Delivered</p>
                                                                    </div>
                                                                    <div>
                                                                        <p class="text-muted mb-0">6 hour ago</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="feed-item">
                                                                <div class="d-flex justify-content-between feed-item-list">
                                                                    <div>
                                                                        <h5 class="font-size-15 mb-1">New Order Received</h5>
                                                                        <p class="text-muted mt-0 mb-0">Pick Up</p>
                                                                    </div>
                                                                    <div>
                                                                        <p class="text-muted mb-0">1 day ago</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="feed-item">
                                                                <div class="d-flex justify-content-between feed-item-list">
                                                                    <div>
                                                                        <h5 class="font-size-15 mb-1">Your Manager Posted</h5>
                                                                        <p class="text-muted mt-0 mb-0">In Transit</p>
                                                                    </div>
                                                                    <div>
                                                                        <p class="text-muted mb-0">Yesterday</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                        
                                                            <li class="feed-item">
                                                                <div class="d-flex justify-content-between feed-item-list">
                                                                    <div>
                                                                        <h5 class="font-size-15 mb-1">You have 1 pending order.</h5>
                                                                        <p class="text-muted mt-0 mb-0">Dispatched</p>
                                                                    </div>
                                                                    <div>
                                                                        <p class="text-muted mb-0">2 hour ago</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="feed-item pb-1">
                                                                <div class="d-flex justify-content-between feed-item-list">
                                                                    <div>
                                                                        <h5 class="font-size-15 mb-1">New Order Received</h5>
                                                                        <p class="text-muted mt-0 mb-0">Order Received</p>
                                                                    </div>
                                                                    <div>
                                                                        <p class="text-muted mb-0">Today</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                        
                                                        </ol>
                    
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="align-items-center d-flex">
                                                        <h4 class="card-title mb-0 flex-grow-1">Top Users</h4>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown">
                                                                <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span class="text-muted">All Members<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                                </a>
                                        
                                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                                                    <a class="dropdown-item" href="#">Members</a>
                                                                    <a class="dropdown-item" href="#">New Members</a>
                                                                    <a class="dropdown-item" href="#">Old Members</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body px-0 pt-2">
                                                    <div class="table-responsive px-3" data-simplebar style="max-height: 393px;">
                                                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 20px;"><img src="assets/images/users/avatar-4.jpg" class="avatar-sm rounded-circle " alt="..."></td>
                                                                    <td>
                                                                        <h6 class="font-size-15 mb-1">Glenn Holden</h6>
                                                                        <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Nevada</p>
                                                                    </td>
                                                                    <td class="text-muted"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$250.00</td>
                                                                    <td><span class="badge badge-soft-danger font-size-12">Cancel</span></td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-vertical"></i>
                                                                            </a>
                                    
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Action</a>
                                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="assets/images/users/avatar-5.jpg" class="avatar-sm rounded-circle " alt="..."></td>
                                                                    <td>
                                                                        <h6 class="font-size-15 mb-1">Lolita Hamill</h6>
                                                                        <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Texas</p>
                                                                    </td>
                                                                    <td class="text-muted"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$110.00</td>
                                                                    <td><span class="badge badge-soft-success font-size-12">Success</span></td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-vertical"></i>
                                                                            </a>
                                    
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Action</a>
                                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="assets/images/users/avatar-6.jpg" class="avatar-sm rounded-circle " alt="..."></td>
                                                                    <td>
                                                                        <h6 class="font-size-15 mb-1">Robert Mercer</h6>
                                                                        <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                                                    </td>
                                                                    <td class="text-muted"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$420.00</td>
                                                                    <td><span class="badge badge-soft-info font-size-12">Active</span></td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-vertical"></i>
                                                                            </a>
                                    
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Action</a>
                                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle " alt="..."></td>
                                                                    <td>
                                                                        <h6 class="font-size-15 mb-1">Marie Kim</h6>
                                                                        <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Montana</p>
                                                                    </td>
                                                                    <td class="text-muted"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                                                    <td><span class="badge badge-soft-warning font-size-12">Pending</span></td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-vertical"></i>
                                                                            </a>
                                    
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Action</a>
                                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="assets/images/users/avatar-8.jpg" class="avatar-sm rounded-circle " alt="..."></td>
                                                                    <td>
                                                                        <h6 class="font-size-15 mb-1">Sonya Henshaw</h6>
                                                                        <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Colorado</p>
                                                                    </td>
                                                                    <td class="text-muted"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                                                    <td><span class="badge badge-soft-info font-size-12">Active</span></td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-vertical"></i>
                                                                            </a>
                                    
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Action</a>
                                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="assets/images/users/avatar-2.jpg" class="avatar-sm rounded-circle " alt="..."></td>
                                                                    <td>
                                                                        <h6 class="font-size-15 mb-1">Marie Kim</h6>
                                                                        <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Australia</p>
                                                                    </td>
                                                                    <td class="text-muted"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                                                    <td><span class="badge badge-soft-success font-size-12">Success</span></td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-vertical"></i>
                                                                            </a>
                                    
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Action</a>
                                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="assets/images/users/avatar-1.jpg" class="avatar-sm rounded-circle " alt="..."></td>
                                                                    <td>
                                                                        <h6 class="font-size-15 mb-1">Sonya Henshaw</h6>
                                                                        <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> India</p>
                                                                    </td>
                                                                    <td class="text-muted"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                                                    <td><span class="badge badge-soft-danger font-size-12">Cancel</span></td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-vertical"></i>
                                                                            </a>
                                    
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="#">Action</a>
                                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div> <!-- enbd table-responsive-->
                                                </div>
                                            </div>
                                        </div>
                               </div>
                           </div>
                           <div class="col-xl-4">

                               <div class="card">
                                   <div class="card-header">
                                        <div class="align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Top Countries</h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted">View All<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                            
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                                        <a class="dropdown-item" href="#">Members</a>
                                                        <a class="dropdown-item" href="#">New Members</a>
                                                        <a class="dropdown-item" href="#">Old Members</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="card-body pt-1">

                                        <div class="table-responsive">
                                            <table class="table table-centered align-middle table-nowrap mb-0">
                                              
                                                <tbody>
                                                    <tr>
                                                        <td><img src="assets/images/flags/us.jpg" alt="user-image" class="me-3" height="18">US</td>
                                                        <td>
                                                            26,568.84
                                                        </td>
                                                        <td>
                                                          <i class="bx bx-trending-up text-success"></i>
                                                        </td>
                                                        <td>
                                                            40%
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
                        
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="assets/images/flags/germany.jpg" alt="user-image" class="me-3" height="18">German</td>
                                                        <td>
                                                            36,485.52
                                                        </td>
                                                        <td>
                                                          <i class="bx bx-trending-up text-success"></i>
                                                        </td>
                                                        <td>
                                                            50%
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
                        
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="assets/images/flags/italy.jpg" alt="user-image" class="me-3" height="18">Italy</td>
                                                        <td>
                                                            17,568.84
                                                        </td>
                                                        <td>
                                                          <i class="bx bx-trending-down text-danger"></i>
                                                        </td>
                                                        <td>
                                                            20%
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
                        
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="assets/images/flags/spain.jpg" alt="user-image" class="me-3" height="18">Spain</td>
                                                        <td>
                                                            75,521.28
                                                        </td>
                                                        <td>
                                                          <i class="bx bx-trending-up text-success"></i>
                                                        </td>
                                                        <td>
                                                            70%
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
                        
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>   
                                        </div> 

                                   </div>
                               </div>

                               <div class="card best-product">
                                <div class="card-body">
                                 <div class="row align-items-center justify-content-start">
                                     <div class="col-lg-8">
                                         <h5 class="card-title best-product-title">Best Selling Product</h5>
                                         <div class="row align-items-end mt-4">
                                             <div class="col-4">
                                                 <div class="mt-1">
                                                     <h4 class="font-size-20 best-product-title">2,562</h4>
                                                     <p class="text-muted mb-0">Sold</p>
                                                 </div>
                                             </div>
                                             <div class="col-4">
                                                 <div class="mt-1">
                                                     <h4 class="font-size-20 best-product-title">4,652</h4>
                                                     <p class="text-muted mb-0">Stock</p>
                                                 </div>
                                             </div>

                                             <div class="col-4">
                                                 <div class="mt-1">
                                                     <a href="#" class="btn btn-primary btn-sm">Buy
                                                         Now</a>
                                                 </div>
                                             </div>
                                            </div>
                                     </div>
                                   
                                 </div>
                                </div>
                            </div>
                           </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4">
    
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <h5 class="card-title mb-0">Earnings By Item</h5>
                                            <div class="ms-auto">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">Weekly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-xl-0">
                                        <div id="earning-item" data-colors='["#33a186","#3980c0"]' class="apex-chart"></div>
    
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <h5 class="card-title mb-0">Manage Orders</h5>
                                            <div class="ms-auto">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted font-size-12">Sort By: </span> <span class="fw-medium"> Weekly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-xl-1">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-centered align-middle table-nowrap mb-0">
                                                <thead >
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Product's Name</th>
                                                        <th>Variant</th>
                                                        <th>Type</th>
                                                        <th>Stock</th>
                                                        <th>Price</th>
                                                        <th>Sales</th>
                                                        <th>Status</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td><a href="javascript: void(0);" class="text-body">Iphone 12 Max Pro</a> </td>
                                                        <td>
                                                            <i class="mdi mdi-circle font-size-10 me-1 align-middle text-secondary"></i> Gray
                                                        </td>
                                                        <td>
                                                            Electronic
                                                        </td>
                                                        <td>
                                                           1,564 Items
                                                        </td>
                                                        <td>
                                                            $1200
                                                        </td>
                                                        <td>
                                                            900
                                                        </td>
                                                        
                                                        <td style="width: 130px;">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
                        
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                        
                                                    <tr>
                                                        <td>2.</td>
                                                        <td><a href="javascript: void(0);" class="text-body">New Red and White jacket </a> </td>
                                                        <td>
                                                            <i class="mdi mdi-circle font-size-10 me-1 align-middle text-danger"></i> Red
                                                        </td>
                                                        <td>
                                                            Fashion
                                                        </td>
                                                        <td>
                                                           568 Items
                                                        </td>
                                                        <td>
                                                            $300
                                                        </td>
                                                        <td>
                                                            650
                                                        </td>
                                                        
                                                        <td style="width: 130px;">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="75">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
                        
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                        
                                                    <tr>
                                                        <td>3.</td>
                                                        <td><a href="javascript: void(0);" class="text-body">Latest Series Watch OS 8</a> </td>
                                                        <td>
                                                            <i class="mdi mdi-circle font-size-10 me-1 align-middle text-primary"></i> Dark
                                                        </td>
                                                        <td>
                                                            Electronic
                                                        </td>
                                                        <td>
                                                           1,232 Items
                                                        </td>
                                                        <td>
                                                            $250
                                                        </td>
                                                        <td>
                                                            350
                                                        </td>
                                                        
                                                        <td style="width: 130px;">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
                        
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.</td>
                                                        <td><a href="javascript: void(0);" class="text-body">New Horror Book</a> </td>
                                                        <td>
                                                            <i class="mdi mdi-circle font-size-10 me-1 align-middle text-success"></i> Green
                                                        </td>
                                                        <td>
                                                            Book
                                                        </td>
                                                        <td>
                                                           1,564 Items
                                                        </td>
                                                        <td>
                                                            $1200
                                                        </td>
                                                        <td>
                                                            900
                                                        </td>
                                                        
                                                        <td style="width: 130px;">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="75">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
                        
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5.</td>
                                                        <td><a href="javascript: void(0);" class="text-body">Smart 4k Android TV</a> </td>
                                                        <td>
                                                            <i class="mdi mdi-circle font-size-10 me-1 align-middle text-primary"></i> Gray
                                                        </td>
                                                        <td>
                                                            Electronic
                                                        </td>
                                                        <td>
                                                           5,632 Items
                                                        </td>
                                                        <td>
                                                            $700
                                                        </td>
                                                        <td>
                                                            600
                                                        </td>
                                                        
                                                        <td style="width: 130px;">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar progress-bar-striped bg-pricing" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="75">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
                        
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Symox.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <a href="#" class="right-bar-toggle layout-setting-btn" id="right-bar-toggle">
            <i class="icon-sm mb-2" data-feather="settings"></i> <span class="align-middle">Settings</span>
        </a>

        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center bg-primary p-3">

                    <h5 class="m-0 me-2 text-white">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="m-0" />

                <div class="p-4">
                    <h6 class="mb-3">Choose Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-vertical" value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-horizontal" value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Theme Mode</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3">Layout Width</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-fluid" value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fluid">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3">Layout Position</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>

                    <h6 class="mt-4 mb-3">Topbar Color</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <div id="sidebar-setting">
                        <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size"
                                id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                            <label class="form-check-label" for="sidebar-size-default">Default</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size"
                                id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                            <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size"
                                id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                            <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                        </div>

                        <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color"
                                id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                            <label class="form-check-label" for="sidebar-color-light">Light</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color"
                                id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                            <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color"
                                id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                            <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                        </div>
                    </div>

                    <h6 class="mt-4 mb-3">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <!-- Chart JS -->
        <script src="assets/js/pages/chartjs.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/symox-php/layouts/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 May 2022 16:20:13 GMT -->
</html>
