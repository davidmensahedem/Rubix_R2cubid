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
                    <h4 class="mb-0">Delete Marketer</h4>

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
                    
                    <div class="card-body">
                        <form action="" class="needs-validation" novalidate method="post" id="deleteMarketerFormContainer">
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
                                    <h5>Search Marketer</h5>

                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="mt-3">
                                                <input type="text" class="form-control" id="searchMarketer" name="search" placeholder="Enter Name" required>
                                            </div>
                                        </div>
                                    </div>

                                   
                                </div>
                                
                                <div id="showDeleteInfo" class="d-none">
                                    <div class="row">
                                        <div class="col-lg-8 offset-md-2">
                                            <div class="mt-3">
                                                
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="d-flex flex-wrap align-items-center">
                                                            <small class="card-title mb-0">Results</small>
                                                        </div>
                                                    </div>
                                                    <div class="card-body pt-xl-1">
                                                        <div class="table-responsive">
                                                            <table id="searchMarketerDeleteTable" class="table table-striped table-centered align-middle table-nowrap mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>&nbsp;</th>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Role</th>
                                                                        <th>Contact</th>
                                                                        <th>Date Created</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>      

                                            </div>
                                                                            
                                        <!-- end col -->
                                    </div><!-- end row -->
                                   
                                </div>

                                                
                                           
                                                
                            </div>                   
                            <!-- wizard-tab -->                          

                           
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
 <?php include 'includes/delete_marketer_modal.php'; ?> 
 <!-- ========== End of Modal ============= -->
 
 
 <!-- ========== Success Modal ============= -->
 <?php include 'includes/success_modal.php'; ?> 
 <!-- ========== End of Modal ============= -->



 <!-- ========== Footer ============= -->
 <?php include 'includes/footer.php'; ?>
 <!-- ========== End Footer ============= -->




