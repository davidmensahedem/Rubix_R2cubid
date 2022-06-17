<!-- Order Table -->

<div class="table-responsive">
    <table id="orders_table"
        class="table m-0 table-colored-bordered themegreen table-striped table-bordered">
        <thead class="bg-light">
            <tr class="border-0">

                <th class="border-0">Product</th>
                <th class="border-0">Order for</th>
                <th class="border-0">Quantity</th>
                <th class="border-0">Marketer</th>
                <th class="border-0">Date</th>
                <th class="border-0">Time</th>
                <th class="border-0">Status</th>
                <th class="border-0">&nbsp;</th>


            </tr>
        </thead>
        <tbody>
            <?php foreach(get_all_orders() as $order): ?>
                
                <tr>
                    <td><?php echo $order['product_name']; ?></td>
                    <td><?php echo get_retailer_by_shop( $order['shopID'] )['shop_name']; ?></td>
                    <td><?php echo $order['quantity']; ?></td>
                    <td><?php echo get_marketer($order['marketerID'])['name']; ?></td>
                    <td><?php echo $order['date']; ?></td>
                    <td><?php echo $order['time']; ?></td>
                    <td><?php echo $order['status']; ?></td>
                    <td>
                        <?php if($order['status'] == 'Approved'): ?>
                            <span class="badge badge-success">
                                <i class="mdi mdi-tooltip-check text-danger font-size-24"></i>
                            </span>
                        <?php else: ?>
                            <form action=".?action=update_order_status" method="post">
                            <small><button type="submit" class="btn-success">Approve</button></small>
                            <input type="hidden" name="id" value="<?php echo $order['orderID']; ?>">                  
                        </form>

                        <?php endif;?>
                        
                    </td>
                </tr>
                
            <?php endforeach; ?>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>



<!-- End of Order Table -->