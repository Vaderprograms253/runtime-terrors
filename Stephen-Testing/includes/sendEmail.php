<?php

// Send email to ... (ADMIN)
$emailAddress = "lindsay.patrick@student.greenriver.edu";
$fromName = "MediConnect";
$fromEmail = "request@mediconnect.com";
$subject = "Request for Record Update";
$headers = "From: $fromName <$fromEmail>";

// Message
$message = "New Request! \n\n";

$message .= "Request Details: \n";
$message .= "From: $employeeFName $employeeLName \n";
$message .= "Email: $employeeEmail \n\n";

$message .= "$employeeMessage";

// Send Email
$success = mail($emailAddress, $subject, $message, $headers);

if (!$success) {
    echo "<p>There was a problem sending request.</p>";
}