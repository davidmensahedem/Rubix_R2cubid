<div class="table-responsive p-2">
    <table id="works_table" class="table">
        <thead class="bg-light">
            <tr class="border-0">

                <th class="border-0">Items ID</th>
                <th class="border-0">Name</th>
                <th class="border-0">Date</th>
                <th class="border-0">Status</th>
                <th class="border-0">Works Information</th>


            </tr>
        </thead>


        <tbody>


            <?php foreach(  get_all_works() as $work ): ?>

            <tr>
                <td><?php echo $work['itemsID']; ?></td>
                <td><?php echo get_item_by_id( $work['itemsID']  )['name']; ?></td>
                <td><?php echo get_item_by_id( $work['itemsID']  )['date']; ?></td>
                <td>

                    <?php if( get_item_by_id( $work['itemsID']  )['status'] == "Approved" ): ?>
                    <p class="text-success">
                        <b> <?php echo get_item_by_id( $work['itemsID']  )['status']; ?></b>
                    <p>
                        <?php else: ?>

                    <p class="label label-danger">
                        <?php echo get_item_by_id( $work['itemsID']  )['status']; ?>
                    <p>
                        <?php endif;?>


                </td>
                <td><?php echo $work['works_info']; ?></td>

            </tr>

            <?php endforeach; ?>




        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>