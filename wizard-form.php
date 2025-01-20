<!doctype html>
<html lang="en">
<?php include "includes/header.php"; ?>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="wizardForm/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="wizardForm/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Get Shit Done Bootstrap Wizard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="wizardForm/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="wizardForm/assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->

    <link href="wizardForm/assets/css/demo.css" rel="stylesheet" />


</head>


<body>
    <div class="image-container set-full-height" style="background-image: url('wizardForm/assets/img/wizard.jpg')">
        <!--   Creative Tim Branding   -->



        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <!--      Wizard container        -->
                    <div class="wizard-container">

                        <div class="card wizard-card" data-color="orange" id="wizardProfile">
                            <form action="farmersdetailsformsubmit.php" method="POST" enctype="multipart/form-data">
                                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                                <div class="wizard-header">
                                    <h3>
                                        <b>BUILD</b> YOUR PROFILE <br>
                                        <small>This information will let us know more about you.</small>
                                    </h3>
                                </div>

                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#personalinf" data-toggle="tab">Personal Information</a></li>
                                        <li><a href="#Permaniculture" data-toggle="tab">Permaniculture</a></li>
                                        <li><a href="#Cultivation" data-toggle="tab">Cultivation</a></li>
                                        <li><a href="#document" data-toggle="tab">Document</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="personalinf">
                                        <div class="row">
                                            <h4 class="info-text"> Let's start with the basic information (with validation)</h4>

                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Full Name <small>(required)</small></label>
                                                    <input name="name" type="text" class="form-control" placeholder="Enter Your Name...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mobile Number <small>(required)</small></label>
                                                    <input name="mobile" type="tel" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);">
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Email <small>(required)</small></label>
                                                    <input name="email" type="email" class="form-control" placeholder="andrew@creative.com">
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>State</label><br>
                                                    <select name="state" class="form-control">
                                                        <option value="Afghanistan"> Afghanistan </option>
                                                        <option value="Albania"> Albania </option>
                                                        <option value="Algeria"> Algeria </option>
                                                        <option value="American Samoa"> American Samoa </option>
                                                        <option value="Andorra"> Andorra </option>
                                                        <option value="Angola"> Angola </option>
                                                        <option value="Anguilla"> Anguilla </option>
                                                        <option value="Antarctica"> Antarctica </option>
                                                        <option value="...">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Distric</label><br>
                                                    <select name="distric" class="form-control">
                                                        <option value="Afghanistan"> Afghanistan </option>
                                                        <option value="Albania"> Albania </option>
                                                        <option value="Algeria"> Algeria </option>
                                                        <option value="American Samoa"> American Samoa </option>
                                                        <option value="Andorra"> Andorra </option>
                                                        <option value="Angola"> Angola </option>
                                                        <option value="Anguilla"> Anguilla </option>
                                                        <option value="Antarctica"> Antarctica </option>
                                                        <option value="...">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>City</label><br>
                                                    <select name="city" class="form-control">
                                                        <option value="Afghanistan"> Afghanistan </option>
                                                        <option value="Albania"> Albania </option>
                                                        <option value="Algeria"> Algeria </option>
                                                        <option value="American Samoa"> American Samoa </option>
                                                        <option value="Andorra"> Andorra </option>
                                                        <option value="Angola"> Angola </option>
                                                        <option value="Anguilla"> Anguilla </option>
                                                        <option value="Antarctica"> Antarctica </option>
                                                        <option value="...">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Address line1<small>(required)</small></label>
                                                    <textarea name="add1" id="" cols="90" rows="3" class="form-control" placeholder="..."></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Address line2<small>(required)</small></label>
                                                    <textarea name="add2" id="" cols="90" rows="3" class="form-control" placeholder="..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Pin Code:- <small>(required)</small></label>
                                                    <input name="pincode" type="number" class="form-control" placeholder="pin code.." required>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <fieldset>
                                                        <label>Gender <small>(required)</small></label><br>
                                                        <label class="radio-inline">
                                                            <input name="gender" type="radio" value="Male"> Male
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input name="gender" type="radio" value="Female"> Female
                                                        </label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Cast</label><br>
                                                    <select name="cast" class="form-control">
                                                        <option value="Afghanistan"> ------Select Your Cast-----</option>
                                                        <option value="Afghanistan"> Genral</option>
                                                        <option value="Albania"> OBC </option>
                                                        <option value="Algeria"> ST </option>
                                                        <option value="American Samoa"> SC </option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Age <small>(required)</small></label>
                                                    <input name="age" type="number" class="form-control" pattern="[0-9]" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Last Education <small>(required)</small></label>
                                                    <input name="lasteducation" type="text" class="form-control" placeholder="Enter your last Education..." required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="Permaniculture">
                                        <h4 class="info-text"> What are you doing? (checkboxes) </h4>
                                        <div class="row">

                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Main Crop Type</label><br>
                                                    <select name="crop" class="form-control">
                                                        <option value="Afghanistan"> Rabi crops</option>
                                                        <option value="Albania"> Kharif crops</option>
                                                        <option value="Algeria"> Zaid Crops </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <fieldset>
                                                        <label>Water Ability <small>(required)</small></label><br>
                                                        <label class="radio-inline">
                                                            <input name="waterability" type="radio" value="Yes" id="water-yes">Yes
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input name="waterability" type="radio" value="No" id="water-no"> No
                                                        </label>
                                                    </fieldset>
                                                </div>
                                                <!-- Hidden inputs for Borewell and Duckwell -->
                                                <div class="form-group" id="extra-fields" style="display: none;">
                                                    <label for="borewell">Borewell</label>
                                                    <input type="text" class="form-control" id="borewell" name="borwell" placeholder="Enter Borewell Details">

                                                    <label for="duckwell">Duckwell</label>
                                                    <input type="text" class="form-control" id="duckwell" name="ductwell" placeholder="Enter Duckwell Details">
                                                </div>
                                            </div>

                                            <script>
                                                // JavaScript to toggle extra fields visibility
                                                document.getElementById("water-yes").addEventListener("click", function() {
                                                    document.getElementById("extra-fields").style.display = "block";
                                                });

                                                document.getElementById("water-no").addEventListener("click", function() {
                                                    document.getElementById("extra-fields").style.display = "none";
                                                });
                                            </script>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Selected Equipment</label>
                                                    <input type="text" id="selectedEquipment" class="form-control" name="selectedEquipment" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Basic Farmming Equipment Details</label><br>
                                                    <div>
                                                        <label><input type="checkbox" class="equipmentCheckbox" value="Tractor" name="selectedEquipment"> Tractor</label>
                                                    </div>
                                                    <div>
                                                        <label><input type="checkbox" class="equipmentCheckbox" value="Pipe" name="selectedEquipment"> Pipe</label>
                                                    </div>
                                                    <div>
                                                        <label><input type="checkbox" class="equipmentCheckbox" value="Motor" name="selectedEquipment"> Motor</label>
                                                    </div>
                                                    <div>
                                                        <label><input type="checkbox" class="equipmentCheckbox" value="knapsack sprayer" name="selectedEquipment"> knapsack sprayer</label>
                                                    </div>
                                                    <small class="form-text text-muted">Check options to add them to the input box.</small>
                                                </div>
                                            </div>
                                            <script>
                                                const checkboxes = document.querySelectorAll(".equipmentCheckbox");
                                                const selectedEquipmentInput = document.getElementById("selectedEquipment");

                                                checkboxes.forEach(checkbox => {
                                                    checkbox.addEventListener("change", function() {
                                                        // Collect checked values
                                                        const selectedValues = Array.from(checkboxes)
                                                            .filter(checkbox => checkbox.checked)
                                                            .map(checkbox => checkbox.value);

                                                        // Populate input with the selected values
                                                        selectedEquipmentInput.value = selectedValues.join(", ");
                                                    });
                                                });
                                            </script>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Last Soil Testing Year <small>(required)</small></label>
                                                    <input type="number" class="form-control" id="soilTestingYear" name="soilTestingYear" placeholder="Enter Year (e.g., 2023)" min="1900" max="2099" step="1" required>
                                                    <small class="form-text text-muted">Enter a four-digit year.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="Cultivation">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Are you living in a nice area? </h4>
                                            </div>

                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Land Location <small>(required)</small></label>
                                                    <textarea name="landlocation" id="" cols="90" rows="3" class="form-control" placeholder="..."></textarea>

                                                </div>
                                                <div class="form-group">
                                                    <label>Area in Hectare <small>(required)</small></label>
                                                    <input name="areainhec" type="text" class="form-control" placeholder="">
                                                </div>

                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <fieldset>
                                                        <label>Waste Portion <small>(required)</small></label><br>
                                                        <label class="radio-inline">
                                                            <input id="wasteYes" name="wasteportion" type="radio" value="Yes" required> Yes
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input id="wasteNo" name="wasteportion" type="radio" value="No" required> No
                                                        </label>
                                                    </fieldset>
                                                </div>
                                                <!-- Hidden section for irrigation -->
                                                <div class="form-group" id="irrigationSection" style="display: none;">
                                                    <label for="irrigationInput">Available for Irrigation (in sqft)</label>
                                                    <input type="number" class="form-control" id="irrigationInput" name="irrigationInput" placeholder="Enter area in sqft">
                                                </div>
                                                <div class="form-group">
                                                    <label>Waste Area in Sqft <small>(required)</small></label>
                                                    <input name="wasteareainsqft" type="text" class="form-control" placeholder="Waste Area in sqft">
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <fieldset>
                                                        <label>is Horticulture <small>(required)</small></label><br>
                                                        <label class="radio-inline">
                                                            <input id="wasteYes2" name="ishoriticulture" type="radio" value="Yes" required> Yes
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input id="wasteNo2" name="ishoriticulture" type="radio" value="No" required> No
                                                        </label>
                                                    </fieldset>
                                                </div>
                                                <!-- Hidden section for irrigation -->
                                                <div class="form-group" id="irrigationSection2" style="display: none;">
                                                    <label for="irrigationInput">Area (in sqft)</label>
                                                    <input type="number" class="form-control" id="irrigationInput" name="areasqft" placeholder="Enter area in sqft">
                                                </div>
                                                <div class="form-group">
                                                    <label>Total Type of Tree/Plants <small>(required)</small></label>
                                                    <input name="treeandplant" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Types of Soil</label><br>
                                                    <select name="soil" class="form-control">
                                                        <option value="Afghanistan"> ------Select Type of Soil-----</option>
                                                        <option value="Alluvial Soil"> Alluvial Soil</option>
                                                        <option value="Black Soil "> Black Soil </option>
                                                        <option value="Red Soil">Red Soil </option>
                                                        <option value="Laterite Soil"> Laterite Soil </option>
                                                        <option value=" Sandy Soil"> Sandy Soil </option>
                                                        <option value="Clay Soil"> Clay Soil </option>
                                                        <option value="Loamy Soil"> Loamy Soil </option>
                                                        <option value="Peaty and Marshy Soil"> Peaty and Marshy Soil </option>
                                                        <option value=" Mountain Soil"> Mountain Soil </option>

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <fieldset>
                                                        <label>is There any Loan on Property <small>(required)</small></label><br>
                                                        <label class="radio-inline">
                                                            <input id="wasteYes3" name="loan" type="radio" value="Yes"> Yes
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input id="wasteNo3" name="loan" type="radio" value="No"> No
                                                        </label>
                                                    </fieldset>
                                                    <div class="form-group mb-3" id="irrigationSection3" style="display: none;">
                                                        <label for="irrigationInput">Loan Amount</label>
                                                        <input type="number" class="form-control" id="irrigationInput" name="loanamount" placeholder="eg.:-1000000">
                                                        <label for="irrigationInput">Loan Duration</label>
                                                        <input type="text" class="form-control" id="irrigationInput" name="loanduration" placeholder="eg.: 5 Month">
                                                        <label for="irrigationInput">Intrest Rate</label>
                                                        <input type="number" class="form-control" id="irrigationInput" name="interestrate" placeholder="eg.:-1000/-">
                                                        <label for="irrigationInput">Closur Date</label>
                                                        <input type="date" class="form-control" id="irrigationInput" name="closuredate" placeholder="eg.:- 2025">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Property Ownership Type</label><br>
                                                    <select name="propertyownership" class="form-control">
                                                        <option value="Afghanistan"> ------Select Type of Soil-----</option>
                                                        <option value="Sole Ownership">Sole Ownership (Single Ownership)</option>
                                                        <option value="Black Soil "> Joint Tenancy </option>
                                                        <option value=" Tenancy in Common"> Tenancy in Common </option>
                                                        <option value="Tenancy by the Entirety"> Tenancy by the Entirety </option>
                                                        <option value=" Community Property">Community Property </option>
                                                        <option value="Life Estate"> Life Estate </option>
                                                        <option value="Trust Ownership"> Trust Ownership </option>
                                                        <option value="Condominium Ownership"> Condominium Ownership </option>
                                                        <option value=" Cooperative "> Cooperative </option>
                                                        <option value="Condominium Ownership"> Leasehold Ownership </option>
                                                        <option value=" Cooperative "> Land Contract </option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <fieldset>
                                                        <label>is any Dispute <small>(required)</small></label><br>
                                                        <label class="radio-inline">
                                                            <input name="dispute" type="radio" value="yes" required> Yes
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input name="dispute" type="radio" value="no" required> No
                                                        </label>
                                                    </fieldset>
                                                </div>
                                            </div>

                                            <script>
                                                // Add event listeners to multiple radio buttons
                                                document.getElementById('wasteYes').addEventListener('click', function() {
                                                    document.getElementById('irrigationSection').style.display = 'block';
                                                });
                                                document.getElementById('wasteNo').addEventListener('click', function() {
                                                    document.getElementById('irrigationSection').style.display = 'none';
                                                });
                                                document.getElementById('wasteNo2').addEventListener('click', function() {
                                                    document.getElementById('irrigationSection2').style.display = 'none';
                                                });
                                                document.getElementById('wasteYes2').addEventListener('click', function() {
                                                    document.getElementById('irrigationSection2').style.display = 'block';
                                                });
                                                document.getElementById('wasteYes3').addEventListener('click', function() {
                                                    document.getElementById('irrigationSection3').style.display = 'block';
                                                });
                                                document.getElementById('wasteNo3').addEventListener('click', function() {
                                                    document.getElementById('irrigationSection3').style.display = 'none';
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="document">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Upload Your Documents </h4>
                                            </div>

                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Adhar Card <small>(required)</small></label>
                                                    <input name="adhar" type="file" class="form-control" accept=".pdf,.jpg,.jpeg,.png">
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Pan CArd <small>(required)</small></label>
                                                    <input name="pan" type="file" class="form-control" accept=".pdf,.jpg,.jpeg,.png">
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Epic Card <small>(optional)</small></label>
                                                    <input name="epic" type="file" class="form-control" accept=".pdf,.jpg,.jpeg,.png" multiple>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="wizard-footer height-wizard">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                        <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='submit' value='Finish' />

                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->
    </div>
</body>
<?php include "includes/footer.php"; ?>
<!--   Core JS Files   -->
<script src="wizardForm/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="wizardForm/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="wizardForm/assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="wizardForm/assets/js/gsdk-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="wizardForm/assets/js/jquery.validate.min.js"></script>

</html>