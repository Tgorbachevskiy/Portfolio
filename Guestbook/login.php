<?php

    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //Start a session
    session_start();

    //If the user is already logged in
    if (isset($_SESSION['username'])){
        header('location: admin.php');
    }


    //If the login form has been submitted
    if (isset($_POST['submit'])) {
        include ('creds.php');
    

        //Include creds.php (eventually, passwords should be moved to a secure location
        //or stored in a database)


        //Get the username and password from the POST array
        $username = $_POST['username'];
        $password = $_POST['password'];

        //If the username and password are correct
        if (array_key_exists($username, $login) && $login["$username"] == $password){
            $_SESSION['username'] = $username;

            //Store login name in a session variable

            header('location: admin.php');

            //Redirect to admin page

        } else {
        //Login credentials are incorrect
                echo "<p> Invalid Login </p>";
        }
    }


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
</head>
<body>
    <form method="post" action="#">
        <label>Username:
            <input type="text" name="username">
        </label><br>

        <label>Password:
            <input type="password" name="password">
        </label><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
