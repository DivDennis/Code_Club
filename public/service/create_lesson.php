<?php
session_start();

include '../../private/classes/Database.php';

// get data that sent from form
$topic=$_POST['topic'];

//allows only certain tags
$detail=strip_tags($_POST['detail'],'<code><p><b><i><ul><ol><li><img><h1><h2><h3><h4><h5><h6><a><strong><em><br>');
$categoryId = $_POST['category'];

$result = Database::getInstance()->query("INSERT INTO lessons Set fk_category_id = $categoryId , topic = '$topic' , details= '$detail', fk_user_id = ".$_SESSION['userId']." ");

if(!$result){
   echo 'error';    
}
?>
