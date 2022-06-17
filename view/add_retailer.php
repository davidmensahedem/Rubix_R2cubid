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
                    <h4 class="mb-0">Add a retailer</h4>

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
                                        <form action=".?action=add_retailer" class="needs-validation" novalidate method="post" id="addRetailerForm" enctype="multipart/form-data">

                                            
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
                                                
                                                <li class="wizard-list-item">
                                                    <div class="list-item">
                                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Shop Adjustments">
                                                            <i class="bx bx-edit"></i>
                                                        </div>
                                                    </div>
                                                </li>

                                                
    
                                               
                                            </ul>
                                            <!-- wizard-nav -->
    
                                            <div class="wizard-tab">
                                                <div class="text-center mb-4">
                                                    <p>Retailer details</p>
                                                    <small class="card-title-desc">Fill all information below</small>
                                                </div>
                                                <div id="" class="">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="retailerName" class="form-label text-primary">
                                                                    Retailer Name</label>
                                                                <input required type="text" class="form-control" name="retailer_name" placeholder="Enter name of the retailer" id="retailerName">
                                                            </div>
                                                        </div><!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="retailerEmail" class="form-label text-primary">
                                                                    Retailer Email</label>
                                                                <input required type="email" class="form-control" name="retailer_email" placeholder="Enter email of the retailer" id="retailerEmail">
                                                            </div>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
    
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="retailerContact"
                                                                    class="form-label text-primary">Phone Number</label>
                                                                <input required type="text" maxLength="10" minLength="10" class="form-control" name="contact" placeholder="Enter retailer's phone number" id="retailerContact">
                                                            </div>
                                                        </div><!-- end col -->
                                                        
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="retailerAddress"
                                                                    class="form-label text-primary">Address</label>
                                                                <input required type="text" class="form-control" name="address" placeholder="Enter retailer's address or GhanaPost Address" id="retailerAddress">
                                                            </div>
                                                        </div><!-- end col -->
                                                        
                                                    </div><!-- end row -->
                                                    
                                                </div>
    
                                            </div>
                                            <!-- wizard-tab -->
    
                                            <div class="wizard-tab">
                                                <div>
                                                    <div class="text-center mb-4">
                                                        <p>Shop details</p>
                                                        <small class="card-title-desc">Fill all information below</small>
                                                    </div>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="shopName" class="form-label text-primary">Enterprise Name</label>
                                                                    <input required type="text" class="form-control" placeholder="Name of the enterprise" name="shop_name" id="shopName">
                                                                </div>

                                                                <div id="showNewShopExists" class="alert alert-danger alert-dismissible fade show" role="alert" style="display:none">
                                                                    <i class="mdi mdi-alert-outline me-2"></i>
                                                                    Shop name exists
                                                                </div>
                                                                
                                                               
                                                                <input type="hidden" id="checkOldShop" name="checkShop">

                                                            </div><!-- end col -->
    
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="shopRegion" class="form-label text-primary">Region</label>
                                                                    <select name="shop_region" id="shopRegion" class="form-select" required>
                                                                        <option value="">Select region</option>
                                                                    </select>
                                                                </div>
                                                            </div><!-- end col -->
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="shopLocation" class="form-label text-primary">Area/Location</label>
                                                                    <select name="shop_location" id="shopLocation" class="form-select" required>
                                                                        <option value="">Select area or location</option>
                                                                    </select>
                                                                </div>
                                                            </div><!-- end col -->
    
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="shopLandmark" class="form-label text-primary">Landmark</label>
                                                                    <input required type="text" class="form-control" placeholder="Any landmark closer to the enterprise" name="shop_landmark" id="shopLandmark">
                                                                </div>
                                                            </div><!-- end col -->
                                                        </div><!-- end row -->
                                                       
                                                       
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="shopPicture" class="form-label text-primary">Enterprise Picture</label>
                                                                    <input required type="file" class="form-control" placeholder="Picture of the enterprise" name="shop_picture" id="shopPicture">
                                                                </div>
                                                            </div><!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <p>
                                                                        <img style="display:none;" alt="image" id="preview"/>
                                                                    </p>
                                                                </div>
                                                            </div><!-- end col -->
    
                                                           
                                                        </div><!-- end row -->
                                                       
                                                       
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <button type="button" id="recordShopCoordinate" class="btn btn-success"><small>Record Coordinate</small></button>
                                                                    <!-- <u><p class="mt-2 text-primary">Record Coordinate</p></u> -->
                                                                    <input required type="hidden" name="shop_coordinate" id="shopCoordinateValues"/>
                                                                    <p class="mt-2">
                                                                        <span class="badge badge-soft-danger font-size-12" id="showShopCoordinate"></span><br/>
                                                                        
                                                                    </p>
                                                                </div>
                                                            </div><!-- end col -->
    
                                                            
                                                        </div><!-- end row -->


                                                        



                                                    </div><!-- end form -->
                                                </div>
                                            </div>

                                            <!-- wizard-nav -->
    
                                            <div class="wizard-tab">
                                                <div class="text-center mb-4">
                                                    <p>Shop Adjustments</p>
                                                    <small class="card-title-desc">Fill all information below</small>
                                                </div>
                                                <div id="" class="">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="minimumStock" class="form-label text-primary">
                                                                    Stock Level (Minimum)</label>
                                                                <input required type="number" min="1" class="form-control" name="minimum_stock" placeholder="Enter minimum stock" id="minimumStock">
                                                            </div>
                                                        </div><!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="maximumStock" class="form-label text-primary">
                                                                Stock Level (Maximum)</label>
                                                                <input required type="number" min="1" class="form-control" name="maximum_stock" placeholder="Enter maximum stock" id="maximumStock">
                                                            </div>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
    
                                                    
                                                    
                                                </div>
    
                                            </div>
                                            <!-- wizard-tab -->
                                            
                                            <div id="" class="">

                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" style="display:none;" class="btn btn-primary w-sm" id="prevBtn">Previous</button>
                                                    <button type="button" style="display:none;" class="btn btn-primary w-sm ms-auto" id="nextBtn">Next</button>
                                                    <button type="submit" style="display:none;" class="btn btn-primary w-sm ms-auto" id="submitBtn">Submit</button>
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
 <?php include 'includes/add_retailer_modal.php'; ?> 
 <!-- ========== End of Modal ============= -->
 
 
 <!-- ========== Success Modal ============= -->
 <?php include 'includes/success_modal.php'; ?> 
 <!-- ========== End of Modal ============= -->



 <!-- ========== Footer ============= -->
 <?php include 'includes/footer.php'; ?>
 <!-- ========== End Footer ============= -->