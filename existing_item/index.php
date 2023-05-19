
<!DOCTYPE html>
<html lang="en">
<?php
include("../side_menu.php");
include '../db_conn.php'
?>
<head>
    <!-- Required meta tags-->
   
    <!-- Title Page-->
    <title>Form 1-Add product</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">

        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Add Product</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Item name <b style='color:Red !important;'>*</b></label>
                                    <input class="input--style-4" type="text" name="" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- <div class="input-group">
                                    <label class="label">Item type</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div> -->
                                  <div class="input-group">
                            <label class="label">Item type <b style='color:Red !important;'>*</b></label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject" required>
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option required>Electronics Items</option>
                                    <option required>Non Electronics Items</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"> Date <b style='color:Red !important;'>*</b></label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday" required>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                             <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Number Of Items <b style='color:Red !important;'>*</b></label>
                                    <input class="input--style-4" type="number" name="" required>
                                </div>
                            </div>

                           <!-- <div class="col-2">
                                <div class="input-group">
                                    <label class="label"></label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Source <b style='color:Red !important;'>*</b></label>
                                    <input class="input--style-4" type="" name="" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">location <b style='color:Red !important;'>*</b></label>
                                    <input class="input--style-4" type="text" name="" required>
                                </div>
                            </div>
                        </div>

                     <!--   <div class="input-group">
                            <label class="label"></label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div> -->
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
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