<?php

// Method to generate error message on page
function addErrorMsg($msg) {
    echo "<p class='text-danger'>$msg</p>";
}


// Function to post-validate phone numbers
function validatePhone($input) {

    // invalid if contains letters
    if(preg_match("/[a-z]/i", $input)){ // SOURCE: https://stackoverflow.com/questions/22458156/check-if-the-string-contains-alphabets-in-php
        return false;
    }

    // Convert input to raw number
    $phone = stripPhoneNum($input);

    // Validate length
    if (strlen($phone) != 10) {
        return false;
    }
    return true;
}

// Function to convert a phone number to raw numbers
function stripPhoneNum($input) {
    // Convert input to raw number
    $chars = str_split($input);
    $phone = "";

    foreach ($chars as $char) {
        if (ctype_digit($char)) {
            $phone .= $char;
        }
    }
    return $phone;
}

function isPhoneSet($phone) {
    return ($phone && $phone !='N/A');
}

function formatPhoneNum($input) {
    if (validatePhone($input)) {
        $input = str_split(stripPhoneNum($input));
        $output = '(';

        // Construct area code
        for($i = 0; $i < 3; $i++) {
            $output .= $input[$i];
        }
        $output .= ') ';

        // Construct middle
        for($i = 3; $i < 6; $i++) {
            $output .= $input[$i];
        }
        $output .= '-';

        // Construct last 4
        for($i = 6; $i < 10; $i++) {
            $output .= $input[$i];
        }
        return $output;
    }
    return $input;
}