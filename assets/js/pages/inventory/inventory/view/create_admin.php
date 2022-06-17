<!-- Include header.php -->
<?php include 'utilities/header.php'; ?>


<!-- Include main-menu.php -->
<?php include 'utilities/main-menu.php'; ?>

<!-- Include navbar.php -->
<?php include 'utilities/navbar.php'; ?>






<div id="wrapper">
    <div class="main-content">
        <div class="box-content">

            <h4 class="box-title">Manage Administrator</h4>


            <!-- Tab -->
            <div class="row">


                <div class="col-md-12 margin-bottom-20">
                    <ul class="nav nav-tabs nav-justified" id="myTabs-justified" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home-justified" id="home-tab-justified" role="tab" data-toggle="tab"
                                aria-controls="home" aria-expanded="true">Create Admin</a>
                        </li>
                        <li role="presentation"><a href="#profile-justified" role="tab" id="profile-tab-justified"
                                data-toggle="tab" aria-controls="profile">Update Admin</a></li>

                        <li role="presentation"><a href="#dropdown-justified" role="tab" id="dropdown-tab-justified"
                                data-toggle="tab" aria-controls="dropdown">Delete Admin</a></li>


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
                                            <form id="createAdmin" method="post" action=".?action=create_admin">
                                                <div class="form-group">
                                                    <label for="name">Enter Name</label>
                                                    <input name="name" type="text" required="" class="form-control"
                                                        id="name" placeholder="Worker Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Enter Email</label>
                                                    <input name="email" type="email" required="" class="form-control"
                                                        id="email" placeholder="Worker Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input name="password" type="password" required=""
                                                        class="form-control" id="password"
                                                        placeholder="Enter your password">
                                                </div>

                                                <div class="form-group">
                                                    <select class="form-control select2_1" name="departmentID"
                                                        id="department" required="">

                                                        <option selected="" value="">Select Department</option>
                                                        <?php foreach(get_all_departments() as $department): ?>
                                                        <option value="<?php echo $department['id']; ?>">
                                                            <?php echo $department['name']; ?></option>
                                                        <?php endforeach; ?>



                                                    </select>
                                                </div>





                                                <button id="admincreatesubmit" type="submit"
                                                    class="btn btn-primary btn-sm waves-effect waves-light">Create</button>
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


                                <div class="col-lg-6 col-xs-12 col-md-offset-3">
                                    <div class="box-content card white">

                                        <!-- /.box-title -->
                                        <div class="card-content">
                                            <form id="updateAdmin" method="post" action=".?action=update_admin">
                                                <div class="form-group">
                                                    <select class="form-control select2_1" name="adminID"
                                                        id="updateSelect" required="">

                                                        <option selected="" value="">Select Administrator</option>
                                                        <?php foreach(get_all_admins() as $admin): ?>
                                                        <option value="<?php echo $admin['id']; ?>">
                                                            <?php echo $admin['name']; ?></option>
                                                        <?php endforeach; ?>



                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <label for="updatename">Enter Name</label>
                                                    <input type="text" name="updatename" required=""
                                                        class="form-control" id="updatename" placeholder="Worker Name">
                                                </div>


                                                <div class="form-group">
                                                    <label for="updateemail">Enter Email</label>
                                                    <input type="email" name="updateemail" required=""
                                                        class="form-control" id="updateemail"
                                                        placeholder="Worker Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="updatepassword">Password</label>
                                                    <input type="password" name="updatepassword" required=""
                                                        class="form-control" id="updatepassword"
                                                        placeholder="Enter your password">
                                                </div>







                                                <button type="submit"
                                                    class="btn btn-primary btn-sm waves-effect waves-light">Update</button>
                                            </form>
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


                                <div class="col-lg-6 col-xs-12 col-md-offset-3">
                                    <div class="box-content card white">

                                        <!-- /.box-title -->
                                        <div class="card-content">
                                            <form id="DeleteAdmin" method="post" action=".?action=delete_admin">



                                                <div class="form-group">
                                                    <select class="form-control select2_1" name="adminID" id="adminID"
                                                        required="">

                                                        <option selected="" value="">Select Administrator</option>
                                                        <?php foreach(get_all_admins() as $admin): ?>
                                                        <option value="<?php echo $admin['id']; ?>">
                                                            <?php echo $admin['name']; ?></option>
                                                        <?php endforeach; ?>



                                                    </select>
                                                </div>





                                                <button type="submit"
                                                    class="btn btn-primary btn-sm waves-effect waves-light">Delete</button>
                                            </form>
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