<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$course= $_POST['course'];

//   This creates a variable named $connection that will hold the connection to the MySQL database
$connection = mysqli_connect("localhost","root","","form")
or die("connection failed");

if($firstname != NULL && $lastname != NULL && $email != NULL && $password != NULL && $course != NULL ){
//to save user info

    $mysql = "INSERT INTO register(firstname,lastname,email,password,course) 
    VALUES ('{$firstname}','{$lastname}','{$email}','{$password}','{$course})";

     //Result is the variable will hold the result of the executed MySQL query ,
    //Connection hold the database connection 
    //Mysql containing the SQL query
    $result = mysqli_query($connection,$mysql)or die("query Failed");
    
     //redirect to welcome page
    header("location:   welcome.html");
} 
else 
{
    //redirect to error page
    header("location: error.html"); 
}


mysqli_close($connection);

?>
