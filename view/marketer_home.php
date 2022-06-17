<?php 

    if(isset($_POST['shopID'])){
        $_POST['shopID'] = null;
        die("yeak");
    }


?>
 <!-- ========== Page Header Start ========== -->
 <?php include 'includes/header.php'; ?>
 <!-- ========== Page Header End ========== -->

 

 <body data-layout="horizontal" data-layout-mode="dark" data-topbar="dark">
 
 <!-- ========== Main Content ============= -->
 
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
                            <div class="col-lg-6 col-md-6">
                                <div class="card" style="height:182px;">
                                    <div class="card-body">
                                        <div class="avatar">
                                            <span class="avatar-title bg-soft-primary rounded">
                                            <i class="icon me-2 m-2 text-success" data-feather="home"></i>
                                            </span>
                                        </div>
                                        
                                        <?php if( get_marketer_retailers_count($_SESSION['admin_id']) > 0): ?>
                                            <p class="text-muted mt-4 mb-0">Registered Retailers</p>
                                            <h4 class="mt-1 mb-0"><?php echo get_marketer_retailers_count($_SESSION['admin_id']); ?></h4>
                                        <?php else: ?>
                                            <p class="mt-1 mb-0">No Retailers</p>
                                        <?php endif;?>
                                        
                                        <!-- <h4 class="mt-1 mb-0">3,89,658 <sup class="text-success fw-medium font-size-14"><i class="mdi mdi-arrow-up"></i> 10%</sup></h4> -->
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="card" style="height:182px;">
                                    <div class="card-body">
                                        <div class="avatar">
                                            <span class="avatar-title bg-soft-success rounded">
                                                <i class="mdi mdi-eye-outline text-success font-size-24"></i>
                                            </span>
                                        </div>
                                        <?php if( get_marketer_orders_count($_SESSION['admin_id']) > 0): ?>
                                            <p class="text-muted mt-4 mb-0">Orders</p>
                                            <h4 class="mt-1 mb-0"><?php echo get_marketer_orders_count($_SESSION['admin_id']); ?></h4>
                                        <?php else: ?>
                                            <p class="mt-1 mb-0">No Orders</p>
                                        <?php endif;?>
                                        
                                        
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-xl-7 mt-3 py-2">
                        <div class="card" style="background-color:#bbe6ff;">
                                <div class="card-header">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <h5 class="card-title mb-0">Registered retailers</h5>
                                        
                                    </div>
                                </div>
                                <div class="card-body pt-xl-1">
                                    <!-- ========== Orders Table ============= -->
                                    <?php include 'includes/marketers_retailers_table.php'; ?>
                                    <!-- ========== End Orders Table ============= -->
                                </div>
                            </div>
                            
                        </div>

                    <div class="col-xl-5 mt-3 py-2">
                        <div class="card" style="background-color:#bbe6ff;">
                                    <div class="card-header">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <h5 class="card-title mb-0">Orders</h5>
                                            
                                        </div>
                                    </div>
                                    <div class="card-body pt-xl-1">
                                        <!-- ========== Orders Table ============= -->
                                        <?php include 'includes/marketer_orders_table.php'; ?>
                                        <!-- ========== End Orders Table ============= -->
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