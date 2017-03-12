<?php

$conn = mysqli_connect("localhost", "root", "", "coding_society");

if(!$conn){
	die("Connection Failed:" .msqli_connect_error());
}

?>