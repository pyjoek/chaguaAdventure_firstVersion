<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $datetime = $_POST['datetime'];
    $destination = $_POST['destination'];
    $persons = $_POST['persons'];
    $category = $_POST['category'];
    $message = $_POST['message'];

    $to = "Jamesjohnmakongoro@gmail.com";
    $subject = "New Tour Booking";
    $body = "You have received a new booking request:\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Date & Time: $datetime\n".
            "Destination: $destination\n".
            "Persons: $persons\n".
            "Category: $category\n".
            "Special Request: $message\n";

    $headers = "From: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your booking request has been sent successfully.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
