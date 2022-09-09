<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data table</h4>
            <div class="row">
                <form method="POST" action="index.php">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Student Name</label>
                            <select name="student" class="form-control js-example-basic-single">
                                <?=StudentCombo($conn)?>
                            </select>
                        </div>
                        <div class='row'>
                            <div class='col-md-3'>
                                <div class='form-group row'>
                                    <label class='col-sm-4 col-form-label'>Week 01</label>
                                    <div class='col-sm-8'>
                                        <input type='text' name='wk1' value='<?=$wk1?>' placeholder="0"
                                            class='form-control'>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class='form-group row'>
                                    <label class='col-sm-4 col-form-label'>Week 02</label>
                                    <div class='col-sm-8'>
                                        <input type='text' name='wk2' value='<?=$wk2?>' placeholder="0"
                                            class='form-control'>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class='form-group row'>
                                    <label class='col-sm-4 col-form-label'>Week 03</label>
                                    <div class='col-sm-8'>
                                        <input type='text' name='wk3' value='<?=$wk3?>' placeholder="0"
                                            class='form-control'>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class='form-group row'>
                                    <label class='col-sm-4 col-form-label'>Week 04</label>
                                    <div class='col-sm-8'>
                                        <input type='text' name='wk4' value='<?=$wk4?>' placeholder="0"
                                            class='form-control'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-3'>
                                <div class='form-group row'>
                                    <label class='col-sm-4 col-form-label'>Week 05</label>
                                    <div class='col-sm-8'>
                                        <input type='text' name='wk5' value='<?=$wk5?>' placeholder="0"
                                            class='form-control'>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class='form-group row'>
                                    <label class='col-sm-4 col-form-label'>Week 06</label>
                                    <div class='col-sm-8'>
                                        <input type='text' name='wk6' value='<?=$wk6?>' placeholder="0"
                                            class='form-control'>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class='form-group row'>
                                    <label class='col-sm-4 col-form-label'>Week 07</label>
                                    <div class='col-sm-8'>
                                        <input type='text' name='wk7' value='<?=$wk7?>' placeholder="0"
                                            class='form-control'>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class='form-group row'>
                                    <label class='col-sm-4 col-form-label'>Week 08</label>
                                    <div class='col-sm-8'>
                                        <input type='text' name='wk8' value='<?=$wk8?>' placeholder="0"
                                            class='form-control'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-3'>
                                <div class='form-group row'>
                                    <label class='col-sm-4 col-form-label'>Week 09</label>
                                    <div class='col-sm-8'>
                                        <input type='text' name='wk9' value='<?=$wk9?>' placeholder="0"
                                            class='form-control'>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class='form-group row'>
                                    <label class='col-sm-4 col-form-label'>Week 10</label>
                                    <div class='col-sm-8'>
                                        <input type='text' name='wk10' value='<?=$wk10?>' placeholder="0"
                                            class='form-control'>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class='form-group row'>
                                    <label class='col-sm-4 col-form-label'>Week 11</label>
                                    <div class='col-sm-8'>
                                        <input type='text' name='wk11' value='<?=$wk11?>' placeholder="0"
                                            class='form-control'>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class='form-group row'>
                                    <label class='col-sm-4 col-form-label'>Week 12</label>
                                    <div class='col-sm-8'>
                                        <input type='text' name='wk12' value='<?=$wk12?>' placeholder="0"
                                            class='form-control'>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" value="add-attend-details" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-12 grid-margin stretch-card">
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
                                    <th>Student</th>
                                    <th>Present</th>
                                    <th>Absent</th>
                                    <th>Total</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?=AttendDetailsListSheet($conn)?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>