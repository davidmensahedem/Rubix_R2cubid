<div class="row small-spacing">
    <div class="col-lg-3 col-md-6 col-xs-6">
        <div class="box-content bg-success text-white">
            <div class="statistics-box">
                <!-- <i class="ico small fa fa-diamond"></i> -->


                <?php if( get_works_count() > 0 ): ?>
                <p class="text text-white">WORKS</p>
                <h2 class="counter"><?php echo get_works_count(); ?></h2>
                <?php else: ?>
                <p class="counter">No Works</p>
                <?php endif;?>
            </div>
        </div>
        <!-- /.box-content -->
    </div>
    <!-- /.col-lg-3 col-md-6 col-xs-12 -->
    <div class="col-lg-3 col-md-6 col-xs-6">
        <div class="box-content bg-info text-white">
            <div class="statistics-box">
                <!-- <i class="ico small fa fa-download"></i> -->


                <?php if( get_supplies_count() > 0 ): ?>
                <p class="text text-white">SUPPLIES</p>
                <h2 class="counter"><?php echo get_supplies_count(); ?></h2>
                <?php else: ?>
                <p class="counter">No supplies</p>
                <?php endif;?>
            </div>
        </div>
        <!-- /.box-content -->
    </div>
    <!-- /.col-lg-3 col-md-6 col-xs-12 -->
    <div class="col-lg-3 col-md-6 col-xs-6">
        <div class="box-content bg-danger text-white">
            <div class="statistics-box">
                <!-- <i class="ico small fa fa-bug"></i> -->

                <?php if( get_bookings_count() > 0 ): ?>
                <p class="text text-white">BOOKINGS</p>
                <h2 class="counter"><?php echo get_bookings_count(); ?></h2>
                <?php else: ?>
                <p class="counter">No bookings</p>
                <?php endif;?>
            </div>
        </div>
        <!-- /.box-content -->
    </div>
    <!-- /.col-lg-3 col-md-6 col-xs-12 -->
    <div class="col-lg-3 col-md-6 col-xs-6">
        <div class="box-content bg-warning text-white">
            <div class="statistics-box">
                <!-- <i class="ico small fa fa-usd"></i> -->


                <?php if( get_admins_count() > 0 ): ?>
                <p class="text text-white">ADMINS</p>
                <h2 class="counter"><?php echo get_admins_count(); ?></h2>
                <?php else: ?>
                <p class="counter">No admin</p>
                <?php endif;?>
            </div>
        </div>
        <!-- /.box-content -->
    </div>
    <!-- /.col-lg-3 col-md-6 col-xs-12 -->
</div>