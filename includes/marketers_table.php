<!-- Order Table -->

<div class="table-responsive">
    <table id="marketers_table"
        class="table m-0 table-colored-bordered themegreen table-striped table-bordered">
        <thead class="bg-light">
            <tr class="border-0">

                <th class="border-0">Name</th>
                <th class="border-0">Email</th>
                <th class="border-0">Type</th>
                <th class="border-0">Contact</th>
                <!-- <th class="border-0">Max Level</th>
                <th class="border-0">Location</th>
                <th class="border-0">Marketer</th> -->
                


            </tr>
        </thead>
        <tbody>
            <?php foreach(get_all_marketers() as $marketer): ?>
                <tr>
                    <td><?php echo $marketer['name']; ?></td>
                    <td><?php echo $marketer['email']; ?></td>
                    <td><?php echo $marketer['type']; ?></td>
                    <td><?php echo $marketer['contact']; ?></td>
                   

                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>



<!-- End of Order Table -->