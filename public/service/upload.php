<?php

include '../../private/connection/users_connection.php';

$id='1';
$mysqli = new mysqli('localhost' , 'root' , '' , 'coding_society');
$query = $mysqli->query("select * from users where id='$id' limit 0,1");
$row = $query -> fetch_assoc();

if (isset($_POST['update'])){

 $id=$_POST['id'];
 $name = $_POST['name'];
 $birthdate = $_POST['birthdate'];
 $skills = $_POST['skills'];
 $bio = $_POST['bio'];
 $result = $mysqli -> $query(" update users set name= '$name ' , birthdate='$birthdate ' , skills='$skills ' , bio= '$bio ' where id='$id'  ");
 }

?>
