<?php
include './database.php';
require('../../private/classes/Security.php');

session_start();

$uname = $_POST['uname'];
$psw = $_POST['psw'];


$sql = " SELECT uname, email, id, psw, salt FROM users WHERE uname='".$uname."' ";

$results = $conn->query($sql);

$row = $results->fetch_assoc();


if (!empty($row)) {
	if(Security::generateHash($psw, $row['salt']) != $row['psw'] ){
		//echo $err;
		header("Location: ../index.php?error=1");
	}else{

		$_SESSION ['is_logged_in'] = true;
		$_SESSION['user_uname'] = $uname;
		
		header("Location: ../profile.php");

	}
}
else{ 
		//echo $err;
		header("Location: ../index.php?error=1");
}

?>