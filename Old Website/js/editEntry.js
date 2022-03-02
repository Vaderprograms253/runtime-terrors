////    SCRIPT TO CONTAIN EDIT ENTRY EVENT   ////



// CONSTANTS
const POPUP_ORGANIZATION = document.getElementById("edit-organization");
const POPUP_LOCATION = document.getElementById("edit-location");
const POPUP_DIRECT_LINE_RECORDS = document.getElementById("edit-direct-line-record");
const POPUP_FAX_RECORDS = document.getElementById("edit-fax-record");
const POPUP_DIRECT_LINE_FILM = document.getElementById("edit-direct-line-film");
const POPUP_FAX_FILM = document.getElementById("edit-fax-film");
const POPUP_PUSH_YES = document.getElementById("customRadioInline4");
const POPUP_PUSH_NO = document.getElementById("customRadioInline5");
const POPUP_PUSH_SWEDISH = document.getElementById("customRadioInline6");


// Function that runs when the user clicks an entry to edit it
function editEntry(event) {
    const editRow = event.target.parentElement;
    const editFields = editRow.children;

    // Set default values for the edit form
    setCurrentValue(editFields);
}

function setCurrentValue(elementList) {

    POPUP_ORGANIZATION.value = elementList[0].textContent;
    POPUP_LOCATION.textContent = elementList[1].textContent;
    POPUP_DIRECT_LINE_RECORDS.value = elementList[2].textContent;
    POPUP_FAX_RECORDS.value = elementList[3].textContent;
    POPUP_DIRECT_LINE_FILM.value = elementList[4].textContent;
    POPUP_FAX_FILM.value = elementList[5].textContent;

    if (elementList[6].textContent === "Yes") {
        POPUP_PUSH_YES.checked = true;
    }
    else if (elementList[6].textContent === "No") {
        POPUP_PUSH_NO.checked = true;
    }
    else if (elementList[6].textContent === "No*"){
        POPUP_PUSH_SWEDISH.checked = true;
    }
}