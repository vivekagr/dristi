<?php

require_once 'vars.php';

$message = "Name: " . $_POST['name'] . "\r\n\r\nMessage: " . $_POST['message'];

$header = "From: " . $_POST['email'];

$retval = mail ($contactEmail, $_POST['subject'], $message, $header);

if ($retval === true) {
    echo "Message sent successfully!";
} else {
    echo "An error occurred. You message was not sent. Please email $contactEmail";
}
