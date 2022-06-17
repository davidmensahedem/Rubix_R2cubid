<div class="modal fade in" id="BookingsEntryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="z-index:500;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Bookings</h4>
            </div>
            <div class="modal-body">
                <small>Enter Bookings Information</small>
                <form id="BookingsForm" method="post" action=".?action=create_bookings_item">

                    <div class="form-group">

                        <textarea name="bookingspurpose" id="bookingspurpose" required="" class="form-control"
                            placeholder="Purpose for booking"></textarea>
                    </div>
                    <div class="form-group">

                        <input type="date" name="bookingsdate" required="" value="<?php echo date('Y-m-d'); ?>"
                            class="form-control" min="<?php echo date('Y-m-d'); ?>" id="bookingsdate"
                            placeholder="Date">
                    </div>
                    <div class="form-group">
                        <small><label for="bookingstime">From</label></small>
                        <input type="time" name="bookingstime" required="" class="form-control"
                            value="<?php echo date('H:i'); ?>" id="bookingstime" placeholder="Time">
                        <small><label for="endbookingstime">To</label></small>
                        <input type="time" required="" name="endbookingstime" class="form-control" id="endbookingstime"
                            placeholder="Time">
                        <small class="mt-2 text-danger" id="showBookingError"></small>
                    </div>





                    <div class="">
                        <button type="button" class="btn btn-default btn-sm waves-effect waves-light"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>



<div class="modal fade in" id="FinalBookingsEntryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="z-index:500;">
            <br />
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirm</h4>
            </div>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <div class="modal-body">
                <p class="text-center">Are you sure you want to submit bookings information?</p>
            </div>

            <div class="modal-footer mb-3">
                <br />
                <br />
                <br />
                <br />
                <br />
                <button type="button" class="btn btn-default btn-sm waves-effect waves-light"
                    data-dismiss="modal">Close</button>
                <button type="button" id="confirmBookingsEntry"
                    class="btn btn-primary btn-sm waves-effect waves-light">Confirm</button>
                <br />
                <br />
            </div>
        </div>
    </div>
</div>