<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
//Start a session


if (!isset($_SESSION['username'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Admin Page</title>
</head>

<body>


    <table id="myTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Title</th>
                <th>Company</th>
                <th>Email</th>
                <th>LinkedIn</th>
                <th>Mailing List</th>
                <th>Format</th>
                <th>How did we meet?</th>
                <th>How did we meet? (other)</th>
                <th>Comments</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require "/home2/tgorbach/connect.php";


            $sql = "SELECT * FROM guestbook";
            $result = mysqli_query($cnxn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {

                $person_id = $row['person_id'];
                $first = $row['fname'];
                $last = $row['lname'];
                $email = $row['email'];
                $title = $row['title'];
                $company = $row['company'];
                $linkedin = $row['linkedin'];
                $mailingList = $row['maillinglist'];
                $MailingFormat = $row['MailingFormat'];
                $meeting = $row['meeting'];
                $meetingOther = $row['meetingOther'];
                $comments = $row['comments'];
                $timeSubmitted = date('m-d-Y', strtotime($row['timeSubmitted']));


                echo "<tr>    
        <td>$person_id</td>                
        <td>$first $last</td>
        <td>$title</td>
        <td>$company</td>
        <td>$email</td>
        <td>$linkedin</td>
        <td>$mailingList</td>
        <td>$MailingFormat</td>
        <td>$meeting</td>
        <td>$meetingOther</td>
        <td>$comments</td>
        <td>$timeSubmitted</td>
      </tr>";
            }
            ?>


        </tbody>
    </table>
    <h1><a href="./Guestbook.html">Guestbook Form</a></h1>
<?php
    echo "<h1><a href='logout.php'>Logout</a></h1>";
?>



    <script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="./scripts/admin.js"></script>

</body>

</html>