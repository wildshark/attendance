<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Horizontal Two column</h4>
                <form class="form-sample">
                    <p class="card-description">
                        Personal info
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">code</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="programme" value="<?=$code?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Course Title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="entry" value="<?=$title?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Level</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="entry" value="<?=$level?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Semester</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="entry" value="<?=$semester?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" value="<?=$value?>"><?=$button?></button>
                </form>
            </div>
        </div>
    </div>
</div>