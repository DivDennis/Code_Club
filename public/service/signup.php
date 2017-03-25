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



$sql = "INSERT INTO users (uname, email, psw , salt, admin_level)
VALUES ('$uname', '$email', '$password' , '$salt', 2)";


$results = $conn->query($sql);

//redirect user to a success page
echo "Succesful";
header("Location: ..\index.php");

?>
