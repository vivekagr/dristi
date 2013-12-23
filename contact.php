<?php

require_once 'vars.php';


// If message field present, it means the contact form was used
if ($_POST['message']) {
    $message = "Message received from contact form.\r\n\r\n\r\n
    Name: " . $_POST['name'] . "\r\n\r\nEmail: " . $_POST['email']. "\r\n\r\nMessage: " . $_POST['message'];
} else {
    $message = "Message received from volunteer form.\r\n\r\n\r\n
    Name: " . $_POST['name'] . "\r\n\r\nEmail: " . $_POST['email'] . "\r\n\r\nNumber: " . $_POST['mobile'];
}

$header = "From: " . $_POST['email'];

$retval = mail ($contactEmail, $_POST['subject'], $message, $header);

if ($retval === true) {
    echo "Message sent successfully!";
} else {
    echo "An error occurred. You message was not sent. Please email $contactEmail";
}
