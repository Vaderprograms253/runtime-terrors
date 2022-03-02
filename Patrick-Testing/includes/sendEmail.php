<?php

// Send email to ... (ADMIN)
$subject = "Request for Record Update";
$headers = "From: $fromName <$fromEmail>";

// Message
$emailMessage = "New Request! \n\n";

$emailMessage .= "Request Details: \n";
$emailMessage .= "From: ". $_POST['request-fname']. " " . $_POST['request-lname'] . " \n";
$emailMessage .= "Email: ". $_POST['request-email']. " \n\n";

$emailMessage .= $_POST['request-message'];

// Send Email
$success = mail($adminEmailAddress, $subject, $emailMessage, $headers);

if (!$success) {
    echo "<p class='text-danger'>There was a problem sending request.</p>";
}