////   SCRIPT TO TOGGLE ENTRY EDITING   ////

// On button press, the table rows should become clickable and should
// Bring up an edit entry pop-up when pressed.

// CONSTANTS
const EDIT_ENTRY_CLASSES = ["editable"];
const EDIT_BUTTON = document.getElementById("toggleEditBtn");
const MODAL_ID = "#editEntry";

// entries field stores teh current entries
let entries = getEntries();

// Set default Edit value (false)
EDIT_BUTTON.setAttribute("enableEdit", "false");


// Confirm login status
// TODO: Add login validation
let loginStatus = true;


if (!loginStatus) {
    // ERROR: LOGIN STATUS
    console.log("ERROR: LOGIN STATUS INVALID");
}
// LOGIN STATUS IS VALID
else {

    // Add onclick functionality to edit button
    EDIT_BUTTON.addEventListener('click', function() {

        // Update the current list of entries
        entries = getEntries();

        // If the Edit is false (Being turned on)
        if (EDIT_BUTTON.getAttribute("enableEdit") === "false") {

            // Switch the attribute to true
            EDIT_BUTTON.setAttribute("enableEdit", "true");
            EDIT_BUTTON.classList.add("bg-success");

            // Update all the entries to be clickable
            updateEditStatus(true);

        }
        // If the attribute is True (Being turned off)
        else if (EDIT_BUTTON.getAttribute("enableEdit") === "true") {

            // Switch the attribute to false
            EDIT_BUTTON.setAttribute("enableEdit", "false");
            EDIT_BUTTON.classList.remove("bg-success");

            // Update all the entries to be non-clickable
            updateEditStatus(false);

        }
        // If the Edit is unset or invalid value (I.e. Initial loading of page)
        else {
            EDIT_BUTTON.setAttribute("enableEdit", "false");
            if (EDIT_BUTTON.classList.contains("bg-success")) {
                EDIT_BUTTON.classList.remove("bg-success");
            }

        }
    });
}

// Simple function to get a list of all the entries on the page
function getEntries() {
    // Get all the entries that are dependents of the table body (rows === entries)
    return document.querySelectorAll("#facility-table tbody > tr");
}


// Function will update the classes to reflect the given edit status
function updateEditStatus(status) {
    for (let entry = 0; entry < entries.length; entry++) {
        // Updates all applied classes
        for (let i = 0; i < EDIT_ENTRY_CLASSES.length; i++) {
            if (status) {
                entries[entry].classList.add(EDIT_ENTRY_CLASSES[i]);
                assignClickFunction(true, entries[entry]);

                entries[entry].setAttribute("data-toggle", "modal");
                entries[entry].setAttribute("data-target", MODAL_ID)
            }
            else {
                entries[entry].classList.remove(EDIT_ENTRY_CLASSES[i]);
                assignClickFunction(false, entries[entry]);

                entries[entry].removeAttribute("data-toggle");
                entries[entry].removeAttribute("data-target");
            }
        }
    }
}

// Function to assign an entry its click function which will allow the user to edit
// the entry.
function assignClickFunction(status, element) {
    // Assigns the onclick function
    if (status) {
        element.addEventListener('click', editEntry); // SEE "editEntry.js" for function
    }
    else {
        element.removeEventListener('click', editEntry); // SEE "editEntry.js" for function
    }
}