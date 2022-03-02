////    SCRIPT TO CONTAIN EDIT ENTRY EVENT   ////

// SET PREFIX TO MATCH FORM
let prefix = "";
if (EDIT_FORM) { // only applies if edit form exists
    prefix = EDIT_PREFIX;
}
else if (REQUEST_FORM) { // only applies if request form exists
    prefix = REQUEST_PREFIX;
}

// MODAL FORM CONSTANTS
const POPUP_ORGANIZATION = document.getElementById(prefix+"-organization");
const POPUP_LOCATION = document.getElementById(prefix+"-location");
const POPUP_MED_PHONE = document.getElementById(prefix+"-med-phone");
const POPUP_MED_FAX = document.getElementById(prefix+"-med-fax");
const POPUP_FILM_PHONE = document.getElementById(prefix+"-film-phone");
const POPUP_FILM_FAX = document.getElementById(prefix+"-film-fax");
const POPUP_PUSH_YES = document.getElementById(prefix+"-push-yes");
const POPUP_PUSH_NO = document.getElementById(prefix+"-push-no");
const POPUP_PUSH_SWEDISH = document.getElementById(prefix+"-push-no*");
// IMAGE TYPE CHECKBOXES
const POPUP_IMAGE_TYPES = document.getElementById(prefix+"-image-types");


// ORIGINAL FORM INPUTS
const ORIGINAL_ORGANIZATION = document.getElementById(prefix+"-ori-organization");
const ORIGINAL_LOCATION = document.getElementById(prefix+"-ori-location");
const ORIGINAL_MED_PHONE = document.getElementById(prefix+"-ori-med-phone");
const ORIGINAL_MED_FAX = document.getElementById(prefix+"-ori-med-fax");
const ORIGINAL_FILM_PHONE = document.getElementById(prefix+"-ori-film-phone");
const ORIGINAL_FILM_FAX = document.getElementById(prefix+"-ori-film-fax");
const ORIGINAL_PUSH = document.getElementById(prefix+"-ori-push");
const ORIGINAL_IMAGE_TYPES = document.getElementById(prefix+"-ori-image-types");


// Function that runs when the user clicks an entry to edit it
function editEntry(event) {
    const editRow = event.target.parentElement;
    const editFields = editRow.children;

    // Set default values for the edit form
    setCurrentValue(editFields);
    includeOriginalData(editFields);
}

function setCurrentValue(elementList) {

    POPUP_ORGANIZATION.value = elementList[0].textContent;
    POPUP_LOCATION.value = elementList[1].textContent;
    POPUP_MED_PHONE.value = elementList[2].textContent;
    POPUP_MED_FAX.value = elementList[3].textContent;
    POPUP_FILM_PHONE.value = elementList[4].textContent;
    POPUP_FILM_FAX.value = elementList[5].textContent;

    if (elementList[6].textContent === "Yes") {
        POPUP_PUSH_YES.checked = true;
    }
    else if (elementList[6].textContent === "No") {
        POPUP_PUSH_NO.checked = true;
    }
    else if (elementList[6].textContent === "No*"){
        POPUP_PUSH_SWEDISH.checked = true;
    }

    let imageTypes = elementList[7].textContent.split(", ");
    for (let i = 0; i < imageTypes.length; i++) {
        setFormImageTypes(imageTypes[i]);
    }
}

// Adds the original data to a form for summary
function includeOriginalData(elementList) {
    ORIGINAL_ORGANIZATION.value = elementList[0].textContent;
    ORIGINAL_LOCATION.value = elementList[1].textContent;
    ORIGINAL_MED_PHONE.value = elementList[2].textContent;
    ORIGINAL_MED_FAX.value = elementList[3].textContent;
    ORIGINAL_FILM_PHONE.value = elementList[4].textContent;
    ORIGINAL_FILM_FAX.value = elementList[5].textContent;

    if (elementList[6].textContent === "Yes") {
        ORIGINAL_PUSH.value = "yes";
    }
    else if (elementList[6].textContent === "No") {
        ORIGINAL_PUSH.value = "no";
    }
    else if (elementList[6].textContent === "No*"){
        ORIGINAL_PUSH.value = "no*";
    }

    let originalImageTypes = elementList[7].textContent.split(", ");
    for (let i = 0; i < originalImageTypes.length; i++) {
        setOriImageType(originalImageTypes[i]);
    }
}

// Function to get and set an image type to form input
function setOriImageType(imageType) {
    switch (imageType) {
        case "XR":
            document.getElementById(prefix+"-ori-image-xr").value = "XR";
            break;
        case "US":
            document.getElementById(prefix+"-ori-image-us").value = "US";
            break;
        case "MRI":
            document.getElementById(prefix+"-ori-image-mri").value = "MRI";
            break;
        case "CT":
            document.getElementById(prefix+"-ori-image-ct").value = "CT";
            break;
        case "MG":
            document.getElementById(prefix+"-ori-image-mg").value = "MG";
            break;
        case "PATH":
            document.getElementById(prefix+"-ori-image-path").value = "PATH";
            break;
        case "DEXA":
            document.getElementById(prefix+"-ori-image-dexa").value = "DEXA";
            break;
    }
}

function setFormImageTypes(imageType) {
    let imageTypeCheckboxes = document.getElementsByName(prefix+"-image-types[]");
    switch (imageType) {
        case "XR":
            imageTypeCheckboxes[0].checked = true;
            break;
        case "US":
            imageTypeCheckboxes[1].checked = true;
            break;
        case "MRI":
            imageTypeCheckboxes[2].checked = true;
            break;
        case "CT":
            imageTypeCheckboxes[3].checked = true;
            break;
        case "MG":
            imageTypeCheckboxes[4].checked = true;
            break;
        case "PATH":
            imageTypeCheckboxes[5].checked = true;
            break;
        case "DEXA":
            imageTypeCheckboxes[6].checked = true;
            break;
    }
}