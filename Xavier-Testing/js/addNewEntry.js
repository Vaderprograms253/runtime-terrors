document.getElementById("new-entry").onsubmit = validate;

function validate(){

    clearErrors();
    let valid = true;

    let organization = document.getElementById("organization").value;
    if (organization === ""){
        document.getElementById("err-organization").style.display = "block";
        valid = false;
    }

    let medicalDirectLine = document.getElementById("direct-line-record").value;
    let medicalFax = document.getElementById("fax-record").value;

    let filmDirectLine = document.getElementById("direct-line-film").value;
    let filmFax = document.getElementById("fax-film").value;

    if(medicalDirectLine === "" && medicalFax === "" && filmDirectLine === "" && filmFax === ""){
        document.getElementById("err-medical-film").style.display = "block";
        valid = false;
    }
    if(medicalDirectLine !== "" && medicalFax === "" || medicalFax !== "" && medicalDirectLine === ""){
        document.getElementById("err-direct-line").style.display = "block";
        valid = false;
    }
    if(filmDirectLine !== "" && filmFax === "" || filmFax !== "" && filmDirectLine === ""){
        document.getElementById("err-film-library").style.display = "block";
        valid = false;
    }


    let radioIsChecked = false;
    let checkboxIsChecked = false;
    let pushImageButton = document.getElementsByName("customRadioInline"); // Push Images radio buttons
    let imageCount = 0;
    let imageCheckboxChecked = 0;

    for (let i = 0; i < pushImageButton.length; i++) {
        if(pushImageButton[i].checked) {
            radioIsChecked = true;
            imageCount++;
        }
    }
    if(!radioIsChecked) {
        document.getElementById("err-push-image").style.display = "blocK";
        valid = false;
    }

    let imageTypeChecked = document.getElementsByName("image-type"); // Image Type checkbox buttons
    for (let i = 0; i < imageTypeChecked.length; i++) {
        if(imageTypeChecked[i].checked) {
            imageCheckboxChecked++;
        }
    }
    if(pushImageButton[0].checked && imageCheckboxChecked < 1) {
        document.getElementById("err-image-type").style.display = "block";
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

