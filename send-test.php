<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "you@yourdomain.com";
    $email_subject = "Your email subject line";
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required 
    
    $email_message = "Form details below.\n\n"; 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
// create email headers
mail($email_to, $email_subject, $email_message, $headers);  
 
}
?>