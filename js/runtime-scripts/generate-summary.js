
////   SCRIPT TO ASSIGN FUNCTIONALITY TO FORM SUBMIT BUTTON/s   ////

/* This should only run after JS validation is passed */

/* Buttons should perform JS validation, pass form data to php via $_POST,
 * close the form modal, open the summary modal, and generate summary (in PHP) */


// ===== REQUEST CHANGES FORM ===== //

function requestSummary() {
    $('#request-summary').modal('show');
}


// ===== ADD NEW FACILITY FORM ===== //

function addSummary() {
    $('#add-summary').modal('show');
}


// ===== EDIT FACILITY FORM ===== //

function editSummary() {
    $('#edit-summary').modal('show');
}

