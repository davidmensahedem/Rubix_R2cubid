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

                        <div class="card" style="background-color:#bbe6ff;">
                                    <div class="card-header">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <h5 class="card-title mb-0">Retailer Outlets</h5>
                                            
                                        </div>
                                    </div>
                                    <div class="card-body pt-xl-1">
                                        <!-- ========== Orders Table ============= -->
                                        <?php include 'includes/retailers_table.php'; ?>
                                        <!-- ========== End Orders Table ============= -->
                                    </div>
                                </div>
                                
                            </div>


                        
                        <!-- <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0" style="color:#092d42">Marketers</h4>


                        </div> -->
                    </div>
                </div>
                <!-- end page title -->



            

            
            
                
            </div> <!-- container-fluid -->
        </div>



        
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