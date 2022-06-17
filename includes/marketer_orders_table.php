<!-- Marketer's Orders Table -->

<div class="table-responsive">
    <table id="marketer_orders_table"
        class="table m-0 table-colored-bordered themegreen table-striped table-bordered">
        <thead class="bg-light">
            <tr class="border-0">

                <th class="border-0">Product</th>
                <th class="border-0">Shop</th>
                <th class="border-0">Quantity</th>
                <th class="border-0">Date</th>
                <th class="border-0">Status</th>
                


            </tr>
        </thead>
        <tbody>
            <?php foreach(get_marketer_orders($_SESSION['admin_id']) as $order): ?>
                <tr>
                    <td><?php echo $order['product_name']; ?></td>
                    <td><?php echo get_retailer_by_shop($order['shopID'])['shop_name']; ?></td>
                    <td><?php echo $order['quantity']; ?></td>
                    <td><?php echo $order['date']; ?></td>
                    <td><?php echo $order['status']; ?></td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>



<!-- End of Marketer's Orders Table -->