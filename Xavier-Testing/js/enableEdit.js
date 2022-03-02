////   SCRIPT TO TOGGLE ENTRY EDITING   ////

// On button press, the table rows should become clickable and should
// Bring up an edit entry pop-up when pressed.

// CONSTANTS
const EDIT_ENTRY_CLASSES = ["clickable"];
const EDIT_MODAL_ID = "#editEntry";
const REQUEST_MODAL_ID = "#requestEntry";

// entries field stores the current entries
let entries = getEntries();


// Confirm login status
// TODO: Add login validation
let loginStatus = true;

// ONLY ALLOW EDIT FUNCTIONALITY IF LOGGED IN
if (!loginStatus) {
    // ERROR: LOGIN STATUS
    console.log("ERROR: LOGIN STATUS INVALID");
}
// LOGIN STATUS IS VALID
else {
    if (EDIT_BUTTON) {
        // Set default status (false)
        EDIT_BUTTON.setAttribute("enableSelection", "false");

        // Add onclick functionality to edit button
        EDIT_BUTTON.addEventListener('click', function() {
            toggleButtonStatus(EDIT_BUTTON, EDIT_MODAL_ID);
        });
    }
}


// Set up Request Functionality (does not require login)
if (REQUEST_CHANGE_BUTTON) {
    REQUEST_CHANGE_BUTTON.setAttribute("enableSelection", "false");

    // Add onclick functionality to Request Changes Button
    REQUEST_CHANGE_BUTTON.addEventListener('click', function() {
        toggleButtonStatus(REQUEST_CHANGE_BUTTON, REQUEST_MODAL_ID);
    });
}


// ======================== FUNCTIONS =========================== //


// Function to be assigned to an interactive button (EDIT or REQUEST CHANGES)
// Toggles background color and assigns clickable functions to the table rows
// Passed modalID will be the assigned target of the rows when button is toggled on.
function toggleButtonStatus(button, modalID) {

    // Update the current list of entries
    entries = getEntries();

    // If the Edit is false (Being turned on)
    if (button.getAttribute("enableSelection") === "false") {

        // Switch the attribute to true
        button.setAttribute("enableSelection", "true");
        button.classList.add("bg-success");
        button.textContent = "Select a Record";

        // Update all the entries to be clickable
        updateEditStatus(true, modalID);

    }
    // If the attribute is True (Being turned off)
    else if (button.getAttribute("enableSelection") === "true") {

        // Switch the attribute to false
        button.setAttribute("enableSelection", "false");
        button.classList.remove("bg-success");
        if (button === REQUEST_CHANGE_BUTTON) {
            button.textContent = "Suggest an Edit";
        }
        else if (button === EDIT_BUTTON) {
            button.textContent = "Enable Editing";
        }

        // Update all the entries to be non-clickable
        updateEditStatus(false, modalID);

    }
    // If the Edit is unset or invalid value (I.e. Initial loading of page)
    else {
        button.setAttribute("enableSelection", "false");
        if (button.classList.contains("bg-success")) {
            button.classList.remove("bg-success");
        }
    }
}


// Simple function to get a list of all the entries on the page
function getEntries() {
    // Get all the entries that are dependents of the table body (rows === entries)
    return document.querySelectorAll("#facility-table tbody > tr");
}


// Function will update the Row class lists to reflect the given edit status
function updateEditStatus(status, modal) {
    // Loop through all table rows
    for (let entry = 0; entry < entries.length; entry++) {

        // Updates all applied classes
        for (let i = 0; i < EDIT_ENTRY_CLASSES.length; i++) {
            if (status) {
                entries[entry].classList.add(EDIT_ENTRY_CLASSES[i]);
                assignClickFunction(true, entries[entry]);

                entries[entry].setAttribute("data-toggle", "modal");
                entries[entry].setAttribute("data-target", modal);
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