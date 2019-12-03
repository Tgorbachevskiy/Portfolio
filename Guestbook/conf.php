<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require "/home2/tgorbach/connect.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Confirmation</title>
</head>

<body>

    <h3>Thank you for signing up!</h3>
    <h5>Double-check and make sure everything is correct.</h5>
    <br>

    <?php


    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $title = $_POST['title'];
    $company = $_POST['company'];
    $linkedin = $_POST['linkedin'];
    $email = $_POST['email'];
    $maillist = $_POST['maillist'];
    $deliverymethod = $_POST['deliverymethod'];
    $meet = $_POST['meet'];
    $other = $_POST['other'];
    $comment = $_POST['comment'];


    $isValid = true;

    if (empty($_POST['firstName'])) {

        echo '<p>Please enter first name.</p>';
        $isValid = false;
    }

    if (empty($_POST['lastName'])) {
        echo '<p>Please enter last name.</p>';
        $isValid = false;
    }


    if (empty($_POST['title'])) {
        echo '<p>Please enter a title.</p>';
        $isValid = false;
    }

    if (empty($_POST['email'])) {
        echo '<p>Please enter an email address.</p>';
        $isValid = false;
    }

    if (empty($_POST['company'])) {
        echo '<p>Please enter a company.</p>';
        $isValid = false;
    }

    $sql = "INSERT INTO guestbook (fname, lname, title, company, linkedin, email, maillingList, MailingFormat, meeting, meetingOther, comments, timeSubmitted)
                VALUES ('$firstName', '$lastName', '$title', '$company', '$linkedin', '$email', '$maillist', '$deliverymethod', '$meet', '$other', '$comment', NOW())";


    $result = mysqli_query($cnxn, $sql);


    ?>




    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>