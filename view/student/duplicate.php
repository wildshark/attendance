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
                                <th>Student Index</th>
                                <th>Num. of Records</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?=StudentIndexDuplicate($conn);?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>