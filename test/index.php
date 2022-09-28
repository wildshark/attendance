<?php
include("application.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Application Forms</h2>
                    <form method="POST" action="application.php">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Full Name" name="name">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="BIRTHDATE" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Email" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="P.O.Box" name="box">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nationality" name="nationality">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Phone Number" name="mobile">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="School Attended" name="attended">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Grades Achieved" name="achieved">
                        </div>
                        <h4 class="title">Select your program choose</h4>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="sdm">
                                <option disabled="disabled" selected="selected">Program (Schoolof Development Management (S.D.M)</option>
                                    <?=sdm($data)?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="dohm">
                                    <option disabled="disabled" selected="selected">Program (Department of hospitality management)</option>
                                    <?=dohm($data)?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="dobs">
                                    <option disabled="disabled" selected="selected">Program (DEPARTMENT OF BUSINESS STUDIES)</option>
                                    <?=dobs($data)?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="dohaas">
                                    <option disabled="disabled" selected="selected">Program(Department of Health And Allied Sciences)</option>
                                    <?=dohaas($data)?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="sops">
                                    <option disabled="disabled" selected="selected">Program (SCHOOL OF PROFESSIONAL STUDIES) </option>
                                    <?=sops($data)?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="icag">
                                    <option disabled="disabled" selected="selected">Program (Institute Of Chartered Accountant (ICAG)</option>
                                    <?=icag($data)?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="dofp">
                                    <option disabled="disabled" selected="selected">Program(Development Of Film Production)</option>
                                    <?=dofp($data)?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="sosat">
                                    <option disabled="disabled" selected="selected">Program (SCHOOL OF SCIENCE AND TECHNOLOGY)</option>
                                    <?=sosat($data)?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="dosg">
                                    <option disabled="disabled" selected="selected">Program (Department of Surveying and Geo-information)</option>
                                    <?=dosg($data)?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="doe">
                                    <option disabled="disabled" selected="selected">Program (Department of Engineering)</option>
                                    <?=doe($data)?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="doit">
                                    <option disabled="disabled" selected="selected">Program( Department of Information Technology)</option>
                                    <?=doit($data)?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="sotam">
                                    <option disabled="disabled" selected="selected">Program ( SCHOOL OF THEOLOGY AND MINISTRY)</option>
                                    <?=sotam($data)?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="soms">
                                    <option disabled="disabled" selected="selected">Program (School Of Ministerial Studies) </option>
                                    <?=soms($data)?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
