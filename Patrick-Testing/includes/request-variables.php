<?php

// Request Inputs
$org = $_POST['request-organization'];
$location = $_POST['request-location'];
$medPhone = $_POST['request-med-phone'];
$medFax = $_POST['request-med-fax'];
$filmPhone = $_POST['request-film-phone'];
$filmFax = $_POST['request-film-fax'];
$push = $_POST['request-push'];
if (isset($_POST['request-image-types'])) {
    $imageTypes = $_POST['request-image-types'];
}

// Current Values
$orgBefore = $_POST['request-ori-organization'];
$locationBefore = $_POST['request-ori-location'];
$medPhoneBefore = $_POST['request-ori-med-phone'];
$medFaxBefore = $_POST['request-ori-med-fax'];
$filmPhoneBefore = $_POST['request-ori-film-phone'];
$filmFaxBefore = $_POST['request-ori-film-fax'];
$pushBefore = $_POST['request-ori-push'];
if (isset($_POST['request-ori-image-types'])) {
    $imageTypesBefore = $_POST['request-ori-image-types'];
}

// Employee Details
$fname = $_POST['request-fname'];
$lname = $_POST['request-lname'];
$email = $_POST['request-email'];
$message = $_POST['request-message'];