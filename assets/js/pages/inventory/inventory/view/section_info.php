<!-- Include header.php -->
<?php include 'utilities/header.php'; ?>


<!-- Include main-menu.php -->
<?php include 'utilities/main-menu.php'; ?>

<!-- Include navbar.php -->
<?php include 'utilities/navbar.php'; ?>






<div id="wrapper">
    <div class="main-content">
        <div class="box-content">

            <h4 class="box-title">Section Information</h4>


            <!-- Tab -->
            <div class="row">


                <div class="col-md-12 margin-bottom-20">
                    <ul class="nav nav-tabs nav-justified" id="myTabs-justified" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home-justified" id="home-tab-justified" role="tab" data-toggle="tab"
                                aria-controls="home" aria-expanded="true">Works</a>
                        </li>
                        <li role="presentation"><a href="#profile-justified" role="tab" id="profile-tab-justified"
                                data-toggle="tab" aria-controls="profile">Supplies</a></li>

                        <li role="presentation"><a href="#dropdown-justified" role="tab" id="dropdown-tab-justified"
                                data-toggle="tab" aria-controls="dropdown">Bookings</a></li>


                    </ul>
                    <!-- /.nav-tabs -->
                    <div class="tab-content" id="myTabContent-justified">
                        <div class="tab-pane fade in active" role="tabpanel" id="home-justified"
                            aria-labelledby="home-tab-justified">

                            <div class="row small-spacing">


                                <div class="col-lg-12 col-xs-12">
                                    <div class="box-content card white">

                                        <!-- /.box-title -->
                                        <div class="card-content">

                                            <?php include 'utilities/works-table.php'; ?>

                                        </div>
                                        <!-- /.card-content -->
                                    </div>
                                    <!-- /.box-content -->
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="profile-justified"
                            aria-labelledby="profile-tab-justified">

                            <div class="row small-spacing">


                                <div class="col-lg-12 col-xs-12">
                                    <div class="box-content card white">

                                        <!-- /.box-title -->
                                        <div class="card-content">


                                            <?php include 'utilities/supplies-table.php'; ?>

                                        </div>
                                        <!-- /.card-content -->
                                    </div>
                                    <!-- /.box-content -->
                                </div>

                            </div>


                        </div>
                        <!-- <div class="tab-pane fade" role="tabpanel" id="dropdown1-justified"
                            aria-labelledby="dropdown1-tab-justified">
                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                                organic
                                lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork
                                tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie
                                helvetica.
                                DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg
                                banh
                                mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog.
                                Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown.
                                Pitchfork sustainable tofu synth chambray yr.</p>
                        </div> -->
                        <div class="tab-pane fade" role="tabpanel" id="dropdown-justified"
                            aria-labelledby="dropdown2-tab-justified">

                            <div class="row small-spacing">


                                <div class="col-lg-12 col-xs-12">
                                    <div class="box-content card white">

                                        <!-- /.box-title -->
                                        <div class="card-content">

                                            <?php include 'utilities/bookings_table.php'; ?>


                                        </div>
                                        <!-- /.card-content -->
                                    </div>
                                    <!-- /.box-content -->
                                </div>

                            </div>


                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>


            </div>

            <!-- End of Tab -->



        </div>















        <!-- /.row -->
        <footer class="footer">
            <ul class="list-inline">
                <li>2016 © NinjaAdmin.</li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </footer>
    </div>
    <!-- /.main-content -->
</div>
<!--/#wrapper -->

<?php include 'utilities/admin-create-modal.php'; ?>
<?php include 'utilities/admin-update-modal.php'; ?>
<?php include 'utilities/admin-delete-modal.php'; ?>
<?php include 'utilities/modal-success.php'; ?>




<!-- Include footer.php -->
<?php include 'utilities/footer.php'; ?>