<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Default form</h4>
                <p class="card-description">
                    Basic form layout
                </p>
                <form method="POST" action="index.php" class="forms-sample">
                    <div class="form-group">
                        <label>Course</label>
                        <select name="course" class="form-control js-example-basic-single">
                            <?=CourseCombo($conn)?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select name="level" class="form-control js-example-basic-single">
                            <?=LevelCombo()?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Semester</label>
                        <select name="semester" class="form-control js-example-basic-single">
                            <?=SemesterCombo()?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Academy Year</label>
                        <input type="text" class="form-control" name="year" placeholder="">
                    </div>
                    <button type="submit" name="submit" value="add-attend-main" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>