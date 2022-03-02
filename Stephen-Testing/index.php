<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/table-styles.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600&display=swap" rel="stylesheet">

    <title>MediConnect Home</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/MediConnectLogo-blue.png">
</head>

<body class="mb-5">

    <!--  ====================   HEADER   ====================  -->

    <header>
        <!-- Top of Header -->
        <div class="header_top justify-content-between max-w-1300">

            <!-- Website Logo -->
            <div class="py-1">
                <img class="webLogo" src="images/MediConnectLogo-blue.png" alt="MediConnect Logo">
            </div>

            <!-- Login Button -->
            <div class="loginBtnDiv float-right sticky-top">
                <button id="suggestEditBtn" class="loginButtons pr-2" data-toggle="modal" data-target="#loginPanel">Suggest an Edit</button>
                <button id="loginBtn" class="loginButtons" data-toggle="modal" data-target="#loginPanel">Login</button>
            </div>
        </div> <!-- End of Header_top -->
        
        <!-- Bottom of Header (SEARCH BAR) -->
        <div class="header_btm p-2" id="search-bar">
            <div class="row mx-auto max-w-1300">

                <!-- Search input/button -->
                <div class="col-4">
                    <input type="text" id="searchByName" placeholder="Search...">
                </div>
            </div><!-- Row -->
        </div> <!-- End of Search Bar -->

        <!-- Generate Printable Page (Opens in new tab) -->
        <div class="position-fixed bottom-right-0 m-4">
            <a id="printBtn" onclick="print()" target="_blank"><img src="images/printer-icon.png" alt="Printer Icon"></a>
        </div>

    </header>


    <!-- Page Content -->
    <main class="p-0 max-w-1300">

        <!-- ====================   FACILITIES TABLE   ====================   -->

        <?php
        // Table with all the data
        include ("includes/facility-table.html");
        ?>

    </main>


    <!-- ====================   LOGIN POP-UP   ==================== -->

    <?php include('includes/forms/login-pop-up.html'); ?>


    <!-- ====================   REQUEST CHANGES POP-UP   ==================== -->

    <?php
    $modalID = "requestEntry";
    $formIDPrefix = "request";
    $modalHeader = "Make Changes for Request";
    $formAction = "#";
    $formMethod = "post";
    $formSubmitText = "Generate Request";

    include ("includes/forms/employee-info.php");
    $additionalFields = getEmployeeInfoForm();

    include("includes/forms/record-form.html");
    ?>


    <!-- ====================   REQUEST SUMMARY POP-UP   ==================== -->

    <div class="modal" id="request-summary">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h3>Confirm Request Details</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">

                    <?php # SCRIPT TO POST-VALIDATE REQUEST AND GENERATE SUMMARY

                    // Only run AFTER REQUEST form has been submitted
                    if (!empty($_POST)) {

                        // assign data to variables
                        include ("includes/request-variables.php");


                        ////   POST-VALIDATION   //// not required in Sprint 2

//                        include("includes/validation/validate-functions.php");
//                        include("includes/validation/validate.php");
                        $isValidRequest = true;
                        $errors = []; // TODO: put list of validation errors here

                        // Stop script if request is invalid
//                        if (!$isValidRequest) {
//                            die("");
//                        }

                        ////   DISPLAY SUMMARY   ////

                        echo "<script src='https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
                              <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF' crossorigin='anonymous'></script>
    
                              <script src='js/runtime-scripts/request-summary.js'></script>
                              <script>requestSummary();</script>";

                        //// SUMMARY CONTENT ////

                        if (!$isValidRequest) {
                            include ("includes/summaries/invalid-summary.php"); // USES $errors variable
                        }
                        else {
                            include ("includes/summaries/request-summary.php");
                        }
                    }

                    ?>

                </div> <!-- Modal Body -->
            </div> <!-- Modal-Content -->
        </div> <!-- dialog -->
    </div> <!-- Modal (REQUEST SUMMARY)-->




    <!-- ====================   SCRIPTS   ==================== -->

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <i class="bi bi-info-circle"></i>

    <!-- JavaScript Files -->
    <script src="js/element-constants.js"></script> <!-- ALL Element constants for use in scripts -->
    <script src="js/enableEdit.js"></script> <!-- Assigns/Handles the edit button click event -->
    <script src="js/editEntry.js"></script> <!-- This contains the click event for clicking entries -->
    <script src="js/formValidation.js"></script> <!-- contains onsubmit function used to validate forms -->
    <script src="js/printPage.js"></script>
</body>
</html>