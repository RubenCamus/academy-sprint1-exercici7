<?php

function validateForm() {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    if (gettype($username) != "string") {
        throw new Exception("username is not type string");
    }
    if (preg_match("/^[a-zA-Z0-9_-]{3,20}$/", $username) === 0) {
        throw new Exception("Not a valid username. Only A-z, numbers, - _. Min 3 chars, Max 20 chars.");
    }
    if (gettype($email) != "string") {
        throw new Exception("Not a valid email");
    }
    if (preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/", $email) === 0) {
        throw new Exception("Not a valid email.");
    }
}
try {
    validateForm();
} catch(Exception $error) {
    echo $error;
}
?>
