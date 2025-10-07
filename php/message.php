<?php
$email = $_POST['email'];
$message = $_POST['message'];

$connection = mysqli_connect("localhost", "root", "", "help") or die("connection failed");

if ($email != NULL && $message != NULL) {

    $mysql = "INSERT INTO help(email,message) VALUES ('{$email}','{$message}')";
    $result = mysqli_query($connection, $mysql) or die("query Failed");

    // Redirect to welcome page
    header("location: question.html");
} else {
    // Redirect to error page
    header("location: error.html");
}

mysqli_close($connection);
?>
