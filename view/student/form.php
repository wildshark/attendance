<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Horizontal Two column</h4>
                <form method="POST" action="index.php" class="form-sample">
                    <p class="card-description">
                        Personal info
                    </p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Surname</label>
                                <div class="col-sm-9">
                                    <input type="text" name="surname" value="<?=$surname?>" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mid. Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="middle" value="<?=$middle?>" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="fname" value="<?=$fname?>" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Index</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="index" value="<?=$index?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Programme</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="programme" value="<?=$programme?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Level</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="level" value="<?=$level?>" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nationality</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="nationality" value="<?=$nationality?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mobile</label>
                                <div class="col-sm-9">
                                    <input type="text" name="mobile" value="<?=$mobile?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" value="<?=$email?>" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Entry year</label>
                                <div class="col-sm-9">
                                    <input type="text" name="entry" value="<?=$entry?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Stream</label>
                                <div class="col-sm-9">
                                    <input type="text" name="stream" value="<?=$stream?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <input type="text" name="status" value="<?=$status?>" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" value="<?=$value?>" class="btn btn-success"><?=$button?></button>
                </form>
            </div>
        </div>
    </div>
</div>