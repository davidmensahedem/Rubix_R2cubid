<div class="table-responsive p-2">
    <table id="supplies_items_table" class="table">
        <thead class="bg-light">
            <tr class="border-0">

                <th class="border-0">Name</th>
                <th class="border-0">Rack Number</th>
                <th class="border-0">Shelf Number</th>
                <th class="border-0">Quantity</th>
                <th class="border-0">Date</th>

            </tr>
        </thead>

        <?php if(  get_added_items_count() > 0  ): ?>

        <tbody>

            <?php foreach(get_all_added_items() as $item ): ?>

            <tr>

                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['rack_number']; ?></td>
                <td><?php echo $item['shelf_number']; ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td><?php echo $item['date']; ?></td>

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