<div class="modal fade in" id="SuppliesEntryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="z-index:500;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Supplies</h4>
            </div>
            <div class="modal-body">
                <p>Enter Supplies Information</p>
                <form id="SuppliesForm" method="post" action=".?action=create_supplies_item">


                    <div class="form-group">
                        <select class="form-control select2_1" name="supplesitem" id="supplesitemid" required="">

                            <option value="">Select Item</option>
                            <?php foreach(get_all_added_items() as $item): ?>
                            <option value="<?php echo $item['name']; ?>">
                                <?php echo $item['name']; ?></option>
                            <?php endforeach; ?>



                        </select>
                        <small id="itemQuantityInfo" class="text-primary">Select response</small>
                    </div>

                    <div class="form-group">
                        <select class="form-control select2_1" name="suppliesquantity" id="suppliesquantity"
                            required="">

                            <option value="">Select Quantity</option>
                            <?php foreach(select_quantity() as $item): ?>
                            <option value="<?php echo $item; ?>">
                                <?php echo $item; ?></option>
                            <?php endforeach; ?>

                        </select>
                        <small class="text-danger" id="checkquantity"></small>
                    </div>





                    <!-- <div class="form-group">

                        <input type="number" name="suppliesquantity" required="" class="form-control"
                            id="suppliesquantity" placeholder="Quantity" max="10">
                    </div> -->
                    <div class="form-group">
                        <textarea name="suppliesremark" class="form-control" id="suppliesremark" cols="30" rows="10"
                            placeholder="Remarks"></textarea>
                    </div>



                    <div class="">
                        <button id="suppliesClose" type="button" class="btn btn-default btn-sm waves-effect waves-light"
                            data-dismiss="modal">Close</button>
                        <button id="suppliesSubmit" type="submit"
                            class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>



<div class="modal fade in" id="FinalSuppliesEntryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
            <div class="modal-body">
                <p class="text-center">Are you sure you want to submit supplies information?</p>
            </div>

            <div class="modal-footer mb-3">
                <br />
                <br />
                <br />
                <br />
                <br />
                <button type="button" class="btn btn-default btn-sm waves-effect waves-light"
                    data-dismiss="modal">Close</button>
                <button type="button" id="confirmSuppliesEntry"
                    class="btn btn-primary btn-sm waves-effect waves-light">Confirm</button>
                <br />
                <br />
            </div>
        </div>
    </div>
</div>