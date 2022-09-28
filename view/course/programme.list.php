<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data table</h4>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <th>#</th>
                            <th>Programme</th>
                            <th>School</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?=ProgrammeListAll($conn)?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>