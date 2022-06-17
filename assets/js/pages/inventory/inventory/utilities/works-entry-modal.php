<div class="modal fade in" id="WorksEntryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="z-index:500;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Works</h4>
            </div>
            <div class="modal-body">
                <p>Enter works information</p>
                <form id="workInfoForm" method="post" action=".?action=create_works_item">



                    <div class="form-group">
                        <textarea required="" class="form-control" name="workinfo" id="workinfo" cols="30"
                            rows="10"></textarea>
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



<div class="modal fade in" id="FinalWorksEntryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="z-index:500;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirm</h4>
            </div>
            <br />
            <br />
            <div class="modal-body">
                <p class="text-center">Are you sure you want to submit works information?</p>
            </div>

            <div class="modal-footer">
                <br />
                <br />
                <br />
                <button type="button" class="btn btn-default btn-sm waves-effect waves-light"
                    data-dismiss="modal">Close</button>
                <button type="button" id="confirmWorksEntry"
                    class="btn btn-primary btn-sm waves-effect waves-light">Confirm</button>
            </div>
        </div>
    </div>
</div>