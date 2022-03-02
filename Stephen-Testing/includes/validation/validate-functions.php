<?php

// Method to generate error message on page
function addErrorMsg($msg) {
    echo "<p class='text-danger'>$msg</p>";
}

// Function to post-validate phone numbers
function validatePhone($input) {

    // Convert input to raw number
    $phone = stripPhoneNum($input);

    // Validate number
    if (strlen($phone) !== 10) {
        return false;
    }

}

// Function to convert a phone number to raw numbers
function stripPhoneNum($input) {
    // Convert input to raw number
    $chars = explode($input);
    $phone = "";

    foreach ($chars as $char) {
        if ($char >= "0" && $char <= "9") {
            $phone += $char;
        }
    }
    return $phone;
}