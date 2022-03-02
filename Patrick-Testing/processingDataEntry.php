<?php

// Turn on Error Reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

// Connect to database
include("includes/connect.php");

// upload info to database
if (!empty($_POST) && (($_POST['formName'] === 'add-summary'))) {
    $prefix = "add";

    include ("includes/form-variables.php");
    include ("includes/validation/validate-functions.php");
    include ("includes/validation/validate.php");

    // Convert image types to string for storing in database
    $addImageTypes = "";
    if (isset($imageTypes)) {

        if ($imageTypes[0] !== "") {
            $lastIndex = count($imageTypes) -1;
            for ($imageType = 0; $imageType < $lastIndex; $imageType++) {
                $addImageTypes.=$imageTypes[$imageType].", ";
            }
            $addImageTypes.=$imageTypes[$lastIndex];
        }
    }

    // Enter new entry if data still passes validation
    if ($isValidEntry) {
        $addQuery = "INSERT INTO facilities(`organization`, `location`, `med_phone`, `med_fax`, `film_phone`, `film_fax`, `push_image`, `image_type`)
                VALUES('$org', '$location', '$medPhone', '$medFax',
                '$filmPhone', '$filmFax', '$push', '$addImageTypes')";
        $success = mysqli_query($cnxn, $addQuery);
    }
}

// Redirect to logged in page
header("location:logged-in.php");