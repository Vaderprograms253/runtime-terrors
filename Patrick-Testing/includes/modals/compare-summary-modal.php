<!--
    Set the following variables for includes:

    $prefix             prefix added to ids to refer to the corresponding instance
    $modalHeader        Header to display at the top of the summary modal
    $displayFunction    function used to display modal on load (from generate-summary.js)
    $summarySubmitText  Text displayed on submit button
    $summaryOldHeader   Header for the details from before changes
    $summaryNewHeader   Header for the new details
    $summaryFormAction  page for form to submit to
    $summaryExtra       variable for additional info to be passed
-->
<div class="modal" id="<?php echo $prefix; ?>-summary">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h3><?php echo $modalHeader; ?></h3>
            </div>

            <div class="modal-body">

                <?php # SCRIPT TO POST-VALIDATE EDIT FORM AND GENERATE SUMMARY

                // Only run AFTER ADD form has been submitted
                if (!empty($_POST) && (($_POST['formName'] === $prefix))) {

                    // assign data to variables
                    include ("includes/form-variables.php");


                    ////   POST-VALIDATION   ////

                    include("includes/validation/validate-functions.php");
                    include("includes/validation/validate.php");


                    ////   DISPLAY SUMMARY   ////

                    echo "<script src='https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
                              <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF' crossorigin='anonymous'></script>
    
                              <script src='js/runtime-scripts/generate-summary.js'></script>
                              <script> $displayFunction </script>";

                    //// SUMMARY CONTENT ////

                    if (!$isValidEntry) {
                        include ("includes/forms/invalid-summary-form.php"); // USES $errors variable
                    }
                    else {
                        $summaryIDPrefix = $prefix;

                        if ($summaryIDPrefix === 'request') {
                            $summaryExtra = "<!-- Employee Info -->
                                            <div class='row'>
                                                <div class='col-12'>
                                                    <div class='border-bottom border-dark mb-3 mx-auto'>
                                                        <h3 class='mt-2'>Employee Info</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-5'>
                                                    <p class='d-block mb-1'>$fname $lname</p><p class='d-block'>$email</p>
                                                </div>
                                                <div class='col-7'>
                                                    <p>$message</p>
                                                </div>
                                            </div>";
                        }
                        else {
                            $summaryExtra = "";
                        }
                        include("includes/forms/compare-summary-form.php");
                    }
                }

                ?>

            </div> <!-- Modal Body -->
        </div> <!-- Modal-Content -->
    </div> <!-- dialog -->
</div> <!-- Modal -->
