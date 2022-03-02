<?php


// Check for required Inputs
if (!isset($org)) {
    addErrorMsg("Organization is Required!");
}
if (!isset($medPhone) && !isset($filmPhone)) {
    addErrorMsg("Medical Records OR Film Library Contact info is required!");
}
if (isset($medPhone) Xor isset($medFax)) {
    addErrorMsg("Phone and Fax must be entered together!");
}
if (isset($filmPhone) Xor isset($filmFax)) {
    addErrorMsg("Phone and Fax must be entered together!");
}
// TODO: ADD IMAGING TYPES VALIDATION

// Validate phone numbers
if (isset($medPhone)) {
    $medPhone = validatePhone($medPhone);
    if (!$medPhone) {
        addErrorMsg("Invalid Medical Records Phone Number!");
    }
}
if (isset($medFax)) {
    $medPhone = validatePhone($medPhone);
    if (!$medFax) {
        addErrorMsg("Invalid Medical Records Fax Number!");
    }
}
if (isset($filmPhone)) {
    $medPhone = validatePhone($medPhone);
    if (!$filmPhone) {
        addErrorMsg("Invalid Film Library Phone Number!");
    }
}
if (isset($filmFax)) {
    $medPhone = validatePhone($medPhone);
    if (!$filmFax) {
        addErrorMsg("Invalid Film Library Fax Number!");
    }
}