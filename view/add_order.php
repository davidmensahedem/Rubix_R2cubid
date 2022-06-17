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
                            <h4 class="mb-0">Add Order</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"><small><script>document.write(new Date().toDateString())</script></small></a></li>
                                    <!-- <li class="breadcrumb-item active">Wizard</li> -->
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Forms Steps</h4>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <?php if( get_marketer_retailers_count($_SESSION['admin_id']) > 0 ): ?>
                                    <form action=".?action=add_order" class="needs-validation" novalidate method="post" id="createOrderForm">
                                        <ul class="wizard-nav mb-5">
                                            <li class="wizard-list-item">
                                                <div class="list-item">
                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Order Details">
                                                        <i class="bx bx-user-circle"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            

                                        </ul>
                                        <!-- wizard-nav -->

                                        <div class="wizard-tab">
                                            <div class="text-center mb-4">
                                                <h5>Order Details</h5>
                                                <p class="card-title-desc">Fill all information below</p>
                                            </div>
                                            <div class="row"  id="showRetailerStocks" style="display:none;">
                                                <div class="col-md-4">
                                                    <div class="alert alert-success alert-dismissible fade show">
                                                        
                                                        <small>Minimum: <span id="minValue">loading</span></small></br>
                                                        <small>Maximum: <span id="maxValue">loading</span></small>
                                                        <small id="showStock"><p>Remaining bag(s): <span id="stockLevel">loading</span></p></small>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            
                                                            <label for="shopID" class="form-label text-primary">
                                                                Select Enterprise</label>
                                                            <!-- <input type="text" class="form-control" id="shopName" name="shop_name" placeholder="Enter Shop Name" required> -->
                                                            <select name="shopID" id="shopID" class="form-select" required>
                                                                <option value="">Select shop name</option>
                                                                <?php foreach(get_marketer_retailers($_SESSION['admin_id']) as $retailer): ?>
                                                                    <option value="<?php echo $retailer['shopID']; ?>"><?php echo $retailer['shop_name'].' - '.$retailer['customer_name']; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                            
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="quantity" class="form-label text-primary">Quantity</label>
                                                            <input type="number" min="1" class="form-control" name="quantity" placeholder="Enter quantity (bags)" id="quantity" required>
                                                            <input type="hidden" name="checkQuantity" id="checkQuantity">
                                                        </div>
                                                    </div><!-- end col -->
                                                </div><!-- end row -->

                                            </div>

                                        </div>
                                        <!-- wizard-tab -->                          

                                        <div class="d-flex align-items-start gap-3 mt-4">
                                            <button type="button" style="display:none;" class="btn btn-primary w-sm" id="prevBtnAddOrder">Previous</button>
                                            <button type="button" style="display:none;" class="btn btn-primary w-sm ms-auto" id="nextBtnAddOrder">Next</button>
                                            <button type="submit" style="display:none;" class="btn btn-primary w-sm ms-auto" id="submitBtnAddOrder">Submit</button>

                                        </div>
                                    </form>
                                <?php else: ?>

                                    <p class="text-center">No registered retailer(s)</p>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                
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
 
 
 <!-- ========== Add Order Modal ============= -->
 <?php include 'includes/add_order_modal.php'; ?> 
 <!-- ========== End of Modal ============= -->
 
 
 <!-- ========== Success Modal ============= -->
 <?php include 'includes/success_modal.php'; ?> 
 <!-- ========== End of Modal ============= -->



 <!-- ========== Footer ============= -->
 <?php include 'includes/footer.php'; ?>
 <!-- ========== End Footer ============= -->