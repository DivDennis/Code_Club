<?php
session_start();

include '../../private/classes/Database.php';

// get data that sent from form
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$categoryId = $_POST['category'];

$result = Database::getInstance()->query("INSERT INTO lessons Set fk_category_id = $categoryId , topic = '$topic' , details= '$detail', fk_user_id = ".$_SESSION['userId']." ");

if(!$result){
   echo 'error';    
}
?>
