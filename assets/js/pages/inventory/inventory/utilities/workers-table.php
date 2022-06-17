<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-body p-0"> -->
<div class="table-responsive p-2">
    <table id="workers_table" class="table">
        <thead class="bg-light">
            <tr class="border-0">




                <th class="border-0">Section</th>
                <th class="border-0">Details</th>
                <th class="border-0">Date</th>
                <th class="border-0">Status</th>


            </tr>
        </thead>




        <?php if(  get_item_by_workerId($_SESSION['admin_id']) != false  ): ?>

        <tbody>

            <?php foreach(get_item_by_workerId($_SESSION['admin_id']) as $item ): ?>

            <tr>

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

            </tr>


            <?php endforeach; ?>

        </tbody>

        <?php else: ?>


        <?php endif; ?>



        <tfoot>

        </tfoot>
    </table>
</div>
<!-- </div>
    </div>
</div> -->