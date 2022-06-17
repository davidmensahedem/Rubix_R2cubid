<div class="table-responsive p-2">
    <table id="supplies_table" class="table">
        <thead class="bg-light">
            <tr class="border-0">

                <th class="border-0">Items ID</th>
                <th class="border-0">Name</th>
                <th class="border-0">Date</th>
                <th class="border-0">Status</th>
                <th class="border-0">Item</th>
                <th class="border-0">Quantity</th>
                <th class="border-0">Remarks</th>

            </tr>
        </thead>


        <tbody>

            <?php foreach(get_all_supplies() as $sup ): ?>

            <tr>
                <td><?php echo $sup['itemsID']; ?></td>
                <td><?php echo get_item_by_id( $sup['itemsID']  )['name']; ?></td>
                <td><?php echo get_item_by_id( $sup['itemsID']  )['date']; ?></td>
                <td>

                    <?php if( get_item_by_id( $sup['itemsID']  )['status'] == "Approved" ): ?>
                    <p class="text-success">
                        <b> <?php echo get_item_by_id( $sup['itemsID']  )['status']; ?></b>
                    <p>
                        <?php else: ?>

                    <p class="label label-danger">
                        <?php echo get_item_by_id( $sup['itemsID']  )['status']; ?>
                    <p>
                        <?php endif;?>

                </td>
                <td><?php echo $sup['item']; ?></td>
                <td><?php echo $sup['quantity']; ?></td>
                <td><?php echo $sup['remarks']; ?></td>


            </tr>


            <?php endforeach; ?>


        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>