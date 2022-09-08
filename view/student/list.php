<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data table</h4>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th> #</th>
                                <th>Index</th>
                                <th>Surname</th>
                                <th>Middle</th>
                                <th>Name</th>
                                <th>Programme</th>
                                <th>Level</th>
                                <th>Nationality</th>
                                <th>Mobile</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?=StudentListAll($conn)?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>