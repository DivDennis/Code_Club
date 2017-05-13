<?php
include '../../private/classes/Database.php';
require('../../private/classes/Security.php');
$uname = $_POST['uname'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];
$psw = $_POST['psw'];
$pswrepeat = $_POST['pswrepeat'];
//check if passwords are equal
if($psw != $pswrepeat){
    //read up on querystrings
    //and pass back the errors to the home page using query strings
    header("Location: ../index.php");
}
$salt = Security::generateSalt();
$password = Security::generateHash($psw, $salt);
$sql = "INSERT INTO users (uname, email, birthdate, psw , salt) 
VALUES ('$uname', '$email', '$birthdate', '$password' , '$salt')";
$results = Database::getInstance()->query($sql);
//redirect user to a success page
if($results){
    header("Location:../views/view_users.php");
}
?>