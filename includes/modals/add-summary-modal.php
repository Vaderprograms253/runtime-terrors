<div class="modal" id="add-summary">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h3>Confirm New Entry Details</h3>
            </div>

            <div class="modal-body">

                <?php # SCRIPT TO POST-VALIDATE ADD FORM AND GENERATE SUMMARY

                // Only run AFTER ADD form has been submitted
                if (!empty($_POST) && (($_POST['formName'] === 'add'))) {

                    // assign data to variables
                    $prefix = 'add';
                    include ("includes/form-variables.php");


                    ////   POST-VALIDATION   //// not required in Sprint 2

                    include("includes/validation/validate-functions.php");
                    include("includes/validation/validate.php");


                    ////   DISPLAY SUMMARY   ////

                    echo "<script src='https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
                              <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF' crossorigin='anonymous'></script>
    
                              <script src='js/runtime-scripts/generate-summary.js'></script>
                              <script>addSummary();</script>";

                    //// SUMMARY CONTENT ////

                    if (!$isValidEntry) {
                        include ("includes/forms/invalid-summary-form.php"); // USES $errors variable
                    }
                    else {
                        include("includes/forms/add-summary-form.php");
                    }
                }

                ?>

            </div> <!-- Modal Body -->
        </div> <!-- Modal-Content -->
    </div> <!-- dialog -->
</div> <!-- Modal (ADD SUMMARY)-->