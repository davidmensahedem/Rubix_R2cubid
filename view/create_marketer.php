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
                    <h4 class="mb-0">Add Marketer</h4>

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
                        <form action=".?action=create_marketer" class="needs-validation" novalidate method="post" id="createMarketerForm" enctype="multipart/form-data">
                            <ul class="wizard-nav mb-5">
                                <li class="wizard-list-item">
                                    <div class="list-item">
                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Marketer Details">
                                            <i class="bx bx-user-circle"></i>
                                        </div>
                                    </div>
                                </li>
                                

                            </ul>
                            <!-- wizard-nav -->

                            <div class="wizard-tab">
                                <div class="text-center mb-4">
                                    <h5>Marketer Details</h5>
                                    <p class="card-title-desc">Fill all information below</p>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="name" class="form-label text-primary">
                                                    Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="password" class="form-label text-primary">Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="Enter password" id="password" required>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="email"
                                                    class="form-label text-primary">Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Enter Email" id="email" required>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="image"
                                                    class="form-label text-primary">Image</label>
                                                <input type="file" class="form-control" placeholder="Choose Image" name="image" id="image" required>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div><!-- end row -->

                                    <div class="row">
                                        <div class="col-5 offset-md-6">
                                            <p>
                                                <img style="display:none;" alt="image" id="preview"/>
                                            </p>
                                        </div>
                                    </div>
                                   
                                </div>

                            </div>
                            <!-- wizard-tab -->                          

                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button type="button" style="display:none;" class="btn btn-primary w-sm" id="prevBtnCreateMarketer">Previous</button>
                                <button type="button" style="display:none;" class="btn btn-primary w-sm ms-auto" id="nextBtnCreateMarketer">Next</button>
                                <button type="submit" style="display:none;" class="btn btn-primary w-sm ms-auto" id="submitBtnCreateMarketer">Submit</button>

                            </div>
                        </form>
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
 
 
 <!-- ========== Create Marketer Modal ============= -->
 <?php include 'includes/create_marketer_modal.php'; ?> 
 <!-- ========== End of Modal ============= -->
 
 
 <!-- ========== Success Modal ============= -->
 <?php include 'includes/success_modal.php'; ?> 
 <!-- ========== End of Modal ============= -->



 <!-- ========== Footer ============= -->
 <?php include 'includes/footer.php'; ?>
 <!-- ========== End Footer ============= -->