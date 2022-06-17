<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-body p-0"> -->
<div class="table-responsive p-2">
    <table id="items_table" class="table">
        <thead class="bg-light">
            <tr class="border-0">


                <th class="border-0">Items ID</th>
                <th class="border-0">Name</th>
                <th class="border-0">Department</th>
                <th class="border-0">Section</th>
                <th class="border-0">Details</th>
                <th class="border-0">Date</th>
                <th class="border-0">Status</th>
                <th class="border-0">&nbsp;</th>


            </tr>
        </thead>


        <tbody>

            <?php foreach(get_all_items() as $item ): ?>

            <tr>
                <td><?php echo $item['itemsID']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo get_department_by_id($item['departmentID'])['name']; ?></td>
                <td><?php echo get_section_by_id($item['sectionID'])['section']; ?></td>
                <td><?php echo  render_section( $item['sectionID'], $item['itemsID'] ); ?></td>
                <td><?php echo $item['date']; ?></td>
                <td>

                    <?php if( $item['status'] == "Approved" ): ?>
                    <p class="text-success">
                        <b> <?php echo $item['status']; ?></b>
                    <p>
                        <?php else: ?>

                    <p class="label label-danger">
                        <?php echo $item['status']; ?>
                    <p>
                        <?php endif;?>


                </td>
                <td>
                    <span class="">

                        <?php if( $item['status'] == "Approved" ): ?>
                        <i class="mdi mdi-checkbox-marked-outline"></i>
                        <?php else: ?>

                        <form class="ApprovalForm" method="post" action=".?action=update_item_status">
                            <input type="hidden" name="itemsID" value="<?php echo $item['itemsID']; ?>">
                            <button type="submit"
                                class="btn btn-info btn-sm waves-effect waves-light"><small>Approve</small></button>
                        </form>
                        <?php endif;?>

                    </span>

                </td>
            </tr>


            <?php endforeach; ?>


        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>
<!-- </div>
    </div>
</div> -->