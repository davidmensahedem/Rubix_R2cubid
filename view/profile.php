
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
                                    <h4 class="mb-0">My Profile</h4>

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

        <!-- start page title -->
        <div class="row mb-4">
            
            <div class="col-xl-8 offset-lg-2">
                <div class="card overflow-hidden">
                    <div class="profile-user"></div>
                    <div class="card-body">
                        <div class="profile-content text-center">
                            <div class="profile-user-img">
                            <?php if( get_marketer($_SESSION['admin_id'] ) != false): ?>
                                <?php if(get_marketer($_SESSION['admin_id'])['image'] != null): ?>
                                    <img src="<?php echo get_marketer($_SESSION['admin_id'])['image'];  ?>" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                <?php else: ?>
                                    <img src="assets/images/users/picture.png" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                <?php endif;?>
                                          
                            <?php else: ?>

                                <?php if( get_administrator($_SESSION['admin_id']) != false): ?>
                                    <?php if(get_administrator($_SESSION['admin_id'])['image'] != null): ?>
                                        <img src="<?php echo get_administrator($_SESSION['admin_id'])['image'];  ?>" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                    <?php else: ?>
                                        <!-- <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-sm" alt=""> -->
                                        <img src="assets/images/users/picture.png" widt="" alt="" class="avatar-md rounded-circle img-thumbnail">
                                        
                                    <?php endif; ?>
                                <?php endif; ?>

                            <?php endif; ?>
                                
                            </div>
                            <h5 class="mt-3 mb-1"><?php echo $_SESSION['admin_name'];?></h5>
                            <p class="text-muted"><?php echo $_SESSION['admin_type'];?></p>


                            <p class="text-muted mb-1">
                                <?php if( get_marketer($_SESSION['admin_id'] ) != false): ?>
                                    <?php  echo get_marketer($_SESSION['admin_id'])['email']; ?></br>
                                    <?php echo get_marketer($_SESSION['admin_id'])['contact'];  ?>
                                <?php else: ?>
                                    <?php if( get_administrator($_SESSION['admin_id']) != false): ?>
                                    <?php  echo get_administrator($_SESSION['admin_id'])['email']; ?></br>
                                    <?php echo get_administrator($_SESSION['admin_id'])['contact'];  ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </p>
                            
                        </div>
                        
                    </div>
                </div>

                <?php if( get_marketer($_SESSION['admin_id'] ) != false): ?>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Achievements</h5>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap">
                                    <tbody>
                                        <tr>
                                            <td style="width: 50px;">
                                                <i class="mdi mdi-circle-medium font-size-18 text-success align-middle me-1">
                                            </td>
                                            <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Registered Retailers</a></h5></td>
                                            
                                            <td>
                                                <?php if(get_marketer_orders_count($_SESSION['admin_id']) > 0): ?>

                                                    <i class="mdi mdi-circle-medium font-size-18 text-success align-middle me-1"></i> <?php echo get_marketer_retailers_count($_SESSION['admin_id']); ?>
                                                <?php else: ?>
                                                    <small>No registered retailer</small>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="mdi mdi-circle-medium font-size-18 text-warning align-middle me-1">
                                            </td>
                                            <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Orders</a></h5></td>
                                            
                                            <td>
                                                <?php if(get_marketer_orders_count($_SESSION['admin_id']) > 0): ?>
                                                    <i class="mdi mdi-circle-medium font-size-18 text-warning align-middle me-1"></i> <?php echo get_marketer_orders_count($_SESSION['admin_id']); ?>

                                                <?php else: ?>
                                                    <small>No orders</small>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
                <?php else: ?>
                    <?php if( get_administrator($_SESSION['admin_id']) != false): ?>
                        
                    <?php endif; ?>
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



 <!-- ========== End of Main Content ============= -->
 
 
 <!-- ========== Create Marketer Modal ============= -->
 <?php include 'includes/create_marketer_modal.php'; ?> 
 <!-- ========== End of Modal ============= -->
 
 
 <!-- ========== Success Modal ============= -->
 <?php include 'includes/success_modal.php'; ?> 
 <!-- ========== End of Modal ============= -->



 <!-- ========== Footer ============= -->
 <?php include 'includes/footer.php'; ?>
 <!-- ========== End Footer ============= -->

