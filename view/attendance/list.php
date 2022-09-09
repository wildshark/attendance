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
                                <th>Code</th>
                                <th>Course Title</th>
                                <th>Level</th>
                                <th>Semester</th>
                                <th>Academic Year</th>
                                <th>Student</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?=AttendMainListSheet($conn)?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>