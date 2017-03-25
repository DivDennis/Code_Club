<?php
include '../../private/classes/Database.php';
require('../../private/classes/Security.php');

$uname = $_POST['uname'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$pswrepeat = $_POST['pswrepeat'];

if($result = Database::getInstance()->query("SELECT * from users where uname = '$uname' or email = '$email'")){
      $numOfRows = $result->num_rows;
      if($numOfRows > 0){
         header("Location: ..\index.php?error=2");
      }
}
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


if($result = Database::getInstance()->query($sql)){
  //redirect user to a success page
  echo "Succesful";
  header("Location: ..\signupredirect.php");
}

//display server error has occur


?>
