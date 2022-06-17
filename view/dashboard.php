 <!-- ========== Page Header Start ========== -->
 <?php include 'includes/header.php'; ?>
 <!-- ========== Page Header End ========== -->


 <body data-layout="horizontal" data-topbar="dark" data-layout-mode="dark" id="dashboardBody">

<!-- Begin page -->
<div id="layout-wrapper">
    

    <!-- ========== Navbar ==================== -->

    <?php include 'includes/navbar.php'; ?>

    <!-- ========== End of Navbar ============= -->



    <!-- ========== Sidebar ==================== -->

    <?php include 'includes/sidebar.php'; ?>

    <!-- ========== End of Sidebar ============= -->


    <!-- ========== Subnav ==================== -->

    <?php include 'includes/subnav.php'; ?>

    <!-- ========== End of Subnav ============= -->

      





            
            
            
           
    


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
                            <h4 class="mb-0">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"><small><script>document.write(new Date().toDateString())</script></small></a></li>
                                    <!-- <li class="breadcrumb-item active">Welcome !</li> -->
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
                                        <!-- <h3 class="text-white">R2Cubid Dashboard</h3> -->

                                        <h3 class="text-white mb-0"> Welcome Back, <?php echo $_SESSION['admin_name'];?></h3>

                                        <!-- <p class="text-white-50 px-4 mt-4">All the best with work today .</p> -->
                                        
                                        <div class="mt-4 pt-2 mb-2">
                                            <a href=".?action=profile_page" class="btn btn-success">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card" style="height:182px;">
                                    <div class="card-body">
                                        <div class="avatar">
                                            <span class="avatar-title bg-soft-primary rounded">
                                            <i class="icon me-2 m-2 text-success" data-feather="home"></i>
                                            </span>
                                        </div>
                                        <?php if(get_retailers_count() > 0): ?>
                                        <p class="text-muted mt-4 mb-0">Retailers</p>
                                        <h4 class="mt-1 mb-0" id="row_retailers_count">loading</h4>
                                        <!-- <h4 class="mt-1 mb-0">3,89,658 <sup class="text-success fw-medium font-size-14"><i class="mdi mdi-arrow-up"></i> 10%</sup></h4> -->
                                        <?php else: ?>
                                            <p class="text-muted mt-4 mb-0">No retailers</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card" style="height:182px;">
                                    <div class="card-body">
                                        <div class="avatar">
                                            <span class="avatar-title bg-soft-success rounded">
                                                <i class="mdi mdi-eye-outline text-success font-size-24"></i>
                                            </span>
                                        </div>
                                        <?php if(get_stock_count() > 0): ?>
                                        <p class="text-muted mt-4 mb-0">Stocks</p>
                                        <h4 class="mt-1 mb-0" id="row_1_stocks_count">loading</h4>
                                        <!-- <h4 class="mt-1 mb-0">3,89,658 <sup class="text-success fw-medium font-size-14"><i class="mdi mdi-arrow-up"></i> 10%</sup></h4> -->
                                        <?php else: ?>
                                            <p class="text-muted mt-4 mb-0">No stocks</p>
                                        <?php endif; ?>
                                       
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card" style="height:182px;">
                                    <div class="card-body">
                                        <div class="avatar">
                                            <span class="avatar-title bg-soft-primary rounded">
                                                <i class="mdi mdi-rocket-outline text-primary font-size-24"></i>
                                            </span>
                                        </div>
                                        <?php if(get_orders_count() > 0): ?>
                                        <p class="text-muted mt-4 mb-0">Orders</p>
                                        <h4 class="mt-1 mb-0" id="row_1_orders_count">loading</h4>
                                        
                                        <!-- <h4 class="mt-1 mb-0">3,89,658 <sup class="text-success fw-medium font-size-14"><i class="mdi mdi-arrow-up"></i> 10%</sup></h4> -->
                                        <?php else: ?>
                                            <p class="text-muted mt-4 mb-0">No orders</p>
                                        <?php endif; ?>
                                        
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card" style="height:182px;">
                                    <div class="card-body">
                                        <div class="avatar">
                                            <span class="avatar-title bg-soft-success rounded">
                                                <i class="mdi mdi-account-multiple-outline text-success font-size-24"></i>
                                            </span>
                                        </div>
                                        <?php if(get_marketers_count() > 0): ?>
                                        <p class="text-muted mt-4 mb-0">Marketers</p>
                                        <h4 class="mt-1 mb-0" id="row_1_marketers_count">loading </h4>
                                        <!-- <h4 class="mt-1 mb-0">3,89,658 <sup class="text-success fw-medium font-size-14"><i class="mdi mdi-arrow-up"></i> 10%</sup></h4> -->
                                        <?php else: ?>
                                            <p class="text-muted mt-4 mb-0">No marketers</p>
                                        <?php endif; ?>

                                       
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
                                            <a>
                                                <span class="text-muted font-size-12">
                                                    Monthly Sales
                                                </span>
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-xl-9">
                                        <div id="showTotalSalesChart">
                                                <!-- <div id="sales-statistics" data-colors='["#eff1f3","#eff1f3","#eff1f3","#eff1f3","#33a186","#3980c0","#eff1f3","#eff1f3","#eff1f3", "#eff1f3"]' class="apex-chart"></div> -->
                                            
                                                <div id="totalSalesChart" class="apex-chart"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="">
                                            <div>
                                                <?php if(getOrdersApprovedSum()['total'] > 0): ?>
                                                    <div class="d-flex">
                                                        <div class="d-flex">
                                                            <i class="mdi mdi-circle font-size-10 mt-1 text-primary"></i>
                                                            <div class="flex-1 ms-2">
                                                                
                                                                
                                                                    <p class="mb-0">Ordered Quantity</p>
                                                                    <h5 class="mt-1 mb-0 font-size-16" id="row_2_get_orders_approved_sum">loading</h5> bags
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- <div>
                                                            <span class="badge badge-soft-primary">25.4%<i class="mdi mdi-arrow-down ms-2"></i></span>
                                                        </div> -->
                                                    </div>
                                                <?php else: ?>
                                                                
                                                <?php endif; ?>
                                            </div>

                                            <div class="mt-3 border-top pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex">
                                                        <i class="mdi mdi-circle font-size-10 mt-1 text-danger"></i>
                                                        <?php if(get_approved_orders_count()>0): ?>

                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0">Orders Approved</p>
                                                                <h5 class="mt-1 mb-0 font-size-16" id="row_2_approved_orders_count">loading</h5>
                                                            </div>
                                                        <?php else:?>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0">No Orders Approved</p>
                                                                
                                                            </div>

                                                        <?php endif;?>
                                                    </div>
                                                    <!-- <div>
                                                        <span class="badge badge-soft-primary">17.4%<i class="mdi mdi-arrow-down ms-2"></i></span>
                                                    </div> -->
                                                </div>
                                            </div>

                                            <div class="mt-3 border-top pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex">
                                                        <i class="mdi mdi-circle font-size-10 mt-1 text-success"></i>
                                                        <?php if(get_pending_orders_count()>0): ?>

                                                        <div class="flex-1 ms-2">
                                                            <p class="mb-0">Products Pending</p>
                                                            <h5 class="mt-1 mb-0 font-size-16" id="row_2_pending_orders_count"><?php echo get_pending_orders_count(); ?></h5>
                                                        </div>
                                                        <?php else:?>
                                                        <div class="flex-1 ms-2">
                                                            <p class="mb-0">No Orders Pending</p>
                                                            
                                                        </div>

                                                        <?php endif;?>
                                                    </div>
                                                    <!-- <div>
                                                        <span class="badge badge-soft-success">16.3%<i class="mdi mdi-arrow-up ms-1"></i></span>
                                                    </div> -->
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
                                    <h5 class="card-title mb-0">Order Status</h5>
                                </div>

                                <div class="text-center mt-4"> 
                                    <div id="order-status"></div>
                                    
                                </div>

                                <div class="row mt-4">
                                    <div class="col" style="min-height:127px;">
                                        <div class="px-2">
                                            <?php if(get_approved_orders_count() > 0): ?>
                                                <div class="d-flex justify-content-between align-items-center mt-sm-0 mt-2">
                                                    <div class="d-flex">
                                                        <i class="mdi mdi-circle font-size-10 mt-1 text-primary"></i>
                                                        <div class="flex-1 ms-2">
                                                            <p class="mb-0 text-truncate">Approved Orders (<span id="pie_approved_orders">loading</span>)</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        
                                                        <p class=""><span id="pie_get_approved_sum">loading</span> bags</p>
                                                    </div>
                                                </div>
                                            <?php else:?>
                                                <div class="d-flex justify-content-between align-items-center mt-sm-0 mt-2">
                                                    <div class="d-flex">
                                                        <i class="mdi mdi-circle font-size-10 mt-1 text-primary"></i>
                                                        <div class="flex-1 ms-2">
                                                            <p class="mb-0 text-truncate">No approved</p>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            <?php endif; ?>
                                            <?php if(get_pending_orders_count() > 0): ?>
                                                <div class="d-flex justify-content-between align-items-center mt-2">
                                                    <div class="d-flex">
                                                        <i class="mdi mdi-circle font-size-10 mt-1 text-success"></i>
                                                        <div class="flex-1 ms-2">
                                                            <p class="mb-0 text-truncate">Pending Orders (<span id="pie_pending_orders_count">loading</span>)</p>
                                                            
                                                        </div>
                                                    </div>
                                                    <div>
                                                        
                                                        <p class=""><span id="pie_pending_sum">loading</span> bags</p>
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                                <div class="d-flex justify-content-between align-items-center mt-2">
                                                    <div class="d-flex">
                                                        <i class="mdi mdi-circle font-size-10 mt-1 text-success"></i>
                                                        <div class="flex-1 ms-2">
                                                            <p class="mb-0 text-truncate">No pending orders</p>
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                            <?php endif; ?>
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
                                        <?php if(get_todays_orders_count() > 0): ?>
                                            <div class="card-header">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <h5 class="card-title mb-0">Today's Orders <small class="badge rounded-pill bg-success" id="row_3_todays_orders"></small> out of <small class="badge rounded-pill bg-danger" id="totalOrders"></small></h5>
                                                    <div class="ms-auto">
                                                        <div class="dropdown">
                                                        <a href=".?action=all_order_page">
                                                            <span class="fw-medium"> All<i class="mdi mdi-arrow-right ms-1"></i></span>
                                                        </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body px-0">
                                                <ol id="showTodaysOrders" class="activity-feed mb-0 px-4" data-simplebar style="max-height: 377px;">

                                                  <li><small>loading</small></li>

                                                </ol>
            
                                            </div>

                                        <?php else: ?>

                                            
                                            <div class="d-flex justify-content-center feed-item-list">
                                                <div class="justify-content-center">
                                                    <p class="card-title mb-0 p-2">No orders for today</p>
                                                </div>
                                            </div>
                                                
                                           
                                        <?php endif; ?>
                                    </div>
                                            
                                </div>

                                <div class="col-lg-7">
                                    <div class="card">
                                        <?php if(get_retailers_count() > 0): ?>
                                            <div class="card-header">
                                                <div class="align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">Retail Outlets <small class="badge rounded-pill bg-success" id="row_3_retailer_count">loading</small></h4>
                                                    <div class="flex-shrink-0">
                                                        <div>
                                                            <a href=".?action=all_retailers_page">
                                                                <span class="fw-medium"> All<i class="mdi mdi-arrow-right ms-1"></i></span>
                                                            </a>
                                    
                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body px-0 pt-2">
                                                <div class="table-responsive px-3" data-simplebar style="max-height: 250px;">
                                                    <table id="dashboardRetailers" class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                        <tbody>

                                                            <td>loading</td>

                        
                                                        </tbody>
                                                    </table>
                                                </div> <!-- enbd table-responsive-->
                                            </div>
                                        
                                        <?php else: ?>

                                            
                                            <div class="d-flex justify-content-center feed-item-list">
                                                <div class="justify-content-center">
                                                    <p class="card-title mb-0 p-2">No retailers at the moment</p>
                                                </div>
                                            </div>
                                            

                                        <?php endif; ?>
                                        
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-4">

                        <div class="card">
                            <?php if( get_marketers_count() > 0): ?>
                                <div class="card-header">
                                    <div class="align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Marketers <small class="badge rounded-pill bg-success" id="row_3_marketers_count">loading</small></h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <a href=".?action=all_marketers_page">
                                                    <span class="fw-medium"> All<i class="mdi mdi-arrow-right ms-1"></i></span>
                                                </a>
                        
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-1">

                                    <div class="table-responsive">
                                        <table id="dashboardMarketers" class="table table-centered align-middle table-nowrap mb-0">
                                            
                                            <tbody>

                                                <td>loading</td>
                                                
                                            </tbody>
                                        </table>   
                                    </div> 

                                </div>
                            <?php else: ?>

                                <div class="d-flex justify-content-center feed-item-list">
                                    <div class="justify-content-center">
                                        <p class="card-title mb-0 p-2">No marketer at the moment</p>
                                    </div>
                                </div>

                            <?php endif; ?>
                        </div>

                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                    <?php if(get_orders_count() > 0): ?>
                        <div class="card" style="background-color:#bbe6ff;">
                            <div class="card-header">
                                <div class="d-flex flex-wrap align-items-center">
                                    <h5 class="card-title mb-0">Manage Orders 
                                        <?php if(get_orders_count() > 0): ?>
                                        <small class="badge rounded-pill bg-success">
                                            <?php echo get_orders_count(); ?>
                                        </small>
                                        <?php else: ?>

                                        <?php endif; ?>
                                    </h5>
                                    <div class="ms-auto">
                                        <div class="dropdown">
                                            <a class="" href=".?action=all_order_page" id="">
                                                <span class="fw-medium"> All<i class="mdi mdi-arrow-right ms-1"></i></span>
                                            </a>
                                            <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Yearly</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-xl-1">
                                <!-- ========== Orders Table ============= -->
                                <?php include 'includes/manage_orders_table.php'; ?>
                                <!-- ========== End Orders Table ============= -->
                            </div>
                        </div>
                    <?php else: ?>
                    <?php endif; ?>
                    </div>
                </div>


               

                
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> &copy; R2Cubid.
                    </div>
                    
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->



 <!-- ========== Main Content ============= -->



 <!-- ========== Footer ============= -->
 <?php include 'includes/footer.php'; ?>
 <!-- ========== End Footer ============= -->