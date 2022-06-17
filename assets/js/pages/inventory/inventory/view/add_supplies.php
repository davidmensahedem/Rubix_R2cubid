<!-- Include header.php -->
<?php include 'utilities/header.php'; ?>


<!-- Include main-menu.php -->
<?php include 'utilities/main-menu.php'; ?>

<!-- Include navbar.php -->
<?php include 'utilities/navbar.php'; ?>






<div id="wrapper">
    <div class="main-content">
        <div class="box-content">

            <h4 class="box-title">Add Supplies</h4>


            <!-- Tab -->
            <div class="row">


                <div class="col-md-12 margin-bottom-20">
                    <ul class="nav nav-tabs nav-justified" id="myTabs-justified" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home-justified" id="home-tab-justified" role="tab" data-toggle="tab"
                                aria-controls="home" aria-expanded="true">Add Item</a>
                        </li>
                        <li role="presentation"><a href="#profile-justified" role="tab" id="profile-tab-justified"
                                data-toggle="tab" aria-controls="profile">All Items</a></li>

                    </ul>
                    <!-- /.nav-tabs -->
                    <div class="tab-content" id="myTabContent-justified">
                        <div class="tab-pane fade in active" role="tabpanel" id="home-justified"
                            aria-labelledby="home-tab-justified">

                            <div class="row small-spacing">


                                <div class="col-lg-6 col-xs-12 col-md-offset-3">
                                    <div class="box-content card white">

                                        <!-- /.box-title -->
                                        <div class="card-content">
                                            <form id="createItem" method="post" action=".?action=add_supplies_item">
                                                <div class="form-group">
                                                    <label for="itemname">Enter Item</label>
                                                    <input name="itemname" type="text" required="" class="form-control"
                                                        id="itemname" placeholder="Item Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="racknumber">Enter Rack Number</label>
                                                    <input name="racknumber" type="text" required=""
                                                        class="form-control" id="racknumber" placeholder="Rack Number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="shelfnumber">Enter Shelf Number</label>
                                                    <input name="shelfnumber" type="text" required=""
                                                        class="form-control" id="shelfnumber"
                                                        placeholder="Shelf Number">
                                                </div>

                                                <div class="form-group">
                                                    <select class="form-control select2_1" name="itemquantity"
                                                        id="itemquantity" required="">

                                                        <option selected="" value="">Select Quantity</option>
                                                        <?php foreach(select_quantity() as $department): ?>
                                                        <option value="<?php echo $department; ?>">
                                                            <?php echo $department; ?></option>
                                                        <?php endforeach; ?>



                                                    </select>
                                                </div>





                                                <button id="admincreatesubmit" type="submit"
                                                    class="btn btn-primary btn-sm waves-effect waves-light">Add</button>
                                            </form>
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


                                            <?php include 'utilities/addeditems_table.php'; ?>

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


<?php include 'utilities/modal-success.php'; ?>




<!-- Include footer.php -->
<?php include 'utilities/footer.php'; ?>