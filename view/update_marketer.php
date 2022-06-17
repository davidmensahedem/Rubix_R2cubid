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
                    <h4 class="mb-0">Update Marketer</h4>

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
                                        <form action=".?action=update_marketer" method="post" id="updateMarketerForm" enctype="multipart/form-data">
                                            <input type="hidden" name="adminID" id="adminID">
                                            <ul class="wizard-nav mb-5">
                                                <li class="wizard-list-item">
                                                    <div class="list-item">
                                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Marketer Details">
                                                            <i class="bx bx-user-circle"></i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="wizard-list-item">
                                                    <div class="list-item">
                                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Contact and Image">
                                                            <i class="bx bx-file"></i>
                                                        </div>
                                                    </div>
                                                </li>
    
                                               
                                            </ul>
                                            <!-- wizard-nav -->
    
                                            <div class="wizard-tab">
                                                <div class="text-center mb-4">
                                                    <h5>Search Marketer</h5>

                                                    <div class="row">
                                                        <div class="col-md-6 offset-md-3">
                                                            <div class="mt-3">
                                                                <input type="text" class="form-control" id="updateSearchMarketer" name="search" placeholder="Enter Name">
                                                            </div>
                                                        </div>
                                                    </div>

                                            
                                                </div>
                                                <div id="showUpdateDetails" class="d-none">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="updateName" class="form-label text-primary">
                                                                    Name</label>
                                                                <input type="text" class="form-control" name="name" placeholder="Enter name" id="updateName" required>
                                                            </div>
                                                        </div><!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="updateEmail" class="form-label text-primary">
                                                                    Email</label>
                                                                <input type="text" class="form-control" name="email" placeholder="Enter email" id="updateEmail" required>
                                                            </div>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
    
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="updatePassword"
                                                                    class="form-label text-primary">Password</label>
                                                                <input type="text" class="form-control" name="password" placeholder="Enter password" id="updatePassword" required>
                                                            </div>
                                                        </div><!-- end col -->
                                                        <div class="col-lg-6 mb-4">
                                                            <div class="mb-3">
                                                            <label for="updateRole"
                                                                    class="form-label text-primary">Select role</label>
                                                                <select name="role" id="updateRole" class="form-select" required>
                                                                    <option value="Marketer">Marketer</option>
                                                                    <option value="Administrator">Administrator</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
                                                    
                                                </div>
    
                                            </div>
                                            <!-- wizard-tab -->
    
                                            <div class="wizard-tab">
                                                <div>
                                                    <div class="text-center mb-4">
                                                        <h5>Contact and Image</h5>
                                                    </div>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="updateContact" class="form-label text-primary">Contact</label>
                                                                    <input type="text" class="form-control" placeholder="Contact" name="contact" id="updateContact" required>
                                                                </div>
                                                            </div><!-- end col -->
    
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="updateImage"
                                                                        class="form-label text-primary">Upload Image</label>
                                                                    <input type="file" class="form-control" name="image" placeholder="" id="updateImage" required>
                                                                    <br/>
                                                                    <img src="" id="showMarketerImage"/>
                                                                    
                                                                </div>
                                                            </div><!-- end col -->
                                                        </div><!-- end row -->
                                                        
                                                    </div><!-- end form -->
                                                </div>
                                            </div>
                                            
                                            <div id="btnContainer" class="d-none">

                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" style="display:none;" class="btn btn-primary w-sm" id="prevBtnUpdateMarketer">Previous</button>
                                                    <button type="button" style="display:none;" class="btn btn-primary w-sm ms-auto mt-3" id="nextBtnUpdateMarketer">Next</button>
                                                    <button type="submit" style="display:none;" class="btn btn-primary w-sm ms-auto" id="submitBtnUpdateMarketer">Submit</button>
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
 <?php include 'includes/update_marketer_modal.php'; ?> 
 <!-- ========== End of Modal ============= -->
 
 
 <!-- ========== Success Modal ============= -->
 <?php include 'includes/success_modal.php'; ?> 
 <!-- ========== End of Modal ============= -->



 <!-- ========== Footer ============= -->
 <?php include 'includes/footer.php'; ?>
 <!-- ========== End Footer ============= -->