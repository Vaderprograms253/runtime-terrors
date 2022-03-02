<?php
    $pageType = "indexPage";
    $pageTitle = "MediConnect Home";
    include("includes/header.php");
?>
    <!-- Page Content -->
    <main class="p-0 max-w-1300">

        <!-- ====================   FACILITIES TABLE   ====================   -->

        <?php
        // Connect to database
        include("includes/connect.php");

        // Table with all the data from database
        $tableID = "facilities-table";
        include("includes/facility-table.php");
        ?>

    </main>


    <!-- ====================   LOGIN POP-UP   ==================== -->

    <?php include('includes/modals/login-modal.html'); ?>


    <!-- ====================   REQUEST CHANGES POP-UP   ==================== -->

    <?php
    $modalID = "requestEntry";
    $formIDPrefix = "request";
    $modalHeader = "Make Changes for Request";
    $formAction = "#";
    $formMethod = "post";
    $formSubmitText = "Generate Request";

    include ("includes/forms/extra-fields/employee-info.php");
    $additionalFields = getEmployeeInfoForm();

    include("includes/modals/record-modal.php");
    ?>


    <!-- ====================   REQUEST SUMMARY POP-UP   ==================== -->

    <?php
        $prefix = 'request';
        $modalHeader = 'Confirm Request Details';
        $displayFunction = 'requestSummary()';
        $summarySubmitText = "Submit Request";
        $summaryOldHeader = "Current:";
        $summaryNewHeader = "Suggested:";
        $summaryFormAction = "//runtime-terrors.greenriverdev.com/";

        include ("includes/modals/compare-summary-modal.php");
    ?>


    <!-- ====================   SCRIPTS   ==================== -->

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <i class="bi bi-info-circle"></i>

    <!-- Datatables.net -->
    <script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <!-- JavaScript Files -->
    <script src="js/element-constants.js"></script> <!-- ALL Element constants for use in scripts -->
    <script src="js/enableEdit.js"></script> <!-- Assigns/Handles the edit button click event -->
    <script src="js/editEntry.js"></script> <!-- This contains the click event for clicking entries -->
    <script src="js/formValidation.js"></script> <!-- contains onsubmit function used to validate forms -->
    <script src="js/printPage.js"></script> <!-- Script to display print pop-up window -->
    <script src="js/loginButton.js"></script> <!-- Validation for login -->

    <!--Jquery-->
    <script src="js/sortTable.js"></script> <!-- Alphabetically sort table and implement search function -->

</body>
</html>