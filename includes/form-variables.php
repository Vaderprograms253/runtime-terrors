<?php

// Form Inputs
$org = $_POST[$prefix.'-organization'];
$location = $_POST[$prefix.'-location'];
$medPhone = $_POST[$prefix.'-med-phone'];
if ($medPhone === "") $medPhone = "N/A";
$medFax = $_POST[$prefix.'-med-fax'];
if ($medFax === "") $medFax = "N/A";
$filmPhone = $_POST[$prefix.'-film-phone'];
if ($filmPhone === "") $filmPhone = "N/A";
$filmFax = $_POST[$prefix.'-film-fax'];
if ($filmFax === "") $filmFax = "N/A";
$push = $_POST[$prefix.'-push'];
if (isset($_POST[$prefix.'-image-types'])) {
    $imageTypes = $_POST[$prefix.'-image-types'];
}

// Before Values
if ($prefix !== 'add') {
    $orgBefore = $_POST[$prefix . '-ori-organization'];
    $locationBefore = $_POST[$prefix . '-ori-location'];
    $medPhoneBefore = $_POST[$prefix . '-ori-med-phone'];
    $medFaxBefore = $_POST[$prefix . '-ori-med-fax'];
    $filmPhoneBefore = $_POST[$prefix . '-ori-film-phone'];
    $filmFaxBefore = $_POST[$prefix . '-ori-film-fax'];
    $pushBefore = $_POST[$prefix . '-ori-push'];
    if (isset($_POST[$prefix . '-ori-image-types'])) {
        $imageTypesBefore = $_POST[$prefix . '-ori-image-types'];

//        $imageTypesBefore = implode(", ", $_POST[$prefix . '-ori-image-types']);
    }
}

// Employee Details
if ($prefix === "request") {
    $fname = $_POST['request-fname'];
    $lname = $_POST['request-lname'];
    $email = $_POST['request-email'];
    $message = $_POST['request-message'];
}