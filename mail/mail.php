<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// var_dump($_POST);

// Check if the form was submitted
// if (isset($_POST['name'])) {

//     // Validate reCAPTCHA
//     if (isset($_POST['g-recaptcha-response'])) {
//         $secretKey = '6LeCr2wpAAAAAER5YGAWMWvzgy2Xbsj9t-Bk0j7t';
//         $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $_POST['g-recaptcha-response']);
//         $responseData = json_decode($response);
//     }

//     if ($responseData->success) {
//         // Validate other form fields
//         $name = trim($_POST['name']);
//         $company = trim($_POST['company']);
//         $email = trim($_POST['email']);
//         $phone = trim($_POST['phone']);
//         $description = trim($_POST['description']);
//         $services = implode(', ', array_filter($_POST, function($key) { return strpos($key, 'service_') !== false; }));

//         $errors = [];

//         if (empty($name)) {
//             $errors[] = 'Please enter your name.';
//         }

//         if (empty($email)) {
//             $errors[] = 'Please enter your email address.';
//         } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $errors[] = 'Please enter a valid email address.';
//         }

//         if (empty($description)) {
//             $errors[] = 'Please enter a message.';
//         }

//         // If no errors, log the data
//         if (empty($errors)) {
//             // Replace this with your desired logging mechanism (e.g., file, database, email)
//             $log_message = "Name: $name\nCompany: $company\nEmail: $email\nPhone: $phone\nServices: $services\nMessage: $description\n----------------------------------------\n";
//             // echo $log_message;
//             file_put_contents('contact_log.txt', $log_message, FILE_APPEND);

//             // Display a success message
//             echo '<div class="alert alert-success">Thank you for your message! We will get back to you soon.</div>';
//         } else {
//             // Display the errors
//             echo '<div class="alert alert-danger">' . implode('<br>', $errors) . '</div>';
//         }
//     } else {
//         // reCAPTCHA failed
//         echo '<div class="alert alert-danger">Please complete the reCAPTCHA verification.</div>';
//     }
// }

 /*----------------------------------------------------------------------------*\
|*  Email settings for sending all emails from your website forms.              *|
 \*============================================================================*/

// Choose here whether to use php mail() function or your SMTP server (recommended) to send the email.
// Use 'smtp' for better reliability, or use 'phpmail' for quick + easy setup with lower reliability.
$emailMethod                = 'smtp'; // REQUIRED value. Options: 'smtp' , 'phpmail'

// Outgoing Server Settings - replace values on the right of the = sign with your own.
// These 3 settings are only required if you choose 'smtp' for emailMethod above.
$outgoingServerAddress      = 'smtp.gmail.com'; // Consult your hosting provider.
$outgoingServerPort         = '587';                  // Options: '587' , '25' - Consult your hosting provider.
$outgoingServerSecurity     = 'tls';                 // Options: 'ssl' , 'tls' , null - Consult your hosting provider.

// Sending Account Settings - replace these details with an email account held on the SMTP server entered above.
// These 2 settings are only required if you choose 'smtp' for emailMethod above.
$sendingAccountUsername     = 'euaelesh@gmail.com';
$sendingAccountPassword     = 'ypzkylykxrntbeoj';

// Recipient (To:) Details  - Change this to the email details of who will receive all the emails from the website.
$recipientEmail             = 'euaelabe@gmail.com'; // REQUIRED value.
$recipientName              = 'Justin Lindenmuth';             // REQUIRED value.

// Email details            - Change these to suit your website needs
$emailSubject               = 'A message from Lindenmuth Reality'; // REQUIRED value. Subject of the email that the recipient will see
$websiteName                = 'Lindenmuth Reality';                // REQUIRED value. This is used when a name or email is not collected from the website form

$timeZone                   = 'America/Chicago';         // OPTIONAL, but some servers require this to be set. 
                                                             // See a list of all supported timezones at: http://php.net/manual/en/timezones.php

// Google reCAPTCHA
$recaptchaSecretKey         = '6LeCr2wpAAAAAER5YGAWMWvzgy2Xbsj9t-Bk0j7t';
$recaptchaErrorMessage      = 'There was a problem verifying the Google reCaptcha.  Please try again.';

// Confirmation Message
$sendConfirmationToUser     = false; // leave false to disable confirmation, or use path to an html email template.
$confirmationSubject        = "Thanks for Contacting Lindenmuth Reality"; // The subject of the confirmation email
$confirmationFromName       = "Lindenmuth Reality"; // Used in the "from" field of the email.
$userEmailField             = "email";
$defaultUserName            = "User"; // Used if the form does not include a "name" field.

// CSV
// $saveToCSV                  = "email_form.csv";
$saveToCSV                  = false; // leave false to disable saving to CSV

 /*----------------------------------------------------------------------------*\
|*  You do not need to edit anything below this line, the rest is automatic.    *|
 \*============================================================================*/
include('lib/mail_sender.php');


?>