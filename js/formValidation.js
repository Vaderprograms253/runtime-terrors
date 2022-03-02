// SCRIPT TO HANDLE FORM VALIDATION //

// REQUEST CHANGES FORM
if (REQUEST_FORM) {
    REQUEST_FORM.onsubmit = function() {
        // Validate Each portion of the form
        let validRequest = validateForm(REQUEST_PREFIX); // "request"
        let validEmployeeInfo = validateEmployeeInfo();

        return validRequest && validEmployeeInfo;
    }
}

// EDIT ENTRY FORM
if (EDIT_FORM) {
    EDIT_FORM.onsubmit = function() {

        return validateForm(EDIT_PREFIX); // "edit"
    }
}

// ADD NEW FACILITY FORM
if (ADD_FORM) {
    ADD_FORM.onsubmit = function() {
        return validateForm(ADD_PREFIX); // "add"
    }
}


function validateForm(prefix) {
    clearErrors();
    let valid = true;

    let organization = document.getElementById(prefix+"-organization").value;
    if (organization === ""){
        document.getElementById(prefix+"-err-organization").style.display = "block";
        valid = false;
    }

    let medicalDirectLine = document.getElementById(prefix+"-med-phone").value;
    let medicalFax = document.getElementById(prefix+"-med-fax").value;

    let filmDirectLine = document.getElementById(prefix+"-film-phone").value;
    let filmFax = document.getElementById(prefix+"-film-fax").value;

    if(medicalDirectLine === "" && medicalFax === "" && filmDirectLine === "" && filmFax === ""){
        document.getElementById(prefix+"-err-medical-film").style.display = "block";
        valid = false;
    }

    if((medicalDirectLine !== "" && medicalFax === "") || (medicalFax !== "" && medicalDirectLine === "")){
        document.getElementById(prefix+"-err-direct-line").style.display = "block";
        valid = false;
    }
    if((filmDirectLine !== "" && filmFax === "") || (filmFax !== "" && filmDirectLine === "")){
        document.getElementById(prefix+"-err-film-library").style.display = "block";
        valid = false;
    }

    let radioIsChecked = false;
    let pushImageButton = document.getElementsByName(prefix+"-push"); // Push Images radio buttons

    for (let i = 0; i < pushImageButton.length; i++) {
        if(pushImageButton[i].checked){
            radioIsChecked = true;
        }
    }
    if(!radioIsChecked){
        document.getElementById(prefix+"-err-push-image").style.display = "blocK";
        valid = false;
    }

    let imageCheckboxChecked = 0;
    let imageTypeChecked = document.getElementsByName(prefix+"-image-types[]"); // Image Type checkbox buttons

    for (let i = 0; i < imageTypeChecked.length; i++) {
        if(imageTypeChecked[i].checked){
            imageCheckboxChecked++;
        }
    }
    if(pushImageButton[0].checked && imageCheckboxChecked < 1){
        console.log("Yes is selected");
        document.getElementById(prefix+"-err-image-type").style.display = "block";
        valid = false;
    }

    return valid;
}

// Validation for request form employee info
function validateEmployeeInfo() {

    // Errors cleared during validateForm();

    let valid = true;

    // validate name (FIRST AND LAST)
    if (REQUEST_F_NAME.value === "") {
        document.getElementById("request-err-fname").style.display = "block";
        valid = false;
    }
    if (REQUEST_L_NAME.value === "") {
        document.getElementById("request-err-lname").style.display = "block";
        valid = false;
    }

    // Validate Email // TODO: ADD EMAIL REGEX VALIDATION
    if (REQUEST_EMAIL.value === "") {
        document.getElementById("request-err-email").style.display = "block";
        valid = false;
    }

    return valid;
}

// Clear all error messages
function clearErrors() {
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.display = "none";
    }
}