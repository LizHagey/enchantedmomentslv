<?php
/*
 * A controller to handle the contact page processing
 */
 session_start();

if($_POST['action'] == 'Send'){
    //Collect the data sent from the form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $date = $_POST['date'];
    $address = $_POST['address'];
    $homeAddress = $_POST['homeAddress'];
    $time = $_POST['time'];
    //$princess = $_POST['princess'];
    $kids = $_POST['kids'];
    $length = $_POST['length'];
    $coupon = $_POST['coupon'];
    $message = $_POST['message'];
    $captcha = $_POST['cap_code'];
    $princesses = implode(', ', $_POST['princess'] );
    
    //Check the fields that they are not empty
if (empty($name) || empty($email) || empty($message) 
    || empty($phone) || empty($date) && isset($princesses) && isset($length)){
    $errors['fields'] = 'All fields are required, please fill in each one.';
}

    //Check that the captcha code matched the picture.
if ($_SESSION['security_code'] != $_POST['cap_code'] && !empty($_SESSION['security_code'])) {
    $errors['security'] = 'Sorry, your entered security code does not match the security image.';
}

    //If there are errors, return the contact page to fix them.
if (!empty($errors)) {
    include 'contact.php';
    exit;
}
    //Assemble the message
    $finalmessage = "Name: $name \n";
    $finalmessage .= "Phone Number: $phone \n";
    $finalmessage .= "Email: $email \n";
    $finalmessage .= "Address: $homeAddress \n";
    $finalmessage .= "Childs Name and Age: $age \n";
    $finalmessage .= "Date of Party: $date \n";
    $finalmessage .= "Time of the party: $time \n";
    $finalmessage .= "Address of Party: $address \n";
    $finalmessage .= "Princess(es) Invited to the Party: $princesses \n";
    $finalmessage .= "Number of kids at the Party: $kids \n";
    $finalmessage .= "Length of the Party: $length \n";
    $finalmessage .= "Coupon Code:  $coupon \n";
    $finalmessage .= "Message: \n $message";
    
    //Send the message
    $to = 'enchantedmomentslv@gmail.com';
//    $to = 'lizgrhagey@gmail.com';
    $from = "From: $email";
    $result = mail($to, $subject, $finalmessage, $from);
    
    //Let the sender know what happened
    if ($result == TRUE) {
        $errors[] = "<p class='errorMsg'>Thank you $name for contacting me.</p>";
} else {
    $errors[] = "<p class='errorMsg'>Sorry $name but there was an error and message could not be sent.</p>";
}

//Remove all values previously stored
unset($name);
unset($phone);
unset($email);
unset($homeAddress);
unset($age);
unset($date);
unset($time);
unset($address);
unset($princess);
unset($kids);
unset($length);
unset($message);
unset($captcha);

//Display the contact age with the new message
    include 'contact.php';
    exit;
} else {
    include 'contact.php';
    exit;

}


?>