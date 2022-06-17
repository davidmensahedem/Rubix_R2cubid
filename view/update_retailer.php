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
                    <h4 class="mb-0">Update Retailer</h4>

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
                                        <form action=".?action=update_retailer" method="post" id="updateRetailerForm" enctype="multipart/form-data">
                                            <input type="hidden" name="customerID" id="retailerUpdateID">
                                            <ul class="wizard-nav mb-5">
                                                <li class="wizard-list-item">
                                                    <div class="list-item">
                                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Retailer Details">
                                                            <i class="bx bx-user-circle"></i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="wizard-list-item">
                                                    <div class="list-item">
                                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Shop Details">
                                                            <i class="bx bx-file"></i>
                                                        </div>
                                                    </div>
                                                </li>
    
                                               
                                            </ul>
                                            <!-- wizard-nav -->
    
                                            <div class="wizard-tab">
                                                <div class="text-center mb-4">
                                                    <h5>Search Retailer</h5>

                                                    <div class="row">
                                                        <div class="col-md-6 offset-md-3">
                                                            <div class="mt-3">
                                                                <input type="text" class="form-control" id="retailerUpdateSearch" name="search" placeholder="Enter Retailer ID, or Shop name, or Customer name">
                                                            </div>
                                                        </div>
                                                    </div>

                                            
                                                </div>
                                                <div id="showRetailerUpdateDetails" class="d-none">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="updateRetailerName" class="form-label text-primary">
                                                                    Retailer Name</label>
                                                                <input type="text" class="form-control" name="retailer_name" placeholder="Enter name" id="updateRetailerName" required>
                                                            </div>
                                                        </div><!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="updateRetailerEmail" class="form-label text-primary">
                                                                    Retailer Email</label>
                                                                <input type="text" class="form-control" name="retailer_email" placeholder="Enter email" id="updateRetailerEmail" required>
                                                            </div>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
    
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="updateRetailerPhoneNumber"
                                                                    class="form-label text-primary">Phone number</label>
                                                                <input type="text" class="form-control" name="retailer_contact" placeholder="Enter phone number" id="updateRetailerPhoneNumber" required>
                                                            </div>
                                                        </div><!-- end col -->
                                                        <div class="col-lg-6 mb-4">
                                                            <div class="mb-3">
                                                                <label for="updateRetailerAddress" class="form-label text-primary">Address</label>
                                                                <input type="text" class="form-control" name="retailer_address" placeholder="Enter address" id="updateRetailerAddress" required>
                                                            </div>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
                                                    
                                                </div>
    
                                            </div>
                                            <!-- wizard-tab -->
    
                                            <div class="wizard-tab">
                                                <div>
                                                    <div class="text-center mb-4">
                                                        <h5>Shop Details</h5>
                                                    </div>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="updateRetailerMaximumStock"
                                                                        class="form-label text-primary">Maximum stock</label>
                                                                    <input type="number" class="form-control" name="maximum_stock" placeholder="Enter mininum stock" id="updateRetailerMaximumStock" required>
                                                                </div>
                                                                                                                                
                                                            </div><!-- end col -->
    
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="updateRetailerMinimumStock"
                                                                        class="form-label text-primary">Minimum stock</label>
                                                                    <input type="number" class="form-control" name="minimum_stock" placeholder="Enter mininum stock" id="updateRetailerMinimumStock" required>
                                                                </div>
                                                            </div><!-- end col -->
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="updateRetailerImage"
                                                                        class="form-label text-primary">Shop Picture</label>
                                                                    <input type="file" class="form-control" name="shop_picture" placeholder="" id="updateRetailerImage" required>
                                                                    <br/>
                                                                    <img src="" id="showRetailerImage"/>
                                                                </div>
                                                                
                                                            </div><!-- end col -->
    
                                                            
                                                        </div><!-- end row -->
                                                        
                                                    </div><!-- end form -->
                                                </div>
                                            </div>
                                            
                                            <div id="btnContainer" class="d-none">

                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" style="display:none;" class="btn btn-primary w-sm" id="prevBtnUpdateRetailer">Previous</button>
                                                    <button type="button" style="display:none;" class="btn btn-primary w-sm ms-auto mt-3" id="nextBtnUpdateRetailer">Next</button>
                                                    <button type="submit" style="display:none;" class="btn btn-primary w-sm ms-auto" id="submitBtnUpdateRetailer">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- end col -->
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
 <?php include 'includes/update_retailer_modal.php'; ?> 
 <!-- ========== End of Modal ============= -->
 
 
 <!-- ========== Success Modal ============= -->
 <?php include 'includes/success_modal.php'; ?> 
 <!-- ========== End of Modal ============= -->



 <!-- ========== Footer ============= -->
 <?php include 'includes/footer.php'; ?>
 <!-- ========== End Footer ============= -->