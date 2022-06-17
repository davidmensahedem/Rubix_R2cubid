<!-- Marketer's Registered Retailers Table -->

<div class="table-responsive">
    <table id="marketer_retailers_table"
        class="table m-0 table-colored-bordered themegreen table-striped table-bordered">
        <thead class="bg-light">
            <tr class="border-0">

                <th class="border-0">Name</th>
                <th class="border-0">Owner</th>
                <th class="border-0">Phone</th>
                <th class="border-0">Location</th>
                <th class="border-0">New Shop</th>
                


            </tr>
        </thead>
        <tbody>
            <?php foreach(get_marketer_retailers($_SESSION['admin_id']) as $retailer): ?>
                <tr>
                    <td><?php echo $retailer['shop_name']; ?></td>
                    <td><?php echo $retailer['customer_name']; ?></td>
                    <td><?php echo $retailer['customer_contact']; ?></td>
                    <td><?php echo $retailer['shop_location']; ?></td>
                    <td>
                        
                
                        <div class="badge badge-soft-success font-size-12">
                            <form action=".?action=add_shop_page" method="post">
                                <input type="hidden" name="shopID" value="<?php echo $retailer['shopID']; ?>">
                                <button type="submit" class="btn btn-success w-sm ms-auto"><small><i class=""></i> Add Shop</small></button>
                                
                            </form>
                            

                        </div>
                        
                    </td>
        
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>



<!-- End of Marketer's Registered Retailers Table -->