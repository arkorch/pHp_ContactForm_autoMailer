<?php

session_start();

include 'functions.php';
include 'validation.php';

$_SESSION['errors'] = [];
$_SESSION['submission'] = $_POST;

if (! array_key_exists('HTTP_REFERER', $_SERVER)) {
    die;
}

if (count($_POST) <= 0) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);

    die;
}

$firstName = getPostDataWithDefault('first_name');
$lastName = getPostDataWithDefault('last_name');
$email = getPostDataWithDefault('email');

$firstNameValid = isFirstNameValid($firstName);
$lastNameValid = isLastNameValid($lastName);
$emailValid = isEmailValid($email);

if (! $firstNameValid) {
    $_SESSION['errors']['first_name'] = 'First name is not valid';
}

if (! $lastNameValid) {
    $_SESSION['errors']['last_name'] = 'Last name is not valid';
}

if (! $emailValid) {
    $_SESSION['errors']['email'] = 'Email is not valid';
}

if (! $firstNameValid || ! $lastNameValid || ! $emailValid) {
    // set errors to show to user here
    header('Location: ' . $_SERVER['HTTP_REFERER']);

    die;
}

$to = "arkorch95@gmail.com";
$subject = "New email from contact form!";
$message = "<html><body>";
$message .= "First name: " . $firstName . "<br>";
$message .= "Last name: " . $lastName . "<br>";
$message .= "Email: " . $email . "<br>";
$message .= "</body></html>";
/**
 * Function to email
 */
if(mail($to, $subject, $message)){
    echo "<script type='text/javascript'>alert('Thank you for contacting us! , We will contact you shortly');</script>";
    echo '<script>window.location.href = "../public/contact.php";    </script>';
    
}
else{
    echo "<script type='text/javascript'>alert('failed to send the mail, try after sometime');</script>";
    echo '<script>window.location.href = "../public/contact.php";    </script>';
}
$_SESSION['submission'] = [];

//header('Location: ' . $_SERVER['HTTP_REFERER']);