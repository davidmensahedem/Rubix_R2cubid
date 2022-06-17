<div class="table-responsive p-2">
    <table id="bookings_table" class="table">
        <thead class="bg-light">
            <tr class="border-0">

                <th class="border-0">Items ID</th>
                <th class="border-0">Name</th>
                <th class="border-0">Date Submitted</th>
                <th class="border-0">Status</th>
                <th class="border-0">Purpose</th>
                <th class="border-0">Event's Date</th>
                <th class="border-0">Start Time</th>
                <th class="border-0">End Time</th>

            </tr>
        </thead>


        <tbody>

            <?php foreach(get_all_bookings() as $booking ): ?>

            <tr>

                <td><?php echo $booking['itemsID']; ?></td>
                <td><?php echo get_item_by_id( $booking['itemsID']  )['name']; ?></td>
                <td><?php echo get_item_by_id( $booking['itemsID']  )['date']; ?></td>
                <td>

                    <?php if( get_item_by_id( $booking['itemsID']  )['status'] == "Approved" ): ?>
                    <p class="text-success">
                        <b> <?php echo get_item_by_id( $booking['itemsID']  )['status']; ?></b>
                    <p>
                        <?php else: ?>

                    <p class="label label-danger">
                        <?php echo get_item_by_id( $booking['itemsID']  )['status']; ?>
                    <p>
                        <?php endif;?>

                </td>
                <td><?php echo $booking['purpose']; ?></td>
                <td><?php echo $booking['date']; ?></td>
                <td><?php echo $booking['start_time']; ?></td>
                <td><?php echo $booking['end_time']; ?></td>

            </tr>


            <?php endforeach; ?>


        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>