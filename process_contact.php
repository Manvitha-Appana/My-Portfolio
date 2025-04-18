<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    if (!empty($name) && !empty($email) && !empty($message)) {
        echo "Thank you, $name. Your message has been received.";
    } else {
        echo "Please fill all fields.";
    }
}
?>