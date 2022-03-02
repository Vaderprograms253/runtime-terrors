<?php

$isValidEntry = true;
$errors = [];


// ***** VALIDATE ORGANIZATION ***** //
if (!$org) {
    array_push($errors,"Organization is Required!");
    $isValidEntry = false;
}


// ***** VALIDATE PHONE NUMBERS ***** //

// Check that either medical records or film library contact info is provided
if ((!isPhoneSet($medPhone) || !isPhoneSet($medFax)) && (!isPhoneSet($filmPhone) || !isPhoneSet($filmFax))) {
    $isValidEntry = false;
    array_push($errors,"Medical Records OR Film Library Contact info is required!");
}

// Check if only phone or fax is provided
if (($medPhone Xor $medFax) || ($medPhone == 'N/A' Xor $medFax == 'N/A')) {
    $isValidEntry = false;
    array_push($errors,"Medical Phone and Fax must be entered together!");
}
if (($filmPhone Xor $filmFax) || ($filmPhone == 'N/A' Xor $filmFax == 'N/A')) {
    $isValidEntry = false;
    array_push($errors,"Film Library Phone and Fax must be entered together!");
}

// VALIDATE phone number values if present
if ($medPhone != "" && $medPhone != "N/A") {
    if (!validatePhone($medPhone)) {
        $isValidEntry = false;
        array_push($errors,"Invalid Medical Records Phone Number! ".$medPhone);
    }
    else {
        $medPhone = stripPhoneNum($medPhone);
    }
}
if ($medFax != "" && $medFax != "N/A") {
    if (!validatePhone($medFax)) {
        $isValidEntry = false;
        array_push($errors,"Invalid Medical Records Fax Number! ".$medFax);
    }
    else {
        $medFax = stripPhoneNum($medFax);
    }
}
if ($filmPhone != "" && $filmPhone != "N/A") {
    if (!validatePhone($filmPhone)) {
        $isValidEntry = false;
        array_push($errors,"Invalid Film Library Phone Number! ".$filmPhone);
    }
    else {
        $filmPhone = stripPhoneNum($filmPhone);
    }
}
if ($filmFax != "" && $filmFax != "N/A") {
    if (!validatePhone($filmFax)) {
        $isValidEntry = false;
        array_push($errors,"Invalid Film Library Fax Number! ".$filmFax);
    }
    else {
        $filmFax = stripPhoneNum($filmFax);
    }
}


// ***** VALIDATE PUSH IMAGES ***** //

if (!$push) {
    $isValidEntry = false;
    array_push($errors,"Push option is required!");
}
else if ($push != "yes" && $push != "no" && $push != "no*") {
    $isValidEntry = false;
    array_push($errors,"Invalid push option!");
}


// ***** VALIDATE IMAGE TYPES ***** //
if (!isset($imageTypes) || !$imageTypes) {
    if ($push === 'yes') {
        $isValidEntry = false;
        array_push($errors,"Image Types are required to push images!");
    }
}
else {
    foreach($imageTypes as $type) {
        switch ($type) {
            case 'DEXA':
            case 'US':
            case 'MRI':
            case 'CT':
            case 'MG':
            case 'PATH':
            case 'XR':
                break;
            default:
                $isValidEntry = false;
                array_push($errors,$type." is not a valid Image Type!");
                break;
        }
    }
}

