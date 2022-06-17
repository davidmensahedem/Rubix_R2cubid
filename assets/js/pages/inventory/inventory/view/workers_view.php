<!-- Include header.php -->
<?php include 'utilities/header.php'; ?>


<!-- Include main-menu.php -->
<?php include 'utilities/main-menu.php'; ?>

<!-- Include navbar.php -->
<?php include 'utilities/navbar.php'; ?>



<div class="main-content">
    <div class="isotope-filter js__filter_isotope">
        <ul class="filter-controls">
            <!-- <li><a href="#" class="js__filter_control js__active" data-filter="*">All</a></li> -->
            <!-- <li><a href="#" class="js__filter_control" data-filter=".massage">Massage</a></li> -->
            <li><a href="#" class="js__filter_control" data-filter=".skin-care">Choose a section</a></li>
            <!-- <li><a href="#" class="js__filter_control" data-filter=".make-hair">Make Hair</a></li> -->
            <!-- <li><a href="#" class="js__filter_control" data-filter=".spa">Spa</a></li> -->
            <!-- <li><a href="#" class="js__filter_control" data-filter=".nail">Nail</a></li> -->
            <!-- <li><a href="#" class="js__filter_control" data-filter=".beauty">Beauty</a></li> -->
        </ul>
        <!-- /.filter-controls -->





        <!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->
        <div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item spa skin-care beauty"
            data-lightview-group="group">
            <a href="" id="openWorkEntry" class="item-gallery">
                <img src="assets/images/gallery/works.jfif" alt="" height="278.59" widht="324.4">
                <h2 class="title">Works</h2>
                <p class="text-center">Works</p>
                <!-- /.title -->
            </a>
        </div>


        <!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->
        <div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item spa skin-care beauty"
            data-lightview-group="group">
            <a href="" id="openSuppliesEntry" class="item-gallery">
                <img src="assets/images/gallery/supplies.jfif" alt="" height="278.59" widht="324.4">
                <h2 class="title">Supplies</h2>
                <p class="text-center">Supplies</p>
                <!-- /.title -->
            </a>
        </div>

        <!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->
        <div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item spa skin-care beauty">
            <a href="" id="openBookingsEntry" class="item-gallery" data-lightview-group="group">
                <img src="assets/images/gallery/bookings.jfif" alt="" height="278.59" widht="324.4">
                <h2 class="title">Bookings</h2>
                <p class="text-center">Bookings</p>
                <!-- /.title -->
            </a>
        </div>
        <!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->
    </div>
    <!-- /.row row-inline-block js__isotope_items -->
</div>
<!-- /.isotope-filter js__filter_isotope -->

</div>


<!-- Include works-entry-modal.php -->
<?php include 'utilities/modal-success.php'; ?>


<!-- Include works-entry-modal.php -->
<?php include 'utilities/works-entry-modal.php'; ?>


<!-- Include supplies-entry-modal.php -->
<?php include 'utilities/supplies-entry-modal.php'; ?>

<!-- Include bookings-entry-modal.php -->
<?php include 'utilities/bookings-entry-modal.php'; ?>




<!-- Include footer.php -->
<?php include 'utilities/footer.php'; ?>