<?php
session_start();
include './database.php';
require('../../private/classes/Security.php');



$uname = $_POST['uname'];
$psw = $_POST['psw'];


$sql = " SELECT admin_level, uname, email, id, psw, salt FROM users WHERE uname='".$uname."' ";

$results = $conn->query($sql);

$row = $results->fetch_assoc();



if (!empty($row)) {
	if(Security::generateHash($psw, $row['salt']) != $row['psw'] ){
		//echo $err;
		header("Location: ../index.php?error=1");
	}
else{

		$_SESSION ['is_logged_in'] = true;
		$_SESSION['user_uname'] = $row['uname'];
		$_SESSION['userId'] = $row['id'];
    $_SESSION['admin_level'] =  $row['admin_level'];

		if($row['admin_level'] == 2){
			header("Location: ../profile.php");
	  }

		else{
			header("Location: ../admin_profile.php");
		}

	}
}
else{
		//echo $err;
		header("Location: ../index.php?error=1");
}

?>
