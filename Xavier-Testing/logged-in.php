<?php
// CONNECT TO DATABASE
include("includes/connect.php");

    // *** PAGE HEAD and HEADER *** //
    $pageType = "loggedinPage";
    $pageTitle = "Admin Panel";
    include("includes/header.php");
?>

    <!-- Page Content -->
    <main class="p-0 max-w-1300">

        <!-- ====================   FACILITIES TABLE   ====================   -->

        <?php
        // Table with all the data
        $tableID = "facilities-table";
        include("includes/facility-table.php");
        ?>

    </main>


    <!-- ====================   ADD FORM POP-UP   ==================== -->

    <?php
        $modalID = "newEntry";
        $formIDPrefix = "add";
        $modalHeader = "Add new entry";
        $formAction = "#";
        $formMethod = "post";
        $formSubmitText = "Add Entry";

        include("includes/modals/record-modal.php");
    ?>

    <!-- ====================   EDIT ENTRY FORM POP-UP   ==================== -->

    <?php
        $modalID = "editEntry";
        $formIDPrefix = "edit";
        $modalHeader = "Edit Entry";
        $formAction = "#";
        $formMethod = "post";
        $formSubmitText = "Submit Changes";

        include("includes/modals/record-modal.php");
    ?>


    <!-- ====================   ADD NEW ENTRY SUMMARY POP-UP   ==================== -->

    <?php include ("includes/modals/add-summary-modal.php"); ?>


    <!-- ====================   EDIT SUMMARY POP-UP   ==================== -->

    <?php
        $prefix = 'edit';
        $modalHeader = 'Confirm Changes';
        $displayFunction = 'editSummary()';
        $summarySubmitText = "Commit Changes";
        $summaryOldHeader = "Current:";
        $summaryNewHeader = "Updated:";
        $summaryFormAction = "//runtime-terrors.greenriverdev.com/logged-in.php";

        include ("includes/modals/compare-summary-modal.php");
    ?>


    <!-- ====================   SCRIPTS   ==================== -->

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Datatables.net -->
    <script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <!-- JavaScript Files -->
    <script src="js/element-constants.js"></script> <!-- ALL Element constants for use in scripts -->
    <script src="js/enableEdit.js"></script> <!-- Assigns/Handles the edit button click event -->
    <script src="js/editEntry.js"></script> <!-- This contains the click event for clicking entries -->
    <script src="js/formValidation.js"></script> <!-- contains function used to validate forms -->
    <script src="js/runtime-scripts/generate-summary.js"></script> <!-- Script to open summary after form submission -->
    <script src="js/printPage.js"></script> <!-- Validation for login -->

    <!--Jquery-->
    <script src="js/sortTable.js"></script> <!-- Alphabetically sort table and implement search function -->
</body>
</html>