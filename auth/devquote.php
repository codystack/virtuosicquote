<?php
// Connect database
include "./config/db.php";

//Send Support Request
if (isset($_POST['request_quote_btn'])) {

    $id = $conn->real_escape_string($_POST['id']);
    $fullName = $conn->real_escape_string($_POST['fullName']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $siteAbout = $conn->real_escape_string($_POST['siteAbout']);
    $goals = $conn->real_escape_string($_POST['goals']);
    $process = $conn->real_escape_string($_POST['process']);
    $anyComment = $conn->real_escape_string($_POST['anyComment']);


    $query = "INSERT INTO devquote (fullName, email, phone, siteAbout, goals, process, anyComment)"
        . "VALUES ('$fullName', '$email', '$phone', '$siteAbout', '$goals', '$process', '$anyComment')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {

        $_SESSION['success_message_title'] = "Quote Request Sent";
        $_SESSION['success_message'] = "Your request for a quotation has been sent 👍";
    }
    else {
        $error=$conn->error;
        $_SESSION['message_title'] = "Error Occurred";
        $_SESSION['message'] = $error;
    }

}