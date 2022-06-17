<!-- Order Table -->

<div class="table-responsive">
    <table id="retailers_table"
        class="table m-0 table-colored-bordered themegreen table-striped table-bordered">
        <thead class="bg-light">
            <tr class="border-0">

                <th class="border-0">Name</th>
                <th class="border-0">Owner</th>
                <th class="border-0">Phone</th>
                <th class="border-0">Stock Level</th>
                <th class="border-0">Max Level</th>
                <th class="border-0">Location</th>
                <th class="border-0">Marketer</th>
                


            </tr>
        </thead>
        <tbody>
            <?php foreach(get_all_retailers() as $retailer): ?>
                <tr>
                    <td><?php echo $retailer['shop_name']; ?></td>
                    <td><?php echo $retailer['customer_name']; ?></td>
                    <td><?php echo $retailer['customer_contact']; ?></td>
                    <td><?php echo $retailer['stock_level']; ?></td>
                    <td><?php echo $retailer['max_level']; ?></td>
                    <td><?php echo $retailer['shop_location'].'<br/>'.'<button class="badge"><a target="_blank" href="'.$retailer["shop_coordinate"].'">Show on map</a></button>'; ?></td>
                    <td><?php echo get_marketer($retailer['marketerID'])['name']; ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>



<!-- End of Order Table -->