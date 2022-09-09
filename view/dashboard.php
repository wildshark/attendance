<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-5 mb-4 mb-xl-0">
                <h4 class="font-weight-bold">Hi, Welcomeback!</h4>
                <h4 class="font-weight-normal mb-0">JustDo Dashboard,</h4>
            </div>
            <div class="col-12 col-xl-7">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <div class="border-right pe-4 mb-3 mb-xl-0">
                        <p class="text-muted">Total Student</p>
                        <h4 class="mb-0 font-weight-bold"><?=$total_student?></h4>
                    </div>
                    <div class="border-right pe-4 mb-3 mb-xl-0">
                        <p class="text-muted">Student Deferred</p>
                        <h4 class="mb-0 font-weight-bold">0</h4>
                    </div>
                    <div class="border-right pe-4 mb-3 mb-xl-0">
                        <p class="text-muted">Terminate</p>
                        <h4 class="mb-0 font-weight-bold">0</h4>
                    </div>
                    <div class="pe-3 mb-3 mb-xl-0">
                        <p class="text-muted">Graduate</p>
                        <h4 class="mb-0 font-weight-bold">0</h4>
                    </div>
                    <div class="mb-3 mb-xl-0">
                        <button class="btn btn-warning rounded-0 text-white">Downloads</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title text-md-center text-xl-left">Level 100</p>
                <div
                    class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?=$_100?></h3>
                    <i class="ti-user icon-md text-success mb-0 mb-md-3 mb-xl-0"></i>
                </div>
                <p class="mb-0 mt-2 text-warning"><?=number_format($p100,0)?>% <span class="text-black ms-1"><small>(30 days)</small></span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title text-md-center text-xl-left">Level 200</p>
                <div
                    class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?=$_200?></h3>
                    <i class="ti-user icon-md text-success mb-0 mb-md-3 mb-xl-0"></i>
                </div>
                <p class="mb-0 mt-2 text-danger"><?=number_format($p200,0)?>% <span class="text-black ms-1"><small>(30 days)</small></span></p>
            </div>
        </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title text-md-center text-xl-left">Level 300</p>
                <div
                    class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?=$_300?></h3>
                    <i class="ti-user icon-md text-success mb-0 mb-md-3 mb-xl-0"></i>
                </div>
                <p class="mb-0 mt-2 text-success"><?=number_format($p300,0)?>%<span class="text-black ms-1"><small>(30 days)</small></span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title text-md-center text-xl-left">Level 400</p>
                <div
                    class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?=$_400?></h3>
                    <i class="ti-user icon-md text-success mb-0 mb-md-3 mb-xl-0"></i>
                </div>
                <p class="mb-0 mt-2 text-success"><?=number_format($p400,0)?>%<span class="text-black ms-1"><small>(30 days)</small></span>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Top Products</p>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Programme</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?=programmelist($conn)?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>