 <!-- show modal-showmore started-->
 <div class="modal" tabindex="-1" id="ShowModal">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Computer Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body" >
                    <table class="table table-bordered border-primary">
                        <tr>
                            <th>#id</th>
                            <td><?php echo $computers['id']; ?></td>

                        </tr>
                            <th>Computer name </th>
                            <td><?php echo $computers['com_name']; ?></td>

                        <tr>
                            <th>Computer serial-number </th>
                            <td><?php echo $computers['com_sn']; ?></td>
                        </tr>

                        

                        <tr>
                            <th rowspan="2">Phone</th>
                            <td>123-45-678</td>
                        </tr>

                        <tr>
                            <td>212</td>
                        </tr>
                    </table>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
    <!-- show modal started-->
</div>