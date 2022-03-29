
<?php
    $firstname = $_POST ['firstname'];
    $lastname = $_POST ['lastname'];
    $visitor_email = $_POST ['email'];
    $phone = $_POST ['phone'];

    
    $email_from = 'contact@willismonroeinsurance.com';
    
    $email_subject = "New Form Submisison";
    
    $email_body = "First Name: $firstname.\n". 
    "Last Name: $lastname.\n".
    "User Email: $visitor_email.\n".
    "Phone Number: $phone.\n";


    $to = "ammoo_dmx@hotmail.com";
    
    $headers = "From: $email_from \r\n";
    
    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to, $email_subject, $email_body, $headers);
    
    echo "Thanks for contacting us! ";
    
    echo '<a href="http://www.willismonroeinsurance.com/">Click here to go back</a>';


?>