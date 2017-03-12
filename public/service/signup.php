<?php
include './database.php';
require('../../private/classes/Security.php');

$uname = $_POST['uname'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$pswrepeat = $_POST['psw-repeat'];


//check if passwords are equal
if($psw != $pswrepeat){
    //read up on querystrings
    //and pass back the errors to the home page using query strings
    header("Location: ../index.php");
}


$salt = Security::generateSalt();
$password = Security::generateHash($psw, $salt);



$sql = "INSERT INTO users (uname, email, psw , salt) 
VALUES ('$uname', '$email', '$password' , '$salt')";


$results = $conn->query($sql);

//redirect user to a success page
header("Location: ..\signupredirect.php");

?>